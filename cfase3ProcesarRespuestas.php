<?php

   // include_once 'config.php';
   include_once 'header.php';

   // requerimos la conexión a la base de datos
   require "config.php";

   // Primero obtenemos el id del trabajador y id del cuestionario seleccionado
   if(!empty($_POST['idTrabajador'])) {$trabajadorId = $_POST['idTrabajador'];}
   // echo $trabajadorId;
   // echo '<br>';
   if(!empty($_POST['idCuestionario'])) {$custionarioId = $_POST['idCuestionario'];}
   // echo $custionarioId;
   // echo '<br>';

   // definimos el array donde se guardaran las respuestas de la pregunta 15 a la 34
   $respuestasArray = array();

   // preguntas Categoria 3 - subcategoria 7
   if(!empty($_POST['p35'])) {array_push($respuestasArray, $_POST['p35']);};
   if(!empty($_POST['p36'])) {array_push($respuestasArray, $_POST['p36']);};
   if(!empty($_POST['p37'])) {array_push($respuestasArray, $_POST['p37']);};
   if(!empty($_POST['p38'])) {array_push($respuestasArray, $_POST['p38']);};
   if(!empty($_POST['p39'])) {array_push($respuestasArray, $_POST['p39']);};
   if(!empty($_POST['p40'])) {array_push($respuestasArray, $_POST['p40']);};
   if(!empty($_POST['p41'])) {array_push($respuestasArray, $_POST['p41']);};
   if(!empty($_POST['p42'])) {array_push($respuestasArray, $_POST['p42']);};
   if(!empty($_POST['p43'])) {array_push($respuestasArray, $_POST['p43']);};
   
   // preguntas Categoria 3 - subcategoria 8
   if(!empty($_POST['p44'])) {array_push($respuestasArray, $_POST['p44']);};
   if(!empty($_POST['p45'])) {array_push($respuestasArray, $_POST['p45']);};
   if(!empty($_POST['p46'])) {array_push($respuestasArray, $_POST['p46']);};
   if(!empty($_POST['p47'])) {array_push($respuestasArray, $_POST['p47']);};

   // preguntas Categoria 3 - subcategoria 9
   if(!empty($_POST['p48'])) {array_push($respuestasArray, $_POST['p48']);};
   if(!empty($_POST['p49'])) {array_push($respuestasArray, $_POST['p49']);};
   if(!empty($_POST['p50'])) {array_push($respuestasArray, $_POST['p50']);};
   if(!empty($_POST['p51'])) {array_push($respuestasArray, $_POST['p51']);};

   // preguntas Categoria 3 - subcategoria 10
   if(!empty($_POST['p52'])) {array_push($respuestasArray, $_POST['p52']);};
   if(!empty($_POST['p53'])) {array_push($respuestasArray, $_POST['p53']);};
   if(!empty($_POST['p54'])) {array_push($respuestasArray, $_POST['p54']);};
   if(!empty($_POST['p55'])) {array_push($respuestasArray, $_POST['p55']);};
   if(!empty($_POST['p56'])) {array_push($respuestasArray, $_POST['p56']);};

   // preguntas Categoria 3 - subcategoria 11
   if(!empty($_POST['p57'])) {array_push($respuestasArray, $_POST['p57']);};
   if(!empty($_POST['p58'])) {array_push($respuestasArray, $_POST['p58']);};
   if(!empty($_POST['p59'])) {array_push($respuestasArray, $_POST['p59']);};
   if(!empty($_POST['p60'])) {array_push($respuestasArray, $_POST['p60']);};
   if(!empty($_POST['p61'])) {array_push($respuestasArray, $_POST['p61']);};

   // preguntas Categoria 3 - subcategoria 12
   if(!empty($_POST['p62'])) {array_push($respuestasArray, $_POST['p62']);};
   if(!empty($_POST['p63'])) {array_push($respuestasArray, $_POST['p63']);};
   if(!empty($_POST['p64'])) {array_push($respuestasArray, $_POST['p64']);};
   if(!empty($_POST['p65'])) {array_push($respuestasArray, $_POST['p65']);};
   if(!empty($_POST['p66'])) {array_push($respuestasArray, $_POST['p66']);};
   if(!empty($_POST['p67'])) {array_push($respuestasArray, $_POST['p67']);};
   if(!empty($_POST['p68'])) {array_push($respuestasArray, $_POST['p68']);};
   if(!empty($_POST['p69'])) {array_push($respuestasArray, $_POST['p69']);};
   if(!empty($_POST['p70'])) {array_push($respuestasArray, $_POST['p70']);};
   if(!empty($_POST['p71'])) {array_push($respuestasArray, $_POST['p71']);};
   if(!empty($_POST['p72'])) {array_push($respuestasArray, $_POST['p72']);};
   if(!empty($_POST['p73'])) {array_push($respuestasArray, $_POST['p73']);};
   if(!empty($_POST['p74'])) {array_push($respuestasArray, $_POST['p74']);};

   // preguntas Categoria 3 - subcategoria 13
   if(!empty($_POST['p75'])) {array_push($respuestasArray, $_POST['p75']);};
   // Si selecciona SI las preguntas son:
   if ($_POST['p75'] === '307') {
      if(!empty($_POST['p76'])) {array_push($respuestasArray, $_POST['p76']);};
      if(!empty($_POST['p77'])) {array_push($respuestasArray, $_POST['p77']);};
      if(!empty($_POST['p78'])) {array_push($respuestasArray, $_POST['p78']);};
   } else if ($_POST['p75'] === '308') {
      array_push($respuestasArray, -10);
      array_push($respuestasArray, -10);
      array_push($respuestasArray, -10);
   }

   // preguntas Categoria 3 - subcategoria 14
   if(!empty($_POST['p79'])) {array_push($respuestasArray, $_POST['p79']);};
   // Si selecciona SI las preguntas son:
   if ($_POST['p79'] === '324') {
      if(!empty($_POST['p80'])) {array_push($respuestasArray, $_POST['p80']);};
      if(!empty($_POST['p81'])) {array_push($respuestasArray, $_POST['p81']);};
      if(!empty($_POST['p82'])) {array_push($respuestasArray, $_POST['p82']);};
   } else if ($_POST['p79'] === '325') {
      array_push($respuestasArray, -10);
      array_push($respuestasArray, -10);
      array_push($respuestasArray, -10);
   }


   // Se obtiene la fecha y hora en que se aplica el cuestionario
   $fechafull = date('Y-m-d H:i:s');
   $fechaModificada = strtotime ( '-6 hour' , strtotime ( $fechafull ) );
   $fechaHoraActual = date('Y-m-d H:i:s', $fechaModificada);
   //echo $fechahora;


   // se inicializa el consecutivo de numero de pregunta  
   // para la fase 3 es de 35 a 82 (49 peguntas)
   $consecutivoPregunta = 35;
   // se define la fase
   $fase3_Ok = 2;
   // obtenemos el numero de respuestas de la fase 2
   $numRespuestas = count($respuestasArray);


   // Se procede a actualizar en la tabala cuestionario 
   // para actualizar la fase2=1 y fechafase2=fecha-hora actual
   $sqlCuestionario = "UPDATE cuestionario SET fase3=1, fechafase3=:fechafase3 WHERE id=:cuestionarioId";
   $queryCuestionario = $pdo->prepare($sqlCuestionario);

   $queryCuestionario->execute([      
      'fechafase3' => $fechaHoraActual,
      'cuestionarioId' => $custionarioId,
   ]);


   // ahora guardamos las respuestas de la fase3 del cuestionariodetalle
   $sqlCuestionarioDetalle = "INSERT INTO cuestionariosdetalle(cuestionarioId, preguntaId, respuestaId, fase) VALUES(:cuestionarioId, :preguntaId, :respuestaId, :fase)";
   $queryCuestionarioDetalle = $pdo->prepare($sqlCuestionarioDetalle);

   for ($i = 0; $i < $numRespuestas; $i++) {
      $queryCuestionarioDetalle->execute([
         'cuestionarioId' => $custionarioId,
         'preguntaId' => $consecutivoPregunta,
         'respuestaId' => $respuestasArray[$i],
         'fase' => 3
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
               Respuestas del cuestionario Fase 3 se han guardado correctamente
            </div>
            ';
         }
      ?>

      <div class="col-md-12">
         <a href="./index.php" class="btn btn-primary active mb-3 ml-3" role="button" aria-pressed="true">Continuar</a>
      </div>
    
   </div> <!-- Cierre row -->
</div> <!-- Cierre container -->