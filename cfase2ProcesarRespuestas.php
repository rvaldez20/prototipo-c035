<?php

   // include_once 'config.php';
   include_once 'header.php';

   // requerimos la conexión a la base de datos
   require "config.php";

   // primero obtenemos el id del trabajador y id del cuestionario seleccionado
   if(!empty($_POST['idTrabajador'])) {$trabajadorId = $_POST['idTrabajador'];}
   // echo $trabajadorId;
   // echo '<br>';
   if(!empty($_POST['idCuestionario'])) {$custionarioId = $_POST['idCuestionario'];}
   // echo $custionarioId;
   // echo '<br>';

   // definimos el array donde se guardaran las respuestas de la pregunta 15 a la 34
   $respuestasArray = array();

   // preguntas Categoria 2 - subcategoria 3
   if(!empty($_POST['p15'])) {array_push($respuestasArray, $_POST['p15']);};
   if(!empty($_POST['p16'])) {array_push($respuestasArray, $_POST['p16']);};
   if(!empty($_POST['p17'])) {array_push($respuestasArray, $_POST['p17']);};
   if(!empty($_POST['p18'])) {array_push($respuestasArray, $_POST['p18']);};
   if(!empty($_POST['p19'])) {array_push($respuestasArray, $_POST['p19']);};
   if(!empty($_POST['p20'])) {array_push($respuestasArray, $_POST['p20']);};

   // preguntas Categoria 2 - subcategoria 4
   if(!empty($_POST['p21'])) {array_push($respuestasArray, $_POST['p21']);};
   if(!empty($_POST['p22'])) {array_push($respuestasArray, $_POST['p22']);};

   // preguntas Categoria 2 - subcategoria 5
   if(!empty($_POST['p23'])) {array_push($respuestasArray, $_POST['p23']);};
   if(!empty($_POST['p24'])) {array_push($respuestasArray, $_POST['p24']);};
   if(!empty($_POST['p25'])) {array_push($respuestasArray, $_POST['p25']);};
   if(!empty($_POST['p26'])) {array_push($respuestasArray, $_POST['p26']);};
   if(!empty($_POST['p27'])) {array_push($respuestasArray, $_POST['p27']);};
   if(!empty($_POST['p28'])) {array_push($respuestasArray, $_POST['p28']);};
   if(!empty($_POST['p29'])) {array_push($respuestasArray, $_POST['p29']);};

   // preguntas Categoria 2 - subcategoria 6
   if(!empty($_POST['p30'])) {array_push($respuestasArray, $_POST['p30']);};
   if(!empty($_POST['p31'])) {array_push($respuestasArray, $_POST['p31']);};
   if(!empty($_POST['p32'])) {array_push($respuestasArray, $_POST['p32']);};
   if(!empty($_POST['p33'])) {array_push($respuestasArray, $_POST['p33']);};
   if(!empty($_POST['p34'])) {array_push($respuestasArray, $_POST['p34']);};
   // var_dump($respuestasArray);


   // Se obtiene la fecha y hora en que se aplica el cuestionario
   $fechafull = date('Y-m-d H:i:s');
   $fechaModificada = strtotime ( '-6 hour' , strtotime ( $fechafull ) );
   $fechaHoraActual = date('Y-m-d H:i:s', $fechaModificada);
   //echo $fechahora;

   // se inicializa el consecutivo de numero de pregunta  para la fase 2 es de 15 a 39 (20 peguntas)
   $consecutivoPregunta = 15;
   // se define la fase
   $fase2_Ok = 2;
   // obtenemos el numero de respuestas de la fase 2
   $numRespuestas = count($respuestasArray);
  

   // Se procede a actualizar en la tabala cuestionario 
   // para actualizar la fase2=1 y fechafase2=fecha-hora actual
   $sqlCuestionario = "UPDATE cuestionario SET fase2=1, fechafase2=:fechafase2 WHERE id=:cuestionarioId";
   $queryCuestionario = $pdo->prepare($sqlCuestionario);

   $queryCuestionario->execute([      
      'fechafase2' => $fechaHoraActual,
      'cuestionarioId' => $custionarioId,
   ]);

   // ahora guardamos las respuestas de la fase2 del cuestionariodetalle
   $sqlCuestionarioDetalle = "INSERT INTO cuestionariosdetalle(cuestionarioId, preguntaId, respuestaId, fase) VALUES(:cuestionarioId, :preguntaId, :respuestaId, :fase)";
   $queryCuestionarioDetalle = $pdo->prepare($sqlCuestionarioDetalle);

   for ($i = 0; $i < $numRespuestas; $i++) {
      $queryCuestionarioDetalle->execute([
         'cuestionarioId' => $custionarioId,
         'preguntaId' => $consecutivoPregunta,
         'respuestaId' => $respuestasArray[$i],
         'fase' => 2
      ]);  
      $consecutivoPregunta++;
   }

?>

<!-- cuerpo body -->
<div class="container">
   <div class="row">            
      
      <?php
         if($queryCuestionarioDetalle){
            echo '
            <div class="alert alert-success mt-3 col-md-12" role="alert">
               Respuestas del cuestionario Fase 2 se han guardado correctamente
            </div>
            ';
         }
      ?>

      <div class="col-md-12">
         <a href="./index.php" class="btn btn-primary active mb-3 ml-3" role="button" aria-pressed="true">Continuar</a>
      </div>
    
   </div> <!-- Cierre row -->
</div> <!-- Cierre container -->