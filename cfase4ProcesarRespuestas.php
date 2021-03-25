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

   // preguntas Categoria 4 - subcategoria 15
   if(!empty($_POST['p83'])) {array_push($respuestasArray, $_POST['p83']);};
   if(!empty($_POST['p84'])) {array_push($respuestasArray, $_POST['p84']);};
   if(!empty($_POST['p85'])) {array_push($respuestasArray, $_POST['p85']);};
   if(!empty($_POST['p86'])) {array_push($respuestasArray, $_POST['p86']);};
   if(!empty($_POST['p87'])) {array_push($respuestasArray, $_POST['p87']);};

   // preguntas Categoria 4 - subcategoria 16
   if(!empty($_POST['p88'])) {array_push($respuestasArray, $_POST['p88']);};
   if(!empty($_POST['p89'])) {array_push($respuestasArray, $_POST['p89']);};
   if(!empty($_POST['p90'])) {array_push($respuestasArray, $_POST['p90']);};

   // preguntas Categoria 4 - subcategoria 17
   if(!empty($_POST['p91'])) {array_push($respuestasArray, $_POST['p91']);};
   if(!empty($_POST['p92'])) {array_push($respuestasArray, $_POST['p92']);};
   if(!empty($_POST['p93'])) {array_push($respuestasArray, $_POST['p93']);};
   if(!empty($_POST['p94'])) {array_push($respuestasArray, $_POST['p94']);};

   // preguntas Categoria 4 - subcategoria 18
   if(!empty($_POST['p95'])) {array_push($respuestasArray, $_POST['p95']);};
   if(!empty($_POST['p96'])) {array_push($respuestasArray, $_POST['p96']);};
   if(!empty($_POST['p97'])) {array_push($respuestasArray, $_POST['p97']);};
   if(!empty($_POST['p98'])) {array_push($respuestasArray, $_POST['p98']);};

   // preguntas Categoria 4 - subcategoria 19
   if(!empty($_POST['p99'])) {array_push($respuestasArray, $_POST['p99']);};
   if(!empty($_POST['p100'])) {array_push($respuestasArray, $_POST['p100']);};
   if(!empty($_POST['p101'])) {array_push($respuestasArray, $_POST['p101']);};
   if(!empty($_POST['p102'])) {array_push($respuestasArray, $_POST['p102']);};
   if(!empty($_POST['p103'])) {array_push($respuestasArray, $_POST['p103']);};
   if(!empty($_POST['p104'])) {array_push($respuestasArray, $_POST['p104']);};

   // preguntas Categoria 4 - subcategoria 20
   if(!empty($_POST['p105'])) {array_push($respuestasArray, $_POST['p105']);};
   if(!empty($_POST['p106'])) {array_push($respuestasArray, $_POST['p106']);};
   if(!empty($_POST['p107'])) {array_push($respuestasArray, $_POST['p107']);};
   if(!empty($_POST['p108'])) {array_push($respuestasArray, $_POST['p108']);};
   if(!empty($_POST['p109'])) {array_push($respuestasArray, $_POST['p109']);};
   if(!empty($_POST['p110'])) {array_push($respuestasArray, $_POST['p110']);};

   // preguntas Categoria 4 - subcategoria 21   
   if(!empty($_POST['p111'])) {array_push($respuestasArray, $_POST['p111']);};
   if(!empty($_POST['p112'])) {array_push($respuestasArray, $_POST['p112']);};

   // preguntas Categoria 4 - subcategoria 22
   if(!empty($_POST['p113'])) {array_push($respuestasArray, $_POST['p113']);};
   if(!empty($_POST['p114'])) {array_push($respuestasArray, $_POST['p114']);};
   if(!empty($_POST['p115'])) {array_push($respuestasArray, $_POST['p115']);};
   if(!empty($_POST['p116'])) {array_push($respuestasArray, $_POST['p116']);};
   if(!empty($_POST['p117'])) {array_push($respuestasArray, $_POST['p117']);};
   if(!empty($_POST['p118'])) {array_push($respuestasArray, $_POST['p118']);};

   // preguntas Categoria 4 - subcategoria 23
   if(!empty($_POST['p119'])) {array_push($respuestasArray, $_POST['p119']);};
   if(!empty($_POST['p120'])) {array_push($respuestasArray, $_POST['p120']);};
   if(!empty($_POST['p121'])) {array_push($respuestasArray, $_POST['p121']);};
   if(!empty($_POST['p122'])) {array_push($respuestasArray, $_POST['p122']);};
   if(!empty($_POST['p123'])) {array_push($respuestasArray, $_POST['p123']);};

   // preguntas Categoria 4 - subcategoria 24
   if(!empty($_POST['p124'])) {array_push($respuestasArray, $_POST['p124']);};
   if(!empty($_POST['p125'])) {array_push($respuestasArray, $_POST['p125']);};
   if(!empty($_POST['p126'])) {array_push($respuestasArray, $_POST['p126']);};
   if(!empty($_POST['p127'])) {array_push($respuestasArray, $_POST['p127']);};
   if(!empty($_POST['p128'])) {array_push($respuestasArray, $_POST['p128']);};

   // preguntas Categoria 4 - subcategoria 25
   if(!empty($_POST['p129'])) {array_push($respuestasArray, $_POST['p129']);};
   if(!empty($_POST['p130'])) {array_push($respuestasArray, $_POST['p130']);};
   if(!empty($_POST['p131'])) {array_push($respuestasArray, $_POST['p131']);};
   if(!empty($_POST['p132'])) {array_push($respuestasArray, $_POST['p132']);};
   if(!empty($_POST['p133'])) {array_push($respuestasArray, $_POST['p133']);};
   if(!empty($_POST['p134'])) {array_push($respuestasArray, $_POST['p134']);};
   if(!empty($_POST['p135'])) {array_push($respuestasArray, $_POST['p135']);};
   if(!empty($_POST['p136'])) {array_push($respuestasArray, $_POST['p136']);};
   if(!empty($_POST['p137'])) {array_push($respuestasArray, $_POST['p137']);};
   if(!empty($_POST['p138'])) {array_push($respuestasArray, $_POST['p138']);};

   // preguntas Categoria 4 - subcategoria 26
   if(!empty($_POST['p139'])) {array_push($respuestasArray, $_POST['p139']);};
   if(!empty($_POST['p140'])) {array_push($respuestasArray, $_POST['p140']);};
   if(!empty($_POST['p141'])) {array_push($respuestasArray, $_POST['p141']);};
   if(!empty($_POST['p142'])) {array_push($respuestasArray, $_POST['p142']);};
   if(!empty($_POST['p143'])) {array_push($respuestasArray, $_POST['p143']);};
   if(!empty($_POST['p144'])) {array_push($respuestasArray, $_POST['p144']);};
   if(!empty($_POST['p145'])) {array_push($respuestasArray, $_POST['p145']);};
   if(!empty($_POST['p146'])) {array_push($respuestasArray, $_POST['p146']);};

   // preguntas Categoria 4 - subcategoria 27 SI|NO
   if(!empty($_POST['p147'])) {array_push($respuestasArray, $_POST['p147']);};
   // Si selecciona SI las preguntas son:
   if ($_POST['p147'] === '661') {
      if(!empty($_POST['p148'])) {array_push($respuestasArray, $_POST['p148']);};
      if(!empty($_POST['p149'])) {array_push($respuestasArray, $_POST['p149']);};
      if(!empty($_POST['p150'])) {array_push($respuestasArray, $_POST['p150']);};
      if(!empty($_POST['p151'])) {array_push($respuestasArray, $_POST['p151']);};
   } else if ($_POST['p147'] === '662') {
      array_push($respuestasArray, -10);
      array_push($respuestasArray, -10);
      array_push($respuestasArray, -10);
      array_push($respuestasArray, -10);
   }

   // preguntas Categoria 4 - subcategoria 28 SI|NO
   if(!empty($_POST['p152'])) {array_push($respuestasArray, $_POST['p152']);};
   // Si selecciona SI las preguntas son:
   if ($_POST['p152'] === '683') {
      if(!empty($_POST['p153'])) {array_push($respuestasArray, $_POST['p153']);};
      if(!empty($_POST['p154'])) {array_push($respuestasArray, $_POST['p154']);};
      if(!empty($_POST['p155'])) {array_push($respuestasArray, $_POST['p155']);};
      if(!empty($_POST['p156'])) {array_push($respuestasArray, $_POST['p156']);};
      } else if ($_POST['p152'] === '684') {
      array_push($respuestasArray, -10);
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
   $consecutivoPregunta = 83;
   // se define la fase
   $fase4_Ok = 1;
   // obtenemos el numero de respuestas de la fase 2
   $numRespuestas = count($respuestasArray);


   // Se procede a actualizar en la tabala cuestionario 
   // para actualizar la fase4=1 y fechafase4=fecha-hora actual
   $sqlCuestionario = "UPDATE cuestionario SET fase4=1, fechafase4=:fechafase4 WHERE id=:cuestionarioId";
   $queryCuestionario = $pdo->prepare($sqlCuestionario);

   $queryCuestionario->execute([      
      'fechafase4' => $fechaHoraActual,
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
         'fase' => 4
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
               Respuestas del cuestionario Fase 4 se han guardado correctamente
            </div>
            ';
         }
      ?>

      <div class="col-md-12">
         <a href="./index.php" class="btn btn-primary active mb-3 ml-3" role="button" aria-pressed="true">Continuar</a>
      </div>
    
   </div> <!-- Cierre row -->
</div> <!-- Cierre container -->