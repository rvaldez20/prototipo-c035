<?php

   include_once 'header.php'; 
   include_once 'config.php';

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
         <h2>Fase III. Cuestionario para identificar los factores de riesgo Psicosocial en los centros de trabajo.</h2>
      </div>

      <form action="cfase3ProcesarRespuestas.php" method="POST">

         <!-- input hiden para pasar el id del trabajador -->
         <input type="hidden" class="form-control" id="tid" name="idTrabajador" value="<?php echo $trabajadorId; ?>">
         <!-- input hiden para pasar el id del cuestionario -->
         <input type="hidden" class="form-control" id="cid" name="idCuestionario" value="<?php echo $cuestionarioId; ?>">

         <!-- SUBCATEGORIA-7 -->
         <div class="alert alert-danger text-left" role="alert">
            <h5>Para responder las preguntas siguientes considere las condiciones de su centro de trabajo, así como la cantidad y ritmo de trabajo.</h5>
         </div> 
         
         <!-- PREGUNTAS SUBCATEGORIA-7 - pregunta 35 - 43-->
         <fieldset class="form-group">
            <!-- |35| PREGUNTA -->
            <div class="row">                                 
               <div class="col-sm-12">
                  <legend class="col-form-label  pt-0 col-form-label-md ">
                  1.- Mi trabajo me exige hacer mucho esfuerzo físico
                  </legend>
               </div>
            </div>   <!-- Cierre ROW pregunta 35 -->
            <div class="row"> 
               <div class="col-sm-2">
                  <div class="custom-control custom-radio ">
                     <input class="custom-control-input" type="radio" name="p35" id="107" value="107" required>
                     <label class="custom-control-label " for="107">
                        Siempre
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p35" id="108" value="108" required>
                     <label class="custom-control-label" for="108">
                        Casi Siempre
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p35" id="109" value="109" required>
                     <label class="custom-control-label" for="109">
                        Algunas veces
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p35" id="110" value="110" required>
                     <label class="custom-control-label" for="110">
                        Casi nunca
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p35" id="111" value="111" required>
                     <label class="custom-control-label" for="111">
                        Nunca
                     </label>
                  </div>
               </div>
            </div> <!-- Cierre ROW respuestas pregunta 35 -->
            <!-- |36| PREGUNTA -->
            <div class="row mt-4">                                 
               <div class="col-sm-12">
                  <legend class="col-form-label  pt-0 col-form-label-md ">
                  2.- Me preocupa sufrir un accidente en mi trabajo
                  </legend>
               </div>
            </div>   <!-- Cierre ROW pregunta 36 -->
            <div class="row"> 
               <div class="col-sm-2">
                  <div class="custom-control custom-radio ">
                     <input class="custom-control-input" type="radio" name="p36" id="112" value="112" required>
                     <label class="custom-control-label " for="112">
                        Siempre
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p36" id="113" value="113" required>
                     <label class="custom-control-label" for="113">
                        Casi Siempre
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p36" id="114" value="114" required>
                     <label class="custom-control-label" for="114">
                        Algunas veces
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p36" id="115" value="115" required>
                     <label class="custom-control-label" for="115">
                        Casi nunca
                     </label>
                  </div>
               </div>
               <div class="col-sm-2 ">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p36" id="116" value="116" required>
                     <label class="custom-control-label" for="116">
                        Nunca
                     </label>
                  </div>
               </div>
            </div> <!-- Cierre ROW respuestas pregunta 36 -->
            <!-- |37| PREGUNTA -->
            <div class="row mt-4">                                 
               <div class="col-sm-12">
                  <legend class="col-form-label  pt-0 col-form-label-md ">
                  3.- Considero que las actividades que realizo son peligrosas
                  </legend>
               </div>
            </div>   <!-- Cierre ROW pregunta 37 -->
            <div class="row"> 
               <div class="col-sm-2">
                  <div class="custom-control custom-radio ">
                     <input class="custom-control-input" type="radio" name="p37" id="117" value="117" required>
                     <label class="custom-control-label " for="117">
                        Siempre
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p37" id="118" value="118" required>
                     <label class="custom-control-label" for="118">
                        Casi Siempre
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p37" id="119" value="119" required>
                     <label class="custom-control-label" for="119">
                        Algunas veces
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p37" id="120" value="120" required>
                     <label class="custom-control-label" for="120">
                        Casi nunca
                     </label>
                  </div>
               </div>
               <div class="col-sm-2 ">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p37" id="121" value="121" required>
                     <label class="custom-control-label" for="121">
                        Nunca
                     </label>
                  </div>
               </div>
            </div> <!-- Cierre ROW respuestas pregunta 37 -->
            <!-- |38| PREGUNTA -->
            <div class="row mt-4">                                 
               <div class="col-sm-12">
                  <legend class="col-form-label  pt-0 col-form-label-md ">
                  4.- Por la cantidad de trabajo que tengo debo quedarme tiempo adicional a mi turno
                  </legend>
               </div>
            </div>   <!-- Cierre ROW pregunta 38 -->
            <div class="row"> 
               <div class="col-sm-2">
                  <div class="custom-control custom-radio ">
                     <input class="custom-control-input" type="radio" name="p38" id="122" value="122" required>
                     <label class="custom-control-label " for="122">
                        Siempre
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p38" id="123" value="123" required>
                     <label class="custom-control-label" for="123">
                        Casi Siempre
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p38" id="124" value="124" required>
                     <label class="custom-control-label" for="124">
                        Algunas veces
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p38" id="125" value="125" required>
                     <label class="custom-control-label" for="125">
                        Casi nunca
                     </label>
                  </div>
               </div>
               <div class="col-sm-2 ">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p38" id="126" value="126" required>
                     <label class="custom-control-label" for="126">
                        Nunca
                     </label>
                  </div>
               </div>
            </div> <!-- Cierre ROW respuestas pregunta 38 -->
            <!-- |39| PREGUNTA -->
            <div class="row mt-4">                                 
               <div class="col-sm-12">
                  <legend class="col-form-label  pt-0 col-form-label-md ">
                  5.- Por la cantidad de trabajo que tengo debo trabajar sin parar
                  </legend>
               </div>
            </div>   <!-- Cierre ROW pregunta 39 -->
            <div class="row"> 
               <div class="col-sm-2">
                  <div class="custom-control custom-radio ">
                     <input class="custom-control-input" type="radio" name="p39" id="127" value="127" required>
                     <label class="custom-control-label " for="127">
                        Siempre
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p39" id="128" value="128" required>
                     <label class="custom-control-label" for="128">
                        Casi Siempre
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p39" id="129" value="129" required>
                     <label class="custom-control-label" for="129">
                        Algunas veces
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p39" id="130" value="130" required>
                     <label class="custom-control-label" for="130">
                        Casi nunca
                     </label>
                  </div>
               </div>
               <div class="col-sm-2 ">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p39" id="131" value="131" required>
                     <label class="custom-control-label" for="131">
                        Nunca
                     </label>
                  </div>
               </div>
            </div> <!-- Cierre ROW respuestas pregunta 39 -->
            <!-- |40| PREGUNTA -->
            <div class="row mt-4">                                 
               <div class="col-sm-12">
                  <legend class="col-form-label  pt-0 col-form-label-md ">
                  6.- Considero que es necesario mantener un ritmo de trabajo acelerado
                  </legend>
               </div>
            </div>   <!-- Cierre ROW pregunta 40 -->
            <div class="row"> 
               <div class="col-sm-2">
                  <div class="custom-control custom-radio ">
                     <input class="custom-control-input" type="radio" name="p40" id="132" value="132" required>
                     <label class="custom-control-label " for="132">
                        Siempre
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p40" id="133" value="133" required>
                     <label class="custom-control-label" for="133">
                        Casi Siempre
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p40" id="134" value="134" required>
                     <label class="custom-control-label" for="134">
                        Algunas veces
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p40" id="135" value="135" required>
                     <label class="custom-control-label" for="135">
                        Casi nunca
                     </label>
                  </div>
               </div>
               <div class="col-sm-2 ">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p40" id="136" value="136" required>
                     <label class="custom-control-label" for="136">
                        Nunca
                     </label>
                  </div>
               </div>
            </div> <!-- Cierre ROW respuestas pregunta 40 -->
            <!-- |41| PREGUNTA -->
            <div class="row mt-4">                                 
               <div class="col-sm-12">
                  <legend class="col-form-label  pt-0 col-form-label-md ">
                  7.- Mi trabajo exige que esté muy concentrado
                  </legend>
               </div>
            </div>   <!-- Cierre ROW pregunta 41 -->
            <div class="row"> 
               <div class="col-sm-2">
                  <div class="custom-control custom-radio ">
                     <input class="custom-control-input" type="radio" name="p41" id="137" value="137" required>
                     <label class="custom-control-label " for="137">
                        Siempre
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p41" id="138" value="138" required>
                     <label class="custom-control-label" for="138">
                        Casi Siempre
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p41" id="139" value="139" required>
                     <label class="custom-control-label" for="139">
                        Algunas veces
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p41" id="140" value="140" required>
                     <label class="custom-control-label" for="140">
                        Casi nunca
                     </label>
                  </div>
               </div>
               <div class="col-sm-2 ">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p41" id="141" value="141" required>
                     <label class="custom-control-label" for="141">
                        Nunca
                     </label>
                  </div>
               </div>
            </div> <!-- Cierre ROW respuestas pregunta 41 -->
            <!-- |42| PREGUNTA -->
            <div class="row mt-4">                                 
               <div class="col-sm-12">
                  <legend class="col-form-label  pt-0 col-form-label-md ">
                  8.- Mi trabajo requiere que memorice mucha información
                  </legend>
               </div>
            </div>   <!-- Cierre ROW pregunta 42 -->
            <div class="row"> 
               <div class="col-sm-2">
                  <div class="custom-control custom-radio ">
                     <input class="custom-control-input" type="radio" name="p42" id="142" value="142" required>
                     <label class="custom-control-label " for="142">
                        Siempre
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p42" id="143" value="143" required>
                     <label class="custom-control-label" for="143">
                        Casi Siempre
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p42" id="144" value="144" required>
                     <label class="custom-control-label" for="144">
                        Algunas veces
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p42" id="145" value="145" required>
                     <label class="custom-control-label" for="145">
                        Casi nunca
                     </label>
                  </div>
               </div>
               <div class="col-sm-2 ">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p42" id="146" value="146" required>
                     <label class="custom-control-label" for="146">
                        Nunca
                     </label>
                  </div>
               </div>
            </div> <!-- Cierre ROW respuestas pregunta 42 -->
            <!-- |43| PREGUNTA -->
            <div class="row mt-4">                                 
               <div class="col-sm-12">
                  <legend class="col-form-label  pt-0 col-form-label-md ">
                  9.- Mi trabajo exige que atienda varios asuntos al mismo tiempo
                  </legend>
               </div>
            </div>   <!-- Cierre ROW pregunta 43 -->
            <div class="row"> 
               <div class="col-sm-2">
                  <div class="custom-control custom-radio ">
                     <input class="custom-control-input" type="radio" name="p43" id="147" value="147" required>
                     <label class="custom-control-label " for="147">
                        Siempre
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p43" id="148" value="148" required>
                     <label class="custom-control-label" for="148">
                        Casi Siempre
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p43" id="149" value="149" required>
                     <label class="custom-control-label" for="149">
                        Algunas veces
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p43" id="150" value="150" required>
                     <label class="custom-control-label" for="150">
                        Casi nunca
                     </label>
                  </div>
               </div>
               <div class="col-sm-2 ">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p43" id="151" value="151" required>
                     <label class="custom-control-label" for="151">
                        Nunca
                     </label>
                  </div>
               </div>
            </div> <!-- Cierre ROW respuestas pregunta 43 -->


         </fieldset>

         <!-- SUBCATEGORIA-8 -->
         <div class="alert alert-danger text-left" role="alert">
            <h5>Las preguntas siguientes están relacionadas con las actividades que realiza en su trabajo y las responsabilidades que tiene.</h5>
         </div> 

         <!-- PREGUNTAS SUBCATEGORIA-8 - pregunta 44 - 47-->
         <fieldset class="form-group">
            <!-- |44| PREGUNTA -->
            <div class="row">                                 
               <div class="col-sm-12">
                  <legend class="col-form-label  pt-0 col-form-label-md ">
                  10.- En mi trabajo soy responsable de cosas de mucho valor
                  </legend>
               </div>
            </div>   <!-- Cierre ROW pregunta 44 -->
            <div class="row"> 
               <div class="col-sm-2">
                  <div class="custom-control custom-radio ">
                     <input class="custom-control-input" type="radio" name="p44" id="152" value="152" required>
                     <label class="custom-control-label " for="152">
                        Siempre
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p44" id="153" value="153" required>
                     <label class="custom-control-label" for="153">
                        Casi Siempre
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p44" id="154" value="154" required>
                     <label class="custom-control-label" for="154">
                        Algunas veces
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p44" id="155" value="155" required>
                     <label class="custom-control-label" for="155">
                        Casi nunca
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p44" id="156" value="156" required>
                     <label class="custom-control-label" for="156">
                        Nunca
                     </label>
                  </div>
               </div>
            </div> <!-- Cierre ROW respuestas pregunta 44 -->
            <!-- |45| PREGUNTA -->
            <div class="row mt-4">                                 
               <div class="col-sm-12">
                  <legend class="col-form-label  pt-0 col-form-label-md ">
                  11.- Respondo ante mi jefe por los resultados de toda mi áreade trabajo
                  </legend>
               </div>
            </div>   <!-- Cierre ROW pregunta 45 -->
            <div class="row"> 
               <div class="col-sm-2">
                  <div class="custom-control custom-radio ">
                     <input class="custom-control-input" type="radio" name="p45" id="157" value="157" required>
                     <label class="custom-control-label " for="157">
                        Siempre
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p45" id="158" value="158" required>
                     <label class="custom-control-label" for="158">
                        Casi Siempre
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p45" id="159" value="159" required>
                     <label class="custom-control-label" for="159">
                        Algunas veces
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p45" id="160" value="160" required>
                     <label class="custom-control-label" for="160">
                        Casi nunca
                     </label>
                  </div>
               </div>
               <div class="col-sm-2 ">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p45" id="161" value="161" required>
                     <label class="custom-control-label" for="161">
                        Nunca
                     </label>
                  </div>
               </div>
            </div> <!-- Cierre ROW respuestas pregunta 45 -->
            <!-- |46| PREGUNTA -->
            <div class="row mt-4">                                 
               <div class="col-sm-12">
                  <legend class="col-form-label  pt-0 col-form-label-md ">
                  12.- En mi trabajo me dan órdenes contradictorias
                  </legend>
               </div>
            </div>   <!-- Cierre ROW pregunta 46 -->
            <div class="row"> 
               <div class="col-sm-2">
                  <div class="custom-control custom-radio ">
                     <input class="custom-control-input" type="radio" name="p46" id="162" value="162" required>
                     <label class="custom-control-label " for="162">
                        Siempre
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p46" id="163" value="163" required>
                     <label class="custom-control-label" for="163">
                        Casi Siempre
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p46" id="164" value="164" required>
                     <label class="custom-control-label" for="164">
                        Algunas veces
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p46" id="165" value="165" required>
                     <label class="custom-control-label" for="165">
                        Casi nunca
                     </label>
                  </div>
               </div>
               <div class="col-sm-2 ">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p46" id="166" value="166" required>
                     <label class="custom-control-label" for="166">
                        Nunca
                     </label>
                  </div>
               </div>
            </div> <!-- Cierre ROW respuestas pregunta 46 -->
            <!-- |47| PREGUNTA -->
            <div class="row mt-4">                                 
               <div class="col-sm-12">
                  <legend class="col-form-label  pt-0 col-form-label-md ">
                  13.- Considero que en mi trabajo me piden hacer cosas innecesarias
                  </legend>
               </div>
            </div>   <!-- Cierre ROW pregunta 47 -->
            <div class="row"> 
               <div class="col-sm-2">
                  <div class="custom-control custom-radio ">
                     <input class="custom-control-input" type="radio" name="p47" id="167" value="167" required>
                     <label class="custom-control-label " for="167">
                        Siempre
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p47" id="168" value="168" required>
                     <label class="custom-control-label" for="168">
                        Casi Siempre
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p47" id="169" value="169" required>
                     <label class="custom-control-label" for="169">
                        Algunas veces
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p47" id="170" value="170" required>
                     <label class="custom-control-label" for="170">
                        Casi nunca
                     </label>
                  </div>
               </div>
               <div class="col-sm-2 ">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p47" id="171" value="171" required>
                     <label class="custom-control-label" for="171">
                        Nunca
                     </label>
                  </div>
               </div>
            </div> <!-- Cierre ROW respuestas pregunta 47 -->                           
         </fieldset>

         <!-- SUBCATEGORIA-9 -->
         <div class="alert alert-danger text-left" role="alert">
            <h5>Las preguntas siguientes están relacionadas con el tiempo destinado a su trabajo y sus responsabilidades familiares.</h5>
         </div>

         <!-- PREGUNTAS SUBCATEGORIA-9 - pregunta 48 - 51--->
         <fieldset class="form-group">
            <!-- |48| PREGUNTA -->
            <div class="row">                                 
               <div class="col-sm-12">
                  <legend class="col-form-label  pt-0 col-form-label-md ">
                  14.- Trabajo horas extras más de tres veces a la semana
                  </legend>
               </div>
            </div>   <!-- Cierre ROW pregunta 48 -->
            <div class="row"> 
               <div class="col-sm-2">
                  <div class="custom-control custom-radio ">
                     <input class="custom-control-input" type="radio" name="p48" id="172" value="172" required>
                     <label class="custom-control-label " for="172">
                        Siempre
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p48" id="173" value="173" required>
                     <label class="custom-control-label" for="173">
                        Casi Siempre
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p48" id="174" value="174" required>
                     <label class="custom-control-label" for="174">
                        Algunas veces
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p48" id="175" value="175" required>
                     <label class="custom-control-label" for="175">
                        Casi nunca
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p48" id="176" value="176" required>
                     <label class="custom-control-label" for="176">
                        Nunca
                     </label>
                  </div>
               </div>
            </div> <!-- Cierre ROW respuestas pregunta 48 -->
            <!-- |49| PREGUNTA -->
            <div class="row mt-4">                                 
               <div class="col-sm-12">
                  <legend class="col-form-label  pt-0 col-form-label-md ">
                  15.- Mi trabajo me exige laborar en días de descanso, festivos o fines de semana
                  </legend>
               </div>
            </div>   <!-- Cierre ROW pregunta 49 -->
            <div class="row"> 
               <div class="col-sm-2">
                  <div class="custom-control custom-radio ">
                     <input class="custom-control-input" type="radio" name="p49" id="177" value="177" required>
                     <label class="custom-control-label " for="177">
                        Siempre
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p49" id="178" value="178" required>
                     <label class="custom-control-label" for="178">
                        Casi Siempre
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p49" id="179" value="179" required>
                     <label class="custom-control-label" for="179">
                        Algunas veces
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p49" id="180" value="180" required>
                     <label class="custom-control-label" for="180">
                        Casi nunca
                     </label>
                  </div>
               </div>
               <div class="col-sm-2 ">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p49" id="181" value="181" required>
                     <label class="custom-control-label" for="181">
                        Nunca
                     </label>
                  </div>
               </div>
            </div> <!-- Cierre ROW respuestas pregunta 49 -->
            <!-- |50| PREGUNTA -->
            <div class="row mt-4">                                 
               <div class="col-sm-12">
                  <legend class="col-form-label  pt-0 col-form-label-md ">
                  16.- Considero que el tiempo en el trabajo es mucho y perjudica mis actividades familiares o personales
                  </legend>
               </div>
            </div>   <!-- Cierre ROW pregunta 50 -->
            <div class="row"> 
               <div class="col-sm-2">
                  <div class="custom-control custom-radio ">
                     <input class="custom-control-input" type="radio" name="p50" id="182" value="182" required>
                     <label class="custom-control-label " for="182">
                        Siempre
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p50" id="183" value="183" required>
                     <label class="custom-control-label" for="183">
                        Casi Siempre
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p50" id="184" value="184" required>
                     <label class="custom-control-label" for="184">
                        Algunas veces
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p50" id="185" value="185" required>
                     <label class="custom-control-label" for="185">
                        Casi nunca
                     </label>
                  </div>
               </div>
               <div class="col-sm-2 ">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p50" id="186" value="186" required>
                     <label class="custom-control-label" for="186">
                        Nunca
                     </label>
                  </div>
               </div>
            </div> <!-- Cierre ROW respuestas pregunta 50 -->
            <!-- |51| PREGUNTA -->
            <div class="row mt-4">                                 
               <div class="col-sm-12">
                  <legend class="col-form-label  pt-0 col-form-label-md ">
                  17.- Pienso en las actividades familiares o personales cuando estoy en mi trabajo
                  </legend>
               </div>
            </div>   <!-- Cierre ROW pregunta 51 -->
            <div class="row"> 
               <div class="col-sm-2">
                  <div class="custom-control custom-radio ">
                     <input class="custom-control-input" type="radio" name="p51" id="187" value="187" required>
                     <label class="custom-control-label " for="187">
                        Siempre
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p51" id="188" value="188" required>
                     <label class="custom-control-label" for="188">
                        Casi Siempre
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p51" id="189" value="189" required>
                     <label class="custom-control-label" for="189">
                        Algunas veces
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p51" id="190" value="190" required>
                     <label class="custom-control-label" for="190">
                        Casi nunca
                     </label>
                  </div>
               </div>
               <div class="col-sm-2 ">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p51" id="191" value="191" required>
                     <label class="custom-control-label" for="191">
                        Nunca
                     </label>
                  </div>
               </div>
            </div> <!-- Cierre ROW respuestas pregunta 51 -->                           
         </fieldset>

         <!-- SUBCATEGORIA-10 -->
         <div class="alert alert-danger text-left" role="alert">
            <h5>Las preguntas siguientes están relacionadas con las decisiones que puede tomar en su trabajo.</h5>
         </div>

         <!-- PREGUNTAS SUBCATEGORIA-10 - pregunta 52 - 56 -->
         <fieldset class="form-group">
            <!-- |52| PREGUNTA -->
            <div class="row">                                 
               <div class="col-sm-12">
                  <legend class="col-form-label  pt-0 col-form-label-md ">
                  18.- Mi trabajo permite que desarrolle nuevas habilidades
                  </legend>
               </div>
            </div>   <!-- Cierre ROW pregunta 52 -->
            <div class="row"> 
               <div class="col-sm-2">
                  <div class="custom-control custom-radio ">
                     <input class="custom-control-input" type="radio" name="p52" id="192" value="192" required>
                     <label class="custom-control-label " for="192">
                        Siempre
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p52" id="193" value="193" required>
                     <label class="custom-control-label" for="193">
                        Casi Siempre
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p52" id="194" value="194" required>
                     <label class="custom-control-label" for="194">
                        Algunas veces
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p52" id="195" value="195" required>
                     <label class="custom-control-label" for="195">
                        Casi nunca
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p52" id="196" value="196" required>
                     <label class="custom-control-label" for="196">
                        Nunca
                     </label>
                  </div>
               </div>
            </div> <!-- Cierre ROW respuestas pregunta 52 -->
            <!-- |53| PREGUNTA -->
            <div class="row mt-4">                                 
               <div class="col-sm-12">
                  <legend class="col-form-label  pt-0 col-form-label-md ">
                  19.- En mi trabajo puedo aspirar a un mejor puesto
                  </legend>
               </div>
            </div>   <!-- Cierre ROW pregunta 53 -->
            <div class="row"> 
               <div class="col-sm-2">
                  <div class="custom-control custom-radio ">
                     <input class="custom-control-input" type="radio" name="p53" id="197" value="197" required>
                     <label class="custom-control-label " for="197">
                        Siempre
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p53" id="198" value="198" required>
                     <label class="custom-control-label" for="198">
                        Casi Siempre
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p53" id="199" value="199" required>
                     <label class="custom-control-label" for="199">
                        Algunas veces
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p53" id="200" value="200" required>
                     <label class="custom-control-label" for="200">
                        Casi nunca
                     </label>
                  </div>
               </div>
               <div class="col-sm-2 ">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p53" id="201" value="201" required>
                     <label class="custom-control-label" for="201">
                        Nunca
                     </label>
                  </div>
               </div>
            </div> <!-- Cierre ROW respuestas pregunta 53 -->
            <!-- |54| PREGUNTA -->
            <div class="row mt-4">                                 
               <div class="col-sm-12">
                  <legend class="col-form-label  pt-0 col-form-label-md ">
                  20.- Durante mi jornada de trabajo puedo tomar pausas cuando las necesito
                  </legend>
               </div>
            </div>   <!-- Cierre ROW pregunta 54 -->
            <div class="row"> 
               <div class="col-sm-2">
                  <div class="custom-control custom-radio ">
                     <input class="custom-control-input" type="radio" name="p54" id="202" value="202" required>
                     <label class="custom-control-label " for="202">
                        Siempre
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p54" id="203" value="203" required>
                     <label class="custom-control-label" for="203">
                        Casi Siempre
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p54" id="204" value="204" required>
                     <label class="custom-control-label" for="204">
                        Algunas veces
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p54" id="205" value="205" required>
                     <label class="custom-control-label" for="205">
                        Casi nunca
                     </label>
                  </div>
               </div>
               <div class="col-sm-2 ">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p54" id="206" value="206" required>
                     <label class="custom-control-label" for="206">
                        Nunca
                     </label>
                  </div>
               </div>
            </div> <!-- Cierre ROW respuestas pregunta 54 -->
            <!-- |55| PREGUNTA -->
            <div class="row mt-4">                                 
               <div class="col-sm-12">
                  <legend class="col-form-label  pt-0 col-form-label-md ">
                  21-. Puedo decidir la velocidad a la que realizo mis actividades en mi trabajo
                  </legend>
               </div>
            </div>   <!-- Cierre ROW pregunta 55 -->
            <div class="row"> 
               <div class="col-sm-2">
                  <div class="custom-control custom-radio ">
                     <input class="custom-control-input" type="radio" name="p55" id="207" value="207" required>
                     <label class="custom-control-label " for="207">
                        Siempre
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p55" id="208" value="208" required>
                     <label class="custom-control-label" for="208">
                        Casi Siempre
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p55" id="209" value="209" required>
                     <label class="custom-control-label" for="209">
                        Algunas veces
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p55" id="210" value="210" required>
                     <label class="custom-control-label" for="210">
                        Casi nunca
                     </label>
                  </div>
               </div>
               <div class="col-sm-2 ">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p55" id="211" value="211" required>
                     <label class="custom-control-label" for="211">
                        Nunca
                     </label>
                  </div>
               </div>
            </div> <!-- Cierre ROW respuestas pregunta 55 -->                           
            <!-- |56| PREGUNTA -->
            <div class="row mt-4">                                 
               <div class="col-sm-12">
                  <legend class="col-form-label  pt-0 col-form-label-md ">
                  22.- Puedo cambiar el orden de las actividades que realizo en mi trabajo
                  </legend>
               </div>
            </div>   <!-- Cierre ROW pregunta 56 -->
            <div class="row"> 
               <div class="col-sm-2">
                  <div class="custom-control custom-radio ">
                     <input class="custom-control-input" type="radio" name="p56" id="212" value="212" required>
                     <label class="custom-control-label " for="212">
                        Siempre
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p56" id="213" value="213" required>
                     <label class="custom-control-label" for="213">
                        Casi Siempre
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p56" id="214" value="214" required>
                     <label class="custom-control-label" for="214">
                        Algunas veces
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p56" id="215" value="215" required>
                     <label class="custom-control-label" for="215">
                        Casi nunca
                     </label>
                  </div>
               </div>
               <div class="col-sm-2 ">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p56" id="216" value="216" required>
                     <label class="custom-control-label" for="216">
                        Nunca
                     </label>
                  </div>
               </div>
            </div> <!-- Cierre ROW respuestas pregunta 56 -->                           
         </fieldset>

         <!-- SUBCATEGORIA-11 -->
         <div class="alert alert-danger text-left" role="alert">
            <h5>Las preguntas siguientes están relacionadas con la capacitación e información que recibe sobre su trabajo.</h5>
         </div>

         <!-- PREGUNTAS SUBCATEGORIA-11 - pregunta 57 - 61 -->
         <fieldset class="form-group">
            <!-- |57| PREGUNTA -->
            <div class="row">                                 
               <div class="col-sm-12">
                  <legend class="col-form-label  pt-0 col-form-label-md ">
                  23.- Me informan con claridad cuáles son mis funciones
                  </legend>
               </div>
            </div>   <!-- Cierre ROW pregunta 57 -->
            <div class="row"> 
               <div class="col-sm-2">
                  <div class="custom-control custom-radio ">
                     <input class="custom-control-input" type="radio" name="p57" id="217" value="217" required>
                     <label class="custom-control-label " for="217">
                        Siempre
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p57" id="218" value="218" required>
                     <label class="custom-control-label" for="218">
                        Casi Siempre
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p57" id="219" value="219" required>
                     <label class="custom-control-label" for="219">
                        Algunas veces
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p57" id="220" value="220" required>
                     <label class="custom-control-label" for="220">
                        Casi nunca
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p57" id="221" value="221" required>
                     <label class="custom-control-label" for="221">
                        Nunca
                     </label>
                  </div>
               </div>
            </div> <!-- Cierre ROW respuestas pregunta 57 -->
            <!-- |58| PREGUNTA -->
            <div class="row mt-4">                                 
               <div class="col-sm-12">
                  <legend class="col-form-label  pt-0 col-form-label-md ">
                  24.- Me explican claramente los resultados que debo obtener en mi trabajo
                  </legend>
               </div>
            </div>   <!-- Cierre ROW pregunta 58 -->
            <div class="row"> 
               <div class="col-sm-2">
                  <div class="custom-control custom-radio ">
                     <input class="custom-control-input" type="radio" name="p58" id="222" value="222" required>
                     <label class="custom-control-label " for="222">
                        Siempre
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p58" id="223" value="223" required>
                     <label class="custom-control-label" for="223">
                        Casi Siempre
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p58" id="224" value="224" required>
                     <label class="custom-control-label" for="224">
                        Algunas veces
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p58" id="225" value="225" required>
                     <label class="custom-control-label" for="225">
                        Casi nunca
                     </label>
                  </div>
               </div>
               <div class="col-sm-2 ">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p58" id="226" value="226" required>
                     <label class="custom-control-label" for="226">
                        Nunca
                     </label>
                  </div>
               </div>
            </div> <!-- Cierre ROW respuestas pregunta 58 -->
            <!-- |59| PREGUNTA -->
            <div class="row mt-4">                                 
               <div class="col-sm-12">
                  <legend class="col-form-label  pt-0 col-form-label-md ">
                  25.- Me informan con quién puedo resolver problemas o asuntos de trabajo
                  </legend>
               </div>
            </div>   <!-- Cierre ROW pregunta 59 -->
            <div class="row"> 
               <div class="col-sm-2">
                  <div class="custom-control custom-radio ">
                     <input class="custom-control-input" type="radio" name="p59" id="227" value="227" required>
                     <label class="custom-control-label " for="227">
                        Siempre
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p59" id="228" value="228" required>
                     <label class="custom-control-label" for="228">
                        Casi Siempre
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p59" id="229" value="229" required>
                     <label class="custom-control-label" for="229">
                        Algunas veces
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p59" id="230" value="230" required>
                     <label class="custom-control-label" for="230">
                        Casi nunca
                     </label>
                  </div>
               </div>
               <div class="col-sm-2 ">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p59" id="231" value="231" required>
                     <label class="custom-control-label" for="231">
                        Nunca
                     </label>
                  </div>
               </div>
            </div> <!-- Cierre ROW respuestas pregunta 59 -->
            <!-- |60| PREGUNTA -->
            <div class="row mt-4">                                 
               <div class="col-sm-12">
                  <legend class="col-form-label  pt-0 col-form-label-md ">
                  26.- Me permiten asistir a capacitaciones relacionadas con mi trabajo
                  </legend>
               </div>
            </div>   <!-- Cierre ROW pregunta 60 -->
            <div class="row"> 
               <div class="col-sm-2">
                  <div class="custom-control custom-radio ">
                     <input class="custom-control-input" type="radio" name="p60" id="232" value="232" required>
                     <label class="custom-control-label " for="232">
                        Siempre
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p60" id="233" value="233" required>
                     <label class="custom-control-label" for="233">
                        Casi Siempre
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p60" id="234" value="234" required>
                     <label class="custom-control-label" for="234">
                        Algunas veces
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p60" id="235" value="235" required>
                     <label class="custom-control-label" for="235">
                        Casi nunca
                     </label>
                  </div>
               </div>
               <div class="col-sm-2 ">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p60" id="236" value="236" required>
                     <label class="custom-control-label" for="236">
                        Nunca
                     </label>
                  </div>
               </div>
            </div> <!-- Cierre ROW respuestas pregunta 60 -->                           
            <!-- |61| PREGUNTA -->
            <div class="row mt-4">                                 
               <div class="col-sm-12">
                  <legend class="col-form-label  pt-0 col-form-label-md ">
                  27.- Recibo capacitación útil para hacer mi trabajo
                  </legend>
               </div>
            </div>   <!-- Cierre ROW pregunta 61 -->
            <div class="row"> 
               <div class="col-sm-2">
                  <div class="custom-control custom-radio ">
                     <input class="custom-control-input" type="radio" name="p61" id="237" value="237" required>
                     <label class="custom-control-label " for="237">
                        Siempre
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p61" id="238" value="238" required>
                     <label class="custom-control-label" for="238">
                        Casi Siempre
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p61" id="239" value="239" required>
                     <label class="custom-control-label" for="239">
                        Algunas veces
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p61" id="240" value="240" required>
                     <label class="custom-control-label" for="240">
                        Casi nunca
                     </label>
                  </div>
               </div>
               <div class="col-sm-2 ">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p61" id="241" value="241" required>
                     <label class="custom-control-label" for="241">
                        Nunca
                     </label>
                  </div>
               </div>
            </div> <!-- Cierre ROW respuestas pregunta 61 -->
         </fieldset>

         <!-- SUBCATEGORIA-12 -->
         <div class="alert alert-danger text-left" role="alert">
            <h5>Las preguntas siguientes se refieren a las relaciones con sus compañeros de trabajo y su jefe.</h5>
         </div>

         <!-- PREGUNTAS SUBCATEGORIA-12 - pregunta 62 - 74  -->
         <fieldset class="form-group">
            <!-- |62| PREGUNTA -->
            <div class="row">                                 
               <div class="col-sm-12">
                  <legend class="col-form-label  pt-0 col-form-label-md ">
                  28.- Mi jefe tiene en cuenta mis puntos de vista y opiniones
                  </legend>
               </div>
            </div>   <!-- Cierre ROW pregunta 62 -->
            <div class="row"> 
               <div class="col-sm-2">
                  <div class="custom-control custom-radio ">
                     <input class="custom-control-input" type="radio" name="p62" id="242" value="242" required>
                     <label class="custom-control-label " for="242">
                        Siempre
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p62" id="243" value="243" required>
                     <label class="custom-control-label" for="243">
                        Casi Siempre
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p62" id="244" value="244" required>
                     <label class="custom-control-label" for="244">
                        Algunas veces
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p62" id="245" value="245" required>
                     <label class="custom-control-label" for="245">
                        Casi nunca
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p62" id="246" value="246" required>
                     <label class="custom-control-label" for="246">
                        Nunca
                     </label>
                  </div>
               </div>
            </div> <!-- Cierre ROW respuestas pregunta 62 -->
            <!-- |63| PREGUNTA -->
            <div class="row mt-4">                                 
               <div class="col-sm-12">
                  <legend class="col-form-label  pt-0 col-form-label-md ">
                  29.- Mi jefe ayuda a solucionar los problemas que se presentan en el trabajo
                  </legend>
               </div>
            </div>   <!-- Cierre ROW pregunta 63 -->
            <div class="row"> 
               <div class="col-sm-2">
                  <div class="custom-control custom-radio ">
                     <input class="custom-control-input" type="radio" name="p63" id="247" value="247" required>
                     <label class="custom-control-label " for="247">
                        Siempre
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p63" id="248" value="248" required>
                     <label class="custom-control-label" for="248">
                        Casi Siempre
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p63" id="249" value="249" required>
                     <label class="custom-control-label" for="249">
                        Algunas veces
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p63" id="250" value="250" required>
                     <label class="custom-control-label" for="250">
                        Casi nunca
                     </label>
                  </div>
               </div>
               <div class="col-sm-2 ">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p63" id="251" value="251" required>
                     <label class="custom-control-label" for="251">
                        Nunca
                     </label>
                  </div>
               </div>
            </div> <!-- Cierre ROW respuestas pregunta 63 -->
            <!-- |64| PREGUNTA -->
            <div class="row mt-4">                                 
               <div class="col-sm-12">
                  <legend class="col-form-label  pt-0 col-form-label-md ">
                  30.- Puedo confiar en mis compañeros de trabajo
                  </legend>
               </div>
            </div>   <!-- Cierre ROW pregunta 64 -->
            <div class="row"> 
               <div class="col-sm-2">
                  <div class="custom-control custom-radio ">
                     <input class="custom-control-input" type="radio" name="p64" id="252" value="252" required>
                     <label class="custom-control-label " for="252">
                        Siempre
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p64" id="253" value="253" required>
                     <label class="custom-control-label" for="253">
                        Casi Siempre
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p64" id="254" value="254" required>
                     <label class="custom-control-label" for="254">
                        Algunas veces
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p64" id="255" value="255" required>
                     <label class="custom-control-label" for="255">
                        Casi nunca
                     </label>
                  </div>
               </div>
               <div class="col-sm-2 ">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p64" id="256" value="256" required>
                     <label class="custom-control-label" for="256">
                        Nunca
                     </label>
                  </div>
               </div>
            </div> <!-- Cierre ROW respuestas pregunta 64 -->
            <!-- |65| PREGUNTA -->
            <div class="row mt-4">                                 
               <div class="col-sm-12">
                  <legend class="col-form-label  pt-0 col-form-label-md ">
                  31.- Cuando tenemos que realizar trabajo de equipo los compañeros colaboran
                  </legend>
               </div>
            </div>   <!-- Cierre ROW pregunta 65 -->
            <div class="row"> 
               <div class="col-sm-2">
                  <div class="custom-control custom-radio ">
                     <input class="custom-control-input" type="radio" name="p65" id="257" value="257" required>
                     <label class="custom-control-label " for="257">
                        Siempre
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p65" id="258" value="258" required>
                     <label class="custom-control-label" for="258">
                        Casi Siempre
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p65" id="259" value="259" required>
                     <label class="custom-control-label" for="259">
                        Algunas veces
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p65" id="260" value="260" required>
                     <label class="custom-control-label" for="260">
                        Casi nunca
                     </label>
                  </div>
               </div>
               <div class="col-sm-2 ">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p65" id="261" value="261" required>
                     <label class="custom-control-label" for="261">
                        Nunca
                     </label>
                  </div>
               </div>
            </div> <!-- Cierre ROW respuestas pregunta 65 -->                           
            <!-- |66| PREGUNTA -->
            <div class="row mt-4">                                 
               <div class="col-sm-12">
                  <legend class="col-form-label  pt-0 col-form-label-md ">
                  32.- Mis compañeros de trabajo me ayudan cuando tengo dificultades
                  </legend>
               </div>
            </div>   <!-- Cierre ROW pregunta 66 -->
            <div class="row"> 
               <div class="col-sm-2">
                  <div class="custom-control custom-radio ">
                     <input class="custom-control-input" type="radio" name="p66" id="262" value="262" required>
                     <label class="custom-control-label " for="262">
                        Siempre
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p66" id="263" value="263" required>
                     <label class="custom-control-label" for="263">
                        Casi Siempre
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p66" id="264" value="264" required>
                     <label class="custom-control-label" for="264">
                        Algunas veces
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p66" id="265" value="265" required>
                     <label class="custom-control-label" for="265">
                        Casi nunca
                     </label>
                  </div>
               </div>
               <div class="col-sm-2 ">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p66" id="266" value="266" required>
                     <label class="custom-control-label" for="266">
                        Nunca
                     </label>
                  </div>
               </div>
            </div> <!-- Cierre ROW respuestas pregunta 66 -->
            <!-- |67| PREGUNTA -->
            <div class="row mt-4">                                 
               <div class="col-sm-12">
                  <legend class="col-form-label  pt-0 col-form-label-md ">
                  33.- En mi trabajo puedo expresarme libremente sin interrupciones
                  </legend>
               </div>
            </div>   <!-- Cierre ROW pregunta 67 -->
            <div class="row"> 
               <div class="col-sm-2">
                  <div class="custom-control custom-radio ">
                     <input class="custom-control-input" type="radio" name="p67" id="267" value="267" required>
                     <label class="custom-control-label " for="267">
                        Siempre
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p67" id="268" value="268" required>
                     <label class="custom-control-label" for="268">
                        Casi Siempre
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p67" id="269" value="269" required>
                     <label class="custom-control-label" for="269">
                        Algunas veces
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p67" id="270" value="270" required>
                     <label class="custom-control-label" for="270">
                        Casi nunca
                     </label>
                  </div>
               </div>
               <div class="col-sm-2 ">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p67" id="271" value="271" required>
                     <label class="custom-control-label" for="271">
                        Nunca
                     </label>
                  </div>
               </div>
            </div> <!-- Cierre ROW respuestas pregunta 67 -->
            <!-- |68| PREGUNTA -->
            <div class="row mt-4">                                 
               <div class="col-sm-12">
                  <legend class="col-form-label  pt-0 col-form-label-md ">
                  34.- Recibo críticas constantes a mi persona y/o trabajo
                  </legend>
               </div>
            </div>   <!-- Cierre ROW pregunta 68 -->
            <div class="row"> 
               <div class="col-sm-2">
                  <div class="custom-control custom-radio ">
                     <input class="custom-control-input" type="radio" name="p68" id="272" value="272" required>
                     <label class="custom-control-label " for="272">
                        Siempre
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p68" id="273" value="273" required>
                     <label class="custom-control-label" for="273">
                        Casi Siempre
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p68" id="274" value="274" required>
                     <label class="custom-control-label" for="274">
                        Algunas veces
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p68" id="275" value="275" required>
                     <label class="custom-control-label" for="275">
                        Casi nunca
                     </label>
                  </div>
               </div>
               <div class="col-sm-2 ">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p68" id="276" value="276" required>
                     <label class="custom-control-label" for="276">
                        Nunca
                     </label>
                  </div>
               </div>
            </div> <!-- Cierre ROW respuestas pregunta 68 -->
            <!-- |69| PREGUNTA -->
            <div class="row mt-4">                                 
               <div class="col-sm-12">
                  <legend class="col-form-label  pt-0 col-form-label-md ">
                  35.- Recibo burlas, calumnias, difamaciones, humillaciones o ridiculizaciones
                  </legend>
               </div>
            </div>   <!-- Cierre ROW pregunta 69 -->
            <div class="row"> 
               <div class="col-sm-2">
                  <div class="custom-control custom-radio ">
                     <input class="custom-control-input" type="radio" name="p69" id="277" value="277" required>
                     <label class="custom-control-label " for="277">
                        Siempre
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p69" id="278" value="278" required>
                     <label class="custom-control-label" for="278">
                        Casi Siempre
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p69" id="279" value="279" required>
                     <label class="custom-control-label" for="279">
                        Algunas veces
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p69" id="280" value="280" required>
                     <label class="custom-control-label" for="280">
                        Casi nunca
                     </label>
                  </div>
               </div>
               <div class="col-sm-2 ">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p69" id="281" value="281" required>
                     <label class="custom-control-label" for="281">
                        Nunca
                     </label>
                  </div>
               </div>
            </div> <!-- Cierre ROW respuestas pregunta 69 -->
            <!-- |70| PREGUNTA -->
            <div class="row mt-4">                                 
               <div class="col-sm-12">
                  <legend class="col-form-label  pt-0 col-form-label-md ">
                  36.- Se ignora mi presencia o se me excluye de las reuniones de trabajo y en la toma de decisiones
                  </legend>
               </div>
            </div>   <!-- Cierre ROW pregunta 70 -->
            <div class="row"> 
               <div class="col-sm-2">
                  <div class="custom-control custom-radio ">
                     <input class="custom-control-input" type="radio" name="p70" id="282" value="282" required>
                     <label class="custom-control-label " for="282">
                        Siempre
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p70" id="283" value="283" required>
                     <label class="custom-control-label" for="283">
                        Casi Siempre
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p70" id="284" value="284" required>
                     <label class="custom-control-label" for="284">
                        Algunas veces
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p70" id="285" value="285" required>
                     <label class="custom-control-label" for="285">
                        Casi nunca
                     </label>
                  </div>
               </div>
               <div class="col-sm-2 ">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p70" id="286" value="286" required>
                     <label class="custom-control-label" for="286">
                        Nunca
                     </label>
                  </div>
               </div>
            </div> <!-- Cierre ROW respuestas pregunta 70 -->
            <!-- |71| PREGUNTA -->
            <div class="row mt-4">                                 
               <div class="col-sm-12">
                  <legend class="col-form-label  pt-0 col-form-label-md ">
                  37.- Se manipulan las situaciones de trabajo para hacerme parecer un mal trabajador
                  </legend>
               </div>
            </div>   <!-- Cierre ROW pregunta 71 -->
            <div class="row"> 
               <div class="col-sm-2">
                  <div class="custom-control custom-radio ">
                     <input class="custom-control-input" type="radio" name="p71" id="287" value="287" required>
                     <label class="custom-control-label " for="287">
                        Siempre
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p71" id="288" value="288" required>
                     <label class="custom-control-label" for="288">
                        Casi Siempre
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p71" id="289" value="289" required>
                     <label class="custom-control-label" for="289">
                        Algunas veces
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p71" id="290" value="290" required>
                     <label class="custom-control-label" for="290">
                        Casi nunca
                     </label>
                  </div>
               </div>
               <div class="col-sm-2 ">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p71" id="291" value="291" required>
                     <label class="custom-control-label" for="291">
                        Nunca
                     </label>
                  </div>
               </div>
            </div> <!-- Cierre ROW respuestas pregunta 71 -->
            <!-- |72| PREGUNTA -->
            <div class="row mt-4">                                 
               <div class="col-sm-12">
                  <legend class="col-form-label  pt-0 col-form-label-md ">
                  38.- Se ignoran mis éxitos laborales y se atribuyen a otros trabajadores
                  </legend>
               </div>
            </div>   <!-- Cierre ROW pregunta 72 -->
            <div class="row"> 
               <div class="col-sm-2">
                  <div class="custom-control custom-radio ">
                     <input class="custom-control-input" type="radio" name="p72" id="292" value="292" required>
                     <label class="custom-control-label " for="292">
                        Siempre
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p72" id="293" value="293" required>
                     <label class="custom-control-label" for="293">
                        Casi Siempre
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p72" id="294" value="294" required>
                     <label class="custom-control-label" for="294">
                        Algunas veces
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p72" id="295" value="295" required>
                     <label class="custom-control-label" for="295">
                        Casi nunca
                     </label>
                  </div>
               </div>
               <div class="col-sm-2 ">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p72" id="296" value="296" required>
                     <label class="custom-control-label" for="296">
                        Nunca
                     </label>
                  </div>
               </div>
            </div> <!-- Cierre ROW respuestas pregunta 72 -->
            <!-- |73| PREGUNTA -->
            <div class="row mt-4">                                 
               <div class="col-sm-12">
                  <legend class="col-form-label  pt-0 col-form-label-md ">
                  39.- Me bloquean o impiden las oportunidades que tengo para obtener ascenso o mejora en mi trabajo
                  </legend>
               </div>
            </div>   <!-- Cierre ROW pregunta 73 -->
            <div class="row"> 
               <div class="col-sm-2">
                  <div class="custom-control custom-radio ">
                     <input class="custom-control-input" type="radio" name="p73" id="297" value="297" required>
                     <label class="custom-control-label " for="297">
                        Siempre
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p73" id="298" value="298" required>
                     <label class="custom-control-label" for="298">
                        Casi Siempre
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p73" id="299" value="299" required>
                     <label class="custom-control-label" for="299">
                        Algunas veces
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p73" id="300" value="300" required>
                     <label class="custom-control-label" for="300">
                        Casi nunca
                     </label>
                  </div>
               </div>
               <div class="col-sm-2 ">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p73" id="301" value="301" required>
                     <label class="custom-control-label" for="301">
                        Nunca
                     </label>
                  </div>
               </div>
            </div> <!-- Cierre ROW respuestas pregunta 73 -->
            <!-- |74| PREGUNTA -->
            <div class="row mt-4">                                 
               <div class="col-sm-12">
                  <legend class="col-form-label  pt-0 col-form-label-md ">
                  40.- He presenciado actos de violencia en mi centro de trabajo
                  </legend>
               </div>
            </div>   <!-- Cierre ROW pregunta 74 -->
            <div class="row"> 
               <div class="col-sm-2">
                  <div class="custom-control custom-radio ">
                     <input class="custom-control-input" type="radio" name="p74" id="302" value="302" required>
                     <label class="custom-control-label " for="302">
                        Siempre
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p74" id="303" value="303" required>
                     <label class="custom-control-label" for="303">
                        Casi Siempre
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p74" id="304" value="304" required>
                     <label class="custom-control-label" for="304">
                        Algunas veces
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p74" id="305" value="305" required>
                     <label class="custom-control-label" for="305">
                        Casi nunca
                     </label>
                  </div>
               </div>
               <div class="col-sm-2 ">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p74" id="306" value="306" required>
                     <label class="custom-control-label" for="306">
                        Nunca
                     </label>
                  </div>
               </div>
            </div> <!-- Cierre ROW respuestas pregunta 74 -->
         </fieldset>

         <!-- SUBCATEGORIA-13 -->
         <div class="alert alert-danger text-left" role="alert">
            <h5>Las preguntas siguientes están relacionadas con la atención a clientes y usuarios.</h5>
         </div>

         <!-- PREGUNTA 75 - SUBCATEGORIA-13 SI/NO-->
         <fieldset class="form-group">
            <!-- |75| PREGUNTA -->
            <div class="row">                                 
               <div class="col-sm-6">
                  <legend class="col-form-label  pt-0 col-form-label-md ">
                  En mi trabajo debo brindar servicio a clientes o usuarios:
                  </legend>
               </div>   
               <div class="col-sm-1 ">
                  <div class="custom-control custom-radio ">
                     <input class="custom-control-input" type="radio" name="p75" id="307" value="307"  require>
                     <label class="custom-control-label " for="307">
                        Si
                     </label>
                  </div>
               </div>
               <div class="col-sm-1 ">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p75" id="308" value="308"  require>
                     <label class="custom-control-label" for="308">
                        No
                     </label>
                  </div>
               </div>
            </div>                            
         </fieldset>            
         
         <!-- SE MUESTRAN SI SELECCIONA SI EN LA PREGUNTA SUBCATEGORIA 13 -->
         <!-- PREGUNTAS SUBCATEGORIA-13 - pregunta 76 - 78  -->
         <fieldset class="form-group hiden-subcategory subcategory14">
            <!-- |76| PREGUNTA -->
            <div class="row">                                 
               <div class="col-sm-12">
                  <legend class="col-form-label  pt-0 col-form-label-md ">
                  41.- Atiendo clientes o usuarios muy enojados
                  </legend>
               </div>
            </div>   <!-- Cierre ROW pregunta 76 -->
            <div class="row"> 
               <div class="col-sm-2">
                  <div class="custom-control custom-radio ">
                     <input class="custom-control-input" type="radio" name="p76" id="309" value="309">
                     <label class="custom-control-label " for="309">
                        Siempre
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p76" id="310" value="310">
                     <label class="custom-control-label" for="310">
                        Casi Siempre
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p76" id="311" value="311">
                     <label class="custom-control-label" for="311">
                        Algunas veces
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p76" id="312" value="312">
                     <label class="custom-control-label" for="312">
                        Casi nunca
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p76" id="313" value="313">
                     <label class="custom-control-label" for="313">
                        Nunca
                     </label>
                  </div>
               </div>
            </div> <!-- Cierre ROW respuestas pregunta 76 -->
            <!-- |77| PREGUNTA -->
            <div class="row mt-4">                                 
               <div class="col-sm-12">
                  <legend class="col-form-label  pt-0 col-form-label-md ">
                  42.- Mi trabajo me exige atender personas muy necesitadas de ayuda o enfermas
                  </legend>
               </div>
            </div>   <!-- Cierre ROW pregunta 77 -->
            <div class="row"> 
               <div class="col-sm-2">
                  <div class="custom-control custom-radio ">
                     <input class="custom-control-input" type="radio" name="p77" id="314" value="314">
                     <label class="custom-control-label " for="314">
                        Siempre
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p77" id="315" value="315">
                     <label class="custom-control-label" for="315">
                        Casi Siempre
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p77" id="316" value="316">
                     <label class="custom-control-label" for="316">
                        Algunas veces
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p77" id="317" value="317">
                     <label class="custom-control-label" for="317">
                        Casi nunca
                     </label>
                  </div>
               </div>
               <div class="col-sm-2 ">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p77" id="318" value="318">
                     <label class="custom-control-label" for="318">
                        Nunca
                     </label>
                  </div>
               </div>
            </div> <!-- Cierre ROW respuestas pregunta 77 -->
            <!-- |78| PREGUNTA -->
            <div class="row mt-4">                                 
               <div class="col-sm-12">
                  <legend class="col-form-label  pt-0 col-form-label-md ">
                  43.- Para hacer mi trabajo debo demostrar sentimientos distintos a los míos
                  </legend>
               </div>
            </div>   <!-- Cierre ROW pregunta 78 -->
            <div class="row"> 
               <div class="col-sm-2">
                  <div class="custom-control custom-radio ">
                     <input class="custom-control-input" type="radio" name="p78" id="319" value="319">
                     <label class="custom-control-label " for="319">
                        Siempre
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p78" id="320" value="320">
                     <label class="custom-control-label" for="320">
                        Casi Siempre
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p78" id="321" value="321">
                     <label class="custom-control-label" for="321">
                        Algunas veces
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p78" id="322" value="322">
                     <label class="custom-control-label" for="322">
                        Casi nunca
                     </label>
                  </div>
               </div>
               <div class="col-sm-2 ">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p78" id="323" value="323">
                     <label class="custom-control-label" for="323">
                        Nunca
                     </label>
                  </div>
               </div>
            </div> <!-- Cierre ROW respuestas pregunta 78 -->                          
         </fieldset>

         <!-- SUBCATEGORIA-14 -->
         <div class="alert alert-danger text-left" role="alert">
            <h5>Las siguientes preguntas están relacionadas con las actitudes de los trabajadores que supervisa.</h5>
         </div>

         <!-- PREGUNTAS SUBCATEGORIA-14 SI/NO-->
         <fieldset class="form-group">
            <!-- |79| PREGUNTA -->
            <div class="row">                                 
               <div class="col-sm-6">
                  <legend class="col-form-label  pt-0 col-form-label-md ">
                  Soy jefe de otros trabajadores:
                  </legend>
               </div>   
               <div class="col-sm-1 ">
                  <div class="custom-control custom-radio ">
                     <input class="custom-control-input" type="radio" name="p79" id="324" value="324"  require>
                     <label class="custom-control-label " for="324">
                        Si
                     </label>
                  </div>
               </div>
               <div class="col-sm-1 ">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p79" id="325" value="325"  require>
                     <label class="custom-control-label" for="325">
                        No
                     </label>
                  </div>
               </div>
            </div>                            
         </fieldset>

         <!-- SE MUESTRAN SI SELECCIONA SI EN LA PREGUNTA SUBCATEGORIA 15 -->
         <!-- PREGUNTAS SUBCATEGORIA-14 - pregunta 80 - 82 -->
         <fieldset class="form-group hiden-subcategory subcategory16">
            <!-- |80| PREGUNTA -->
            <div class="row">                                 
               <div class="col-sm-12">
                  <legend class="col-form-label  pt-0 col-form-label-md ">
                  44.- Comunican tarde los asuntos de trabajo
                  </legend>
               </div>
            </div>   <!-- Cierre ROW pregunta 80 -->
            <div class="row"> 
               <div class="col-sm-2">
                  <div class="custom-control custom-radio ">
                     <input class="custom-control-input" type="radio" name="p80" id="326" value="326">
                     <label class="custom-control-label " for="326">
                        Siempre
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p80" id="327" value="327">
                     <label class="custom-control-label" for="327">
                        Casi Siempre
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p80" id="328" value="328">
                     <label class="custom-control-label" for="328">
                        Algunas veces
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p80" id="329" value="329">
                     <label class="custom-control-label" for="329">
                        Casi nunca
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p80" id="330" value="330">
                     <label class="custom-control-label" for="330">
                        Nunca
                     </label>
                  </div>
               </div>
            </div> <!-- Cierre ROW respuestas pregunta 80 -->
            <!-- |81| PREGUNTA -->
            <div class="row mt-4">                                 
               <div class="col-sm-12">
                  <legend class="col-form-label  pt-0 col-form-label-md ">
                  45.- Dificultan el logro de los resultados del trabajo
                  </legend>
               </div>
            </div>   <!-- Cierre ROW pregunta 81 -->
            <div class="row"> 
               <div class="col-sm-2">
                  <div class="custom-control custom-radio ">
                     <input class="custom-control-input" type="radio" name="p81" id="331" value="331">
                     <label class="custom-control-label " for="331">
                        Siempre
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p81" id="332" value="332">
                     <label class="custom-control-label" for="332">
                        Casi Siempre
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p81" id="333" value="333">
                     <label class="custom-control-label" for="333">
                        Algunas veces
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p81" id="334" value="334">
                     <label class="custom-control-label" for="334">
                        Casi nunca
                     </label>
                  </div>
               </div>
               <div class="col-sm-2 ">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p81" id="335" value="335">
                     <label class="custom-control-label" for="335">
                        Nunca
                     </label>
                  </div>
               </div>
            </div> <!-- Cierre ROW respuestas pregunta 81 -->
            <!-- |82| PREGUNTA -->
            <div class="row mt-4">                                 
               <div class="col-sm-12">
                  <legend class="col-form-label  pt-0 col-form-label-md ">
                  46.- Ignoran las sugerencias para mejorar su trabajo
                  </legend>
               </div>
            </div>   <!-- Cierre ROW pregunta 82 -->
            <div class="row"> 
               <div class="col-sm-2">
                  <div class="custom-control custom-radio ">
                     <input class="custom-control-input" type="radio" name="p82" id="336" value="336">
                     <label class="custom-control-label " for="336">
                        Siempre
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p82" id="337" value="337">
                     <label class="custom-control-label" for="337">
                        Casi Siempre
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p82" id="338" value="338">
                     <label class="custom-control-label" for="338">
                        Algunas veces
                     </label>
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p82" id="339" value="339">
                     <label class="custom-control-label" for="339">
                        Casi nunca
                     </label>
                  </div>
               </div>
               <div class="col-sm-2 ">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="p82" id="340" value="340">
                     <label class="custom-control-label" for="340">
                        Nunca
                     </label>
                  </div>
               </div>
            </div> <!-- Cierre ROW respuestas pregunta 82 -->                          
         </fieldset>

         <!-- BOTON GUARDAR CUESTIONARIO-->
         <div class="form-group row">
            <div class="col-sm-12">
               <button type="submit" class="btn btn-primary btn-lg btn-block">Guardar Respuestas Cuestionario Fase 3</button>
            </div>
         </div>

      </form>

   </div> <!-- Cierre container -->


<?php

   include_once 'footer.php';

?>