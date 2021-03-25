<?php

   // include_once 'config.php';
   include_once 'header.php';

   // requerimos la conexión a la base de datos
   require "config.php";

   $idCuestionario = $_GET['id'];

   // var_dump($idCuestionario);

   // hacemos una consulta para traer los datos de la DB
   $sqlCuestionario ="SELECT cuestionario.id, cuestionario.trabajadorId, cuestionario.folioCuestionario, cuestionario.fase1, cuestionario.fase2, cuestionario.fase3, cuestionario.fase4, cuestionario.fechafase1, cuestionario.fechafase2, cuestionario.fechafase3, cuestionario.fechafase4, trabajadores.nombre, trabajadores.apellidop, trabajadores.apellidom FROM cuestionario, trabajadores WHERE cuestionario.trabajadorId = trabajadores.id AND cuestionario.id =:idCuestionario";

   $queryCuestionario = $pdo->prepare($sqlCuestionario);
   $queryCuestionario->execute([
      'idCuestionario' => $idCuestionario
   ]);
   // obtenemos la columna con el id especificado
   $rowCuestionario = $queryCuestionario->fetch(PDO::FETCH_ASSOC);

   // guardamoslos datos en variables
   $trabajadorId = $rowCuestionario['trabajadorId'];
   $folioCuestionario = $rowCuestionario['folioCuestionario'];
   $fase1 = $rowCuestionario['fase1'];
   $fase2 = $rowCuestionario['fase2'];
   $fase3 = $rowCuestionario['fase3'];
   $fase4 = $rowCuestionario['fase4'];
   $fechafase1 = $rowCuestionario['fechafase1'];
   $fechafase2 = $rowCuestionario['fechafase2'];
   $fechafase3 = $rowCuestionario['fechafase3'];
   $fechafase4 = $rowCuestionario['fechafase4'];
   $trabajador = $rowCuestionario['nombre'] . ' ' . $rowCuestionario['apellidop'] . ' ' . $rowCuestionario['apellidom'];

   // var_dump($fase4);

   // hacemos una consulta para traer las preguntas y respuestas de la fase 1
   // $sqlpreguntasrespuestas ="SELECT preguntas.id, preguntas.pregunta, respuestas.respuesta, cuestionario.id AS cuestionarioId, cuestionario.trabajadorId FROM preguntas, respuestas, cuestionario, cuestionariosdetalle WHERE cuestionario.id = cuestionariosdetalle.cuestionarioId AND preguntas.id = cuestionariosdetalle.preguntaId AND respuestas.id = cuestionariosdetalle.respuestaId AND cuestionario.trabajadorId =:idTrabajador";

   // ------------- CONSULTA PREGUNTAS | RESPUESTA FASE 1 ------------------------------
   $sqlpreguntasrespuestas_f1 ="SELECT preguntas.id, preguntas.pregunta, respuestas.respuesta, cuestionario.id AS cuestionarioId, cuestionario.trabajadorId FROM preguntas, respuestas, cuestionario, cuestionariosdetalle WHERE cuestionario.id = cuestionariosdetalle.cuestionarioId AND preguntas.id = cuestionariosdetalle.preguntaId AND respuestas.id = cuestionariosdetalle.respuestaId AND cuestionario.trabajadorId =:idTrabajador AND cuestionariosdetalle.fase=1";

   $querypreguntasrespuestas_f1 = $pdo->prepare($sqlpreguntasrespuestas_f1);
   $querypreguntasrespuestas_f1->execute([
      'idTrabajador' => $trabajadorId
   ]);

   // ------------- CONSULTA PREGUNTAS | RESPUESTA FASE 2 ------------------------------
   $sqlpreguntasrespuestas_f2 ="SELECT preguntas.id, preguntas.pregunta, respuestas.respuesta, cuestionario.id AS cuestionarioId, cuestionario.trabajadorId FROM preguntas, respuestas, cuestionario, cuestionariosdetalle WHERE cuestionario.id = cuestionariosdetalle.cuestionarioId AND preguntas.id = cuestionariosdetalle.preguntaId AND respuestas.id = cuestionariosdetalle.respuestaId AND cuestionario.trabajadorId =:idTrabajador AND cuestionariosdetalle.fase=2";

   $querypreguntasrespuestas_f2 = $pdo->prepare($sqlpreguntasrespuestas_f2);
   $querypreguntasrespuestas_f2->execute([
      'idTrabajador' => $trabajadorId
   ]);

   // ------------- CONSULTA PREGUNTAS | RESPUESTA FASE 3 ------------------------------
   $sqlpreguntasrespuestas_f3 ="SELECT preguntas.id, preguntas.pregunta, respuestas.respuesta, cuestionario.id AS cuestionarioId, cuestionario.trabajadorId FROM preguntas, respuestas, cuestionario, cuestionariosdetalle WHERE cuestionario.id = cuestionariosdetalle.cuestionarioId AND preguntas.id = cuestionariosdetalle.preguntaId AND respuestas.id = cuestionariosdetalle.respuestaId AND cuestionario.trabajadorId =:idTrabajador AND cuestionariosdetalle.fase=3";

   $querypreguntasrespuestas_f3 = $pdo->prepare($sqlpreguntasrespuestas_f3);
   $querypreguntasrespuestas_f3->execute([
      'idTrabajador' => $trabajadorId
   ]);

   // ------------- CONSULTA PREGUNTAS | RESPUESTA FASE 4 ------------------------------
   $sqlpreguntasrespuestas_f4 ="SELECT preguntas.id, preguntas.pregunta, respuestas.respuesta, cuestionario.id AS cuestionarioId, cuestionario.trabajadorId FROM preguntas, respuestas, cuestionario, cuestionariosdetalle WHERE cuestionario.id = cuestionariosdetalle.cuestionarioId AND preguntas.id = cuestionariosdetalle.preguntaId AND respuestas.id = cuestionariosdetalle.respuestaId AND cuestionario.trabajadorId =:idTrabajador AND cuestionariosdetalle.fase=4";

   $querypreguntasrespuestas_f4 = $pdo->prepare($sqlpreguntasrespuestas_f4);
   $querypreguntasrespuestas_f4->execute([
      'idTrabajador' => $trabajadorId
   ]);



   
   // hacemos una consulta para traer los registros de las preguntas abiertas
   $sqlpreguntasabiertas ="SELECT cuestionarioId, preguntaId, respuestaabierta FROM cuestionariosdetallera WHERE cuestionarioId =:idCuestionario";

   $querypreguntasabiertas = $pdo->prepare($sqlpreguntasabiertas);
   $querypreguntasabiertas->execute([
      'idCuestionario' => $idCuestionario
   ]);

   $indexpregunta = 0;
   while($row = $querypreguntasabiertas->fetch(PDO::FETCH_ASSOC)) {
      if($indexpregunta == 0) {         
         $respuestaAbierta5 = $row['respuestaabierta'];
      }
      
      if($indexpregunta == 1) {
         $respuestaAbierta6 = $row['respuestaabierta'];
      }

      if($indexpregunta == 2) {
         $respuestaAbierta12 = $row['respuestaabierta'];
      }
      $indexpregunta++;
   }

   // echo $pregunta5 . '---' . $respuestaAbierta5;
   // echo '<br><br>';
   // echo $pregunta6 . '---' . $respuestaAbierta6;
   // echo '<br><br>';
   //echo $respuestaAbierta12;

   // obtenemos la columna con el id especificado
   // $rowpreguntasrespuestas = $querypreguntasrespuestas->fetch(PDO::FETCH_ASSOC);
   // var_dump($rowpreguntasrespuestas);

   // hacemos una consulta para traer los datos de la DB
   //$queryResult = $pdo->query("SELECT * FROM trabajadores");

   // while($row = $querypreguntasabiertas->fetch(PDO::FETCH_ASSOC)) {
   //    var_dump($row);
   //    echo "<br><br>";
   // }

?>


   <!-- cuerpo body -->
   <div class="container-fluid">
      <div class="row">
         <div class="col-md-12">
            <h2 class="mt-3 text-center">Datos Generales del Cuestionario</h2>
         </div>
      </div>

      <div class="row">
         <div class="col-md-12">
            <table class="table table-bordered">
               <thead>
                  <tr>
                     <th scope="col" class="text-center">#</th>
                     <th scope="col" class="text-center">Folio</th>
                     <th scope="col" class="text-center">Trabajador</th>
                     <th scope="col" class="text-center">Fase I</th>
                     <th scope="col" class="text-center">Fase II</th>
                     <th scope="col" class="text-center">Fase III</th>
                     <th scope="col" class="text-center">Fase IV</th>
                  </tr>
               </thead>
               <tbody>
                  <tr>
                     <th class="text-center" scope="row"> <?php echo $idCuestionario ?> </th>
                     <td> <?php echo $folioCuestionario ?> </td>
                     <td> <?php echo $trabajador ?> </td>
                     <?php
                        if($fase1 == 1) {
                           echo '<td class="text-center"><span class="badge badge-success">Aplicado</span></td>';                                                      
                        } else {
                           echo '<td class="text-center"><span class="badge badge-warning">Pendiente</span></td>';
                        }

                        if($fase2 == 1) {
                           echo '<td class="text-center"><span class="badge badge-success">Aplicado</span></td>';                                                      
                        } else {
                           echo '<td class="text-center"><span class="badge badge-warning">Pendiente</span></td>';
                        }

                        if($fase3 == 1) {
                           echo '<td class="text-center"><span class="badge badge-success">Aplicado</span></td>';                                                      
                        } else {
                           echo '<td class="text-center"><span class="badge badge-warning">Pendiente</span></td>';
                        }

                        if($fase4 == 1) {
                           echo '<td class="text-center"><span class="badge badge-success">Aplicado</span></td>';                                                      
                        } else {
                           echo '<td class="text-center"><span class="badge badge-warning">Pendiente</span></td>';
                        }
                     ?>                                                             
                  </tr>                 
                  <tr>                                                              
                     <td colspan="3"></td>
                     <?php 
                        if($fase1 == 1){
                           echo '<td class="text-center"><span class="badge badge-primary">'. $fechafase1 .'</span></td>';
                        }else {
                           echo '<td class="text-center">-</td>';
                        }

                        if($fase2 == 1){
                           echo '<td class="text-center"><span class="badge badge-primary">'. $fechafase2 .'</span></td>';
                        }else {
                           echo '<td class="text-center">-</td>';
                        }
                        
                        if($fase3 == 1){
                           echo '<td class="text-center"><span class="badge badge-primary">'. $fechafase3 .'</span></td>';
                        }else {
                           echo '<td class="text-center">-</td>';
                        }

                        if($fase4 == 1){
                           echo '<td class="text-center"><span class="badge badge-primary">'. $fechafase4 .'</span></td>';
                        }else {
                           echo '<td class="text-center">-</td>';
                        }
                     ?>     

                  </tr>                 
               </tbody>
            </table>   
         </div>         
      </div>   

      <div class="row">

         <div class="col-md-12 alert alert-danger text-left" role="alert">
            <h3 class="mt-3 text-center">Preguntas / Respuestas Fase I</h3>
         </div>

      </div>

      <div class="row">
         <div class="col-md-12">

            <table class="table">
               <thead class="thead-dark">
                  <tr>
                     <th scope="col">#</th>
                     <th scope="col">Pregunta</th>
                     <th scope="col">Respuesta</th>                  
                     <th scope="col"></th>
                  </tr>
               </thead>
               <tbody>
                  
                  <!-- codigo PHP para para imprimir las preguntas d ela fase 1 -->
                  <?php
                     $contadorPreguntas = 0; 
                     while($row = $querypreguntasrespuestas_f1->fetch(PDO::FETCH_ASSOC)) {
                        echo '<tr>';
                        echo '<th scope="row">' . $row['id'] . '</th>';
                        echo '<td>' . $row['pregunta'] . '</td>';
                        echo '<td>' . $row['respuesta'] . '</td>'; 
                        echo '<td>-</td>';
                        // echo '<td><a href="trabajadorUpdate.php?id='. $row['id'] .'" class="badge badge-success">Editar</a></td>';
                        // // echo '<td><a href="#" class="badge badge-danger">Eliminar</a></td>';
                        echo '</tr>';     
                        
                        if($contadorPreguntas == 3){
                           if($row['respuesta'] == 'Sin formación'){
                              echo '<tr>';
                              echo '<th scope="row">' . '5' . '</th>';
                              echo '<td>' . 'Profesión/Puesto' . '</td>';
                              echo '<td>' . $respuestaAbierta5 . '</td>'; 
                              echo '<td>-</td>';
                              // echo '<td><a href="trabajadorUpdate.php?id='. $row['id'] .'" class="badge badge-success">Editar</a></td>';
                              // // echo '<td><a href="#" class="badge badge-danger">Eliminar</a></td>';
                              echo '</tr>';

                              echo '<tr>';
                              echo '<th scope="row">' . '6' . '</th>';
                              echo '<td>' . 'Departamento/Area' . '</td>';
                              echo '<td>' . $respuestaAbierta6 . '</td>'; 
                              echo '<td>-</td>';
                              // echo '<td><a href="trabajadorUpdate.php?id='. $row['id'] .'" class="badge badge-success">Editar</a></td>';
                              // // echo '<td><a href="#" class="badge badge-danger">Eliminar</a></td>';
                              echo '</tr>';
                           }
                        } 

                        if($contadorPreguntas == 9){
                           if($row['pregunta'] == 'Nivel de estudios'){
                              echo '<tr>';
                              echo '<th scope="row">' . '5' . '</th>';
                              echo '<td>' . 'Profesión/Puesto' . '</td>';
                              echo '<td>' . $respuestaAbierta5 . '</td>'; 
                              echo '<td>-</td>';
                              // echo '<td><a href="trabajadorUpdate.php?id='. $row['id'] .'" class="badge badge-success">Editar</a></td>';
                              // // echo '<td><a href="#" class="badge badge-danger">Eliminar</a></td>';
                              echo '</tr>';

                              echo '<tr>';
                              echo '<th scope="row">' . '6' . '</th>';
                              echo '<td>' . 'Departamento/Area' . '</td>';
                              echo '<td>' . $respuestaAbierta6 . '</td>'; 
                              echo '<td>-</td>';
                              // echo '<td><a href="trabajadorUpdate.php?id='. $row['id'] .'" class="badge badge-success">Editar</a></td>';
                              // // echo '<td><a href="#" class="badge badge-danger">Eliminar</a></td>';
                              echo '</tr>';
                           }
                        }

                        if($contadorPreguntas == 8){
                           if($row['pregunta'] == 'Realiza rotación de turnos'){
                              echo '<tr>';
                              echo '<th scope="row">' . '12' . '</th>';
                              echo '<td>' . 'Experiencia(años)' . '</td>';
                              echo '<td>' . $respuestaAbierta12 . '</td>'; 
                              echo '<td>-</td>';
                              // echo '<td><a href="trabajadorUpdate.php?id='. $row['id'] .'" class="badge badge-success">Editar</a></td>';
                              // // echo '<td><a href="#" class="badge badge-danger">Eliminar</a></td>';
                              echo '</tr>';                              
                           }
                        } 

                        if($contadorPreguntas == 14){
                           if($row['pregunta'] == 'Realiza rotación de turnos'){
                              echo '<tr>';
                              echo '<th scope="row">' . '12' . '</th>';
                              echo '<td>' . 'Experiencia(años)' . '</td>';
                              echo '<td>' . $respuestaAbierta12 . '</td>'; 
                              echo '<td>-</td>';
                              // echo '<td><a href="trabajadorUpdate.php?id='. $row['id'] .'" class="badge badge-success">Editar</a></td>';
                              // // echo '<td><a href="#" class="badge badge-danger">Eliminar</a></td>';
                              echo '</tr>';                              
                           }
                        } 

                        // echo $pregunta5 . '---' . $respuestaAbierta5;
                        $contadorPreguntas++;
                     }
                  ?>
                              
               </tbody>
            </table>
         </div>
      </div>

      <div class="row">

         <div class="col-md-12 alert alert-danger text-left" role="alert">
            <h3 class="mt-3 text-center">Preguntas / Respuestas Fase II</h3>
         </div>

         <!-- <div class="col-md-12">
            <h2 class="mt-3 text-center">Preguntas / Respuestas Fase II</h2>
         </div> -->
      </div>

      <div class="row">
         <div class="col-md-12">

            <table class="table">
               <thead class="thead-dark">
                  <tr>
                     <th scope="col">#</th>
                     <th scope="col">Pregunta</th>
                     <th scope="col">Respuesta</th>                  
                     <th scope="col"></th>
                  </tr>
               </thead>
               <tbody>
                  
                  <!-- codigo PHP para para imprimir las preguntas d ela fase 2 -->
                  <?php
                     $contadorPreguntas = 0; 
                     while($row = $querypreguntasrespuestas_f2->fetch(PDO::FETCH_ASSOC)) {
                        echo '<tr>';
                        echo '<th scope="row">' . $row['id'] . '</th>';
                        echo '<td>' . $row['pregunta'] . '</td>';
                        echo '<td>' . $row['respuesta'] . '</td>'; 
                        echo '<td>-</td>';
                        // echo '<td><a href="trabajadorUpdate.php?id='. $row['id'] .'" class="badge badge-success">Editar</a></td>';
                        // // echo '<td><a href="#" class="badge badge-danger">Eliminar</a></td>';
                        echo '</tr>';     
                        
                        // if($contadorPreguntas == 3){
                        //    if($row['respuesta'] == 'Sin formación'){
                        //       echo '<tr>';
                        //       echo '<th scope="row">' . '5' . '</th>';
                        //       echo '<td>' . 'Profesión/Puesto' . '</td>';
                        //       echo '<td>' . $respuestaAbierta5 . '</td>'; 
                        //       echo '<td>-</td>';
                        //       // echo '<td><a href="trabajadorUpdate.php?id='. $row['id'] .'" class="badge badge-success">Editar</a></td>';
                        //       // // echo '<td><a href="#" class="badge badge-danger">Eliminar</a></td>';
                        //       echo '</tr>';

                        //       echo '<tr>';
                        //       echo '<th scope="row">' . '6' . '</th>';
                        //       echo '<td>' . 'Departamento/Area' . '</td>';
                        //       echo '<td>' . $respuestaAbierta6 . '</td>'; 
                        //       echo '<td>-</td>';
                        //       // echo '<td><a href="trabajadorUpdate.php?id='. $row['id'] .'" class="badge badge-success">Editar</a></td>';
                        //       // // echo '<td><a href="#" class="badge badge-danger">Eliminar</a></td>';
                        //       echo '</tr>';
                        //    }
                        // } 
                        
                        // echo $pregunta5 . '---' . $respuestaAbierta5;
                        $contadorPreguntas++;
                     }
                  ?>
                              
               </tbody>
            </table>
         </div>
      </div>


      <div class="row">

         <div class="col-md-12 alert alert-danger text-left" role="alert">
            <h3 class="mt-3 text-center">Preguntas / Respuestas Fase III</h3>
         </div>

         <!-- <div class="col-md-12">
            <h2 class="mt-3 text-center">Preguntas / Respuestas Fase III</h2>
         </div> -->

      </div>

      <div class="row">
         <div class="col-md-12">

            <table class="table">
               <thead class="thead-dark">
                  <tr>
                     <th scope="col">#</th>
                     <th scope="col">Pregunta</th>
                     <th scope="col">Respuesta</th>                  
                     <th scope="col"></th>
                  </tr>
               </thead>
               <tbody>
                  
                  <!-- codigo PHP para para imprimir las preguntas d ela fase 3 -->
                  <?php
                     $contadorPreguntas = 0; 
                     while($row = $querypreguntasrespuestas_f3->fetch(PDO::FETCH_ASSOC)) {
                        echo '<tr>';
                        echo '<th scope="row">' . $row['id'] . '</th>';
                        echo '<td>' . $row['pregunta'] . '</td>';
                        echo '<td>' . $row['respuesta'] . '</td>'; 
                        echo '<td>'. '-' .'</td>';
                        // echo '<td><a href="trabajadorUpdate.php?id='. $row['id'] .'" class="badge badge-success">Editar</a></td>';
                        // // echo '<td><a href="#" class="badge badge-danger">Eliminar</a></td>';
                        echo '</tr>';                                                                             
                        $contadorPreguntas++;
                     }
                  ?>
                              
               </tbody>
            </table>
         </div>
      </div>


      <div class="row">

         <div class="col-md-12 alert alert-danger text-left" role="alert">
            <h3 class="mt-3 text-center">Preguntas / Respuestas Fase IV</h3>
         </div>

         <!-- <div class="col-md-12">
            <h2 class="mt-3 text-center">Preguntas / Respuestas Fase IV</h2>
         </div> -->

      </div>

      <div class="row">
         <div class="col-md-12">

            <table class="table">
               <thead class="thead-dark">
                  <tr>
                     <th scope="col">#</th>
                     <th scope="col">Pregunta</th>
                     <th scope="col">Respuesta</th>                  
                     <th scope="col"></th>
                  </tr>
               </thead>
               <tbody>
                  
                  <!-- codigo PHP para para imprimir las preguntas d ela fase 3 -->
                  <?php
                     $contadorPreguntas = 0; 
                     while($row = $querypreguntasrespuestas_f4->fetch(PDO::FETCH_ASSOC)) {
                        echo '<tr>';
                        echo '<th scope="row">' . $row['id'] . '</th>';
                        echo '<td>' . $row['pregunta'] . '</td>';
                        echo '<td>' . $row['respuesta'] . '</td>'; 
                        echo '<td>'. '-' .'</td>';
                        // echo '<td><a href="trabajadorUpdate.php?id='. $row['id'] .'" class="badge badge-success">Editar</a></td>';
                        // // echo '<td><a href="#" class="badge badge-danger">Eliminar</a></td>';
                        echo '</tr>';                                                                             
                        $contadorPreguntas++;
                     }
                  ?>
                              
               </tbody>
            </table>
         </div>
      </div>


      
     
   </div> <!-- Cierre container -->


<?php

   include_once './footer.php';

?>