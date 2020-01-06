<?php

   // include_once 'config.php';
   include_once 'header.php';

   // requerimos la conexión a la base de datos
   require "config.php";
   
   $hora = date('Y-m-d H:i:s');
   $fechaMenosMinutos = strtotime ( '-6 hour' , strtotime ( $hora ) );
   $fechaHora = date('Y-m-d H:i:s', $fechaMenosMinutos);
   echo $fechaHora;

   // obtenemos el catalogo de trabajadores para despues cargarlo en el select
   $queryResult = $pdo->query("SELECT * FROM trabajadores ORDER BY nombre, apellidop");


?>

   <!-- cuerpo body -->
   <div class="container">

      <div class="alert alert-primary text-center mt-4" role="alert">
         <h2>Fase I. Información del trabajador</h2>
      </div>
      
      <form action="cfase2.php" method="POST">

         <!-- Datos de la persona a la que se le aplica el formulario -->
         <fieldset class="form-group">
         
            <div class="row">
               <div class="col-md-6">
                  <!-- Folio Cuestionario -->
                  <div class="form-group">
                     <label for="folioCuestionario">Folio:</label>
                     <input type="text" class="form-control" name="folioCuestionario" id="folioCuestionario" required>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="form-group">
                     <!-- Select con los trabjadores -->
                     <label for="nomtrabajador">Trabajador:</label>
                     <select class="form-control" id="nomtrabajador" name="nomtrabajador">
                        <option>Selecciona un trabajador...</option>
                        <?php
                           
                           while($row = $queryResult->fetch(PDO::FETCH_ASSOC)) {
                              $nombreCompleto = $row['nombre'] . " " . $row['apellidop'] . " " . $row['apellidom'];
                              echo '<option >' . $nombreCompleto . '</option>';
                           }

                        ?>
                           
                     </select>
                  </div>
                  <!-- Input oculto para mandar la fecha por POST -->
                  <input type="hidden" name="fechaAplicacion" value="<?php echo $fechaActual ?>">
               </div>
               
            </div>

         </fieldset>

         <!-- Titulo Datos Personales -->
         <div class="alert alert-danger text-left" role="alert">
            <h5>Datos Personales</h5>
         </div>

         <!-- Opciones Sexo -->
         <fieldset class="form-group">
            <div class="row">
               <legend class="col-form-label col-sm-3 pt-0 col-form-label-lg">Sexo:</legend>
               <div class="col-sm-8">
                  <div class="custom-control custom-radio ">
                     <input class="custom-control-input" type="radio" name="sexo" id="1" value="1" required>
                     <label class="custom-control-label" for="1">
                        Masculino
                     </label>
                  </div>
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="sexo" id="2" value="2" required>
                     <label class="custom-control-label" for="2">
                        Femenino
                     </label>
                  </div>
               </div>
            </div>
         </fieldset>

         <!-- opciones edad -->
         <fieldset class="form-group">

            <div class="row">
               <legend class="col-form-label col-sm-3 pt-0 col-form-label-lg">Edad en años:</legend>
               <div class="col-sm-4">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="edad" id="3" value="3" required>
                     <label class="custom-control-label" for="3">
                        15 - 19
                     </label>
                  </div>
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="edad" id="4" value="4" required>
                     <label class="custom-control-label" for="4">
                        20 - 24
                     </label>
                  </div>
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="edad" id="5" value="5" required>
                     <label class="custom-control-label" for="5">
                        25 - 29
                     </label>
                  </div>
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="edad" id="6" value="6" required>
                     <label class="custom-control-label" for="6">
                        30 - 34
                     </label>
                  </div>
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="edad" id="7" value="7" required>
                     <label class="custom-control-label" for="7">
                        35 - 39
                     </label>
                  </div>
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="edad" id="8" value="8" required>
                     <label class="custom-control-label" for="8">
                        40 - 44
                     </label>
                  </div>
               </div>
               <div class="col-sm-4">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="edad" id="9" value="9" required>
                     <label class="custom-control-label" for="9">
                        45 - 49
                     </label>
                  </div>
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="edad" id="10" value="10" required>
                     <label class="custom-control-label" for="10">
                        50 - 54
                     </label>
                  </div>
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="edad" id="11" value="11" required>
                     <label class="custom-control-label" for="11">
                        55 - 59
                     </label>
                  </div>
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="edad" id="12" value="12" required>
                     <label class="custom-control-label" for="12">
                        60 - 64
                     </label>
                  </div>
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="edad" id="13" value="13" required>
                     <label class="custom-control-label" for="13">
                        65 - 69
                     </label>
                  </div>
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="edad" id="14" value="14" required>
                     <label class="custom-control-label" for="14">
                        70 o más
                     </label>
                  </div>
               </div>
            </div>
         </fieldset>

         <!-- Opciones Estado Civil -->
         <fieldset class="form-group">

            <div class="row">
               <legend class="col-form-label col-sm-3 pt-0 col-form-label-lg">Estado Civil:</legend>
               <div class="col-sm-4">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="edocivil" id="15" value="15" required>
                     <label class="custom-control-label" for="15">
                        Casado(a)
                     </label>
                  </div>
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="edocivil" id="16" value="16" required>
                     <label class="custom-control-label" for="16">
                        Soltero(a)
                     </label>
                  </div>
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="edocivil" id="17" value="17" required>
                     <label class="custom-control-label" for="17">
                        Unión Libre
                     </label>
                  </div>
               </div>
               <div class="col-sm-4">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="edocivil" id="18" value="18" required>
                     <label class="custom-control-label" for="18">
                        Divorciado(a)
                     </label>
                  </div>
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="edocivil" id="19" value="19" required>
                     <label class="custom-control-label" for="19">
                        Viudo(a)
                     </label>
                  </div>
               </div>
            </div>
         </fieldset>

         <!-- Nivel de estudios -->
         <fieldset class="form-group">
            <div class="row">
               <legend class="col-form-label col-sm-3 pt-0 col-form-label-lg">Nivel de Estudios:</legend>
               <div class="col-sm-3">
                  <div class="custom-control custom-radio">
                     <!-- <input class="form-check-input" type="radio" name="nivelest" id="15" value="15"> -->
                     <label class="form-check-label">
                        Sin Información
                     </label>
                  </div>
                  <div class="custom-control custom-radio">
                     <!-- <input class="form-check-input" type="radio" name="nivelest" id="15" value="15"> -->
                     <label class="form-check-label">
                        Primaria
                     </label>
                  </div>
                  <div class="custom-control custom-radio">
                     <!-- <input class="form-check-input" type="radio" name="nivelest" id="15" value="15"> -->
                     <label class="form-check-label">
                        Secundaria
                     </label>
                  </div>
                  <div class="custom-control custom-radio">
                     <!-- <input class="form-check-input" type="radio" name="nivelest" id="15" value="15"> -->
                     <label class="form-check-label">
                        Preparatoria o Bachillerato
                     </label>
                  </div>
                  <div class="custom-control custom-radio">
                     <!-- <input class="form-check-input" type="radio" name="nivelest" id="15" value="15"> -->
                     <label class="form-check-label">
                        Técnico Superior
                     </label>
                  </div>
                  <div class="custom-control custom-radio">
                     <!-- <input class="form-check-input" type="radio" name="nivelest" id="15" value="15"> -->
                     <label class="form-check-label">
                        Licenciatura
                     </label>
                  </div>
                  <div class="custom-control custom-radio">
                     <!-- <input class="form-check-input" type="radio" name="nivelest" id="15" value="15"> -->
                     <label class="form-check-label">
                        Maestría
                     </label>
                  </div>
                  <div class="custom-control custom-radio">
                     <!-- <input class="form-check-input" type="radio" name="nivelest" id="15" value="15"> -->
                     <label class="form-check-label">
                        Doctorado
                     </label>
                  </div>
               </div>
               <div class="col-sm-3">
                  <div class="custom-control custom-radio">
                     <!-- sin informacion -->
                     <input class="custom-control-input" type="radio" name="sininfo" id="20" value="20">
                     <label class="custom-control-label" for="20">

                     </label>
                  </div>
                  <div class="custom-control custom-radio">
                     <!-- primaria -->
                     <input class="custom-control-input" type="radio" name="primaria" id="21" value="21">
                     <label class="custom-control-label" for="21">
                        Terminada
                     </label>
                  </div>
                  <div class="custom-control custom-radio">
                     <!-- secundaria -->
                     <input class="custom-control-input" type="radio" name="secundaria" id="23" value="23">
                     <label class="custom-control-label" for="23">
                        Terminada
                     </label>
                  </div>
                  <div class="custom-control custom-radio">
                     <!-- preparatoria -->
                     <input class="custom-control-input" type="radio" name="preparatoria" id="25" value="25">
                     <label class="custom-control-label" for="25">
                        Terminada
                     </label>
                  </div>
                  <div class="custom-control custom-radio">
                     <!-- tecnico -->
                     <input class="custom-control-input" type="radio" name="tecnico" id="27" value="27">
                     <label class="custom-control-label" for="27">
                        Terminada
                     </label>
                  </div>
                  <div class="custom-control custom-radio">
                     <!-- licenciatura -->
                     <input class="custom-control-input" type="radio" name="licenciatura" id="29" value="29">
                     <label class="custom-control-label" for="29">
                        Terminada
                     </label>
                  </div>
                  <div class="custom-control custom-radio">
                     <!-- maestria -->
                     <input class="custom-control-input" type="radio" name="maestria" id="31" value="31">
                     <label class="custom-control-label" for="31">
                        Terminada
                     </label>
                  </div>
                  <div class="custom-control custom-radio">
                     <!-- doctorado -->
                     <input class="custom-control-input" type="radio" name="doctorado" id="33" value="33">
                     <label class="custom-control-label" for="33">
                        Terminada
                     </label>
                  </div>
               </div>
               <div class="col-sm-3">
                  <div class="custom-control custom-radio">
                     <!-- sin inromacion -->
                     <!-- <input class="form-check-input" type="radio" name="edocivil" id="18" value="18"> -->
                     <label class="form-check-label" for="18">

                     </label>
                  </div>
                  <div class="custom-control custom-radio">
                     <!-- primaria -->
                     <input class="custom-control-input" type="radio" name="primaria" id="22" value="22">
                     <label class="custom-control-label" for="22">
                        Incompleta
                     </label>
                  </div>
                  <div class="custom-control custom-radio">
                     <!-- secundaria -->
                     <input class="custom-control-input" type="radio" name="secundaria" id="24" value="24">
                     <label class="custom-control-label" for="24">
                        Incompleta
                     </label>
                  </div>
                  <div class="custom-control custom-radio">
                     <!-- preparatoria -->
                     <input class="custom-control-input" type="radio" name="preparatoria" id="26" value="26">
                     <label class="custom-control-label" for="26">
                        Incompleta
                     </label>
                  </div>
                  <div class="custom-control custom-radio">
                     <!-- tecnico -->
                     <input class="custom-control-input" type="radio" name="tecnico" id="28" value="28">
                     <label class="custom-control-label" for="28">
                        Incompleta
                     </label>
                  </div>
                  <div class="custom-control custom-radio">
                     <!-- licenciatura -->
                     <input class="custom-control-input" type="radio" name="licenciatura" id="30" value="30">
                     <label class="custom-control-label" for="30">
                        Incompleta
                     </label>
                  </div>
                  <div class="custom-control custom-radio">
                     <!-- maestria -->
                     <input class="custom-control-input" type="radio" name="maestria" id="32" value="32">
                     <label class="custom-control-label" for="32">
                        Incompleta
                     </label>
                  </div>
                  <div class="custom-control custom-radio">
                     <!-- doctorado -->
                     <input class="custom-control-input" type="radio" name="doctorado" id="34" value="34">
                     <label class="custom-control-label" for="34">
                        Incompleta
                     </label>
                  </div>
               </div>
            </div>
         </fieldset>

         <!-- Titulo Datos Laborales -->
         <div class="alert alert-danger text-left" role="alert">
            <h5>Datos Laborales</h5>
         </div>

         <!-- Ocupación/Profesión/Puesto -->
         <div class="form-group row">
            <label for="puesto" class="col-sm-3 col-form-label-lg">Profesión/Puesto</label>
            <div class="col-sm-9">
               <input type="text" class="form-control" id="puesto" name="puesto" placeholder="Ingrese su Ocupación o Profesión o Puesto" required>
            </div>
         </div>

         <!-- Departamento/Sección/Area -->
         <div class="form-group row">
            <label for="area" class="col-sm-3 col-form-label-lg">Departamento/Area</label>
            <div class="col-sm-9">
               <input type="text" class="form-control" id="area" name="area" placeholder="Ingrese su Departamento o Sección o Área" required>
            </div>
         </div>

         <!-- Opciones Tipo puesto -->
         <fieldset class="form-group">
            <div class="row">
               <legend class="col-form-label col-sm-3 pt-0 col-form-label-lg">Tipo de Puesto:</legend>
               <div class="col-sm-4">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="tipopuesto" id="35" value="35" required>
                     <label class="custom-control-label" for="35">
                        Operativo
                     </label>
                  </div>
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="tipopuesto" id="36" value="36" required>
                     <label class="custom-control-label" for="36">
                        Profesional o Técnico
                     </label>
                  </div>
               </div>
               <div class="col-sm-4">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="tipopuesto" id="37" value="37" required>
                     <label class="custom-control-label" for="37">
                        Supervisor
                     </label>
                  </div>
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="tipopuesto" id="38" value="38" required>
                     <label class="custom-control-label" for="38">
                        Gerente
                     </label>
                  </div>
               </div>
            </div>
         </fieldset>

         <!-- Opciones Tipo contratacion -->
         <fieldset class="form-group">
            <div class="row">
               <legend class="col-form-label col-sm-3 pt-0 col-form-label-lg">Tipo de Contratación:</legend>
               <div class="col-sm-4">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="tipocontratacion" id="39" value="39" required>
                     <label class="custom-control-label" for="39">
                        Por obra o proyecto
                     </label>
                  </div>
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="tipocontratacion" id="40" value="40" required>
                     <label class="custom-control-label" for="40">
                        Por tiempo determinado (Temporal)
                     </label>
                  </div>
               </div>
               <div class="col-sm-4">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="tipocontratacion" id="41" value="41" required>
                     <label class="custom-control-label" for="41">
                        Tiempo indeterminado
                     </label>
                  </div>
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="tipocontratacion" id="42" value="42" required>
                     <label class="custom-control-label" for="42">
                        Honorarios
                     </label>
                  </div>
               </div>
            </div>
         </fieldset>

         <!-- Opciones Tipo Personal -->
         <fieldset class="form-group">
            <div class="row">
               <legend class="col-form-label col-sm-3 pt-0 col-form-label-lg">Tipo de Personal:</legend>
               <div class="col-sm-4">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="tipopersonal" id="43" value="43" required>
                     <label class="custom-control-label" for="43">
                        Sindicalizado
                     </label>
                  </div>
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="tipopersonal" id="44" value="44" required>
                     <label class="custom-control-label" for="44">
                        Ninguno
                     </label>
                  </div>
               </div>
               <div class="col-sm-4">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="tipopersonal" id="45" value="45" required>
                     <label class="custom-control-label" for="45">
                        Confianza
                     </label>
                  </div>
               </div>
            </div>
         </fieldset>

         <!-- Opciones Tipo Jornada de Trabajo -->
         <fieldset class="form-group">
            <div class="row">
               <legend class="col-form-label col-sm-3 pt-0 col-form-label-lg">Tipo de Jornada de Trabajo:</legend>
               <div class="col-sm-4">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="tipojornadatrabajo" id="46" value="46" required>
                     <label class="custom-control-label" for="46">
                        Fijo norcturno(entre las 20:00 y 06:00 hrs)
                     </label>
                  </div>
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="tipojornadatrabajo" id="47" value="47" required>
                     <label class="custom-control-label" for="47">
                        Fijo diurno(entre las 06:00 y 20:00 hrs)
                     </label>
                  </div>
               </div>
               <div class="col-sm-4">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="tipojornadatrabajo" id="48" value="48" required>
                     <label class="custom-control-label" for="48">
                        Fijo mixto(combinación de nocturno y diurno)
                     </label>
                  </div>
               </div>
            </div>
         </fieldset>

         <!-- Opciones Rotación de turno -->
         <fieldset class="form-group">
            <div class="row">
               <legend class="col-form-label col-sm-3 pt-0 col-form-label-lg">Realiza Rotación de Turnos:</legend>
               <div class="col-sm-4">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="rotacionturnos" id="49" value="49" required>
                     <label class="custom-control-label" for="49">
                        Si
                     </label>
                  </div>
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="rotacionturnos" id="50" value="50" required>
                     <label class="custom-control-label" for="50">
                        No
                     </label>
                  </div>
               </div>
            </div>
         </fieldset>

         <!-- Experiencia en años -->
         <div class="form-group row">
            <label for="experienciayears" class="col-sm-3 col-form-label-lg">Experiencia(años):</label>
            <div class="col-sm-4">
               <input type="number" min="1" max="80" value="1" class="form-control" id="experienciayears" name="experienciayears">
            </div>
         </div>

         <!-- Opciones Tempo en el puesto actual -->
         <fieldset class="form-group">
            <div class="row">
               <legend class="col-form-label col-sm-3 pt-0 col-form-label-lg">Tiempo en el Puesto Actual:</legend>
               <div class="col-sm-4">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="tiempopuestoactual" id="51" value="51" required>
                     <label class="custom-control-label" for="51">
                        Menos de 6 meses
                     </label>
                  </div>
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="tiempopuestoactual" id="52" value="52" required>
                     <label class="custom-control-label" for="52">
                        Entre 6 meses y 1 año
                     </label>
                  </div>
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="tiempopuestoactual" id="53" value="53" required>
                     <label class="custom-control-label" for="53">
                        Entre 1 a 4 años
                     </label>
                  </div>
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="tiempopuestoactual" id="54" value="54" required>
                     <label class="custom-control-label" for="54">
                        Entre 5 a 9 años
                     </label>
                  </div>
               </div>
               <div class="col-sm-4">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="tiempopuestoactual" id="55" value="55" required>
                     <label class="custom-control-label" for="55">
                        Entre 10 a 14 años
                     </label>
                  </div>
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="tiempopuestoactual" id="56" value="56" required>
                     <label class="custom-control-label" for="56">
                        Entre 15 a 19 años
                     </label>
                  </div>
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="tiempopuestoactual" id="57" value="57" required>
                     <label class="custom-control-label" for="57">
                        Entre 20 a 24 años
                     </label>
                  </div>
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="tiempopuestoactual" id="58" value="58" required>
                     <label class="custom-control-label" for="58">
                        25 años a más
                     </label>
                  </div>
               </div>
            </div>
         </fieldset>

         <!-- Opciones Tiempo de experiencia Laboral -->
         <fieldset class="form-group">
            <div class="row">
               <legend class="col-form-label col-sm-3 pt-0 col-form-label-lg">Tiempo Experiencia Laboral:</legend>
               <div class="col-sm-4">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="tiempoexperiencia" id="59" value="59" required>
                     <label class="custom-control-label" for="59">
                        Menos de 6 meses
                     </label>
                  </div>
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="tiempoexperiencia" id="60" value="60" required>
                     <label class="custom-control-label" for="60">
                        Entre 6 meses y 1 año
                     </label>
                  </div>
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="tiempoexperiencia" id="61" value="61" required>
                     <label class="custom-control-label" for="61">
                        Entre 1 a 4 años
                     </label>
                  </div>
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="tiempoexperiencia" id="62" value="62" required>
                     <label class="custom-control-label" for="62">
                        Entre 5 a 9 años
                     </label>
                  </div>
               </div>
               <div class="col-sm-4">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="tiempoexperiencia" id="63" value="63" required>
                     <label class="custom-control-label" for="63">
                        Entre 10 a 14 años
                     </label>
                  </div>
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="tiempoexperiencia" id="64" value="64" required>
                     <label class="custom-control-label" for="64">
                        Entre 15 a 19 años
                     </label>
                  </div>
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="tiempoexperiencia" id="65" value="65" required>
                     <label class="custom-control-label" for="65">
                        Entre 20 a 24 años
                     </label>
                  </div>
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="tiempoexperiencia" id="66" value="66" required>
                     <label class="custom-control-label" for="66">
                        25 años a más
                     </label>
                  </div>
               </div>
            </div>
         </fieldset>

         <!-- BOTON GUARDAR CUESTIONARIO-->
         <div class="form-group row">
            <div class="col-sm-12">
               <button type="submit" class="btn btn-primary btn-lg btn-block">Guardar y continuar Fase II</button>
            </div>
         </div>
      </form>
   
   </div> <!-- Cierre container -->


<?php

   include_once 'footer.php';

?>