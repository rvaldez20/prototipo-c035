<?php

   // include_once 'config.php';
   include_once 'header.php';

   // requerimos la conexión a la base de datos
   require "config.php";

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
         <h2>Fase II. Cuestionario para identificar a los trabajadores que fueron sujetos a acontecimientos traumáticos severos.</h2>
      </div>

      <form action="cfase2ProcesarRespuestas.php" method="POST">

         <!-- input hiden para pasar el id del trabajador -->
         <input type="hidden" class="form-control" id="tid" name="idTrabajador" value="<?php echo $trabajadorId; ?>">
         <!-- input hiden para pasar el id del cuestionario -->
         <input type="hidden" class="form-control" id="cid" name="idCuestionario" value="<?php echo $cuestionarioId; ?>">
         
         <div class="alert alert-success text-center" role="alert">
            <h4>¿Ha precenciado o sufrido alguna vez, durante o con motivo de trabajo un acontecimiento como los siguientes?</h4>
         </div>

         <!-- TITULO I SUBCATEGORIA-3 -->
         <div class="alert alert-danger text-left" role="alert">
            <h5>I.- Aconteciomientos traumático severo</h5>
         </div>                        

         <!-- I.- Aconteciomientos traumático severo -->
         <fieldset class="form-group">
            <!-- |15| PREGUNTA -->
            <div class="row">                                 
               <div class="col-sm-10">
                  <legend class="col-form-label  pt-0 col-form-label-md border-bottom">
                  ¿Accidente que tenga como consecuencia la muerte, la pérdida de un miembro o una lesión grave?
                  </legend>
               </div>   
               <div class="col-sm-1 border-bottom">
                  <div class="custom-control custom-radio ">
                     <input class="custom-control-input" type="radio" name="p15" id="67" value="67" required>
                     <label class="custom-control-label " for="67">
                        Si
                     </label>
                  </div>
               </div>
               <div class="col-sm-1 border-bottom">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p15" id="68" value="68" required>
                     <label class="custom-control-label" for="68">
                        No
                     </label>
                  </div>
               </div>
            </div> 
            <!-- |16| PREGUNTA -->
            <div class="row">
               <div class="col-sm-10">
                  <legend class="col-form-label  pt-0 col-form-label-md border-bottom">
                  ¿Asaltos?
                  </legend>
               </div>   
               <div class="col-sm-1 border-bottom">
                  <div class="custom-control custom-radio ">
                     <input class="custom-control-input" type="radio" name="p16" id="69" value="69" required>
                     <label class="custom-control-label" for="69">
                        Si
                     </label>
                  </div>
               </div>
               <div class="col-sm-1 border-bottom">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p16" id="70" value="70" required>
                     <label class="custom-control-label" for="70">
                        No
                     </label>
                  </div>
               </div>
            </div> 
            <!-- |17| PREGUNTA -->
            <div class="row">
               <div class="col-sm-10">
                  <legend class="col-form-label  pt-0 col-form-label-md border-bottom">
                  ¿Actos violentos que derivaron en lesiones graves?
                  </legend>
               </div>   
               <div class="col-sm-1 border-bottom">
                  <div class="custom-control custom-radio ">
                     <input class="custom-control-input" type="radio" name="p17" id="71" value="71" required>
                     <label class="custom-control-label" for="71">
                        Si
                     </label>
                  </div>
               </div>
               <div class="col-sm-1 border-bottom">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p17" id="72" value="72" required>
                     <label class="custom-control-label" for="72">
                        No
                     </label>
                  </div>
               </div>
            </div> 
            <!-- |18| PREGUNTA -->
            <div class="row">
               <div class="col-sm-10">
                  <legend class="col-form-label  pt-0 col-form-label-md border-bottom">
                  ¿Secuestro?
                  </legend>
               </div>   
               <div class="col-sm-1 border-bottom">
                  <div class="custom-control custom-radio ">
                     <input class="custom-control-input" type="radio" name="p18" id="73" value="73" required>
                     <label class="custom-control-label" for="73">
                        Si
                     </label>
                  </div>
               </div>
               <div class="col-sm-1 border-bottom">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p18" id="74" value="74" required>
                     <label class="custom-control-label" for="74">
                        No
                     </label>
                  </div>
               </div>
            </div> 
            <!-- |19| PREGUNTA -->
            <div class="row">
               <div class="col-sm-10">
                  <legend class="col-form-label  pt-0 col-form-label-md border-bottom">
                  ¿Amenazas?
                  </legend>
               </div>   
               <div class="col-sm-1 border-bottom">
                  <div class="custom-control custom-radio ">
                     <input class="custom-control-input" type="radio" name="p19" id="75" value="75" required>
                     <label class="custom-control-label" for="75">
                        Si
                     </label>
                  </div>
               </div>
               <div class="col-sm-1 border-bottom">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p19" id="76" value="76" required>
                     <label class="custom-control-label" for="76">
                        No
                     </label>
                  </div>
               </div>
            </div> 
            <!-- |20| PREGUNTA -->
            <div class="row">
               <div class="col-sm-10">
                  <legend class="col-form-label  pt-0 col-form-label-md border-bottom">
                  O Cualquier otro que ponga en riesgo su vida o salud, y/o la de otras personas
                  </legend>
               </div>   
               <div class="col-sm-1 border-bottom">
                  <div class="custom-control custom-radio ">
                     <input class="custom-control-input" type="radio" name="p20" id="77" value="77" required>
                     <label class="custom-control-label" for="77">
                        Si
                     </label>
                  </div>
               </div>
               <div class="col-sm-1 border-bottom">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p20" id="78" value="78" required>
                     <label class="custom-control-label" for="78">
                        No
                     </label>
                  </div>
               </div>
            </div> 
         </fieldset>

         <!-- TITULO II SUBCATEGORIA-4 -->
         <div class="alert alert-danger text-left" role="alert">
            <h5>II.- Recuerdos persistentes sobre el acontecimiento (durante el último mes):</h5>
         </div>

         <!-- II.- Recuerdos persistentes sobre el acontecimiento -->
         <fieldset class="form-group">
            <!-- |21| PREGUNTA -->
            <div class="row">                                 
               <div class="col-sm-10">
                  <legend class="col-form-label  pt-0 col-form-label-md border-bottom">
                  ¿Ha tenido recuerdos recurrentes sobre el acontecimiento que le provocan malestares?
                  </legend>
               </div>   
               <div class="col-sm-1 border-bottom">
                  <div class="custom-control custom-radio ">
                     <input class="custom-control-input" type="radio" name="p21" id="79" value="79" required>
                     <label class="custom-control-label " for="79">
                        Si
                     </label>
                  </div>
               </div>
               <div class="col-sm-1 border-bottom">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p21" id="80" value="80" required>
                     <label class="custom-control-label" for="80">
                        No
                     </label>
                  </div>
               </div>
            </div> 
            <!-- |22| PREGUNTA -->
            <div class="row">
               <div class="col-sm-10">
                  <legend class="col-form-label  pt-0 col-form-label-md border-bottom">
                  ¿Ha tenido sueños de carácter recurrente sobre el acontecimiento, que le producen malestar?
                  </legend>
               </div>   
               <div class="col-sm-1 border-bottom">
                  <div class="custom-control custom-radio ">
                     <input class="custom-control-input" type="radio" name="p22" id="81" value="81" required>
                     <label class="custom-control-label" for="81">
                        Si
                     </label>
                  </div>
               </div>
               <div class="col-sm-1 border-bottom">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p22" id="82" value="82" required>
                     <label class="custom-control-label" for="82">
                        No
                     </label>
                  </div>
               </div>
            </div>
         </fieldset>

         <!-- TITULO III SUBCATEGORIA-5 -->
         <div class="alert alert-danger text-left" role="alert">
            <h5>III.- Esfuerzo por evitar circunstancias parecidas o asociadas al acontecimiento (durante el último mes):</h5>
         </div>

         <!-- III.- Esfuerzo por evitar circunstancias parecidas o asociadas al acontecimiento -->
         <fieldset class="form-group">
            <!-- |23| PREGUNTA -->
            <div class="row">                                 
               <div class="col-sm-10">
                  <legend class="col-form-label  pt-0 col-form-label-md border-bottom">
                  ¿Se ha esforzado por evitar todo tipo de sentimientos, conversaciones o situaciones que le puedan recordar el acontecimiento?
                  </legend>
               </div>   
               <div class="col-sm-1 border-bottom">
                  <div class="custom-control custom-radio ">
                     <input class="custom-control-input" type="radio" name="p23" id="83" value="83" required>
                     <label class="custom-control-label " for="83">
                        Si
                     </label>
                  </div>
               </div>
               <div class="col-sm-1 border-bottom">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p23" id="84" value="84" required>
                     <label class="custom-control-label" for="84">
                        No
                     </label>
                  </div>
               </div>
            </div> 
            <!-- |24| PREGUNTA -->
            <div class="row">
               <div class="col-sm-10">
                  <legend class="col-form-label  pt-0 col-form-label-md border-bottom">
                  ¿Se ha esforzado por evitar todo tipo de actividades, lugares o personas que motivan recuerdos del acontecimiento?
                  </legend>
               </div>   
               <div class="col-sm-1 border-bottom">
                  <div class="custom-control custom-radio ">
                     <input class="custom-control-input" type="radio" name="p24" id="85" value="85" required>
                     <label class="custom-control-label" for="85">
                        Si
                     </label>
                  </div>
               </div>
               <div class="col-sm-1 border-bottom">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p24" id="86" value="86" required>
                     <label class="custom-control-label" for="86">
                        No
                     </label>
                  </div>
               </div>
            </div>
            <!-- |25| PREGUNTA -->
            <div class="row">
               <div class="col-sm-10">
                  <legend class="col-form-label  pt-0 col-form-label-md border-bottom">
                  ¿Ha tenido dificultad para recordar alguna parte importante del evento?
                  </legend>
               </div>   
               <div class="col-sm-1 border-bottom">
                  <div class="custom-control custom-radio ">
                     <input class="custom-control-input" type="radio" name="p25" id="87" value="87" required>
                     <label class="custom-control-label" for="87">
                        Si
                     </label>
                  </div>
               </div>
               <div class="col-sm-1 border-bottom">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p25" id="88" value="88" required>
                     <label class="custom-control-label" for="88">
                        No
                     </label>
                  </div>
               </div>
            </div>
            <!-- |26| PREGUNTA -->
            <div class="row">
               <div class="col-sm-10">
                  <legend class="col-form-label  pt-0 col-form-label-md border-bottom">
                  ¿Ha disminuido su interés en sus actividades cotidianas?
                  </legend>
               </div>   
               <div class="col-sm-1 border-bottom">
                  <div class="custom-control custom-radio ">
                     <input class="custom-control-input" type="radio" name="p26" id="89" value="89" required>
                     <label class="custom-control-label" for="89">
                        Si
                     </label>
                  </div>
               </div>
               <div class="col-sm-1 border-bottom">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p26" id="90" value="90" required>
                     <label class="custom-control-label" for="90">
                        No
                     </label>
                  </div>
               </div>
            </div>
            <!-- |27| PREGUNTA -->
            <div class="row">
               <div class="col-sm-10">
                  <legend class="col-form-label  pt-0 col-form-label-md border-bottom">
                  ¿Se ha sentido usted alejado o distante de los demás?
                  </legend>
               </div>   
               <div class="col-sm-1 border-bottom">
                  <div class="custom-control custom-radio ">
                     <input class="custom-control-input" type="radio" name="p27" id="91" value="91" required>
                     <label class="custom-control-label" for="91">
                        Si
                     </label>
                  </div>
               </div>
               <div class="col-sm-1 border-bottom">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p27" id="92" value="92" required>
                     <label class="custom-control-label" for="92">
                        No
                     </label>
                  </div>
               </div>
            </div>
            <!-- |28| PREGUNTA -->
            <div class="row">
               <div class="col-sm-10">
                  <legend class="col-form-label  pt-0 col-form-label-md border-bottom">
                  ¿Ha notado que tiene dificultad para expresar sus sentimientos?
                  </legend>
               </div>   
               <div class="col-sm-1 border-bottom">
                  <div class="custom-control custom-radio ">
                     <input class="custom-control-input" type="radio" name="p28" id="93" value="93" required>
                     <label class="custom-control-label" for="93">
                        Si
                     </label>
                  </div>
               </div>
               <div class="col-sm-1 border-bottom">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p28" id="94" value="94" required>
                     <label class="custom-control-label" for="94">
                        No
                     </label>
                  </div>
               </div>
            </div>
            <!-- |29| PREGUNTA -->
            <div class="row">
               <div class="col-sm-10">
                  <legend class="col-form-label  pt-0 col-form-label-md border-bottom">
                  ¿Ha tenido la impresión de que su vida se va a acortar, que va a morir antes que otras personas o que tiene un futuro limitado?
                  </legend>
               </div>   
               <div class="col-sm-1 border-bottom">
                  <div class="custom-control custom-radio ">
                     <input class="custom-control-input" type="radio" name="p29" id="95" value="95" required>
                     <label class="custom-control-label" for="95">
                        Si
                     </label>
                  </div>
               </div>
               <div class="col-sm-1 border-bottom">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p29" id="96" value="96" required>
                     <label class="custom-control-label" for="96">
                        No
                     </label>
                  </div>
               </div>
            </div>
         </fieldset>

         <!-- TITULO IV SUBCATEGORIA-6 -->
         <div class="alert alert-danger text-left" role="alert">
            <h5>IV.- Afectación (durante el último mes):</h5>
         </div>

         <!-- IV.- Afectación -->
         <fieldset class="form-group">
            <!-- |30| PREGUNTA -->
            <div class="row">                                 
               <div class="col-sm-10">
                  <legend class="col-form-label  pt-0 col-form-label-md border-bottom">
                  ¿Ha tenido usted dificultades para dormir?
                  </legend>
               </div>   
               <div class="col-sm-1 border-bottom">
                  <div class="custom-control custom-radio ">
                     <input class="custom-control-input" type="radio" name="p30" id="97" value="97" required>
                     <label class="custom-control-label " for="97">
                        Si
                     </label>
                  </div>
               </div>
               <div class="col-sm-1 border-bottom">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p30" id="98" value="98" required>
                     <label class="custom-control-label" for="98">
                        No
                     </label>
                  </div>
               </div>
            </div> 
            <!-- |31| PREGUNTA -->
            <div class="row">
               <div class="col-sm-10">
                  <legend class="col-form-label  pt-0 col-form-label-md border-bottom">
                  ¿Ha estado particularmente irritable o le han dado arranques de coraje?
                  </legend>
               </div>   
               <div class="col-sm-1 border-bottom">
                  <div class="custom-control custom-radio ">
                     <input class="custom-control-input" type="radio" name="p31" id="99" value="99" required>
                     <label class="custom-control-label" for="99">
                        Si
                     </label>
                  </div>
               </div>
               <div class="col-sm-1 border-bottom">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p31" id="100" value="100" required>
                     <label class="custom-control-label" for="100">
                        No
                     </label>
                  </div>
               </div>
            </div>
            <!-- |32| PREGUNTA -->
            <div class="row">
               <div class="col-sm-10">
                  <legend class="col-form-label  pt-0 col-form-label-md border-bottom">
                  ¿Ha tenido dificultad para concentrarse?
                  </legend>
               </div>   
               <div class="col-sm-1 border-bottom">
                  <div class="custom-control custom-radio ">
                     <input class="custom-control-input" type="radio" name="p32" id="101" value="101" required>
                     <label class="custom-control-label" for="101">
                        Si
                     </label>
                  </div>
               </div>
               <div class="col-sm-1 border-bottom">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p32" id="102" value="102" required>
                     <label class="custom-control-label" for="102">
                        No
                     </label>
                  </div>
               </div>
            </div>
            <!-- |33| PREGUNTA -->
            <div class="row">
               <div class="col-sm-10">
                  <legend class="col-form-label  pt-0 col-form-label-md border-bottom">
                  ¿Ha estado nervioso o constantemente en alerta?
                  </legend>
               </div>   
               <div class="col-sm-1 border-bottom">
                  <div class="custom-control custom-radio ">
                     <input class="custom-control-input" type="radio" name="p33" id="103" value="103" required>
                     <label class="custom-control-label" for="103">
                        Si
                     </label>
                  </div>
               </div>
               <div class="col-sm-1 border-bottom">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p33" id="104" value="104" required>
                     <label class="custom-control-label" for="104">
                        No
                     </label>
                  </div>
               </div>
            </div>
            <!-- |34| PREGUNTA -->
            <div class="row">
               <div class="col-sm-10">
                  <legend class="col-form-label  pt-0 col-form-label-md border-bottom">
                  ¿Se ha sobresaltado fácilmente por cualquier cosa?
                  </legend>
               </div>   
               <div class="col-sm-1 border-bottom">
                  <div class="custom-control custom-radio ">
                     <input class="custom-control-input" type="radio" name="p34" id="105" value="105" required>
                     <label class="custom-control-label" for="105">
                        Si
                     </label>
                  </div>
               </div>
               <div class="col-sm-1 border-bottom">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p34" id="106" value="106" required>
                     <label class="custom-control-label" for="106">
                        No
                     </label>
                  </div>
               </div>
            </div>
         </fieldset>

         <!-- BOTON GUARDAR CUESTIONARIO-->
         <div class="form-group row">
            <div class="col-sm-12">
               <button type="submit" class="btn btn-primary btn-lg btn-block">Guardar Respuestas Cuestionario Fase 2</button>
            </div>
         </div>


      </form> 

   </div> <!-- Cierre container -->

<?php

   include_once 'footer.php';

?>