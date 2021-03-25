<?php

   include_once 'config.php';
   include_once 'header.php';

   // se obtiene el ide del trabajador al que se le va aplicar la fase 2
   $trabajadorId = $_GET['trabajadorId'];
   // echo $trabajadorId;
   // echo '<br>';
   $cuestionarioId = $_GET['id'];
   // echo $cuestionarioId;

?>

   <!-- cuerpo body -->
   <div class="container">

      <div class="alert alert-primary text-center mt-4" role="alert">
         <h2>Fase IV. Cuestionario para identificar los factores de riesgo Psicosocial y evaluar el entorno organizacional en los centros de trabajo.</h2>
      </div>

      <form action="cfase4ProcesarRespuestas.php" method="POST">

         <!-- input hiden para pasar el id del trabajador -->
         <input type="hidden" class="form-control" id="tid" name="idTrabajador" value="<?php echo $trabajadorId; ?>">
         <!-- input hiden para pasar el id del cuestionario -->
         <input type="hidden" class="form-control" id="cid" name="idCuestionario" value="<?php echo $cuestionarioId; ?>">

         <!-- SUBCATEGORIA 15 -->
         <div class="alert alert-danger text-left" role="alert">
            <h5>Para responder las preguntas siguientes considere las condiciones ambientales de su centro de trabajo.</h5>
         </div>

         <!-- PREGUNTAS SUBCATEGORIA 15 | PREGUNTA 83-87- -->
         <fieldset class="form-group">
            <!-- |83| PREGUNTA -->
            <div class="row">                                 
               <div class="col-sm-12">
                  <legend class="col-form-label  pt-0 col-form-label-md ">
                  1.- El espacio donde trabajo me permite realizar mis actividades de manera segura e higiénica
                  </legend>
               </div>
            </div>   <!-- Cierre ROW pregunta 83 -->
            <div class="row"> 
               <div class="col-sm-2">
                  <div class="custom-control custom-radio ">
                     <input class="custom-control-input" type="radio" name="p83" id="341" value="341" required>
                     <label class="custom-control-label " for="341">
                        Siempre
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p83" id="342" value="342" required>
                     <label class="custom-control-label" for="342">
                        Casi Siempre
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p83" id="343" value="343" required>
                     <label class="custom-control-label" for="343">
                        Algunas veces
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p83" id="344" value="344" required>
                     <label class="custom-control-label" for="344">
                        Casi nunca
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p83" id="345" value="345" required>
                     <label class="custom-control-label" for="345">
                        Nunca
                     </label>
                  </div>
               </div>
            </div> <!-- Cierre ROW respuestas pregunta 83 -->
            <!-- |84| PREGUNTA -->
            <div class="row mt-4">                                 
               <div class="col-sm-12">
                  <legend class="col-form-label  pt-0 col-form-label-md ">
                  2.- Mi trabajo me exige hacer mucho esfuerzo físico
                  </legend>
               </div>
            </div>   <!-- Cierre ROW pregunta 84 -->
            <div class="row"> 
               <div class="col-sm-2">
                  <div class="custom-control custom-radio ">
                     <input class="custom-control-input" type="radio" name="p84" id="346" value="346" required>
                     <label class="custom-control-label " for="346">
                        Siempre
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p84" id="347" value="347" required>
                     <label class="custom-control-label" for="347">
                        Casi Siempre
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p84" id="348" value="348" required>
                     <label class="custom-control-label" for="348">
                        Algunas veces
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p84" id="349" value="349" required>
                     <label class="custom-control-label" for="349">
                        Casi nunca
                     </label>
                  </div>
               </div>
               <div class="col-sm-2 ">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p84" id="350" value="350" required>
                     <label class="custom-control-label" for="350">
                        Nunca
                     </label>
                  </div>
               </div>
            </div> <!-- Cierre ROW respuestas pregunta 84 -->
            <!-- |85| PREGUNTA -->
            <div class="row mt-4">                                 
               <div class="col-sm-12">
                  <legend class="col-form-label  pt-0 col-form-label-md ">
                  3.- Me preocupa sufrir un accidente en mi trabajo
                  </legend>
               </div>
            </div>   <!-- Cierre ROW pregunta 85 -->
            <div class="row"> 
               <div class="col-sm-2">
                  <div class="custom-control custom-radio ">
                     <input class="custom-control-input" type="radio" name="p85" id="351" value="351" required>
                     <label class="custom-control-label " for="351">
                        Siempre
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p85" id="352" value="352" required>
                     <label class="custom-control-label" for="352">
                        Casi Siempre
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p85" id="353" value="353" required>
                     <label class="custom-control-label" for="353">
                        Algunas veces
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p85" id="354" value="354" required>
                     <label class="custom-control-label" for="354">
                        Casi nunca
                     </label>
                  </div>
               </div>
               <div class="col-sm-2 ">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p85" id="355" value="355" required>
                     <label class="custom-control-label" for="355">
                        Nunca
                     </label>
                  </div>
               </div>
            </div> <!-- Cierre ROW respuestas pregunta 85 -->
            <!-- |86| PREGUNTA -->
            <div class="row mt-4">                                 
               <div class="col-sm-12">
                  <legend class="col-form-label  pt-0 col-form-label-md ">
                  4.- Considero que en mi trabajo se aplican las normas de seguridad y salud en el trabajo
                  </legend>
               </div>
            </div>   <!-- Cierre ROW pregunta 86 -->
            <div class="row"> 
               <div class="col-sm-2">
                  <div class="custom-control custom-radio ">
                     <input class="custom-control-input" type="radio" name="p86" id="356" value="356" required>
                     <label class="custom-control-label " for="356">
                        Siempre
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p86" id="357" value="357" required>
                     <label class="custom-control-label" for="357">
                        Casi Siempre
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p86" id="358" value="358" required>
                     <label class="custom-control-label" for="358">
                        Algunas veces
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p86" id="359" value="359" required>
                     <label class="custom-control-label" for="359">
                        Casi nunca
                     </label>
                  </div>
               </div>
               <div class="col-sm-2 ">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p86" id="360" value="360" required>
                     <label class="custom-control-label" for="360">
                        Nunca
                     </label>
                  </div>
               </div>
            </div> <!-- Cierre ROW respuestas pregunta 86 -->
            <!-- |87| PREGUNTA -->
            <div class="row mt-4">                                 
               <div class="col-sm-12">
                  <legend class="col-form-label  pt-0 col-form-label-md ">
                  5.- Considero que las actividades que realizo son peligrosas
                  </legend>
               </div>
            </div>   <!-- Cierre ROW pregunta 98 -->
            <div class="row"> 
               <div class="col-sm-2">
                  <div class="custom-control custom-radio ">
                     <input class="custom-control-input" type="radio" name="p87" id="361" value="361" required>
                     <label class="custom-control-label " for="361">
                        Siempre
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p87" id="362" value="362" required>
                     <label class="custom-control-label" for="362">
                        Casi Siempre
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p87" id="363" value="363" required>
                     <label class="custom-control-label" for="363">
                        Algunas veces
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p87" id="364" value="364" required>
                     <label class="custom-control-label" for="364">
                        Casi nunca
                     </label>
                  </div>
               </div>
               <div class="col-sm-2 ">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p87" id="365" value="365" required>
                     <label class="custom-control-label" for="365">
                        Nunca
                     </label>
                  </div>
               </div>
            </div> <!-- Cierre ROW respuestas pregunta 87 -->
         </fieldset>

         <!-- SUBCATEGORIA 16 -->
         <div class="alert alert-danger text-left" role="alert">
            <h5>Para responder a las preguntas siguientes piense en la cantidad y ritmo de trabajo que tiene.</h5>
         </div>

         <!-- PREGUNTAS SUBCATEGORIA 16 | PREGUNTA 88-90 -->
         <fieldset class="form-group">
            <!-- |88| PREGUNTA -->
            <div class="row">                                 
               <div class="col-sm-12">
                  <legend class="col-form-label  pt-0 col-form-label-md ">
                  6.- Por la cantidad de trabajo que tengo debo quedarme tiempo adicional a mi turno
                  </legend>
               </div>
            </div>   <!-- Cierre ROW pregunta 88 -->
            <div class="row"> 
               <div class="col-sm-2">
                  <div class="custom-control custom-radio ">
                     <input class="custom-control-input" type="radio" name="p88" id="366" value="366" required>
                     <label class="custom-control-label " for="366">
                        Siempre
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p88" id="367" value="367" required>
                     <label class="custom-control-label" for="367">
                        Casi Siempre
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p88" id="368" value="368" required>
                     <label class="custom-control-label" for="368">
                        Algunas veces
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p88" id="369" value="369" required>
                     <label class="custom-control-label" for="369">
                        Casi nunca
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p88" id="370" value="370" required>
                     <label class="custom-control-label" for="370">
                        Nunca
                     </label>
                  </div>
               </div>
            </div> <!-- Cierre ROW respuestas pregunta 88 -->
            <!-- |89| PREGUNTA -->
            <div class="row mt-4">                                 
               <div class="col-sm-12">
                  <legend class="col-form-label  pt-0 col-form-label-md ">
                  7.- Por la cantidad de trabajo que tengo debo trabajar sin parar
                  </legend>
               </div>
            </div>   <!-- Cierre ROW pregunta 89 -->
            <div class="row"> 
               <div class="col-sm-2">
                  <div class="custom-control custom-radio ">
                     <input class="custom-control-input" type="radio" name="p89" id="371" value="371" required>
                     <label class="custom-control-label " for="371">
                        Siempre
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p89" id="372" value="372" required>
                     <label class="custom-control-label" for="372">
                        Casi Siempre
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p89" id="373" value="373" required>
                     <label class="custom-control-label" for="373">
                        Algunas veces
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p89" id="374" value="374" required>
                     <label class="custom-control-label" for="374">
                        Casi nunca
                     </label>
                  </div>
               </div>
               <div class="col-sm-2 ">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p89" id="375" value="375" required>
                     <label class="custom-control-label" for="375">
                        Nunca
                     </label>
                  </div>
               </div>
            </div> <!-- Cierre ROW respuestas pregunta 89 -->
            <!-- |90| PREGUNTA -->
            <div class="row mt-4">                                 
               <div class="col-sm-12">
                  <legend class="col-form-label  pt-0 col-form-label-md ">
                  8.- Considero que es necesario mantener un ritmo de trabajo acelerado
                  </legend>
               </div>
            </div>   <!-- Cierre ROW pregunta 90 -->
            <div class="row"> 
               <div class="col-sm-2">
                  <div class="custom-control custom-radio ">
                     <input class="custom-control-input" type="radio" name="p90" id="376" value="376" required>
                     <label class="custom-control-label " for="376">
                        Siempre
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p90" id="377" value="377" required>
                     <label class="custom-control-label" for="377">
                        Casi Siempre
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p90" id="378" value="378" required>
                     <label class="custom-control-label" for="378">
                        Algunas veces
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p90" id="379" value="379" required>
                     <label class="custom-control-label" for="379">
                        Casi nunca
                     </label>
                  </div>
               </div>
               <div class="col-sm-2 ">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p90" id="380" value="380" required>
                     <label class="custom-control-label" for="380">
                        Nunca
                     </label>
                  </div>
               </div>
            </div> <!-- Cierre ROW respuestas pregunta 90 -->


         </fieldset>

         <!-- SUBCATEGORIA 17 -->
         <div class="alert alert-danger text-left" role="alert">
            <h5>Las preguntas siguientes están relacionadas con el esfuerzo mental que le exige su trabajo.</h5>
         </div>

         <!-- PREGUNTAS SUBCATEGORIA 17 | PREGUNTA 91-94 -->
         <fieldset class="form-group">
            <!-- |91| PREGUNTA -->
            <div class="row">                                 
               <div class="col-sm-12">
                  <legend class="col-form-label  pt-0 col-form-label-md ">
                  9.- Mi trabajo exige que esté muy concentrado
                  </legend>
               </div>
            </div>   <!-- Cierre ROW pregunta 91 -->
            <div class="row"> 
               <div class="col-sm-2">
                  <div class="custom-control custom-radio ">
                     <input class="custom-control-input" type="radio" name="p91" id="381" value="381" required>
                     <label class="custom-control-label " for="381">
                        Siempre
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p91" id="382" value="382" required>
                     <label class="custom-control-label" for="382">
                        Casi Siempre
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p91" id="383" value="383" required>
                     <label class="custom-control-label" for="383">
                        Algunas veces
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p91" id="384" value="384" required>
                     <label class="custom-control-label" for="384">
                        Casi nunca
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p91" id="385" value="385" required>
                     <label class="custom-control-label" for="385">
                        Nunca
                     </label>
                  </div>
               </div>
            </div> <!-- Cierre ROW respuestas pregunta 91 -->
            <!-- |92| PREGUNTA -->
            <div class="row mt-4">                                 
               <div class="col-sm-12">
                  <legend class="col-form-label  pt-0 col-form-label-md ">
                  10.- Mi trabajo requiere que memorice mucha información
                  </legend>
               </div>
            </div>   <!-- Cierre ROW pregunta 92 -->
            <div class="row"> 
               <div class="col-sm-2">
                  <div class="custom-control custom-radio ">
                     <input class="custom-control-input" type="radio" name="p92" id="386" value="386" required>
                     <label class="custom-control-label " for="386">
                        Siempre
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p92" id="387" value="387" required>
                     <label class="custom-control-label" for="387">
                        Casi Siempre
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p92" id="388" value="388" required>
                     <label class="custom-control-label" for="388">
                        Algunas veces
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p92" id="389" value="389" required>
                     <label class="custom-control-label" for="389">
                        Casi nunca
                     </label>
                  </div>
               </div>
               <div class="col-sm-2 ">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p92" id="390" value="390" required>
                     <label class="custom-control-label" for="390">
                        Nunca
                     </label>
                  </div>
               </div>
            </div> <!-- Cierre ROW respuestas pregunta 92 -->
            <!-- |93| PREGUNTA -->
            <div class="row mt-4">                                 
               <div class="col-sm-12">
                  <legend class="col-form-label  pt-0 col-form-label-md ">
                  11.- En mi trabajo tengo que tomar decisiones difíciles muy rápido
                  </legend>
               </div>
            </div>   <!-- Cierre ROW pregunta 93 -->
            <div class="row"> 
               <div class="col-sm-2">
                  <div class="custom-control custom-radio ">
                     <input class="custom-control-input" type="radio" name="p93" id="391" value="391" required>
                     <label class="custom-control-label " for="391">
                        Siempre
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p93" id="392" value="392" required>
                     <label class="custom-control-label" for="392">
                        Casi Siempre
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p93" id="393" value="393" required>
                     <label class="custom-control-label" for="393">
                        Algunas veces
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p93" id="394" value="394" required>
                     <label class="custom-control-label" for="394">
                        Casi nunca
                     </label>
                  </div>
               </div>
               <div class="col-sm-2 ">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p93" id="395" value="395" required>
                     <label class="custom-control-label" for="395">
                        Nunca
                     </label>
                  </div>
               </div>
            </div> <!-- Cierre ROW respuestas pregunta 93 -->
            <!-- |94| PREGUNTA -->
            <div class="row mt-4">                                 
               <div class="col-sm-12">
                  <legend class="col-form-label  pt-0 col-form-label-md ">
                  12.- Mi trabajo exige que atienda varios asuntos al mismo tiempo
                  </legend>
               </div>
            </div>   <!-- Cierre ROW pregunta 94 -->
            <div class="row"> 
               <div class="col-sm-2">
                  <div class="custom-control custom-radio ">
                     <input class="custom-control-input" type="radio" name="p94" id="396" value="396" required>
                     <label class="custom-control-label " for="396">
                        Siempre
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p94" id="397" value="397" required>
                     <label class="custom-control-label" for="397">
                        Casi Siempre
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p94" id="398" value="398" required>
                     <label class="custom-control-label" for="398">
                        Algunas veces
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p94" id="399" value="399" required>
                     <label class="custom-control-label" for="399">
                        Casi nunca
                     </label>
                  </div>
               </div>
               <div class="col-sm-2 ">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p94" id="400" value="400" required>
                     <label class="custom-control-label" for="400">
                        Nunca
                     </label>
                  </div>
               </div>
            </div> <!-- Cierre ROW respuestas pregunta 94 -->


         </fieldset>

         <!-- SUBCATEGORIA 18 -->
         <div class="alert alert-danger text-left" role="alert">
            <h5>Las preguntas siguientes están relacionadas con las actividades que realiza en su trabajo y las responsabilidades que tiene.</h5>
         </div>

         <!-- PREGUNTAS SUBCATEGORIA 18 | PREGUNTA 95-98 -->
         <fieldset class="form-group">
            <!-- |95| PREGUNTA -->
            <div class="row">                                 
               <div class="col-sm-12">
                  <legend class="col-form-label  pt-0 col-form-label-md ">
                  13.- En mi trabajo soy responsable de cosas de mucho valor
                  </legend>
               </div>
            </div>   <!-- Cierre ROW pregunta 95 -->
            <div class="row"> 
               <div class="col-sm-2">
                  <div class="custom-control custom-radio ">
                     <input class="custom-control-input" type="radio" name="p95" id="401" value="401" required>
                     <label class="custom-control-label " for="401">
                        Siempre
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p95" id="402" value="402" required>
                     <label class="custom-control-label" for="402">
                        Casi Siempre
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p95" id="403" value="403" required>
                     <label class="custom-control-label" for="403">
                        Algunas veces
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p95" id="404" value="404" required>
                     <label class="custom-control-label" for="404">
                        Casi nunca
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p95" id="405" value="405" required>
                     <label class="custom-control-label" for="405">
                        Nunca
                     </label>
                  </div>
               </div>
            </div> <!-- Cierre ROW respuestas pregunta 95 -->
            <!-- |96| PREGUNTA -->
            <div class="row mt-4">                                 
               <div class="col-sm-12">
                  <legend class="col-form-label  pt-0 col-form-label-md ">
                  14.- Respondo ante mi jefe por los resultados de toda mi área de trabajo
                  </legend>
               </div>
            </div>   <!-- Cierre ROW pregunta 96 -->
            <div class="row"> 
               <div class="col-sm-2">
                  <div class="custom-control custom-radio ">
                     <input class="custom-control-input" type="radio" name="p96" id="406" value="406" required>
                     <label class="custom-control-label " for="406">
                        Siempre
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p96" id="407" value="407" required>
                     <label class="custom-control-label" for="407">
                        Casi Siempre
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p96" id="408" value="408" required>
                     <label class="custom-control-label" for="408">
                        Algunas veces
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p96" id="409" value="409" required>
                     <label class="custom-control-label" for="409">
                        Casi nunca
                     </label>
                  </div>
               </div>
               <div class="col-sm-2 ">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p96" id="410" value="410" required>
                     <label class="custom-control-label" for="410">
                        Nunca
                     </label>
                  </div>
               </div>
            </div> <!-- Cierre ROW respuestas pregunta 96 -->
            <!-- |97| PREGUNTA -->
            <div class="row mt-4">                                 
               <div class="col-sm-12">
                  <legend class="col-form-label  pt-0 col-form-label-md ">
                  15.- En el trabajo me dan órdenes contradictorias
                  </legend>
               </div>
            </div>   <!-- Cierre ROW pregunta 97 -->
            <div class="row"> 
               <div class="col-sm-2">
                  <div class="custom-control custom-radio ">
                     <input class="custom-control-input" type="radio" name="p97" id="411" value="411" required>
                     <label class="custom-control-label " for="411">
                        Siempre
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p97" id="412" value="412" required>
                     <label class="custom-control-label" for="412">
                        Casi Siempre
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p97" id="413" value="413" required>
                     <label class="custom-control-label" for="413">
                        Algunas veces
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p97" id="414" value="414" required>
                     <label class="custom-control-label" for="414">
                        Casi nunca
                     </label>
                  </div>
               </div>
               <div class="col-sm-2 ">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p97" id="415" value="415" required>
                     <label class="custom-control-label" for="415">
                        Nunca
                     </label>
                  </div>
               </div>
            </div> <!-- Cierre ROW respuestas pregunta 97 -->
            <!-- |98| PREGUNTA -->
            <div class="row mt-4">                                 
               <div class="col-sm-12">
                  <legend class="col-form-label  pt-0 col-form-label-md ">
                  16.- Considero que en mi trabajo me piden hacer cosas innecesarias
                  </legend>
               </div>
            </div>   <!-- Cierre ROW pregunta 98 -->
            <div class="row"> 
               <div class="col-sm-2">
                  <div class="custom-control custom-radio ">
                     <input class="custom-control-input" type="radio" name="p98" id="416" value="416" required>
                     <label class="custom-control-label " for="416">
                        Siempre
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p98" id="417" value="417" required>
                     <label class="custom-control-label" for="417">
                        Casi Siempre
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p98" id="418" value="418" required>
                     <label class="custom-control-label" for="418">
                        Algunas veces
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p98" id="419" value="419" required>
                     <label class="custom-control-label" for="419">
                        Casi nunca
                     </label>
                  </div>
               </div>
               <div class="col-sm-2 ">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p98" id="420" value="420" required>
                     <label class="custom-control-label" for="420">
                        Nunca
                     </label>
                  </div>
               </div>
            </div> <!-- Cierre ROW respuestas pregunta 98 -->


         </fieldset>

         <!-- SUBCATEGORIA 19 -->
         <div class="alert alert-danger text-left" role="alert">
            <h5>Las preguntas siguientes están relacionadas con su jornada de trabajo.</h5>
         </div>

         <!-- PREGUNTAS SUBCATEGORIA 19 | PREGUNTA 99-104 -->
         <fieldset class="form-group">
            <!-- |99| PREGUNTA -->
            <div class="row">                                 
               <div class="col-sm-12">
                  <legend class="col-form-label  pt-0 col-form-label-md ">
                  17.- Trabajo horas extras más de tres veces a la semana
                  </legend>
               </div>
            </div>   <!-- Cierre ROW pregunta 99 -->
            <div class="row"> 
               <div class="col-sm-2">
                  <div class="custom-control custom-radio ">
                     <input class="custom-control-input" type="radio" name="p99" id="421" value="421" required>
                     <label class="custom-control-label " for="421">
                        Siempre
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p99" id="422" value="422" required>
                     <label class="custom-control-label" for="422">
                        Casi Siempre
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p99" id="423" value="423" required>
                     <label class="custom-control-label" for="423">
                        Algunas veces
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p99" id="424" value="424" required>
                     <label class="custom-control-label" for="424">
                        Casi nunca
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p99" id="425" value="425" required>
                     <label class="custom-control-label" for="425">
                        Nunca
                     </label>
                  </div>
               </div>
            </div> <!-- Cierre ROW respuestas pregunta 99 -->
            <!-- |100| PREGUNTA -->
            <div class="row mt-4">                                 
               <div class="col-sm-12">
                  <legend class="col-form-label  pt-0 col-form-label-md ">
                  18.- Mi trabajo me exige laborar en días de descanso,festivos o fines de semana
                  </legend>
               </div>
            </div>   <!-- Cierre ROW pregunta 100 -->
            <div class="row"> 
               <div class="col-sm-2">
                  <div class="custom-control custom-radio ">
                     <input class="custom-control-input" type="radio" name="p100" id="426" value="426" required>
                     <label class="custom-control-label " for="426">
                        Siempre
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p100" id="427" value="427" required>
                     <label class="custom-control-label" for="427">
                        Casi Siempre
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p100" id="428" value="428" required>
                     <label class="custom-control-label" for="428">
                        Algunas veces
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p100" id="429" value="429" required>
                     <label class="custom-control-label" for="429">
                        Casi nunca
                     </label>
                  </div>
               </div>
               <div class="col-sm-2 ">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p100" id="430" value="430" required>
                     <label class="custom-control-label" for="430">
                        Nunca
                     </label>
                  </div>
               </div>
            </div> <!-- Cierre ROW respuestas pregunta 100 -->
            <!-- |101| PREGUNTA -->
            <div class="row mt-4">                                 
               <div class="col-sm-12">
                  <legend class="col-form-label  pt-0 col-form-label-md ">
                  19.- Considero que el tiempo en el trabajo es mucho y perjudica mis actividades familiares o personales
                  </legend>
               </div>
            </div>   <!-- Cierre ROW pregunta 101 -->
            <div class="row"> 
               <div class="col-sm-2">
                  <div class="custom-control custom-radio ">
                     <input class="custom-control-input" type="radio" name="p101" id="431" value="431" required>
                     <label class="custom-control-label " for="431">
                        Siempre
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p101" id="432" value="432" required>
                     <label class="custom-control-label" for="432">
                        Casi Siempre
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p101" id="433" value="433" required>
                     <label class="custom-control-label" for="433">
                        Algunas veces
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p101" id="434" value="434" required>
                     <label class="custom-control-label" for="434">
                        Casi nunca
                     </label>
                  </div>
               </div>
               <div class="col-sm-2 ">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p101" id="435" value="435" required>
                     <label class="custom-control-label" for="435">
                        Nunca
                     </label>
                  </div>
               </div>
            </div> <!-- Cierre ROW respuestas pregunta 101 -->
            <!-- |102| PREGUNTA -->
            <div class="row mt-4">                                 
               <div class="col-sm-12">
                  <legend class="col-form-label  pt-0 col-form-label-md ">
                  20.- Debo atender asuntos de trabajo cuando estoy en casa
                  </legend>
               </div>
            </div>   <!-- Cierre ROW pregunta 102 -->
            <div class="row"> 
               <div class="col-sm-2">
                  <div class="custom-control custom-radio ">
                     <input class="custom-control-input" type="radio" name="p102" id="436" value="436" required>
                     <label class="custom-control-label " for="436">
                        Siempre
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p102" id="437" value="437" required>
                     <label class="custom-control-label" for="437">
                        Casi Siempre
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p102" id="438" value="438" required>
                     <label class="custom-control-label" for="438">
                        Algunas veces
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p102" id="439" value="439" required>
                     <label class="custom-control-label" for="439">
                        Casi nunca
                     </label>
                  </div>
               </div>
               <div class="col-sm-2 ">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p102" id="440" value="440" required>
                     <label class="custom-control-label" for="440">
                        Nunca
                     </label>
                  </div>
               </div>
            </div> <!-- Cierre ROW respuestas pregunta 102 -->
            <!-- |103| PREGUNTA -->
            <div class="row mt-4">                                 
               <div class="col-sm-12">
                  <legend class="col-form-label  pt-0 col-form-label-md ">
                  21.- Pienso en las actividades familiares o personales cuando estoy en mi trabajo
                  </legend>
               </div>
            </div>   <!-- Cierre ROW pregunta 103 -->
            <div class="row"> 
               <div class="col-sm-2">
                  <div class="custom-control custom-radio ">
                     <input class="custom-control-input" type="radio" name="p103" id="441" value="441" required>
                     <label class="custom-control-label " for="441">
                        Siempre
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p103" id="442" value="442" required>
                     <label class="custom-control-label" for="442">
                        Casi Siempre
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p103" id="443" value="443" required>
                     <label class="custom-control-label" for="443">
                        Algunas veces
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p103" id="444" value="444" required>
                     <label class="custom-control-label" for="444">
                        Casi nunca
                     </label>
                  </div>
               </div>
               <div class="col-sm-2 ">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p103" id="445" value="445" required>
                     <label class="custom-control-label" for="445">
                        Nunca
                     </label>
                  </div>
               </div>
            </div> <!-- Cierre ROW respuestas pregunta 103 -->
            <!-- |104| PREGUNTA -->
            <div class="row mt-4">                                 
               <div class="col-sm-12">
                  <legend class="col-form-label  pt-0 col-form-label-md ">
                  22.- Pienso que mis responsabilidades familiares afectan mi trabajo
                  </legend>
               </div>
            </div>   <!-- Cierre ROW pregunta 104 -->
            <div class="row"> 
               <div class="col-sm-2">
                  <div class="custom-control custom-radio ">
                     <input class="custom-control-input" type="radio" name="p104" id="446" value="446" required>
                     <label class="custom-control-label " for="446">
                        Siempre
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p104" id="447" value="447" required>
                     <label class="custom-control-label" for="447">
                        Casi Siempre
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p104" id="448" value="448" required>
                     <label class="custom-control-label" for="448">
                        Algunas veces
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p104" id="449" value="449" required>
                     <label class="custom-control-label" for="449">
                        Casi nunca
                     </label>
                  </div>
               </div>
               <div class="col-sm-2 ">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p104" id="450" value="450" required>
                     <label class="custom-control-label" for="450">
                        Nunca
                     </label>
                  </div>
               </div>
            </div> <!-- Cierre ROW respuestas pregunta 104 -->


         </fieldset>

         <!-- SUBCATEGORIA 20 -->
         <div class="alert alert-danger text-left" role="alert">
            <h5>Las preguntas siguientes están relacionadas con las decisiones que puede tomar en su trabajo.</h5>
         </div>

         <!-- PREGUNTAS SUBCATEGORIA 20 | PREGUNTA 105-110 -->
         <fieldset class="form-group">
            <!-- |105| PREGUNTA -->
            <div class="row">                                 
               <div class="col-sm-12">
                  <legend class="col-form-label  pt-0 col-form-label-md ">
                  23.- Mi trabajo permite que desarrolle nuevas habilidades
                  </legend>
               </div>
            </div>   <!-- Cierre ROW pregunta 105 -->
            <div class="row"> 
               <div class="col-sm-2">
                  <div class="custom-control custom-radio ">
                     <input class="custom-control-input" type="radio" name="p105" id="451" value="451" required>
                     <label class="custom-control-label " for="451">
                        Siempre
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p105" id="452" value="452" required>
                     <label class="custom-control-label" for="452">
                        Casi Siempre
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p105" id="453" value="453" required>
                     <label class="custom-control-label" for="453">
                        Algunas veces
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p105" id="454" value="454" required>
                     <label class="custom-control-label" for="454">
                        Casi nunca
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p105" id="455" value="455" required>
                     <label class="custom-control-label" for="455">
                        Nunca
                     </label>
                  </div>
               </div>
            </div> <!-- Cierre ROW respuestas pregunta 105 -->
            <!-- |106| PREGUNTA -->
            <div class="row mt-4">                                 
               <div class="col-sm-12">
                  <legend class="col-form-label  pt-0 col-form-label-md ">
                  24.- En mi trabajo puedo aspirar a un mejor puesto
                  </legend>
               </div>
            </div>   <!-- Cierre ROW pregunta 106 -->
            <div class="row"> 
               <div class="col-sm-2">
                  <div class="custom-control custom-radio ">
                     <input class="custom-control-input" type="radio" name="p106" id="456" value="456" required>
                     <label class="custom-control-label " for="456">
                        Siempre
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p106" id="457" value="457" required>
                     <label class="custom-control-label" for="457">
                        Casi Siempre
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p106" id="458" value="458" required>
                     <label class="custom-control-label" for="458">
                        Algunas veces
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p106" id="459" value="459" required>
                     <label class="custom-control-label" for="459">
                        Casi nunca
                     </label>
                  </div>
               </div>
               <div class="col-sm-2 ">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p106" id="460" value="460" required>
                     <label class="custom-control-label" for="460">
                        Nunca
                     </label>
                  </div>
               </div>
            </div> <!-- Cierre ROW respuestas pregunta 106 -->
            <!-- |107| PREGUNTA -->
            <div class="row mt-4">                                 
               <div class="col-sm-12">
                  <legend class="col-form-label  pt-0 col-form-label-md ">
                  25.- Durante mi jornada de trabajo puedo tomar pausas cuando las necesito
                  </legend>
               </div>
            </div>   <!-- Cierre ROW pregunta 107 -->
            <div class="row"> 
               <div class="col-sm-2">
                  <div class="custom-control custom-radio ">
                     <input class="custom-control-input" type="radio" name="p107" id="461" value="461" required>
                     <label class="custom-control-label " for="461">
                        Siempre
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p107" id="462" value="462" required>
                     <label class="custom-control-label" for="462">
                        Casi Siempre
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p107" id="463" value="463" required>
                     <label class="custom-control-label" for="463">
                        Algunas veces
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p107" id="464" value="464" required>
                     <label class="custom-control-label" for="464">
                        Casi nunca
                     </label>
                  </div>
               </div>
               <div class="col-sm-2 ">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p107" id="465" value="465" required>
                     <label class="custom-control-label" for="465">
                        Nunca
                     </label>
                  </div>
               </div>
            </div> <!-- Cierre ROW respuestas pregunta 107 -->
            <!-- |108| PREGUNTA -->
            <div class="row mt-4">                                 
               <div class="col-sm-12">
                  <legend class="col-form-label  pt-0 col-form-label-md ">
                  26.- Puedo decidir cuánto trabajo realizo durante la jornada laboral
                  </legend>
               </div>
            </div>   <!-- Cierre ROW pregunta 108 -->
            <div class="row"> 
               <div class="col-sm-2">
                  <div class="custom-control custom-radio ">
                     <input class="custom-control-input" type="radio" name="p108" id="466" value="466" required>
                     <label class="custom-control-label " for="466">
                        Siempre
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p108" id="467" value="467" required>
                     <label class="custom-control-label" for="467">
                        Casi Siempre
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p108" id="468" value="468" required>
                     <label class="custom-control-label" for="468">
                        Algunas veces
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p108" id="469" value="469" required>
                     <label class="custom-control-label" for="469">
                        Casi nunca
                     </label>
                  </div>
               </div>
               <div class="col-sm-2 ">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p108" id="470" value="470" required>
                     <label class="custom-control-label" for="470">
                        Nunca
                     </label>
                  </div>
               </div>
            </div> <!-- Cierre ROW respuestas pregunta 108 -->
            <!-- |109| PREGUNTA -->
            <div class="row mt-4">                                 
               <div class="col-sm-12">
                  <legend class="col-form-label  pt-0 col-form-label-md ">
                  27.- Puedo decidir la velocidad a la que realizo mis actividades en mi trabajo
                  </legend>
               </div>
            </div>   <!-- Cierre ROW pregunta 109 -->
            <div class="row"> 
               <div class="col-sm-2">
                  <div class="custom-control custom-radio ">
                     <input class="custom-control-input" type="radio" name="p109" id="471" value="471" required>
                     <label class="custom-control-label " for="471">
                        Siempre
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p109" id="472" value="472" required>
                     <label class="custom-control-label" for="472">
                        Casi Siempre
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p109" id="473" value="473" required>
                     <label class="custom-control-label" for="473">
                        Algunas veces
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p109" id="474" value="474" required>
                     <label class="custom-control-label" for="474">
                        Casi nunca
                     </label>
                  </div>
               </div>
               <div class="col-sm-2 ">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p109" id="475" value="475" required>
                     <label class="custom-control-label" for="475">
                        Nunca
                     </label>
                  </div>
               </div>
            </div> <!-- Cierre ROW respuestas pregunta 109 -->
            <!-- |110| PREGUNTA -->
            <div class="row mt-4">                                 
               <div class="col-sm-12">
                  <legend class="col-form-label  pt-0 col-form-label-md ">
                  28.- Puedo cambiar el orden de las actividades que realizo en mi trabajo
                  </legend>
               </div>
            </div>   <!-- Cierre ROW pregunta 110 -->
            <div class="row"> 
               <div class="col-sm-2">
                  <div class="custom-control custom-radio ">
                     <input class="custom-control-input" type="radio" name="p110" id="476" value="476" required>
                     <label class="custom-control-label " for="476">
                        Siempre
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p110" id="477" value="477" required>
                     <label class="custom-control-label" for="477">
                        Casi Siempre
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p110" id="478" value="478" required>
                     <label class="custom-control-label" for="478">
                        Algunas veces
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p110" id="479" value="479" required>
                     <label class="custom-control-label" for="479">
                        Casi nunca
                     </label>
                  </div>
               </div>
               <div class="col-sm-2 ">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p110" id="480" value="480" required>
                     <label class="custom-control-label" for="480">
                        Nunca
                     </label>
                  </div>
               </div>
            </div> <!-- Cierre ROW respuestas pregunta 110 -->

            
         </fieldset>
         
         <!-- SUBCATEGORIA 21 -->
         <div class="alert alert-danger text-left" role="alert">
            <h5>Las preguntas siguientes están relacionadas con cualquier tipo de cambio que ocurra en su trabajo (considere los últimos cambios realizados).</h5>
         </div>

         <!-- PREGUNTAS SUBCATEGORIA 21 | PREGUNTA 111-112  -->
         <fieldset class="form-group">
            <!-- |111| PREGUNTA -->
            <div class="row">                                 
               <div class="col-sm-12">
                  <legend class="col-form-label  pt-0 col-form-label-md ">
                  29.- Los cambios que se presentan en mi trabajo dificultan mi labor
                  </legend>
               </div>
            </div>   <!-- Cierre ROW pregunta 111 -->
            <div class="row"> 
               <div class="col-sm-2">
                  <div class="custom-control custom-radio ">
                     <input class="custom-control-input" type="radio" name="p111" id="481" value="481" required>
                     <label class="custom-control-label " for="481">
                        Siempre
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p111" id="482" value="482" required>
                     <label class="custom-control-label" for="482">
                        Casi Siempre
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p111" id="483" value="483" required>
                     <label class="custom-control-label" for="483">
                        Algunas veces
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p111" id="484" value="484" required>
                     <label class="custom-control-label" for="484">
                        Casi nunca
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p111" id="485" value="485" required>
                     <label class="custom-control-label" for="485">
                        Nunca
                     </label>
                  </div>
               </div>
            </div> <!-- Cierre ROW respuestas pregunta 111 -->
            <!-- |112| PREGUNTA -->
            <div class="row mt-4">                                 
               <div class="col-sm-12">
                  <legend class="col-form-label  pt-0 col-form-label-md ">
                  30.- Cuando se presentan cambios en mi trabajo se tienen en cuenta mis ideas o aportaciones
                  </legend>
               </div>
            </div>   <!-- Cierre ROW pregunta 112 -->
            <div class="row"> 
               <div class="col-sm-2">
                  <div class="custom-control custom-radio ">
                     <input class="custom-control-input" type="radio" name="p112" id="486" value="486" required>
                     <label class="custom-control-label " for="486">
                        Siempre
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p112" id="487" value="487" required>
                     <label class="custom-control-label" for="487">
                        Casi Siempre
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p112" id="488" value="488" required>
                     <label class="custom-control-label" for="488">
                        Algunas veces
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p112" id="489" value="489" required>
                     <label class="custom-control-label" for="489">
                        Casi nunca
                     </label>
                  </div>
               </div>
               <div class="col-sm-2 ">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p112" id="490" value="490" required>
                     <label class="custom-control-label" for="490">
                        Nunca
                     </label>
                  </div>
               </div>
            </div> <!-- Cierre ROW respuestas pregunta 112 -->                           
         </fieldset>

         <!-- SUBCATEGORIA 22 -->
         <div class="alert alert-danger text-left" role="alert">
            <h5>Las preguntas siguientes están relacionadas con la capacitación e información que se le proporciona sobre su trabajo.</h5>
         </div>

         <!-- PREGUNTAS SUBCATEGORIA 22 | PREGUNTA 113-118  -->
         <fieldset class="form-group">
            <!-- |113| PREGUNTA -->
            <div class="row">                                 
               <div class="col-sm-12">
                  <legend class="col-form-label  pt-0 col-form-label-md ">
                  31.- Me informan con claridad cuáles son mis funciones
                  </legend>
               </div>
            </div>   <!-- Cierre ROW pregunta 113 -->
            <div class="row"> 
               <div class="col-sm-2">
                  <div class="custom-control custom-radio ">
                     <input class="custom-control-input" type="radio" name="p113" id="491" value="491" required>
                     <label class="custom-control-label " for="491">
                        Siempre
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p113" id="492" value="492" required>
                     <label class="custom-control-label" for="492">
                        Casi Siempre
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p113" id="493" value="493" required>
                     <label class="custom-control-label" for="493">
                        Algunas veces
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p113" id="494" value="494" required>
                     <label class="custom-control-label" for="494">
                        Casi nunca
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p113" id="495" value="495" required>
                     <label class="custom-control-label" for="495">
                        Nunca
                     </label>
                  </div>
               </div>
            </div> <!-- Cierre ROW respuestas pregunta 113 -->
            <!-- |114| PREGUNTA -->
            <div class="row mt-4">                                 
               <div class="col-sm-12">
                  <legend class="col-form-label  pt-0 col-form-label-md ">
                  32.- Me explican claramente los resultados que debo obtener en mi trabajo
                  </legend>
               </div>
            </div>   <!-- Cierre ROW pregunta 114 -->
            <div class="row"> 
               <div class="col-sm-2">
                  <div class="custom-control custom-radio ">
                     <input class="custom-control-input" type="radio" name="p114" id="496" value="496" required>
                     <label class="custom-control-label " for="496">
                        Siempre
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p114" id="497" value="497" required>
                     <label class="custom-control-label" for="497">
                        Casi Siempre
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p114" id="498" value="498" required>
                     <label class="custom-control-label" for="498">
                        Algunas veces
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p114" id="499" value="499" required>
                     <label class="custom-control-label" for="499">
                        Casi nunca
                     </label>
                  </div>
               </div>
               <div class="col-sm-2 ">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p114" id="500" value="500" required>
                     <label class="custom-control-label" for="500">
                        Nunca
                     </label>
                  </div>
               </div>
            </div> <!-- Cierre ROW respuestas pregunta 114 -->
            <!-- |115| PREGUNTA -->
            <div class="row mt-4">                                 
               <div class="col-sm-12">
                  <legend class="col-form-label  pt-0 col-form-label-md ">
                  33.- Me explican claramente los objetivos de mi trabajo
                  </legend>
               </div>
            </div>   <!-- Cierre ROW pregunta 115 -->
            <div class="row"> 
               <div class="col-sm-2">
                  <div class="custom-control custom-radio ">
                     <input class="custom-control-input" type="radio" name="p115" id="501" value="501" required>
                     <label class="custom-control-label " for="501">
                        Siempre
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p115" id="502" value="502" required>
                     <label class="custom-control-label" for="502">
                        Casi Siempre
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p115" id="503" value="503" required>
                     <label class="custom-control-label" for="503">
                        Algunas veces
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p115" id="504" value="504" required>
                     <label class="custom-control-label" for="504">
                        Casi nunca
                     </label>
                  </div>
               </div>
               <div class="col-sm-2 ">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p115" id="505" value="505" required>
                     <label class="custom-control-label" for="505">
                        Nunca
                     </label>
                  </div>
               </div>
            </div> <!-- Cierre ROW respuestas pregunta 115 -->
            <!-- |116| PREGUNTA -->
            <div class="row mt-4">                                 
               <div class="col-sm-12">
                  <legend class="col-form-label  pt-0 col-form-label-md ">
                  34.- Me informan con quién puedo resolver problemas o asuntos de trabajo
                  </legend>
               </div>
            </div>   <!-- Cierre ROW pregunta 116 -->
            <div class="row"> 
               <div class="col-sm-2">
                  <div class="custom-control custom-radio ">
                     <input class="custom-control-input" type="radio" name="p116" id="506" value="506" required>
                     <label class="custom-control-label " for="506">
                        Siempre
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p116" id="507" value="507" required>
                     <label class="custom-control-label" for="507">
                        Casi Siempre
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p116" id="508" value="508" required>
                     <label class="custom-control-label" for="508">
                        Algunas veces
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p116" id="509" value="509" required>
                     <label class="custom-control-label" for="509">
                        Casi nunca
                     </label>
                  </div>
               </div>
               <div class="col-sm-2 ">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p116" id="510" value="510" required>
                     <label class="custom-control-label" for="510">
                        Nunca
                     </label>
                  </div>
               </div>
            </div> <!-- Cierre ROW respuestas pregunta 116 -->
            <!-- |117| PREGUNTA -->
            <div class="row mt-4">                                 
               <div class="col-sm-12">
                  <legend class="col-form-label  pt-0 col-form-label-md ">
                  35.- Me permiten asistir a capacitaciones relacionadas con mi trabajo
                  </legend>
               </div>
            </div>   <!-- Cierre ROW pregunta 117 -->
            <div class="row"> 
               <div class="col-sm-2">
                  <div class="custom-control custom-radio ">
                     <input class="custom-control-input" type="radio" name="p117" id="511" value="511" required>
                     <label class="custom-control-label " for="511">
                        Siempre
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p117" id="512" value="512" required>
                     <label class="custom-control-label" for="512">
                        Casi Siempre
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p117" id="513" value="513" required>
                     <label class="custom-control-label" for="513">
                        Algunas veces
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p117" id="514" value="514" required>
                     <label class="custom-control-label" for="514">
                        Casi nunca
                     </label>
                  </div>
               </div>
               <div class="col-sm-2 ">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p117" id="515" value="515" required>
                     <label class="custom-control-label" for="515">
                        Nunca
                     </label>
                  </div>
               </div>
            </div> <!-- Cierre ROW respuestas pregunta 117 -->
            <!-- |118| PREGUNTA -->
            <div class="row mt-4">                                 
               <div class="col-sm-12">
                  <legend class="col-form-label  pt-0 col-form-label-md ">
                  36.- Recibo capacitación útil para hacer mi trabajo
                  </legend>
               </div>
            </div>   <!-- Cierre ROW pregunta 118 -->
            <div class="row"> 
               <div class="col-sm-2">
                  <div class="custom-control custom-radio ">
                     <input class="custom-control-input" type="radio" name="p118" id="516" value="516" required>
                     <label class="custom-control-label " for="516">
                        Siempre
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p118" id="517" value="517" required>
                     <label class="custom-control-label" for="517">
                        Casi Siempre
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p118" id="518" value="518" required>
                     <label class="custom-control-label" for="518">
                        Algunas veces
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p118" id="519" value="519" required>
                     <label class="custom-control-label" for="519">
                        Casi nunca
                     </label>
                  </div>
               </div>
               <div class="col-sm-2 ">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p118" id="520" value="520" required>
                     <label class="custom-control-label" for="520">
                        Nunca
                     </label>
                  </div>
               </div>
            </div> <!-- Cierre ROW respuestas pregunta 118 -->

            
         </fieldset>

         <!-- SUBCATEGORIA 23 -->
         <div class="alert alert-danger text-left" role="alert">
            <h5>Las preguntas siguientes están relacionadas con el o los jefes con quien tiene contacto.</h5>
         </div>

         <!-- PREGUNTAS SUBCATEGORIA 23 | PREGUNTA 119-123 -->
         <fieldset class="form-group">
            <!-- |119| PREGUNTA -->
            <div class="row">                                 
               <div class="col-sm-12">
                  <legend class="col-form-label  pt-0 col-form-label-md ">
                  37.- Mi jefe ayuda a organizar mejor el trabajo
                  </legend>
               </div>
            </div>   <!-- Cierre ROW pregunta 119 -->
            <div class="row"> 
               <div class="col-sm-2">
                  <div class="custom-control custom-radio ">
                     <input class="custom-control-input" type="radio" name="p119" id="521" value="521" required>
                     <label class="custom-control-label " for="521">
                        Siempre
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p119" id="522" value="522" required>
                     <label class="custom-control-label" for="522">
                        Casi Siempre
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p119" id="523" value="523" required>
                     <label class="custom-control-label" for="523">
                        Algunas veces
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p119" id="524" value="524" required>
                     <label class="custom-control-label" for="524">
                        Casi nunca
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p119" id="525" value="525" required>
                     <label class="custom-control-label" for="525">
                        Nunca
                     </label>
                  </div>
               </div>
            </div> <!-- Cierre ROW respuestas pregunta 119 -->
            <!-- |120| PREGUNTA -->
            <div class="row mt-4">                                 
               <div class="col-sm-12">
                  <legend class="col-form-label  pt-0 col-form-label-md ">
                  38.- Mi jefe tiene en cuenta mis puntos de vista y opiniones
                  </legend>
               </div>
            </div>   <!-- Cierre ROW pregunta 120 -->
            <div class="row"> 
               <div class="col-sm-2">
                  <div class="custom-control custom-radio ">
                     <input class="custom-control-input" type="radio" name="p120" id="526" value="526" required>
                     <label class="custom-control-label " for="526">
                        Siempre
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p120" id="527" value="527" required>
                     <label class="custom-control-label" for="527">
                        Casi Siempre
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p120" id="528" value="528" required>
                     <label class="custom-control-label" for="528">
                        Algunas veces
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p120" id="529" value="529" required>
                     <label class="custom-control-label" for="529">
                        Casi nunca
                     </label>
                  </div>
               </div>
               <div class="col-sm-2 ">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p120" id="530" value="530" required>
                     <label class="custom-control-label" for="530">
                        Nunca
                     </label>
                  </div>
               </div>
            </div> <!-- Cierre ROW respuestas pregunta 120 -->
            <!-- |121| PREGUNTA -->
            <div class="row mt-4">                                 
               <div class="col-sm-12">
                  <legend class="col-form-label  pt-0 col-form-label-md ">
                  39.- Mi jefe me comunica a tiempo la información relacionada con el trabajo
                  </legend>
               </div>
            </div>   <!-- Cierre ROW pregunta 121 -->
            <div class="row"> 
               <div class="col-sm-2">
                  <div class="custom-control custom-radio ">
                     <input class="custom-control-input" type="radio" name="p121" id="531" value="531" required>
                     <label class="custom-control-label " for="531">
                        Siempre
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p121" id="532" value="532" required>
                     <label class="custom-control-label" for="532">
                        Casi Siempre
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p121" id="533" value="533" required>
                     <label class="custom-control-label" for="533">
                        Algunas veces
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p121" id="534" value="534" required>
                     <label class="custom-control-label" for="534">
                        Casi nunca
                     </label>
                  </div>
               </div>
               <div class="col-sm-2 ">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p121" id="535" value="535" required>
                     <label class="custom-control-label" for="535">
                        Nunca
                     </label>
                  </div>
               </div>
            </div> <!-- Cierre ROW respuestas pregunta 121 -->
            <!-- |122| PREGUNTA -->
            <div class="row mt-4">                                 
               <div class="col-sm-12">
                  <legend class="col-form-label  pt-0 col-form-label-md ">
                  40.- La orientación que me da mi jefe me ayuda a realizar mejor mi trabajo
                  </legend>
               </div>
            </div>   <!-- Cierre ROW pregunta 122 -->
            <div class="row"> 
               <div class="col-sm-2">
                  <div class="custom-control custom-radio ">
                     <input class="custom-control-input" type="radio" name="p122" id="536" value="536" required>
                     <label class="custom-control-label " for="536">
                        Siempre
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p122" id="537" value="537" required>
                     <label class="custom-control-label" for="537">
                        Casi Siempre
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p122" id="538" value="538" required>
                     <label class="custom-control-label" for="538">
                        Algunas veces
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p122" id="539" value="539" required>
                     <label class="custom-control-label" for="539">
                        Casi nunca
                     </label>
                  </div>
               </div>
               <div class="col-sm-2 ">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p122" id="540" value="540" required>
                     <label class="custom-control-label" for="540">
                        Nunca
                     </label>
                  </div>
               </div>
            </div> <!-- Cierre ROW respuestas pregunta 122 -->
            <!-- |123| PREGUNTA -->
            <div class="row mt-4">                                 
               <div class="col-sm-12">
                  <legend class="col-form-label  pt-0 col-form-label-md ">
                  41.- Mi jefe ayuda a solucionar los problemas que se presentan en el trabajo
                  </legend>
               </div>
            </div>   <!-- Cierre ROW pregunta 123 -->
            <div class="row"> 
               <div class="col-sm-2">
                  <div class="custom-control custom-radio ">
                     <input class="custom-control-input" type="radio" name="p123" id="541" value="541" required>
                     <label class="custom-control-label " for="541">
                        Siempre
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p123" id="542" value="542" required>
                     <label class="custom-control-label" for="542">
                        Casi Siempre
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p123" id="543" value="543" required>
                     <label class="custom-control-label" for="543">
                        Algunas veces
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p123" id="544" value="544" required>
                     <label class="custom-control-label" for="544">
                        Casi nunca
                     </label>
                  </div>
               </div>
               <div class="col-sm-2 ">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p123" id="545" value="545" required>
                     <label class="custom-control-label" for="545">
                        Nunca
                     </label>
                  </div>
               </div>
            </div> <!-- Cierre ROW respuestas pregunta 123 -->

            
         </fieldset>

         <!-- SUBCATEGORIA 24 -->
         <div class="alert alert-danger text-left" role="alert">
            <h5>Las preguntas siguientes se refieren a las relaciones con sus compañeros.</h5>
         </div>

         <!-- PREGUNTAS SUBCATEGORIA 24 | PREGUNTA 124-128  -->
         <fieldset class="form-group">
            <!-- |124| PREGUNTA -->
            <div class="row">                                 
               <div class="col-sm-12">
                  <legend class="col-form-label  pt-0 col-form-label-md ">
                  42.- Puedo confiar en mis compañeros de trabajo
                  </legend>
               </div>
            </div>   <!-- Cierre ROW pregunta 124 -->
            <div class="row"> 
               <div class="col-sm-2">
                  <div class="custom-control custom-radio ">
                     <input class="custom-control-input" type="radio" name="p124" id="546" value="546" required>
                     <label class="custom-control-label " for="546">
                        Siempre
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p124" id="547" value="547" required>
                     <label class="custom-control-label" for="547">
                        Casi Siempre
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p124" id="548" value="548" required>
                     <label class="custom-control-label" for="548">
                        Algunas veces
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p124" id="549" value="549" required>
                     <label class="custom-control-label" for="549">
                        Casi nunca
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p124" id="550" value="550" required>
                     <label class="custom-control-label" for="550">
                        Nunca
                     </label>
                  </div>
               </div>
            </div> <!-- Cierre ROW respuestas pregunta 124 -->
            <!-- |125| PREGUNTA -->
            <div class="row mt-4">                                 
               <div class="col-sm-12">
                  <legend class="col-form-label  pt-0 col-form-label-md ">
                  43.- Entre compañeros solucionamos los problemas de trabajo de forma respetuosa
                  </legend>
               </div>
            </div>   <!-- Cierre ROW pregunta 125 -->
            <div class="row"> 
               <div class="col-sm-2">
                  <div class="custom-control custom-radio ">
                     <input class="custom-control-input" type="radio" name="p125" id="551" value="551" required>
                     <label class="custom-control-label " for="551">
                        Siempre
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p125" id="552" value="552" required>
                     <label class="custom-control-label" for="552">
                        Casi Siempre
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p125" id="553" value="553" required>
                     <label class="custom-control-label" for="553">
                        Algunas veces
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p125" id="554" value="554" required>
                     <label class="custom-control-label" for="554">
                        Casi nunca
                     </label>
                  </div>
               </div>
               <div class="col-sm-2 ">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p125" id="555" value="555" required>
                     <label class="custom-control-label" for="555">
                        Nunca
                     </label>
                  </div>
               </div>
            </div> <!-- Cierre ROW respuestas pregunta 125 -->
            <!-- |126| PREGUNTA -->
            <div class="row mt-4">                                 
               <div class="col-sm-12">
                  <legend class="col-form-label  pt-0 col-form-label-md ">
                  44.- En mi trabajo me hacen sentir parte del grupo
                  </legend>
               </div>
            </div>   <!-- Cierre ROW pregunta 126 -->
            <div class="row"> 
               <div class="col-sm-2">
                  <div class="custom-control custom-radio ">
                     <input class="custom-control-input" type="radio" name="p126" id="556" value="556" required>
                     <label class="custom-control-label " for="556">
                        Siempre
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p126" id="557" value="557" required>
                     <label class="custom-control-label" for="557">
                        Casi Siempre
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p126" id="558" value="558" required>
                     <label class="custom-control-label" for="558">
                        Algunas veces
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p126" id="559" value="559" required>
                     <label class="custom-control-label" for="559">
                        Casi nunca
                     </label>
                  </div>
               </div>
               <div class="col-sm-2 ">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p126" id="560" value="560" required>
                     <label class="custom-control-label" for="560">
                        Nunca
                     </label>
                  </div>
               </div>
            </div> <!-- Cierre ROW respuestas pregunta 126 -->
            <!-- |127| PREGUNTA -->
            <div class="row mt-4">                                 
               <div class="col-sm-12">
                  <legend class="col-form-label  pt-0 col-form-label-md ">
                  45.- Cuando tenemos que realizar trabajo de equipo los compañeros colaboran
                  </legend>
               </div>
            </div>   <!-- Cierre ROW pregunta 127 -->
            <div class="row"> 
               <div class="col-sm-2">
                  <div class="custom-control custom-radio ">
                     <input class="custom-control-input" type="radio" name="p127" id="561" value="561" required>
                     <label class="custom-control-label " for="561">
                        Siempre
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p127" id="562" value="562" required>
                     <label class="custom-control-label" for="562">
                        Casi Siempre
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p127" id="563" value="563" required>
                     <label class="custom-control-label" for="563">
                        Algunas veces
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p127" id="564" value="564" required>
                     <label class="custom-control-label" for="564">
                        Casi nunca
                     </label>
                  </div>
               </div>
               <div class="col-sm-2 ">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p127" id="565" value="565" required>
                     <label class="custom-control-label" for="565">
                        Nunca
                     </label>
                  </div>
               </div>
            </div> <!-- Cierre ROW respuestas pregunta 127 -->
            <!-- |128| PREGUNTA -->
            <div class="row mt-4">                                 
               <div class="col-sm-12">
                  <legend class="col-form-label  pt-0 col-form-label-md ">
                  46.- Mis compañeros de trabajo me ayudan cuando tengo dificultades
                  </legend>
               </div>
            </div>   <!-- Cierre ROW pregunta 128 -->
            <div class="row"> 
               <div class="col-sm-2">
                  <div class="custom-control custom-radio ">
                     <input class="custom-control-input" type="radio" name="p128" id="566" value="566" required>
                     <label class="custom-control-label " for="566">
                        Siempre
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p128" id="567" value="567" required>
                     <label class="custom-control-label" for="567">
                        Casi Siempre
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p128" id="568" value="568" required>
                     <label class="custom-control-label" for="568">
                        Algunas veces
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p128" id="569" value="569" required>
                     <label class="custom-control-label" for="569">
                        Casi nunca
                     </label>
                  </div>
               </div>
               <div class="col-sm-2 ">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p128" id="570" value="570" required>
                     <label class="custom-control-label" for="570">
                        Nunca
                     </label>
                  </div>
               </div>
            </div> <!-- Cierre ROW respuestas pregunta 128 -->

            
         </fieldset>

         <!-- SUBCATEGORIA 25 -->
         <div class="alert alert-danger text-left" role="alert">
            <h5>Las preguntas siguientes están relacionadas con la información que recibe sobre su rendimiento en el trabajo, el reconocimiento, el sentido de pertenencia y la estabilidad que le ofrece su trabajo.</h5>
         </div>

         <!-- PREGUNTAS SUBCATEGORIA 25 | PREGUNTA 129-138  -->
         <fieldset class="form-group">
            <!-- |129| PREGUNTA -->
            <div class="row">                                 
               <div class="col-sm-12">
                  <legend class="col-form-label  pt-0 col-form-label-md ">
                  47.- Me informan sobre lo que hago bien en mi trabajo
                  </legend>
               </div>
            </div>   <!-- Cierre ROW pregunta 129-138 -->
            <div class="row"> 
               <div class="col-sm-2">
                  <div class="custom-control custom-radio ">
                     <input class="custom-control-input" type="radio" name="p129" id="571" value="571" required>
                     <label class="custom-control-label " for="571">
                        Siempre
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p129" id="572" value="572" required>
                     <label class="custom-control-label" for="572">
                        Casi Siempre
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p129" id="573" value="573" required>
                     <label class="custom-control-label" for="573">
                        Algunas veces
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p129" id="574" value="574" required>
                     <label class="custom-control-label" for="574">
                        Casi nunca
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p129" id="575" value="575" required>
                     <label class="custom-control-label" for="575">
                        Nunca
                     </label>
                  </div>
               </div>
            </div> <!-- Cierre ROW respuestas pregunta 129 -->
            <!-- |130| PREGUNTA -->
            <div class="row mt-4">                                 
               <div class="col-sm-12">
                  <legend class="col-form-label  pt-0 col-form-label-md ">
                  48.- La forma como evalúan mi trabajo en mi centro de trabajo me ayuda a mejorar mi desempeño
                  </legend>
               </div>
            </div>   <!-- Cierre ROW pregunta 130 -->
            <div class="row"> 
               <div class="col-sm-2">
                  <div class="custom-control custom-radio ">
                     <input class="custom-control-input" type="radio" name="p130" id="576" value="576" required>
                     <label class="custom-control-label " for="576">
                        Siempre
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p130" id="577" value="577" required>
                     <label class="custom-control-label" for="577">
                        Casi Siempre
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p130" id="578" value="578" required>
                     <label class="custom-control-label" for="578">
                        Algunas veces
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p130" id="579" value="579" required>
                     <label class="custom-control-label" for="579">
                        Casi nunca
                     </label>
                  </div>
               </div>
               <div class="col-sm-2 ">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p130" id="580" value="580" required>
                     <label class="custom-control-label" for="580">
                        Nunca
                     </label>
                  </div>
               </div>
            </div> <!-- Cierre ROW respuestas pregunta 130 -->
            <!-- |131| PREGUNTA -->
            <div class="row mt-4">                                 
               <div class="col-sm-12">
                  <legend class="col-form-label  pt-0 col-form-label-md ">
                  49.- En mi centro de trabajo me pagan a tiempo mi salario
                  </legend>
               </div>
            </div>   <!-- Cierre ROW pregunta 131 -->
            <div class="row"> 
               <div class="col-sm-2">
                  <div class="custom-control custom-radio ">
                     <input class="custom-control-input" type="radio" name="p131" id="581" value="581" required>
                     <label class="custom-control-label " for="581">
                        Siempre
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p131" id="582" value="582" required>
                     <label class="custom-control-label" for="582">
                        Casi Siempre
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p131" id="583" value="583" required>
                     <label class="custom-control-label" for="583">
                        Algunas veces
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p131" id="584" value="584" required>
                     <label class="custom-control-label" for="584">
                        Casi nunca
                     </label>
                  </div>
               </div>
               <div class="col-sm-2 ">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p131" id="585" value="585" required>
                     <label class="custom-control-label" for="585">
                        Nunca
                     </label>
                  </div>
               </div>
            </div> <!-- Cierre ROW respuestas pregunta 131 -->
            <!-- |132| PREGUNTA -->
            <div class="row mt-4">                                 
               <div class="col-sm-12">
                  <legend class="col-form-label  pt-0 col-form-label-md ">
                  50.- El pago que recibo es el que merezco por el trabajo que realizo
                  </legend>
               </div>
            </div>   <!-- Cierre ROW pregunta 132 -->
            <div class="row"> 
               <div class="col-sm-2">
                  <div class="custom-control custom-radio ">
                     <input class="custom-control-input" type="radio" name="p132" id="586" value="586" required>
                     <label class="custom-control-label " for="586">
                        Siempre
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p132" id="587" value="587" required>
                     <label class="custom-control-label" for="587">
                        Casi Siempre
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p132" id="588" value="588" required>
                     <label class="custom-control-label" for="588">
                        Algunas veces
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p132" id="589" value="589" required>
                     <label class="custom-control-label" for="589">
                        Casi nunca
                     </label>
                  </div>
               </div>
               <div class="col-sm-2 ">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p132" id="590" value="590" required>
                     <label class="custom-control-label" for="590">
                        Nunca
                     </label>
                  </div>
               </div>
            </div> <!-- Cierre ROW respuestas pregunta 132 -->
            <!-- |133| PREGUNTA -->
            <div class="row mt-4">                                 
               <div class="col-sm-12">
                  <legend class="col-form-label  pt-0 col-form-label-md ">
                  51.- Si obtengo los resultados esperados en mi trabajo me recompensan o reconocen
                  </legend>
               </div>
            </div>   <!-- Cierre ROW pregunta 133 -->
            <div class="row"> 
               <div class="col-sm-2">
                  <div class="custom-control custom-radio ">
                     <input class="custom-control-input" type="radio" name="p133" id="591" value="591" required>
                     <label class="custom-control-label " for="591">
                        Siempre
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p133" id="592" value="592" required>
                     <label class="custom-control-label" for="592">
                        Casi Siempre
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p133" id="593" value="593" required>
                     <label class="custom-control-label" for="593">
                        Algunas veces
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p133" id="594" value="594" required>
                     <label class="custom-control-label" for="594">
                        Casi nunca
                     </label>
                  </div>
               </div>
               <div class="col-sm-2 ">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p133" id="595" value="595" required>
                     <label class="custom-control-label" for="595">
                        Nunca
                     </label>
                  </div>
               </div>
            </div> <!-- Cierre ROW respuestas pregunta 133 -->
            <!-- |134| PREGUNTA -->
            <div class="row mt-4">                                 
               <div class="col-sm-12">
                  <legend class="col-form-label  pt-0 col-form-label-md ">
                  52.- Las personas que hacen bien el trabajo pueden crecer laboralmente
                  </legend>
               </div>
            </div>   <!-- Cierre ROW pregunta 134 -->
            <div class="row"> 
               <div class="col-sm-2">
                  <div class="custom-control custom-radio ">
                     <input class="custom-control-input" type="radio" name="p134" id="596" value="596" required>
                     <label class="custom-control-label " for="596">
                        Siempre
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p134" id="597" value="597" required>
                     <label class="custom-control-label" for="597">
                        Casi Siempre
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p134" id="598" value="598" required>
                     <label class="custom-control-label" for="598">
                        Algunas veces
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p134" id="599" value="599" required>
                     <label class="custom-control-label" for="599">
                        Casi nunca
                     </label>
                  </div>
               </div>
               <div class="col-sm-2 ">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p134" id="600" value="600" required>
                     <label class="custom-control-label" for="600">
                        Nunca
                     </label>
                  </div>
               </div>
            </div> <!-- Cierre ROW respuestas pregunta 134 -->
            <!-- |135| PREGUNTA -->
            <div class="row mt-4">                                 
               <div class="col-sm-12">
                  <legend class="col-form-label  pt-0 col-form-label-md ">
                  53.- Considero que mi trabajo es estable
                  </legend>
               </div>
            </div>   <!-- Cierre ROW pregunta 135 -->
            <div class="row"> 
               <div class="col-sm-2">
                  <div class="custom-control custom-radio ">
                     <input class="custom-control-input" type="radio" name="p135" id="601" value="601" required>
                     <label class="custom-control-label " for="601">
                        Siempre
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p135" id="602" value="602" required>
                     <label class="custom-control-label" for="602">
                        Casi Siempre
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p135" id="603" value="603" required>
                     <label class="custom-control-label" for="603">
                        Algunas veces
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p135" id="604" value="604" required>
                     <label class="custom-control-label" for="604">
                        Casi nunca
                     </label>
                  </div>
               </div>
               <div class="col-sm-2 ">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p135" id="605" value="605" required>
                     <label class="custom-control-label" for="605">
                        Nunca
                     </label>
                  </div>
               </div>
            </div> <!-- Cierre ROW respuestas pregunta 135 -->
            <!-- |136| PREGUNTA -->
            <div class="row mt-4">                                 
               <div class="col-sm-12">
                  <legend class="col-form-label  pt-0 col-form-label-md ">
                  54.- En mi trabajo existe continua rotación de personal
                  </legend>
               </div>
            </div>   <!-- Cierre ROW pregunta 136 -->
            <div class="row"> 
               <div class="col-sm-2">
                  <div class="custom-control custom-radio ">
                     <input class="custom-control-input" type="radio" name="p136" id="606" value="606" required>
                     <label class="custom-control-label " for="606">
                        Siempre
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p136" id="607" value="607" required>
                     <label class="custom-control-label" for="607">
                        Casi Siempre
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p136" id="608" value="608" required>
                     <label class="custom-control-label" for="608">
                        Algunas veces
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p136" id="609" value="609" required>
                     <label class="custom-control-label" for="609">
                        Casi nunca
                     </label>
                  </div>
               </div>
               <div class="col-sm-2 ">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p136" id="610" value="610" required>
                     <label class="custom-control-label" for="610">
                        Nunca
                     </label>
                  </div>
               </div>
            </div> <!-- Cierre ROW respuestas pregunta 136 -->
            <!-- |137| PREGUNTA -->
            <div class="row mt-4">                                 
               <div class="col-sm-12">
                  <legend class="col-form-label  pt-0 col-form-label-md ">
                  55.- Siento orgullo de laborar en este centro de trabajo
                  </legend>
               </div>
            </div>   <!-- Cierre ROW pregunta 137 -->
            <div class="row"> 
               <div class="col-sm-2">
                  <div class="custom-control custom-radio ">
                     <input class="custom-control-input" type="radio" name="p137" id="611" value="611" required>
                     <label class="custom-control-label " for="611">
                        Siempre
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p137" id="612" value="612" required>
                     <label class="custom-control-label" for="612">
                        Casi Siempre
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p137" id="613" value="613" required>
                     <label class="custom-control-label" for="613">
                        Algunas veces
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p137" id="614" value="614" required>
                     <label class="custom-control-label" for="614">
                        Casi nunca
                     </label>
                  </div>
               </div>
               <div class="col-sm-2 ">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p137" id="615" value="615" required>
                     <label class="custom-control-label" for="615">
                        Nunca
                     </label>
                  </div>
               </div>
            </div> <!-- Cierre ROW respuestas pregunta 137 -->
            <!-- |138| PREGUNTA -->
            <div class="row mt-4">                                 
               <div class="col-sm-12">
                  <legend class="col-form-label  pt-0 col-form-label-md ">
                  56.- Me siento comprometido con mi trabajo
                  </legend>
               </div>
            </div>   <!-- Cierre ROW pregunta 138 -->
            <div class="row"> 
               <div class="col-sm-2">
                  <div class="custom-control custom-radio ">
                     <input class="custom-control-input" type="radio" name="p138" id="616" value="616" required>
                     <label class="custom-control-label " for="616">
                        Siempre
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p138" id="617" value="617" required>
                     <label class="custom-control-label" for="617">
                        Casi Siempre
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p138" id="618" value="618" required>
                     <label class="custom-control-label" for="618">
                        Algunas veces
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p138" id="619" value="619" required>
                     <label class="custom-control-label" for="619">
                        Casi nunca
                     </label>
                  </div>
               </div>
               <div class="col-sm-2 ">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p138" id="620" value="620" required>
                     <label class="custom-control-label" for="620">
                        Nunca
                     </label>
                  </div>
               </div>
            </div> <!-- Cierre ROW respuestas pregunta 138 -->

            
         </fieldset>

         <!-- SUBCATEGORIA 26 -->
         <div class="alert alert-danger text-left" role="alert">
            <h5>Las preguntas siguientes están relacionadas con los actos de violencia laboral (malos tratos, acosos, hostigamientos, acoso psicológico).</h5>
         </div>

         <!-- PREGUNTAS SUBCATEGORIA 26 | PREGUNTA 139-146 -->
         <fieldset class="form-group">
            <!-- |139| PREGUNTA -->
            <div class="row">                                 
               <div class="col-sm-12">
                  <legend class="col-form-label  pt-0 col-form-label-md ">
                  57.- En mi trabajo puedo expresarme libremente sin interrupciones
                  </legend>
               </div>
            </div>   <!-- Cierre ROW pregunta 139 -->
            <div class="row"> 
               <div class="col-sm-2">
                  <div class="custom-control custom-radio ">
                     <input class="custom-control-input" type="radio" name="p139" id="621" value="621" required>
                     <label class="custom-control-label " for="621">
                        Siempre
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p139" id="622" value="622" required>
                     <label class="custom-control-label" for="622">
                        Casi Siempre
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p139" id="623" value="623" required>
                     <label class="custom-control-label" for="623">
                        Algunas veces
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p139" id="624" value="624" required>
                     <label class="custom-control-label" for="624">
                        Casi nunca
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p139" id="625" value="625" required>
                     <label class="custom-control-label" for="625">
                        Nunca
                     </label>
                  </div>
               </div>
            </div> <!-- Cierre ROW respuestas pregunta 139 -->
            <!-- |140| PREGUNTA -->
            <div class="row mt-4">                                 
               <div class="col-sm-12">
                  <legend class="col-form-label  pt-0 col-form-label-md ">
                  58.- Recibo críticas constantes a mi persona y/o trabajo
                  </legend>
               </div>
            </div>   <!-- Cierre ROW pregunta 140 -->
            <div class="row"> 
               <div class="col-sm-2">
                  <div class="custom-control custom-radio ">
                     <input class="custom-control-input" type="radio" name="p140" id="626" value="626" required>
                     <label class="custom-control-label " for="626">
                        Siempre
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p140" id="627" value="627" required>
                     <label class="custom-control-label" for="627">
                        Casi Siempre
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p140" id="628" value="628" required>
                     <label class="custom-control-label" for="628">
                        Algunas veces
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p140" id="629" value="629" required>
                     <label class="custom-control-label" for="629">
                        Casi nunca
                     </label>
                  </div>
               </div>
               <div class="col-sm-2 ">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p140" id="630" value="630" required>
                     <label class="custom-control-label" for="630">
                        Nunca
                     </label>
                  </div>
               </div>
            </div> <!-- Cierre ROW respuestas pregunta 140 -->
            <!-- |141| PREGUNTA -->
            <div class="row mt-4">                                 
               <div class="col-sm-12">
                  <legend class="col-form-label  pt-0 col-form-label-md ">
                  59.- Recibo burlas, calumnias, difamaciones, humillaciones o ridiculizaciones
                  </legend>
               </div>
            </div>   <!-- Cierre ROW pregunta 141 -->
            <div class="row"> 
               <div class="col-sm-2">
                  <div class="custom-control custom-radio ">
                     <input class="custom-control-input" type="radio" name="p141" id="631" value="631" required>
                     <label class="custom-control-label " for="631">
                        Siempre
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p141" id="632" value="632" required>
                     <label class="custom-control-label" for="632">
                        Casi Siempre
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p141" id="633" value="633" required>
                     <label class="custom-control-label" for="633">
                        Algunas veces
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p141" id="634" value="634" required>
                     <label class="custom-control-label" for="634">
                        Casi nunca
                     </label>
                  </div>
               </div>
               <div class="col-sm-2 ">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p141" id="635" value="635" required>
                     <label class="custom-control-label" for="635">
                        Nunca
                     </label>
                  </div>
               </div>
            </div> <!-- Cierre ROW respuestas pregunta 141 -->
            <!-- |142| PREGUNTA -->
            <div class="row mt-4">                                 
               <div class="col-sm-12">
                  <legend class="col-form-label  pt-0 col-form-label-md ">
                  60.- Se ignora mi presencia o se me excluye de las reuniones de trabajo y en la toma de decisiones
                  </legend>
               </div>
            </div>   <!-- Cierre ROW pregunta 142 -->
            <div class="row"> 
               <div class="col-sm-2">
                  <div class="custom-control custom-radio ">
                     <input class="custom-control-input" type="radio" name="p142" id="636" value="636" required>
                     <label class="custom-control-label " for="636">
                        Siempre
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p142" id="637" value="637" required>
                     <label class="custom-control-label" for="637">
                        Casi Siempre
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p142" id="638" value="638" required>
                     <label class="custom-control-label" for="638">
                        Algunas veces
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p142" id="639" value="639" required>
                     <label class="custom-control-label" for="639">
                        Casi nunca
                     </label>
                  </div>
               </div>
               <div class="col-sm-2 ">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p142" id="640" value="640" required>
                     <label class="custom-control-label" for="640">
                        Nunca
                     </label>
                  </div>
               </div>
            </div> <!-- Cierre ROW respuestas pregunta 142 -->
            <!-- |143| PREGUNTA -->
            <div class="row mt-4">                                 
               <div class="col-sm-12">
                  <legend class="col-form-label  pt-0 col-form-label-md ">
                  61.- Se manipulan las situaciones de trabajo para hacerme parecer un mal trabajador
                  </legend>
               </div>
            </div>   <!-- Cierre ROW pregunta 143 -->
            <div class="row"> 
               <div class="col-sm-2">
                  <div class="custom-control custom-radio ">
                     <input class="custom-control-input" type="radio" name="p143" id="641" value="641" required>
                     <label class="custom-control-label " for="641">
                        Siempre
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p143" id="642" value="642" required>
                     <label class="custom-control-label" for="642">
                        Casi Siempre
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p143" id="643" value="643" required>
                     <label class="custom-control-label" for="643">
                        Algunas veces
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p143" id="644" value="644" required>
                     <label class="custom-control-label" for="644">
                        Casi nunca
                     </label>
                  </div>
               </div>
               <div class="col-sm-2 ">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p143" id="645" value="645" required>
                     <label class="custom-control-label" for="645">
                        Nunca
                     </label>
                  </div>
               </div>
            </div> <!-- Cierre ROW respuestas pregunta 143 -->
            <!-- |144| PREGUNTA -->
            <div class="row mt-4">                                 
               <div class="col-sm-12">
                  <legend class="col-form-label  pt-0 col-form-label-md ">
                  62.- Se ignoran mis éxitos laborales y se atribuyen a otros trabajadores
                  </legend>
               </div>
            </div>   <!-- Cierre ROW pregunta 144 -->
            <div class="row"> 
               <div class="col-sm-2">
                  <div class="custom-control custom-radio ">
                     <input class="custom-control-input" type="radio" name="p144" id="646" value="646" required>
                     <label class="custom-control-label " for="646">
                        Siempre
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p144" id="647" value="647" required>
                     <label class="custom-control-label" for="647">
                        Casi Siempre
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p144" id="648" value="648" required>
                     <label class="custom-control-label" for="648">
                        Algunas veces
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p144" id="649" value="649" required>
                     <label class="custom-control-label" for="649">
                        Casi nunca
                     </label>
                  </div>
               </div>
               <div class="col-sm-2 ">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p144" id="650" value="650" required>
                     <label class="custom-control-label" for="650">
                        Nunca
                     </label>
                  </div>
               </div>
            </div> <!-- Cierre ROW respuestas pregunta 144 -->
            <!-- |145| PREGUNTA -->
            <div class="row mt-4">                                 
               <div class="col-sm-12">
                  <legend class="col-form-label  pt-0 col-form-label-md ">
                  63.- Me bloquean o impiden las oportunidades que tengo para obtener ascenso o mejora en mi trabajo
                  </legend>
               </div>
            </div>   <!-- Cierre ROW pregunta 145 -->
            <div class="row"> 
               <div class="col-sm-2">
                  <div class="custom-control custom-radio ">
                     <input class="custom-control-input" type="radio" name="p145" id="651" value="651" required>
                     <label class="custom-control-label " for="651">
                        Siempre
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p145" id="652" value="652" required>
                     <label class="custom-control-label" for="652">
                        Casi Siempre
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p145" id="653" value="653" required>
                     <label class="custom-control-label" for="653">
                        Algunas veces
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p145" id="654" value="654" required>
                     <label class="custom-control-label" for="654">
                        Casi nunca
                     </label>
                  </div>
               </div>
               <div class="col-sm-2 ">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p145" id="655" value="655" required>
                     <label class="custom-control-label" for="655">
                        Nunca
                     </label>
                  </div>
               </div>
            </div> <!-- Cierre ROW respuestas pregunta 145 -->
            <!-- |146| PREGUNTA -->
            <div class="row mt-4">                                 
               <div class="col-sm-12">
                  <legend class="col-form-label  pt-0 col-form-label-md ">
                  64.- He presenciado actos de violencia en mi centro de trabajo
                  </legend>
               </div>
            </div>   <!-- Cierre ROW pregunta 146 -->
            <div class="row"> 
               <div class="col-sm-2">
                  <div class="custom-control custom-radio ">
                     <input class="custom-control-input" type="radio" name="p146" id="656" value="656" required>
                     <label class="custom-control-label " for="656">
                        Siempre
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p146" id="657" value="657" required>
                     <label class="custom-control-label" for="657">
                        Casi Siempre
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p146" id="658" value="658" required>
                     <label class="custom-control-label" for="658">
                        Algunas veces
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p146" id="659" value="659" required>
                     <label class="custom-control-label" for="659">
                        Casi nunca
                     </label>
                  </div>
               </div>
               <div class="col-sm-2 ">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p146" id="660" value="660" required>
                     <label class="custom-control-label" for="660">
                        Nunca
                     </label>
                  </div>
               </div>
            </div> <!-- Cierre ROW respuestas pregunta 146 -->

            
         </fieldset>

         <!-- SUBCATEGORIA 27 -->
         <div class="alert alert-danger text-left" role="alert">
            <h5>Las preguntas siguientes están relacionadas con la atención a clientes y usuarios.</h5>
         </div>

         <!-- PREGUNTAS SUBCATEGORIA 27  PREGUNATA SI/NO-->
         <fieldset class="form-group">
            <!-- |147| PREGUNTA -->
            <div class="row">                                 
               <div class="col-sm-6">
                  <legend class="col-form-label  pt-0 col-form-label-md ">
                  En mi trabajo debo brindar servicio a clientes o usuarios:
                  </legend>
               </div>   
               <div class="col-sm-1 ">
                  <div class="custom-control custom-radio ">
                     <input class="custom-control-input" type="radio" name="p147" id="661" value="661"  require>
                     <label class="custom-control-label " for="661">
                        Si
                     </label> 
                  </div>
               </div>
               <div class="col-sm-1 ">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p147" id="662" value="662"  require>
                     <label class="custom-control-label" for="662">
                        No
                     </label>
                  </div>
               </div>
            </div>                            
         </fieldset>    

         <!-- SE MUESTRAN SI SELECCIONA SI  -->
         <!-- PREGUNTAS SUBCATEGORIA-27 PREGUNTAS 148-151-->         
         <fieldset class="form-group hiden-subcategory subcategory30">
            <!-- |148| PREGUNTA -->
            <div class="row">                                 
               <div class="col-sm-12">
                  <legend class="col-form-label  pt-0 col-form-label-md ">
                  65.- Atiendo clientes o usuarios muy enojados
                  </legend>
               </div>
            </div>   <!-- Cierre ROW pregunta 148 -->
            <div class="row"> 
               <div class="col-sm-2">
                  <div class="custom-control custom-radio ">
                     <input class="custom-control-input" type="radio" name="p148" id="663" value="663">
                     <label class="custom-control-label " for="663">
                        Siempre
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p148" id="664" value="664">
                     <label class="custom-control-label" for="664">
                        Casi Siempre
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p148" id="665" value="665">
                     <label class="custom-control-label" for="665">
                        Algunas veces
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p148" id="666" value="666">
                     <label class="custom-control-label" for="666">
                        Casi nunca
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p148" id="667" value="667">
                     <label class="custom-control-label" for="667">
                        Nunca
                     </label>
                  </div>
               </div>
            </div> <!-- Cierre ROW respuestas pregunta 148 -->
            <!-- |149| PREGUNTA -->
            <div class="row mt-4">                                 
               <div class="col-sm-12">
                  <legend class="col-form-label  pt-0 col-form-label-md ">
                  66.- Mi trabajo me exige atender personas muy necesitadas de ayuda o enfermas
                  </legend>
               </div>
            </div>   <!-- Cierre ROW pregunta 149 -->
            <div class="row"> 
               <div class="col-sm-2">
                  <div class="custom-control custom-radio ">
                     <input class="custom-control-input" type="radio" name="p149" id="668" value="668">
                     <label class="custom-control-label " for="668">
                        Siempre
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p149" id="669" value="669">
                     <label class="custom-control-label" for="669">
                        Casi Siempre
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p149" id="670" value="670">
                     <label class="custom-control-label" for="670">
                        Algunas veces
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p149" id="671" value="671">
                     <label class="custom-control-label" for="671">
                        Casi nunca
                     </label>
                  </div>
               </div>
               <div class="col-sm-2 ">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p149" id="672" value="672">
                     <label class="custom-control-label" for="672">
                        Nunca
                     </label>
                  </div>
               </div>
            </div> <!-- Cierre ROW respuestas pregunta 149 -->
            <!-- |150| PREGUNTA -->
            <div class="row mt-4">                                 
               <div class="col-sm-12">
                  <legend class="col-form-label  pt-0 col-form-label-md ">
                  67.- Para hacer mi trabajo debo demostrar sentimientos distintos a los míos
                  </legend>
               </div>
            </div>   <!-- Cierre ROW pregunta 150 -->
            <div class="row"> 
               <div class="col-sm-2">
                  <div class="custom-control custom-radio ">
                     <input class="custom-control-input" type="radio" name="p150" id="673" value="673">
                     <label class="custom-control-label " for="673">
                        Siempre
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p150" id="674" value="674">
                     <label class="custom-control-label" for="674">
                        Casi Siempre
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p150" id="675" value="675">
                     <label class="custom-control-label" for="675">
                        Algunas veces
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p150" id="676" value="676">
                     <label class="custom-control-label" for="676">
                        Casi nunca
                     </label>
                  </div>
               </div>
               <div class="col-sm-2 ">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p150" id="677" value="677">
                     <label class="custom-control-label" for="677">
                        Nunca
                     </label>
                  </div>
               </div>
            </div> <!-- Cierre ROW respuestas pregunta 150 -->                          
            <!-- |151| PREGUNTA -->
            <div class="row mt-4">                                 
               <div class="col-sm-12">
                  <legend class="col-form-label  pt-0 col-form-label-md ">
                  68.- Mi trabajo me exige atender situaciones de violencia
                  </legend>
               </div>
            </div>   <!-- Cierre ROW pregunta 151 -->
            <div class="row"> 
               <div class="col-sm-2">
                  <div class="custom-control custom-radio ">
                     <input class="custom-control-input" type="radio" name="p151" id="678" value="678">
                     <label class="custom-control-label " for="678">
                        Siempre
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p151" id="679" value="679">
                     <label class="custom-control-label" for="679">
                        Casi Siempre
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p151" id="680" value="680">
                     <label class="custom-control-label" for="680">
                        Algunas veces
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p151" id="681" value="681">
                     <label class="custom-control-label" for="681">
                        Casi nunca
                     </label>
                  </div>
               </div>
               <div class="col-sm-2 ">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p151" id="682" value="682">
                     <label class="custom-control-label" for="682">
                        Nunca
                     </label>
                  </div>
               </div>
            </div> <!-- Cierre ROW respuestas pregunta 151 -->                          
         </fieldset>

         <!-- SUBCATEGORIA-28 -->
         <div class="alert alert-danger text-left" role="alert">
            <h5>Las siguientes preguntas están relacionadas con las actitudes de los trabajadores que supervisa.</h5>
         </div>

         <!-- PREGUNTAS SUBCATEGORIA 28  PREGUNATA SI/NO-->
         <fieldset class="form-group">
            <!-- |152| PREGUNTA -->
            <div class="row">                                 
               <div class="col-sm-6">
                  <legend class="col-form-label  pt-0 col-form-label-md ">
                  Soy jefe de otros trabajadores:
                  </legend>
               </div>   
               <div class="col-sm-1 ">
                  <div class="custom-control custom-radio ">
                     <input class="custom-control-input" type="radio" name="p152" id="683" value="683"  require>
                     <label class="custom-control-label " for="683">
                        Si
                     </label>
                  </div>
               </div>
               <div class="col-sm-1 ">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p152" id="684" value="684"  require>
                     <label class="custom-control-label" for="684">
                        No
                     </label>
                  </div>
               </div>
            </div>                            
         </fieldset>

         <!-- SE MUESTRAN SI SELECCIONA SI  -->
         <!-- PREGUNTAS SUBCATEGORIA-28 PREGUNTAS 153-156 --->    
         <fieldset class="form-group hiden-subcategory subcategory32">
            <!-- |153| PREGUNTA -->
            <div class="row">                                 
               <div class="col-sm-12">
                  <legend class="col-form-label  pt-0 col-form-label-md ">
                  69.- Comunican tarde los asuntos de trabajo
                  </legend>
               </div>
            </div>   <!-- Cierre ROW pregunta 153 -->
            <div class="row"> 
               <div class="col-sm-2">
                  <div class="custom-control custom-radio ">
                     <input class="custom-control-input" type="radio" name="p153" id="685" value="685">
                     <label class="custom-control-label " for="685">
                        Siempre
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p153" id="686" value="686">
                     <label class="custom-control-label" for="686">
                        Casi Siempre
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p153" id="687" value="687">
                     <label class="custom-control-label" for="687">
                        Algunas veces
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p153" id="688" value="688">
                     <label class="custom-control-label" for="688">
                        Casi nunca
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p153" id="689" value="689">
                     <label class="custom-control-label" for="689">
                        Nunca
                     </label>
                  </div>
               </div>
            </div> <!-- Cierre ROW respuestas pregunta 153 -->
            <!-- |154| PREGUNTA -->
            <div class="row mt-4">                                 
               <div class="col-sm-12">
                  <legend class="col-form-label  pt-0 col-form-label-md ">
                  70.- Dificultan el logro de los resultados del trabajo
                  </legend>
               </div>
            </div>   <!-- Cierre ROW pregunta 154 -->
            <div class="row"> 
               <div class="col-sm-2">
                  <div class="custom-control custom-radio ">
                     <input class="custom-control-input" type="radio" name="p154" id="690" value="690">
                     <label class="custom-control-label " for="690">
                        Siempre
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p154" id="691" value="691">
                     <label class="custom-control-label" for="691">
                        Casi Siempre
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p154" id="692" value="692">
                     <label class="custom-control-label" for="692">
                        Algunas veces
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p154" id="693" value="693">
                     <label class="custom-control-label" for="693">
                        Casi nunca
                     </label>
                  </div>
               </div>
               <div class="col-sm-2 ">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p154" id="694" value="694">
                     <label class="custom-control-label" for="694">
                        Nunca
                     </label>
                  </div>
               </div>
            </div> <!-- Cierre ROW respuestas pregunta 154 -->
            <!-- |155| PREGUNTA -->
            <div class="row mt-4">                                 
               <div class="col-sm-12">
                  <legend class="col-form-label  pt-0 col-form-label-md ">
                  71.- Cooperan poco cuando se necesita
                  </legend>
               </div>
            </div>   <!-- Cierre ROW pregunta 155 -->
            <div class="row"> 
               <div class="col-sm-2">
                  <div class="custom-control custom-radio ">
                     <input class="custom-control-input" type="radio" name="p155" id="695" value="695">
                     <label class="custom-control-label " for="695">
                        Siempre
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p155" id="696" value="696">
                     <label class="custom-control-label" for="696">
                        Casi Siempre
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p155" id="697" value="697">
                     <label class="custom-control-label" for="697">
                        Algunas veces
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p155" id="698" value="698">
                     <label class="custom-control-label" for="698">
                        Casi nunca
                     </label>
                  </div>
               </div>
               <div class="col-sm-2 ">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p155" id="699" value="699">
                     <label class="custom-control-label" for="699">
                        Nunca
                     </label>
                  </div>
               </div>
            </div> <!-- Cierre ROW respuestas pregunta 155 -->                          
            <!-- |156| PREGUNTA -->
            <div class="row mt-4">                                 
               <div class="col-sm-12">
                  <legend class="col-form-label  pt-0 col-form-label-md ">
                  72.- Ignoran las sugerencias para mejorar su trabajo
                  </legend>
               </div>
            </div>   <!-- Cierre ROW pregunta 156 -->
            <div class="row"> 
               <div class="col-sm-2">
                  <div class="custom-control custom-radio ">
                     <input class="custom-control-input" type="radio" name="p156" id="700" value="700">
                     <label class="custom-control-label " for="700">
                        Siempre
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p156" id="701" value="701">
                     <label class="custom-control-label" for="701">
                        Casi Siempre
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p156" id="702" value="702">
                     <label class="custom-control-label" for="702">
                        Algunas veces
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p156" id="703" value="703">
                     <label class="custom-control-label" for="703">
                        Casi nunca
                     </label>
                  </div>
               </div>
               <div class="col-sm-2 ">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p156" id="704" value="704">
                     <label class="custom-control-label" for="704">
                        Nunca
                     </label>
                  </div>
               </div>
            </div> <!-- Cierre ROW respuestas pregunta 156 -->                          
         </fieldset>


         <!-- BOTON GUARDAR CUESTIONARIO-->
         <div class="form-group row">
            <div class="col-sm-12">
               <button type="submit" class="btn btn-primary btn-lg btn-block">Guardar Respuestas Cuestionario Fase 4</button>
            </div>
         </div>

      </form>

   </div> <!-- Cierre container -->


<?php

   include_once 'footer.php';

?>