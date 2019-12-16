<?php

   include_once 'config.php';




   // if(!empty($_POST)) {
   //    // descargamos las variables por metodo get
   //    // $arrayPreguntas = array(
   //    //    1 => 1
   //    // );

   //       $idrSexo = $_POST['sexo'];
   //       $idrEdad = $_POST['edad'];
   //       $idrEstadoCivil = $_POST['edocivil'];

   //       if(!empty($_POST['sininfo'])) {$idrNEsinInfo = $_POST['sininfo'];} else {$idrNEsinInfo = "0";}
   //       if(!empty($_POST['primaria'])) {$idrNEprimaria = $_POST['primaria'];} else {$idrNEprimaria = "0";}
   //       if(!empty($_POST['secundaria'])) {$idrNEsecundaria = $_POST['secundaria'];} else {$idrNEsecundaria = "0";}
   //       if(!empty($_POST['preparatoria'])) {$idrNEpreparatoria = $_POST['preparatoria'];} else {$idrNEpreparatoria = "0";}
   //       if(!empty($_POST['tecnico'])) {$idrNEtecnico = $_POST['tecnico'];} else {$idrNEtecnico = "0";}
   //       if(!empty($_POST['licenciatura'])) {$idrNElicenciatura = $_POST['licenciatura'];} else {$idrNElicenciatura = "0";}
   //       if(!empty($_POST['maestria'])) {$idrNEmaestria = $_POST['maestria'];} else {$idrNEmaestria = "0";}
   //       if(!empty($_POST['doctorado'])) {$idrNEdoctorado = $_POST['doctorado'];} else {$idrNEdoctorado = "0";}

   //       $idrPuesto = $_POST['puesto'];
   //       $idrArea = $_POST['area'];
   //       $idrTipoPuesto = $_POST['tipopuesto'];
   //       $idrTipoContratacion = $_POST['tipocontratacion'];
   //       $idrTipoPersonal = $_POST['tipopersonal'];
   //       $idrTipoJornadaTrabajo = $_POST['tipojornadatrabajo'];
   //       $idrRotacionTurnos = $_POST['rotacionturnos'];
   //       $idrExperienciaYears = $_POST['experienciayears'];
   //       $idrTiempoPuestoActual = $_POST['tiempopuestoactual'];
   //       $idrTiempoExperiencia = $_POST['tiempoexperiencia'];


   //       var_dump($idrSexo);
   //       var_dump($idrEdad);
   //       var_dump($idrEstadoCivil);

   //       var_dump($idrNEsinInfo);
   //       var_dump($idrNEprimaria);
   //       var_dump($idrNEsecundaria);
   //       var_dump($idrNEpreparatoria);
   //       var_dump($idrNEtecnico);
   //       var_dump($idrNElicenciatura);
   //       var_dump($idrNEmaestria);
   //       var_dump($idrNEdoctorado);

   //       var_dump($idrPuesto);
   //       var_dump($idrArea);
   //       var_dump($idrTipoPuesto);
   //       var_dump($idrTipoContratacion);
   //       var_dump($idrTipoPersonal);
   //       var_dump($idrTipoJornadaTrabajo);
   //       var_dump($idrRotacionTurnos);
   //       var_dump($idrExperienciaYears);
   //       var_dump($idrTiempoPuestoActual);
   //       var_dump($idrTiempoExperiencia);

   // }

?>




<!doctype html>
<html lang="en">
   <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

      <title>PHP</title>
   </head>
   <body>

      <div class="container">

         <div class="accordion" id="accordionExample">

            <!-- Categoria 1 -->
            <div class="card mt-5">
               <div class="card-header" id="headingOne">
                  <h2 class="mb-0">
                  <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                     Fase I. Información del trabajador
                  </button>
                  </h2>
               </div>

               <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                  <div class="card-body">

                     <form action="respuestasfase1.php" method="POST">
                        <div class="alert alert-primary text-center" role="alert">
                           <h3>Datos Personales</h3>
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

                        <div class="alert alert-primary text-center" role="alert">
                           <h3>Datos Laborales</h3>
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
                              <button type="submit" class="btn btn-primary btn-lg btn-block">Guardar Cuestionario Fase I</button>
                           </div>
                        </div>
                     </form>
                     
                  </div>
               </div>
            </div>

            <!-- Categoria 2 -->
            <div class="card">
               <div class="card-header" id="headingTwo">
                  <h2 class="mb-0">
                  <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                     Fase II. Cuestionario para identificar a los trabajadores que fueron sujetos a acontecimientos traumáticos severos.
                  </button>
                  </h2>
               </div>
               <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                  <div class="card-body">
                     <form action="respuestasfase2.php" method="POST">
                        <div class="alert alert-danger" role="alert">
                           ¿Ha precenciado o sufrido alguna vez, durante o con motivo de trabajo un acontecimiento como los siguientes?
                        </div>

                        <!-- TITULO I -->
                        <div class="alert alert-primary text-center" role="alert">
                           <h3>I.- Aconteciomientos traumático severo</h3>
                        </div>                        

                        <!-- I -->
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
                                    <input class="custom-control-input" type="radio" name="sc3-15" id="67" value="67" required>
                                    <label class="custom-control-label " for="67">
                                       Si
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-1 border-bottom">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc3-15" id="68" value="68" required>
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
                                    <input class="custom-control-input" type="radio" name="sc3-16" id="69" value="69" required>
                                    <label class="custom-control-label" for="69">
                                       Si
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-1 border-bottom">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc3-16" id="70" value="70" required>
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
                                    <input class="custom-control-input" type="radio" name="sc3-17" id="71" value="71" required>
                                    <label class="custom-control-label" for="71">
                                       Si
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-1 border-bottom">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc3-17" id="72" value="72" required>
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
                                    <input class="custom-control-input" type="radio" name="sc3-18" id="73" value="73" required>
                                    <label class="custom-control-label" for="73">
                                       Si
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-1 border-bottom">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc3-18" id="74" value="74" required>
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
                                    <input class="custom-control-input" type="radio" name="sc3-19" id="75" value="75" required>
                                    <label class="custom-control-label" for="75">
                                       Si
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-1 border-bottom">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc3-19" id="76" value="76" required>
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
                                    <input class="custom-control-input" type="radio" name="sc3-20" id="77" value="77" required>
                                    <label class="custom-control-label" for="77">
                                       Si
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-1 border-bottom">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc3-20" id="78" value="78" required>
                                    <label class="custom-control-label" for="78">
                                       No
                                    </label>
                                 </div>
                              </div>
                           </div> 
                        </fieldset>

                        <!-- TITULO II -->
                        <div class="alert alert-primary text-center" role="alert">
                           <h3>II.- Recuerdos persistentes sobre el acontecimiento (durante el último mes):</h3>
                        </div>

                        <!-- II -->
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
                                    <input class="custom-control-input" type="radio" name="sc4-20" id="79" value="79" required>
                                    <label class="custom-control-label " for="79">
                                       Si
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-1 border-bottom">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc4-20" id="80" value="80" required>
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
                                    <input class="custom-control-input" type="radio" name="sc4-22" id="81" value="81" required>
                                    <label class="custom-control-label" for="81">
                                       Si
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-1 border-bottom">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc4-22" id="82" value="82" required>
                                    <label class="custom-control-label" for="82">
                                       No
                                    </label>
                                 </div>
                              </div>
                           </div>
                        </fieldset>

                        <!-- TITULO III -->
                        <div class="alert alert-primary text-center" role="alert">
                           <h3>III.- Esfuerzo por evitar circunstancias parecidas o asociadas al acontecimiento (durante el último mes):</h3>
                        </div>

                        <!-- III -->
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
                                    <input class="custom-control-input" type="radio" name="sc5-23" id="83" value="83" required>
                                    <label class="custom-control-label " for="83">
                                       Si
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-1 border-bottom">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc5-23" id="84" value="80" required>
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
                                    <input class="custom-control-input" type="radio" name="sc5-24" id="85" value="85" required>
                                    <label class="custom-control-label" for="85">
                                       Si
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-1 border-bottom">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc5-24" id="86" value="86" required>
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
                                    <input class="custom-control-input" type="radio" name="sc5-25" id="87" value="87" required>
                                    <label class="custom-control-label" for="87">
                                       Si
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-1 border-bottom">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc5-25" id="88" value="88" required>
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
                                    <input class="custom-control-input" type="radio" name="sc5-26" id="89" value="89" required>
                                    <label class="custom-control-label" for="89">
                                       Si
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-1 border-bottom">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc5-26" id="90" value="90" required>
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
                                    <input class="custom-control-input" type="radio" name="sc5-27" id="91" value="91" required>
                                    <label class="custom-control-label" for="91">
                                       Si
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-1 border-bottom">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc5-27" id="92" value="92" required>
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
                                    <input class="custom-control-input" type="radio" name="sc5-28" id="93" value="93" required>
                                    <label class="custom-control-label" for="93">
                                       Si
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-1 border-bottom">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc5-28" id="94" value="94" required>
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
                                    <input class="custom-control-input" type="radio" name="sc5-29" id="95" value="95" required>
                                    <label class="custom-control-label" for="95">
                                       Si
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-1 border-bottom">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc5-29" id="96" value="96" required>
                                    <label class="custom-control-label" for="96">
                                       No
                                    </label>
                                 </div>
                              </div>
                           </div>
                        </fieldset>

                        <!-- TITULO IV -->
                        <div class="alert alert-primary text-center" role="alert">
                           <h3>IV.- Afectación (durante el último mes):</h3>
                        </div>

                        <!-- IV -->
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
                                    <input class="custom-control-input" type="radio" name="sc6-30" id="97" value="97" required>
                                    <label class="custom-control-label " for="97">
                                       Si
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-1 border-bottom">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc6-30" id="98" value="98" required>
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
                                    <input class="custom-control-input" type="radio" name="sc6-31" id="99" value="99" required>
                                    <label class="custom-control-label" for="99">
                                       Si
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-1 border-bottom">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc6-31" id="100" value="100" required>
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
                                    <input class="custom-control-input" type="radio" name="sc6-32" id="101" value="101" required>
                                    <label class="custom-control-label" for="101">
                                       Si
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-1 border-bottom">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc6-32" id="102" value="102" required>
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
                                    <input class="custom-control-input" type="radio" name="sc6-33" id="103" value="103" required>
                                    <label class="custom-control-label" for="103">
                                       Si
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-1 border-bottom">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc6-33" id="104" value="104" required>
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
                                    <input class="custom-control-input" type="radio" name="sc6-34" id="105" value="105" required>
                                    <label class="custom-control-label" for="105">
                                       Si
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-1 border-bottom">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc6-34" id="106" value="106" required>
                                    <label class="custom-control-label" for="106">
                                       No
                                    </label>
                                 </div>
                              </div>
                           </div>
                        </fieldset>

                     </form>
                  </div>
               </div>
            </div>

            <!-- Categoria 3 -->
            <div class="card">
               <div class="card-header" id="headingThree">
                  <h2 class="mb-0">
                  <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                     Fase III. Cuestionario para identificar los factores de riesgo Psicosocial en los centros de trabajo.
                  </button>
                  </h2>
               </div>
               <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                  <div class="card-body">
                     <form action="respuestasfase2.php" method="POST">

                        <!-- SUB-TITULO 7 -->
                        <div class="alert alert-primary text-center" role="alert">
                           <h3>Para responder las preguntas siguientes considere las condiciones de su centro de trabajo, así como la cantidad y ritmo de trabajo.</h3>
                        </div> 
                        
                        <!-- PREGUNTAS SUB-TITULO 7 -->
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
                                    <input class="custom-control-input" type="radio" name="sc7-35" id="107" value="107" required>
                                    <label class="custom-control-label " for="107">
                                       Siempre
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc7-35" id="108" value="108" required>
                                    <label class="custom-control-label" for="108">
                                       Casi Siempre
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc7-35" id="109" value="109" required>
                                    <label class="custom-control-label" for="109">
                                       Algunas veces
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc7-35" id="110" value="110" required>
                                    <label class="custom-control-label" for="110">
                                       Casi nunca
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc7-35" id="111" value="111" required>
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
                                    <input class="custom-control-input" type="radio" name="sc7-36" id="112" value="112" required>
                                    <label class="custom-control-label " for="112">
                                       Siempre
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc7-36" id="113" value="113" required>
                                    <label class="custom-control-label" for="113">
                                       Casi Siempre
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc7-36" id="114" value="114" required>
                                    <label class="custom-control-label" for="114">
                                       Algunas veces
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc7-36" id="115" value="115" required>
                                    <label class="custom-control-label" for="115">
                                       Casi nunca
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2 ">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc7-36" id="116" value="116" required>
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
                                    <input class="custom-control-input" type="radio" name="sc7-37" id="117" value="117" required>
                                    <label class="custom-control-label " for="117">
                                       Siempre
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc7-37" id="118" value="118" required>
                                    <label class="custom-control-label" for="118">
                                       Casi Siempre
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc7-37" id="119" value="119" required>
                                    <label class="custom-control-label" for="119">
                                       Algunas veces
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc7-37" id="120" value="120" required>
                                    <label class="custom-control-label" for="120">
                                       Casi nunca
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2 ">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc7-37" id="121" value="121" required>
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
                                    <input class="custom-control-input" type="radio" name="sc7-38" id="122" value="122" required>
                                    <label class="custom-control-label " for="122">
                                       Siempre
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc7-38" id="123" value="123" required>
                                    <label class="custom-control-label" for="123">
                                       Casi Siempre
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc7-38" id="124" value="124" required>
                                    <label class="custom-control-label" for="124">
                                       Algunas veces
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc7-38" id="125" value="125" required>
                                    <label class="custom-control-label" for="125">
                                       Casi nunca
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2 ">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc7-38" id="126" value="126" required>
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
                                    <input class="custom-control-input" type="radio" name="sc7-39" id="127" value="127" required>
                                    <label class="custom-control-label " for="127">
                                       Siempre
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc7-39" id="128" value="128" required>
                                    <label class="custom-control-label" for="128">
                                       Casi Siempre
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc7-39" id="129" value="129" required>
                                    <label class="custom-control-label" for="129">
                                       Algunas veces
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc7-39" id="130" value="130" required>
                                    <label class="custom-control-label" for="130">
                                       Casi nunca
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2 ">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc7-39" id="131" value="131" required>
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
                                    <input class="custom-control-input" type="radio" name="sc7-40" id="132" value="132" required>
                                    <label class="custom-control-label " for="132">
                                       Siempre
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc7-40" id="133" value="133" required>
                                    <label class="custom-control-label" for="133">
                                       Casi Siempre
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc7-40" id="134" value="134" required>
                                    <label class="custom-control-label" for="134">
                                       Algunas veces
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc7-40" id="135" value="135" required>
                                    <label class="custom-control-label" for="135">
                                       Casi nunca
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2 ">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc7-40" id="136" value="136" required>
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
                                    <input class="custom-control-input" type="radio" name="sc7-41" id="137" value="137" required>
                                    <label class="custom-control-label " for="137">
                                       Siempre
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc7-41" id="138" value="138" required>
                                    <label class="custom-control-label" for="138">
                                       Casi Siempre
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc7-41" id="139" value="139" required>
                                    <label class="custom-control-label" for="139">
                                       Algunas veces
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc7-41" id="140" value="140" required>
                                    <label class="custom-control-label" for="140">
                                       Casi nunca
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2 ">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc7-41" id="141" value="141" required>
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
                                    <input class="custom-control-input" type="radio" name="sc7-42" id="142" value="142" required>
                                    <label class="custom-control-label " for="142">
                                       Siempre
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc7-42" id="143" value="143" required>
                                    <label class="custom-control-label" for="143">
                                       Casi Siempre
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc7-42" id="144" value="144" required>
                                    <label class="custom-control-label" for="144">
                                       Algunas veces
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc7-42" id="145" value="145" required>
                                    <label class="custom-control-label" for="145">
                                       Casi nunca
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2 ">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc7-42" id="146" value="146" required>
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
                                    <input class="custom-control-input" type="radio" name="sc7-43" id="147" value="147" required>
                                    <label class="custom-control-label " for="147">
                                       Siempre
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc7-43" id="148" value="148" required>
                                    <label class="custom-control-label" for="148">
                                       Casi Siempre
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc7-43" id="149" value="149" required>
                                    <label class="custom-control-label" for="149">
                                       Algunas veces
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc7-43" id="150" value="150" required>
                                    <label class="custom-control-label" for="150">
                                       Casi nunca
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2 ">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc7-43" id="151" value="151" required>
                                    <label class="custom-control-label" for="151">
                                       Nunca
                                    </label>
                                 </div>
                              </div>
                           </div> <!-- Cierre ROW respuestas pregunta 43 -->


                        </fieldset>

                        <!-- SUB-TITULO 8 -->
                        <div class="alert alert-primary text-center" role="alert">
                           <h3>Las preguntas siguientes están relacionadas con las actividades que realiza en su trabajo y las responsabilidades que tiene.</h3>
                        </div> 

                        <!-- PREGUNTAS SUB-TITULO 8 -->
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
                                    <input class="custom-control-input" type="radio" name="sc8-44" id="152" value="152" required>
                                    <label class="custom-control-label " for="152">
                                       Siempre
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc8-44" id="153" value="153" required>
                                    <label class="custom-control-label" for="153">
                                       Casi Siempre
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc8-44" id="154" value="154" required>
                                    <label class="custom-control-label" for="154">
                                       Algunas veces
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc8-44" id="155" value="155" required>
                                    <label class="custom-control-label" for="155">
                                       Casi nunca
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc8-44" id="156" value="156" required>
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
                                    <input class="custom-control-input" type="radio" name="sc8-45" id="157" value="157" required>
                                    <label class="custom-control-label " for="157">
                                       Siempre
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc8-45" id="158" value="158" required>
                                    <label class="custom-control-label" for="158">
                                       Casi Siempre
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc8-45" id="159" value="159" required>
                                    <label class="custom-control-label" for="159">
                                       Algunas veces
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc8-45" id="160" value="160" required>
                                    <label class="custom-control-label" for="160">
                                       Casi nunca
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2 ">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc8-45" id="161" value="161" required>
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
                                    <input class="custom-control-input" type="radio" name="sc8-46" id="162" value="162" required>
                                    <label class="custom-control-label " for="162">
                                       Siempre
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc8-46" id="163" value="163" required>
                                    <label class="custom-control-label" for="163">
                                       Casi Siempre
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc8-46" id="164" value="164" required>
                                    <label class="custom-control-label" for="164">
                                       Algunas veces
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc8-46" id="165" value="165" required>
                                    <label class="custom-control-label" for="165">
                                       Casi nunca
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2 ">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc8-46" id="166" value="166" required>
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
                                    <input class="custom-control-input" type="radio" name="sc8-47" id="167" value="167" required>
                                    <label class="custom-control-label " for="167">
                                       Siempre
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc8-47" id="168" value="168" required>
                                    <label class="custom-control-label" for="168">
                                       Casi Siempre
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc8-47" id="169" value="169" required>
                                    <label class="custom-control-label" for="169">
                                       Algunas veces
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc8-47" id="170" value="170" required>
                                    <label class="custom-control-label" for="170">
                                       Casi nunca
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2 ">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc8-47" id="171" value="171" required>
                                    <label class="custom-control-label" for="171">
                                       Nunca
                                    </label>
                                 </div>
                              </div>
                           </div> <!-- Cierre ROW respuestas pregunta 47 -->                           
                        </fieldset>

                        <!-- SUB-TITULO 9 -->
                        <div class="alert alert-primary text-center" role="alert">
                           <h3>Las preguntas siguientes están relacionadas con el tiempo destinado a su trabajo y sus responsabilidades familiares.</h3>
                        </div>

                        <!-- PREGUNTAS SUB-TITULO 9 -->
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
                                    <input class="custom-control-input" type="radio" name="sc9-48" id="172" value="172" required>
                                    <label class="custom-control-label " for="172">
                                       Siempre
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc9-48" id="173" value="173" required>
                                    <label class="custom-control-label" for="173">
                                       Casi Siempre
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc9-48" id="174" value="174" required>
                                    <label class="custom-control-label" for="174">
                                       Algunas veces
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc9-48" id="175" value="175" required>
                                    <label class="custom-control-label" for="175">
                                       Casi nunca
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc9-48" id="176" value="176" required>
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
                                    <input class="custom-control-input" type="radio" name="sc9-49" id="177" value="177" required>
                                    <label class="custom-control-label " for="177">
                                       Siempre
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc9-49" id="178" value="178" required>
                                    <label class="custom-control-label" for="178">
                                       Casi Siempre
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc9-49" id="179" value="179" required>
                                    <label class="custom-control-label" for="179">
                                       Algunas veces
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc9-49" id="180" value="180" required>
                                    <label class="custom-control-label" for="180">
                                       Casi nunca
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2 ">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc9-49" id="181" value="181" required>
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
                                    <input class="custom-control-input" type="radio" name="sc9-50" id="182" value="182" required>
                                    <label class="custom-control-label " for="182">
                                       Siempre
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc9-50" id="183" value="183" required>
                                    <label class="custom-control-label" for="183">
                                       Casi Siempre
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc9-50" id="184" value="184" required>
                                    <label class="custom-control-label" for="184">
                                       Algunas veces
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc9-50" id="185" value="185" required>
                                    <label class="custom-control-label" for="185">
                                       Casi nunca
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2 ">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc9-50" id="186" value="186" required>
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
                                    <input class="custom-control-input" type="radio" name="sc9-51" id="187" value="187" required>
                                    <label class="custom-control-label " for="187">
                                       Siempre
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc9-51" id="188" value="188" required>
                                    <label class="custom-control-label" for="188">
                                       Casi Siempre
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc9-51" id="189" value="189" required>
                                    <label class="custom-control-label" for="189">
                                       Algunas veces
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc9-51" id="190" value="190" required>
                                    <label class="custom-control-label" for="190">
                                       Casi nunca
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2 ">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc9-51" id="191" value="191" required>
                                    <label class="custom-control-label" for="191">
                                       Nunca
                                    </label>
                                 </div>
                              </div>
                           </div> <!-- Cierre ROW respuestas pregunta 51 -->                           
                        </fieldset>

                        <!-- SUB-TITULO 10 -->
                        <div class="alert alert-primary text-center" role="alert">
                           <h3>Las preguntas siguientes están relacionadas con las decisiones que puede tomar en su trabajo.</h3>
                        </div>

                        <!-- PREGUNTAS SUB-TITULO 10 -->
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
                                    <input class="custom-control-input" type="radio" name="sc10-52" id="192" value="192" required>
                                    <label class="custom-control-label " for="192">
                                       Siempre
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc10-52" id="193" value="193" required>
                                    <label class="custom-control-label" for="193">
                                       Casi Siempre
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc10-52" id="194" value="194" required>
                                    <label class="custom-control-label" for="194">
                                       Algunas veces
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc10-52" id="195" value="195" required>
                                    <label class="custom-control-label" for="195">
                                       Casi nunca
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc10-52" id="196" value="196" required>
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
                                    <input class="custom-control-input" type="radio" name="sc10-53" id="197" value="197" required>
                                    <label class="custom-control-label " for="197">
                                       Siempre
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc10-53" id="198" value="198" required>
                                    <label class="custom-control-label" for="198">
                                       Casi Siempre
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc10-53" id="199" value="199" required>
                                    <label class="custom-control-label" for="199">
                                       Algunas veces
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc10-53" id="200" value="200" required>
                                    <label class="custom-control-label" for="200">
                                       Casi nunca
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2 ">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc10-53" id="201" value="201" required>
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
                                    <input class="custom-control-input" type="radio" name="sc10-54" id="202" value="202" required>
                                    <label class="custom-control-label " for="202">
                                       Siempre
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc10-54" id="203" value="203" required>
                                    <label class="custom-control-label" for="203">
                                       Casi Siempre
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc10-54" id="204" value="204" required>
                                    <label class="custom-control-label" for="204">
                                       Algunas veces
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc10-54" id="205" value="205" required>
                                    <label class="custom-control-label" for="205">
                                       Casi nunca
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2 ">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc10-54" id="206" value="206" required>
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
                                    <input class="custom-control-input" type="radio" name="sc10-55" id="207" value="207" required>
                                    <label class="custom-control-label " for="207">
                                       Siempre
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc10-55" id="208" value="208" required>
                                    <label class="custom-control-label" for="208">
                                       Casi Siempre
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc10-55" id="209" value="209" required>
                                    <label class="custom-control-label" for="209">
                                       Algunas veces
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc10-55" id="210" value="210" required>
                                    <label class="custom-control-label" for="210">
                                       Casi nunca
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2 ">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc10-55" id="211" value="211" required>
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
                                    <input class="custom-control-input" type="radio" name="sc10-56" id="212" value="212" required>
                                    <label class="custom-control-label " for="212">
                                       Siempre
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc10-56" id="213" value="213" required>
                                    <label class="custom-control-label" for="213">
                                       Casi Siempre
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc10-56" id="214" value="214" required>
                                    <label class="custom-control-label" for="214">
                                       Algunas veces
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc10-56" id="215" value="215" required>
                                    <label class="custom-control-label" for="215">
                                       Casi nunca
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2 ">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc10-56" id="216" value="216" required>
                                    <label class="custom-control-label" for="216">
                                       Nunca
                                    </label>
                                 </div>
                              </div>
                           </div> <!-- Cierre ROW respuestas pregunta 56 -->                           
                        </fieldset>

                        <!-- SUB-TITULO 11 -->
                        <div class="alert alert-primary text-center" role="alert">
                           <h3>Las preguntas siguientes están relacionadas con la capacitación e información que recibe sobre su trabajo.</h3>
                        </div>

                        <!-- PREGUNTAS SUB-TITULO 11 -->
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
                                    <input class="custom-control-input" type="radio" name="sc11-57" id="217" value="217" required>
                                    <label class="custom-control-label " for="217">
                                       Siempre
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc11-57" id="218" value="218" required>
                                    <label class="custom-control-label" for="218">
                                       Casi Siempre
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc11-57" id="219" value="219" required>
                                    <label class="custom-control-label" for="219">
                                       Algunas veces
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc11-57" id="220" value="220" required>
                                    <label class="custom-control-label" for="220">
                                       Casi nunca
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc11-57" id="221" value="221" required>
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
                                    <input class="custom-control-input" type="radio" name="sc11-58" id="222" value="222" required>
                                    <label class="custom-control-label " for="222">
                                       Siempre
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc11-58" id="223" value="223" required>
                                    <label class="custom-control-label" for="223">
                                       Casi Siempre
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc11-58" id="224" value="224" required>
                                    <label class="custom-control-label" for="224">
                                       Algunas veces
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc11-58" id="225" value="225" required>
                                    <label class="custom-control-label" for="225">
                                       Casi nunca
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2 ">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc11-58" id="226" value="226" required>
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
                                    <input class="custom-control-input" type="radio" name="sc11-54" id="227" value="227" required>
                                    <label class="custom-control-label " for="227">
                                       Siempre
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc11-54" id="228" value="228" required>
                                    <label class="custom-control-label" for="228">
                                       Casi Siempre
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc11-54" id="229" value="229" required>
                                    <label class="custom-control-label" for="229">
                                       Algunas veces
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc11-54" id="230" value="230" required>
                                    <label class="custom-control-label" for="230">
                                       Casi nunca
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2 ">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc11-54" id="231" value="231" required>
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
                                    <input class="custom-control-input" type="radio" name="sc11-55" id="232" value="232" required>
                                    <label class="custom-control-label " for="232">
                                       Siempre
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc11-55" id="233" value="233" required>
                                    <label class="custom-control-label" for="233">
                                       Casi Siempre
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc11-55" id="234" value="234" required>
                                    <label class="custom-control-label" for="234">
                                       Algunas veces
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc11-55" id="235" value="235" required>
                                    <label class="custom-control-label" for="235">
                                       Casi nunca
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2 ">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc11-55" id="236" value="236" required>
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
                                    <input class="custom-control-input" type="radio" name="sc11-56" id="237" value="237" required>
                                    <label class="custom-control-label " for="237">
                                       Siempre
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc11-56" id="238" value="238" required>
                                    <label class="custom-control-label" for="238">
                                       Casi Siempre
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc11-56" id="239" value="239" required>
                                    <label class="custom-control-label" for="239">
                                       Algunas veces
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc11-56" id="240" value="240" required>
                                    <label class="custom-control-label" for="240">
                                       Casi nunca
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2 ">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc11-56" id="241" value="241" required>
                                    <label class="custom-control-label" for="241">
                                       Nunca
                                    </label>
                                 </div>
                              </div>
                           </div> <!-- Cierre ROW respuestas pregunta 61 -->
                        </fieldset>

                        <!-- SUB-TITULO 12 -->
                        <div class="alert alert-primary text-center" role="alert">
                           <h3>Las preguntas siguientes se refieren a las relaciones con sus compañeros de trabajo y su jefe.</h3>
                        </div>

                        <!-- PREGUNTAS SUB-TITULO 12 -->
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
                                    <input class="custom-control-input" type="radio" name="sc12-62" id="242" value="242" required>
                                    <label class="custom-control-label " for="242">
                                       Siempre
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc12-62" id="243" value="243" required>
                                    <label class="custom-control-label" for="243">
                                       Casi Siempre
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc12-62" id="244" value="244" required>
                                    <label class="custom-control-label" for="244">
                                       Algunas veces
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc12-62" id="245" value="245" required>
                                    <label class="custom-control-label" for="245">
                                       Casi nunca
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc12-62" id="246" value="246" required>
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
                                    <input class="custom-control-input" type="radio" name="sc12-63" id="247" value="247" required>
                                    <label class="custom-control-label " for="247">
                                       Siempre
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc12-63" id="248" value="248" required>
                                    <label class="custom-control-label" for="248">
                                       Casi Siempre
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc12-63" id="249" value="249" required>
                                    <label class="custom-control-label" for="249">
                                       Algunas veces
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc12-63" id="250" value="250" required>
                                    <label class="custom-control-label" for="250">
                                       Casi nunca
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2 ">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc12-63" id="251" value="251" required>
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
                                    <input class="custom-control-input" type="radio" name="sc12-64" id="252" value="252" required>
                                    <label class="custom-control-label " for="252">
                                       Siempre
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc12-64" id="253" value="253" required>
                                    <label class="custom-control-label" for="253">
                                       Casi Siempre
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc12-64" id="254" value="254" required>
                                    <label class="custom-control-label" for="254">
                                       Algunas veces
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc12-64" id="255" value="255" required>
                                    <label class="custom-control-label" for="255">
                                       Casi nunca
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2 ">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc12-64" id="256" value="256" required>
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
                                    <input class="custom-control-input" type="radio" name="sc12-65" id="257" value="257" required>
                                    <label class="custom-control-label " for="257">
                                       Siempre
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc12-65" id="258" value="258" required>
                                    <label class="custom-control-label" for="258">
                                       Casi Siempre
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc12-65" id="259" value="259" required>
                                    <label class="custom-control-label" for="259">
                                       Algunas veces
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc12-65" id="260" value="260" required>
                                    <label class="custom-control-label" for="260">
                                       Casi nunca
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2 ">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc12-65" id="261" value="261" required>
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
                                    <input class="custom-control-input" type="radio" name="sc12-66" id="262" value="262" required>
                                    <label class="custom-control-label " for="262">
                                       Siempre
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc12-66" id="263" value="263" required>
                                    <label class="custom-control-label" for="263">
                                       Casi Siempre
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc12-66" id="264" value="264" required>
                                    <label class="custom-control-label" for="264">
                                       Algunas veces
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc12-66" id="265" value="265" required>
                                    <label class="custom-control-label" for="265">
                                       Casi nunca
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2 ">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc12-66" id="266" value="266" required>
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
                                    <input class="custom-control-input" type="radio" name="sc12-67" id="267" value="267" required>
                                    <label class="custom-control-label " for="267">
                                       Siempre
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc12-67" id="268" value="268" required>
                                    <label class="custom-control-label" for="268">
                                       Casi Siempre
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc12-67" id="269" value="269" required>
                                    <label class="custom-control-label" for="269">
                                       Algunas veces
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc12-67" id="270" value="270" required>
                                    <label class="custom-control-label" for="270">
                                       Casi nunca
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2 ">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc12-67" id="271" value="271" required>
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
                                    <input class="custom-control-input" type="radio" name="sc12-68" id="272" value="272" required>
                                    <label class="custom-control-label " for="272">
                                       Siempre
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc12-68" id="273" value="273" required>
                                    <label class="custom-control-label" for="273">
                                       Casi Siempre
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc12-68" id="274" value="274" required>
                                    <label class="custom-control-label" for="274">
                                       Algunas veces
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc12-68" id="275" value="275" required>
                                    <label class="custom-control-label" for="275">
                                       Casi nunca
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2 ">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc12-68" id="276" value="276" required>
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
                                    <input class="custom-control-input" type="radio" name="sc12-69" id="277" value="277" required>
                                    <label class="custom-control-label " for="277">
                                       Siempre
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc12-69" id="278" value="278" required>
                                    <label class="custom-control-label" for="278">
                                       Casi Siempre
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc12-69" id="279" value="279" required>
                                    <label class="custom-control-label" for="279">
                                       Algunas veces
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc12-69" id="280" value="280" required>
                                    <label class="custom-control-label" for="280">
                                       Casi nunca
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2 ">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc12-69" id="281" value="281" required>
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
                                    <input class="custom-control-input" type="radio" name="sc12-70" id="282" value="282" required>
                                    <label class="custom-control-label " for="282">
                                       Siempre
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc12-70" id="283" value="283" required>
                                    <label class="custom-control-label" for="283">
                                       Casi Siempre
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc12-70" id="284" value="284" required>
                                    <label class="custom-control-label" for="284">
                                       Algunas veces
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc12-70" id="285" value="285" required>
                                    <label class="custom-control-label" for="285">
                                       Casi nunca
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2 ">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc12-70" id="286" value="286" required>
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
                                    <input class="custom-control-input" type="radio" name="sc12-71" id="287" value="287" required>
                                    <label class="custom-control-label " for="287">
                                       Siempre
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc12-71" id="288" value="288" required>
                                    <label class="custom-control-label" for="288">
                                       Casi Siempre
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc12-71" id="289" value="289" required>
                                    <label class="custom-control-label" for="289">
                                       Algunas veces
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc12-71" id="290" value="290" required>
                                    <label class="custom-control-label" for="290">
                                       Casi nunca
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2 ">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc12-71" id="291" value="291" required>
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
                                    <input class="custom-control-input" type="radio" name="sc12-72" id="292" value="292" required>
                                    <label class="custom-control-label " for="292">
                                       Siempre
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc12-72" id="293" value="293" required>
                                    <label class="custom-control-label" for="293">
                                       Casi Siempre
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc12-72" id="294" value="294" required>
                                    <label class="custom-control-label" for="294">
                                       Algunas veces
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc12-72" id="295" value="295" required>
                                    <label class="custom-control-label" for="295">
                                       Casi nunca
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2 ">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc12-72" id="296" value="296" required>
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
                                    <input class="custom-control-input" type="radio" name="sc12-73" id="297" value="297" required>
                                    <label class="custom-control-label " for="297">
                                       Siempre
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc12-73" id="298" value="298" required>
                                    <label class="custom-control-label" for="298">
                                       Casi Siempre
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc12-73" id="299" value="299" required>
                                    <label class="custom-control-label" for="299">
                                       Algunas veces
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc12-73" id="300" value="300" required>
                                    <label class="custom-control-label" for="300">
                                       Casi nunca
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2 ">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc12-73" id="301" value="301" required>
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
                                    <input class="custom-control-input" type="radio" name="sc12-74" id="302" value="302" required>
                                    <label class="custom-control-label " for="302">
                                       Siempre
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc12-74" id="303" value="303" required>
                                    <label class="custom-control-label" for="303">
                                       Casi Siempre
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc12-74" id="304" value="304" required>
                                    <label class="custom-control-label" for="304">
                                       Algunas veces
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc12-74" id="305" value="305" required>
                                    <label class="custom-control-label" for="305">
                                       Casi nunca
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2 ">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc12-74" id="306" value="306" required>
                                    <label class="custom-control-label" for="306">
                                       Nunca
                                    </label>
                                 </div>
                              </div>
                           </div> <!-- Cierre ROW respuestas pregunta 74 -->
                        </fieldset>

                        <!-- SUB-TITULO 13 -->
                        <div class="alert alert-primary text-center" role="alert">
                           <h3>Las preguntas siguientes están relacionadas con la atención a clientes y usuarios.</h3>
                        </div>

                        <!-- PREGUNTAS SUB-TITULO 13 -->
                        <fieldset class="form-group">
                           <!-- |21| PREGUNTA -->
                           <div class="row">                                 
                              <div class="col-sm-10">
                                 <legend class="col-form-label  pt-0 col-form-label-md border-bottom">
                                 En mi trabajo debo brindar servicio a clientes o usuarios:
                                 </legend>
                              </div>   
                              <div class="col-sm-1 border-bottom">
                                 <div class="custom-control custom-radio ">
                                    <input class="custom-control-input" type="radio" name="sc13-75" id="307" value="307" required>
                                    <label class="custom-control-label " for="307">
                                       Si
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-1 border-bottom">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc13-75" id="308" value="308" required>
                                    <label class="custom-control-label" for="308">
                                       No
                                    </label>
                                 </div>
                              </div>
                           </div>                            
                        </fieldset>                        

                        <!-- RESPONDE SI - MUESTRA PREGUNTAS SUBCAT-14
                             RESPONDE NO - MUESTRA PREGUNTA SUBCAT-15 Y PREGUNTA 79
                                RESPONDE SI - MUESTRA PREGUNTAS SUBCAT-16
                                RESPONDE NO - CONCLUYE CATEGORIA III
                        -->

                                             
                     </form>
                  </div>
               </div>
            </div>

            <!-- Categoria 4 -->
            <div class="card">
               <div class="card-header" id="headingThree">
                  <h2 class="mb-0">
                  <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                     Fase IV. Cuestionario para identificar los factores de riesgo Psicosocial y evaluar el entorno organizacional en los centros de trabajo.
                  </button>
                  </h2>
               </div>
               <div id="collapseFour" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                  <div class="card-body">
                    <form action="respuestasfase4.php" method="POST">
                    
                        <!-- SUB-TITULO 17 -->
                        <div class="alert alert-primary text-center" role="alert">
                           <h3>Para responder las preguntas siguientes considere las condiciones ambientales de su centro de trabajo.</h3>
                        </div>

                        <!-- PREGUNTAS SUB-TITULO 17 -->
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
                                    <input class="custom-control-input" type="radio" name="sc17-83" id="341" value="341" required>
                                    <label class="custom-control-label " for="341">
                                       Siempre
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc17-83" id="342" value="342" required>
                                    <label class="custom-control-label" for="342">
                                       Casi Siempre
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc17-83" id="343" value="343" required>
                                    <label class="custom-control-label" for="343">
                                       Algunas veces
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc17-83" id="344" value="344" required>
                                    <label class="custom-control-label" for="344">
                                       Casi nunca
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc17-83" id="345" value="345" required>
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
                                    <input class="custom-control-input" type="radio" name="sc17-84" id="346" value="346" required>
                                    <label class="custom-control-label " for="346">
                                       Siempre
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc17-84" id="347" value="347" required>
                                    <label class="custom-control-label" for="347">
                                       Casi Siempre
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc17-84" id="348" value="348" required>
                                    <label class="custom-control-label" for="348">
                                       Algunas veces
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc17-84" id="349" value="349" required>
                                    <label class="custom-control-label" for="349">
                                       Casi nunca
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2 ">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc17-84" id="350" value="350" required>
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
                                    <input class="custom-control-input" type="radio" name="sc17-85" id="351" value="351" required>
                                    <label class="custom-control-label " for="351">
                                       Siempre
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc17-85" id="352" value="352" required>
                                    <label class="custom-control-label" for="352">
                                       Casi Siempre
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc17-85" id="353" value="353" required>
                                    <label class="custom-control-label" for="353">
                                       Algunas veces
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc17-85" id="354" value="354" required>
                                    <label class="custom-control-label" for="354">
                                       Casi nunca
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2 ">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc17-85" id="355" value="355" required>
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
                                    <input class="custom-control-input" type="radio" name="sc17-86" id="356" value="356" required>
                                    <label class="custom-control-label " for="356">
                                       Siempre
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc17-86" id="357" value="357" required>
                                    <label class="custom-control-label" for="357">
                                       Casi Siempre
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc17-86" id="358" value="358" required>
                                    <label class="custom-control-label" for="358">
                                       Algunas veces
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc17-86" id="359" value="359" required>
                                    <label class="custom-control-label" for="359">
                                       Casi nunca
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2 ">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc17-86" id="360" value="360" required>
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
                                    <input class="custom-control-input" type="radio" name="sc17-87" id="361" value="361" required>
                                    <label class="custom-control-label " for="361">
                                       Siempre
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc17-87" id="362" value="362" required>
                                    <label class="custom-control-label" for="362">
                                       Casi Siempre
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc17-87" id="363" value="363" required>
                                    <label class="custom-control-label" for="363">
                                       Algunas veces
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc17-87" id="364" value="364" required>
                                    <label class="custom-control-label" for="364">
                                       Casi nunca
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2 ">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc17-87" id="365" value="365" required>
                                    <label class="custom-control-label" for="365">
                                       Nunca
                                    </label>
                                 </div>
                              </div>
                           </div> <!-- Cierre ROW respuestas pregunta 87 -->
                        </fieldset>

                        <!-- SUB-TITULO 18 -->
                        <div class="alert alert-primary text-center" role="alert">
                           <h3>Para responder a las preguntas siguientes piense en la cantidad y ritmo de trabajo que tiene.</h3>
                        </div>

                        <!-- PREGUNTAS SUB-TITULO 18 -->
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
                                    <input class="custom-control-input" type="radio" name="sc18-88" id="366" value="366" required>
                                    <label class="custom-control-label " for="366">
                                       Siempre
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc18-88" id="367" value="367" required>
                                    <label class="custom-control-label" for="367">
                                       Casi Siempre
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc18-88" id="368" value="368" required>
                                    <label class="custom-control-label" for="368">
                                       Algunas veces
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc18-88" id="369" value="369" required>
                                    <label class="custom-control-label" for="369">
                                       Casi nunca
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc18-88" id="370" value="370" required>
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
                                    <input class="custom-control-input" type="radio" name="sc18-89" id="371" value="371" required>
                                    <label class="custom-control-label " for="371">
                                       Siempre
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc18-89" id="372" value="372" required>
                                    <label class="custom-control-label" for="372">
                                       Casi Siempre
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc18-89" id="373" value="373" required>
                                    <label class="custom-control-label" for="373">
                                       Algunas veces
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc18-89" id="374" value="374" required>
                                    <label class="custom-control-label" for="374">
                                       Casi nunca
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2 ">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc18-89" id="375" value="375" required>
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
                                    <input class="custom-control-input" type="radio" name="sc18-90" id="376" value="376" required>
                                    <label class="custom-control-label " for="376">
                                       Siempre
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc18-90" id="377" value="377" required>
                                    <label class="custom-control-label" for="377">
                                       Casi Siempre
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc18-90" id="378" value="378" required>
                                    <label class="custom-control-label" for="378">
                                       Algunas veces
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc18-90" id="379" value="379" required>
                                    <label class="custom-control-label" for="379">
                                       Casi nunca
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2 ">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc18-90" id="380" value="380" required>
                                    <label class="custom-control-label" for="380">
                                       Nunca
                                    </label>
                                 </div>
                              </div>
                           </div> <!-- Cierre ROW respuestas pregunta 90 -->


                        </fieldset>

                        <!-- SUB-TITULO 19 -->
                        <div class="alert alert-primary text-center" role="alert">
                           <h3>Las preguntas siguientes están relacionadas con el esfuerzo mental que le exige su trabajo.</h3>
                        </div>

                        <!-- PREGUNTAS SUB-TITULO 19 -->
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
                                    <input class="custom-control-input" type="radio" name="sc19-91" id="381" value="381" required>
                                    <label class="custom-control-label " for="381">
                                       Siempre
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc19-91" id="382" value="382" required>
                                    <label class="custom-control-label" for="382">
                                       Casi Siempre
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc19-91" id="383" value="383" required>
                                    <label class="custom-control-label" for="383">
                                       Algunas veces
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc19-91" id="384" value="384" required>
                                    <label class="custom-control-label" for="384">
                                       Casi nunca
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc19-91" id="385" value="385" required>
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
                                    <input class="custom-control-input" type="radio" name="sc19-92" id="386" value="386" required>
                                    <label class="custom-control-label " for="386">
                                       Siempre
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc19-92" id="387" value="387" required>
                                    <label class="custom-control-label" for="387">
                                       Casi Siempre
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc19-92" id="388" value="388" required>
                                    <label class="custom-control-label" for="388">
                                       Algunas veces
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc19-92" id="389" value="389" required>
                                    <label class="custom-control-label" for="389">
                                       Casi nunca
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2 ">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc19-92" id="390" value="390" required>
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
                                    <input class="custom-control-input" type="radio" name="sc19-93" id="391" value="391" required>
                                    <label class="custom-control-label " for="391">
                                       Siempre
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc19-93" id="392" value="392" required>
                                    <label class="custom-control-label" for="392">
                                       Casi Siempre
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc19-93" id="393" value="393" required>
                                    <label class="custom-control-label" for="393">
                                       Algunas veces
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc19-93" id="394" value="394" required>
                                    <label class="custom-control-label" for="394">
                                       Casi nunca
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2 ">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc19-93" id="395" value="395" required>
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
                                    <input class="custom-control-input" type="radio" name="sc19-94" id="396" value="396" required>
                                    <label class="custom-control-label " for="396">
                                       Siempre
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc19-94" id="397" value="397" required>
                                    <label class="custom-control-label" for="397">
                                       Casi Siempre
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc19-94" id="398" value="398" required>
                                    <label class="custom-control-label" for="398">
                                       Algunas veces
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc19-94" id="399" value="399" required>
                                    <label class="custom-control-label" for="399">
                                       Casi nunca
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2 ">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc19-94" id="400" value="400" required>
                                    <label class="custom-control-label" for="400">
                                       Nunca
                                    </label>
                                 </div>
                              </div>
                           </div> <!-- Cierre ROW respuestas pregunta 94 -->


                        </fieldset>

                        <!-- SUB-TITULO 20 -->
                        <div class="alert alert-primary text-center" role="alert">
                           <h3>Las preguntas siguientes están relacionadas con las actividades que realiza en su trabajo y las responsabilidades que tiene.</h3>
                        </div>

                        <!-- PREGUNTAS SUB-TITULO 20 -->
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
                                    <input class="custom-control-input" type="radio" name="sc20-95" id="401" value="401" required>
                                    <label class="custom-control-label " for="401">
                                       Siempre
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc20-95" id="402" value="402" required>
                                    <label class="custom-control-label" for="402">
                                       Casi Siempre
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc20-95" id="403" value="403" required>
                                    <label class="custom-control-label" for="403">
                                       Algunas veces
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc20-95" id="404" value="404" required>
                                    <label class="custom-control-label" for="404">
                                       Casi nunca
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc20-95" id="405" value="405" required>
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
                                    <input class="custom-control-input" type="radio" name="sc20-96" id="406" value="406" required>
                                    <label class="custom-control-label " for="406">
                                       Siempre
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc20-96" id="407" value="407" required>
                                    <label class="custom-control-label" for="407">
                                       Casi Siempre
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc20-96" id="408" value="408" required>
                                    <label class="custom-control-label" for="408">
                                       Algunas veces
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc20-96" id="409" value="409" required>
                                    <label class="custom-control-label" for="409">
                                       Casi nunca
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2 ">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc20-96" id="410" value="410" required>
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
                                    <input class="custom-control-input" type="radio" name="sc20-97" id="411" value="411" required>
                                    <label class="custom-control-label " for="411">
                                       Siempre
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc20-97" id="412" value="412" required>
                                    <label class="custom-control-label" for="412">
                                       Casi Siempre
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc20-97" id="413" value="413" required>
                                    <label class="custom-control-label" for="413">
                                       Algunas veces
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc20-97" id="414" value="414" required>
                                    <label class="custom-control-label" for="414">
                                       Casi nunca
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2 ">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc20-97" id="415" value="415" required>
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
                                    <input class="custom-control-input" type="radio" name="sc20-98" id="416" value="416" required>
                                    <label class="custom-control-label " for="416">
                                       Siempre
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc20-98" id="417" value="417" required>
                                    <label class="custom-control-label" for="417">
                                       Casi Siempre
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc20-98" id="418" value="418" required>
                                    <label class="custom-control-label" for="418">
                                       Algunas veces
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc20-98" id="419" value="419" required>
                                    <label class="custom-control-label" for="419">
                                       Casi nunca
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2 ">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc20-98" id="420" value="420" required>
                                    <label class="custom-control-label" for="420">
                                       Nunca
                                    </label>
                                 </div>
                              </div>
                           </div> <!-- Cierre ROW respuestas pregunta 98 -->


                        </fieldset>

                        <!-- SUB-TITULO 21 -->
                        <div class="alert alert-primary text-center" role="alert">
                           <h3>Las preguntas siguientes están relacionadas con su jornada de trabajo.</h3>
                        </div>

                        <!-- PREGUNTAS SUB-TITULO 21 -->
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
                                    <input class="custom-control-input" type="radio" name="sc21-99" id="421" value="421" required>
                                    <label class="custom-control-label " for="421">
                                       Siempre
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc21-99" id="422" value="422" required>
                                    <label class="custom-control-label" for="422">
                                       Casi Siempre
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc21-99" id="423" value="423" required>
                                    <label class="custom-control-label" for="423">
                                       Algunas veces
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc21-99" id="424" value="424" required>
                                    <label class="custom-control-label" for="424">
                                       Casi nunca
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc21-99" id="425" value="425" required>
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
                                    <input class="custom-control-input" type="radio" name="sc21-100" id="426" value="426" required>
                                    <label class="custom-control-label " for="426">
                                       Siempre
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc21-100" id="427" value="427" required>
                                    <label class="custom-control-label" for="427">
                                       Casi Siempre
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc21-100" id="428" value="428" required>
                                    <label class="custom-control-label" for="428">
                                       Algunas veces
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc21-100" id="429" value="429" required>
                                    <label class="custom-control-label" for="429">
                                       Casi nunca
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2 ">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc21-100" id="430" value="430" required>
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
                                    <input class="custom-control-input" type="radio" name="sc21-101" id="431" value="431" required>
                                    <label class="custom-control-label " for="431">
                                       Siempre
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc21-101" id="432" value="432" required>
                                    <label class="custom-control-label" for="432">
                                       Casi Siempre
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc21-101" id="433" value="433" required>
                                    <label class="custom-control-label" for="433">
                                       Algunas veces
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc21-101" id="434" value="434" required>
                                    <label class="custom-control-label" for="434">
                                       Casi nunca
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2 ">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc21-101" id="435" value="435" required>
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
                                    <input class="custom-control-input" type="radio" name="sc21-102" id="436" value="436" required>
                                    <label class="custom-control-label " for="436">
                                       Siempre
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc21-102" id="437" value="437" required>
                                    <label class="custom-control-label" for="437">
                                       Casi Siempre
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc21-102" id="438" value="438" required>
                                    <label class="custom-control-label" for="438">
                                       Algunas veces
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc21-102" id="439" value="439" required>
                                    <label class="custom-control-label" for="439">
                                       Casi nunca
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2 ">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc21-102" id="440" value="440" required>
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
                                    <input class="custom-control-input" type="radio" name="sc21-103" id="441" value="441" required>
                                    <label class="custom-control-label " for="441">
                                       Siempre
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc21-103" id="442" value="442" required>
                                    <label class="custom-control-label" for="442">
                                       Casi Siempre
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc21-103" id="443" value="443" required>
                                    <label class="custom-control-label" for="443">
                                       Algunas veces
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc21-103" id="444" value="444" required>
                                    <label class="custom-control-label" for="444">
                                       Casi nunca
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2 ">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc21-103" id="445" value="445" required>
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
                                    <input class="custom-control-input" type="radio" name="sc21-104" id="446" value="446" required>
                                    <label class="custom-control-label " for="446">
                                       Siempre
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc21-104" id="447" value="447" required>
                                    <label class="custom-control-label" for="447">
                                       Casi Siempre
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc21-104" id="448" value="448" required>
                                    <label class="custom-control-label" for="448">
                                       Algunas veces
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc21-104" id="449" value="449" required>
                                    <label class="custom-control-label" for="449">
                                       Casi nunca
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2 ">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc21-104" id="450" value="450" required>
                                    <label class="custom-control-label" for="450">
                                       Nunca
                                    </label>
                                 </div>
                              </div>
                           </div> <!-- Cierre ROW respuestas pregunta 104 -->


                        </fieldset>

                        <!-- SUB-TITULO 22 -->
                        <div class="alert alert-primary text-center" role="alert">
                           <h3>Las preguntas siguientes están relacionadas con las decisiones que puede tomar en su trabajo.</h3>
                        </div>

                        <!-- PREGUNTAS SUB-TITULO 22 -->
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
                                    <input class="custom-control-input" type="radio" name="sc22-105" id="451" value="451" required>
                                    <label class="custom-control-label " for="451">
                                       Siempre
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc22-105" id="452" value="452" required>
                                    <label class="custom-control-label" for="452">
                                       Casi Siempre
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc22-105" id="453" value="453" required>
                                    <label class="custom-control-label" for="453">
                                       Algunas veces
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc22-105" id="454" value="454" required>
                                    <label class="custom-control-label" for="454">
                                       Casi nunca
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc22-105" id="455" value="455" required>
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
                                    <input class="custom-control-input" type="radio" name="sc22-106" id="456" value="456" required>
                                    <label class="custom-control-label " for="456">
                                       Siempre
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc22-106" id="457" value="457" required>
                                    <label class="custom-control-label" for="457">
                                       Casi Siempre
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc22-106" id="458" value="458" required>
                                    <label class="custom-control-label" for="458">
                                       Algunas veces
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc22-106" id="459" value="459" required>
                                    <label class="custom-control-label" for="459">
                                       Casi nunca
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2 ">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc22-106" id="460" value="460" required>
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
                                    <input class="custom-control-input" type="radio" name="sc22-107" id="461" value="461" required>
                                    <label class="custom-control-label " for="461">
                                       Siempre
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc22-107" id="462" value="462" required>
                                    <label class="custom-control-label" for="462">
                                       Casi Siempre
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc22-107" id="463" value="463" required>
                                    <label class="custom-control-label" for="463">
                                       Algunas veces
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc22-107" id="464" value="464" required>
                                    <label class="custom-control-label" for="464">
                                       Casi nunca
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2 ">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc22-107" id="465" value="465" required>
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
                                    <input class="custom-control-input" type="radio" name="sc22-108" id="466" value="466" required>
                                    <label class="custom-control-label " for="466">
                                       Siempre
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc22-108" id="467" value="467" required>
                                    <label class="custom-control-label" for="467">
                                       Casi Siempre
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc22-108" id="468" value="468" required>
                                    <label class="custom-control-label" for="468">
                                       Algunas veces
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc22-108" id="469" value="469" required>
                                    <label class="custom-control-label" for="469">
                                       Casi nunca
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2 ">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc22-108" id="470" value="470" required>
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
                                    <input class="custom-control-input" type="radio" name="sc22-109" id="471" value="471" required>
                                    <label class="custom-control-label " for="471">
                                       Siempre
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc22-109" id="472" value="472" required>
                                    <label class="custom-control-label" for="472">
                                       Casi Siempre
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc22-109" id="473" value="473" required>
                                    <label class="custom-control-label" for="473">
                                       Algunas veces
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc22-109" id="474" value="474" required>
                                    <label class="custom-control-label" for="474">
                                       Casi nunca
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2 ">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc22-109" id="475" value="475" required>
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
                                    <input class="custom-control-input" type="radio" name="sc22-110" id="476" value="476" required>
                                    <label class="custom-control-label " for="476">
                                       Siempre
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc22-110" id="477" value="477" required>
                                    <label class="custom-control-label" for="477">
                                       Casi Siempre
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc22-110" id="478" value="478" required>
                                    <label class="custom-control-label" for="478">
                                       Algunas veces
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc22-110" id="479" value="479" required>
                                    <label class="custom-control-label" for="479">
                                       Casi nunca
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2 ">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc22-110" id="480" value="480" required>
                                    <label class="custom-control-label" for="480">
                                       Nunca
                                    </label>
                                 </div>
                              </div>
                           </div> <!-- Cierre ROW respuestas pregunta 110 -->

                           
                        </fieldset>
                        
                        <!-- SUB-TITULO 23 -->
                        <div class="alert alert-primary text-center" role="alert">
                           <h3>Las preguntas siguientes están relacionadas con cualquier tipo de cambio que ocurra en su trabajo (considere los últimos cambios realizados).</h3>
                        </div>

                        <!-- PREGUNTAS SUB-TITULO 23 -->
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
                                    <input class="custom-control-input" type="radio" name="sc23-111" id="481" value="481" required>
                                    <label class="custom-control-label " for="481">
                                       Siempre
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc23-111" id="482" value="482" required>
                                    <label class="custom-control-label" for="482">
                                       Casi Siempre
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc23-111" id="483" value="483" required>
                                    <label class="custom-control-label" for="483">
                                       Algunas veces
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc23-111" id="484" value="484" required>
                                    <label class="custom-control-label" for="484">
                                       Casi nunca
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc23-111" id="485" value="485" required>
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
                                    <input class="custom-control-input" type="radio" name="sc23-112" id="486" value="486" required>
                                    <label class="custom-control-label " for="486">
                                       Siempre
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc23-112" id="487" value="487" required>
                                    <label class="custom-control-label" for="487">
                                       Casi Siempre
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc23-112" id="488" value="488" required>
                                    <label class="custom-control-label" for="488">
                                       Algunas veces
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc23-112" id="489" value="489" required>
                                    <label class="custom-control-label" for="489">
                                       Casi nunca
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2 ">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc23-112" id="490" value="490" required>
                                    <label class="custom-control-label" for="490">
                                       Nunca
                                    </label>
                                 </div>
                              </div>
                           </div> <!-- Cierre ROW respuestas pregunta 112 -->                           
                        </fieldset>

                        <!-- SUB-TITULO 24 -->
                        <div class="alert alert-primary text-center" role="alert">
                           <h3>Las preguntas siguientes están relacionadas con la capacitación e información que se le proporciona sobre su trabajo.</h3>
                        </div>

                        <!-- PREGUNTAS SUB-TITULO 24 -->
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
                                    <input class="custom-control-input" type="radio" name="sc24-113" id="491" value="491" required>
                                    <label class="custom-control-label " for="491">
                                       Siempre
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc24-113" id="492" value="492" required>
                                    <label class="custom-control-label" for="492">
                                       Casi Siempre
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc24-113" id="493" value="493" required>
                                    <label class="custom-control-label" for="493">
                                       Algunas veces
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc24-113" id="494" value="494" required>
                                    <label class="custom-control-label" for="494">
                                       Casi nunca
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc24-113" id="495" value="495" required>
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
                                    <input class="custom-control-input" type="radio" name="sc24-114" id="496" value="496" required>
                                    <label class="custom-control-label " for="496">
                                       Siempre
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc24-114" id="497" value="497" required>
                                    <label class="custom-control-label" for="497">
                                       Casi Siempre
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc24-114" id="498" value="498" required>
                                    <label class="custom-control-label" for="498">
                                       Algunas veces
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc24-114" id="499" value="499" required>
                                    <label class="custom-control-label" for="499">
                                       Casi nunca
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2 ">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc24-114" id="500" value="500" required>
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
                                    <input class="custom-control-input" type="radio" name="sc24-115" id="501" value="501" required>
                                    <label class="custom-control-label " for="501">
                                       Siempre
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc24-115" id="502" value="502" required>
                                    <label class="custom-control-label" for="502">
                                       Casi Siempre
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc24-115" id="503" value="503" required>
                                    <label class="custom-control-label" for="503">
                                       Algunas veces
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc24-115" id="504" value="504" required>
                                    <label class="custom-control-label" for="504">
                                       Casi nunca
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2 ">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc24-115" id="505" value="505" required>
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
                                    <input class="custom-control-input" type="radio" name="sc24-116" id="506" value="506" required>
                                    <label class="custom-control-label " for="506">
                                       Siempre
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc24-116" id="507" value="507" required>
                                    <label class="custom-control-label" for="507">
                                       Casi Siempre
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc24-116" id="508" value="508" required>
                                    <label class="custom-control-label" for="508">
                                       Algunas veces
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc24-116" id="509" value="509" required>
                                    <label class="custom-control-label" for="509">
                                       Casi nunca
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2 ">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc24-116" id="510" value="510" required>
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
                                    <input class="custom-control-input" type="radio" name="sc24-117" id="511" value="511" required>
                                    <label class="custom-control-label " for="511">
                                       Siempre
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc24-117" id="512" value="512" required>
                                    <label class="custom-control-label" for="512">
                                       Casi Siempre
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc24-117" id="513" value="513" required>
                                    <label class="custom-control-label" for="513">
                                       Algunas veces
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc24-117" id="514" value="514" required>
                                    <label class="custom-control-label" for="514">
                                       Casi nunca
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2 ">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc24-117" id="515" value="515" required>
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
                                    <input class="custom-control-input" type="radio" name="sc24-118" id="516" value="516" required>
                                    <label class="custom-control-label " for="516">
                                       Siempre
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc24-118" id="517" value="517" required>
                                    <label class="custom-control-label" for="517">
                                       Casi Siempre
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc24-118" id="518" value="518" required>
                                    <label class="custom-control-label" for="518">
                                       Algunas veces
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc24-118" id="519" value="519" required>
                                    <label class="custom-control-label" for="519">
                                       Casi nunca
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2 ">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc24-118" id="520" value="520" required>
                                    <label class="custom-control-label" for="520">
                                       Nunca
                                    </label>
                                 </div>
                              </div>
                           </div> <!-- Cierre ROW respuestas pregunta 118 -->

                           
                        </fieldset>

                        <!-- SUB-TITULO 25 -->
                        <div class="alert alert-primary text-center" role="alert">
                           <h3>Las preguntas siguientes están relacionadas con el o los jefes con quien tiene contacto.</h3>
                        </div>

                        <!-- PREGUNTAS SUB-TITULO 25 -->
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
                                    <input class="custom-control-input" type="radio" name="sc25-119" id="521" value="521" required>
                                    <label class="custom-control-label " for="521">
                                       Siempre
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc25-119" id="522" value="522" required>
                                    <label class="custom-control-label" for="522">
                                       Casi Siempre
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc25-119" id="523" value="523" required>
                                    <label class="custom-control-label" for="523">
                                       Algunas veces
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc25-119" id="524" value="524" required>
                                    <label class="custom-control-label" for="524">
                                       Casi nunca
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc25-119" id="525" value="525" required>
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
                                    <input class="custom-control-input" type="radio" name="sc25-120" id="526" value="526" required>
                                    <label class="custom-control-label " for="526">
                                       Siempre
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc25-120" id="527" value="527" required>
                                    <label class="custom-control-label" for="527">
                                       Casi Siempre
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc25-120" id="528" value="528" required>
                                    <label class="custom-control-label" for="528">
                                       Algunas veces
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc25-120" id="529" value="529" required>
                                    <label class="custom-control-label" for="529">
                                       Casi nunca
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2 ">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc25-120" id="530" value="530" required>
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
                                    <input class="custom-control-input" type="radio" name="sc25-121" id="531" value="531" required>
                                    <label class="custom-control-label " for="531">
                                       Siempre
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc25-121" id="532" value="532" required>
                                    <label class="custom-control-label" for="532">
                                       Casi Siempre
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc25-121" id="533" value="533" required>
                                    <label class="custom-control-label" for="533">
                                       Algunas veces
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc25-121" id="534" value="534" required>
                                    <label class="custom-control-label" for="534">
                                       Casi nunca
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2 ">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc25-121" id="535" value="535" required>
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
                                    <input class="custom-control-input" type="radio" name="sc25-122" id="536" value="536" required>
                                    <label class="custom-control-label " for="536">
                                       Siempre
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc25-122" id="537" value="537" required>
                                    <label class="custom-control-label" for="537">
                                       Casi Siempre
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc25-122" id="538" value="538" required>
                                    <label class="custom-control-label" for="538">
                                       Algunas veces
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc25-122" id="539" value="539" required>
                                    <label class="custom-control-label" for="539">
                                       Casi nunca
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2 ">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc25-122" id="540" value="540" required>
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
                                    <input class="custom-control-input" type="radio" name="sc25-123" id="541" value="541" required>
                                    <label class="custom-control-label " for="541">
                                       Siempre
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc25-123" id="542" value="542" required>
                                    <label class="custom-control-label" for="542">
                                       Casi Siempre
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc25-123" id="543" value="543" required>
                                    <label class="custom-control-label" for="543">
                                       Algunas veces
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc25-123" id="544" value="544" required>
                                    <label class="custom-control-label" for="544">
                                       Casi nunca
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2 ">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc25-123" id="545" value="545" required>
                                    <label class="custom-control-label" for="545">
                                       Nunca
                                    </label>
                                 </div>
                              </div>
                           </div> <!-- Cierre ROW respuestas pregunta 123 -->

                           
                        </fieldset>

                        <!-- SUB-TITULO 26 -->
                        <div class="alert alert-primary text-center" role="alert">
                           <h3>Las preguntas siguientes se refieren a las relaciones con sus compañeros.</h3>
                        </div>

                        <!-- PREGUNTAS SUB-TITULO 26 -->
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
                                    <input class="custom-control-input" type="radio" name="sc26-124" id="546" value="546" required>
                                    <label class="custom-control-label " for="546">
                                       Siempre
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc26-124" id="547" value="547" required>
                                    <label class="custom-control-label" for="547">
                                       Casi Siempre
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc26-124" id="548" value="548" required>
                                    <label class="custom-control-label" for="548">
                                       Algunas veces
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc26-124" id="549" value="549" required>
                                    <label class="custom-control-label" for="549">
                                       Casi nunca
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc26-124" id="550" value="550" required>
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
                                    <input class="custom-control-input" type="radio" name="sc26-125" id="551" value="551" required>
                                    <label class="custom-control-label " for="551">
                                       Siempre
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc26-125" id="552" value="552" required>
                                    <label class="custom-control-label" for="552">
                                       Casi Siempre
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc26-125" id="553" value="553" required>
                                    <label class="custom-control-label" for="553">
                                       Algunas veces
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc26-125" id="554" value="554" required>
                                    <label class="custom-control-label" for="554">
                                       Casi nunca
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2 ">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc26-125" id="555" value="555" required>
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
                                    <input class="custom-control-input" type="radio" name="sc26-126" id="556" value="556" required>
                                    <label class="custom-control-label " for="556">
                                       Siempre
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc26-126" id="557" value="557" required>
                                    <label class="custom-control-label" for="557">
                                       Casi Siempre
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc26-126" id="558" value="558" required>
                                    <label class="custom-control-label" for="558">
                                       Algunas veces
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc26-126" id="559" value="559" required>
                                    <label class="custom-control-label" for="559">
                                       Casi nunca
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2 ">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc26-126" id="560" value="560" required>
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
                                    <input class="custom-control-input" type="radio" name="sc26-127" id="561" value="561" required>
                                    <label class="custom-control-label " for="561">
                                       Siempre
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc26-127" id="562" value="562" required>
                                    <label class="custom-control-label" for="562">
                                       Casi Siempre
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc26-127" id="563" value="563" required>
                                    <label class="custom-control-label" for="563">
                                       Algunas veces
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc26-127" id="564" value="564" required>
                                    <label class="custom-control-label" for="564">
                                       Casi nunca
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2 ">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc26-127" id="565" value="565" required>
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
                                    <input class="custom-control-input" type="radio" name="sc26-128" id="566" value="566" required>
                                    <label class="custom-control-label " for="566">
                                       Siempre
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc26-128" id="567" value="567" required>
                                    <label class="custom-control-label" for="567">
                                       Casi Siempre
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc26-128" id="568" value="568" required>
                                    <label class="custom-control-label" for="568">
                                       Algunas veces
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc26-128" id="569" value="569" required>
                                    <label class="custom-control-label" for="569">
                                       Casi nunca
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2 ">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc26-128" id="570" value="570" required>
                                    <label class="custom-control-label" for="570">
                                       Nunca
                                    </label>
                                 </div>
                              </div>
                           </div> <!-- Cierre ROW respuestas pregunta 128 -->

                           
                        </fieldset>

                        <!-- SUB-TITULO 27 -->
                        <div class="alert alert-primary text-center" role="alert">
                           <h3>Las preguntas siguientes están relacionadas con la información que recibe sobre su rendimiento en el trabajo, el reconocimiento, el sentido de pertenencia y la estabilidad que le ofrece su trabajo.</h3>
                        </div>

                        <!-- PREGUNTAS SUB-TITULO 27 -->
                        <fieldset class="form-group">
                           <!-- |129| PREGUNTA -->
                           <div class="row">                                 
                              <div class="col-sm-12">
                                 <legend class="col-form-label  pt-0 col-form-label-md ">
                                 47.- Me informan sobre lo que hago bien en mi trabajo
                                 </legend>
                              </div>
                           </div>   <!-- Cierre ROW pregunta 129 -->
                           <div class="row"> 
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio ">
                                    <input class="custom-control-input" type="radio" name="sc27-129" id="571" value="571" required>
                                    <label class="custom-control-label " for="571">
                                       Siempre
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc27-129" id="572" value="572" required>
                                    <label class="custom-control-label" for="572">
                                       Casi Siempre
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc27-129" id="573" value="573" required>
                                    <label class="custom-control-label" for="573">
                                       Algunas veces
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc27-129" id="574" value="574" required>
                                    <label class="custom-control-label" for="574">
                                       Casi nunca
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc27-129" id="575" value="575" required>
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
                                    <input class="custom-control-input" type="radio" name="sc27-130" id="576" value="576" required>
                                    <label class="custom-control-label " for="576">
                                       Siempre
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc27-130" id="577" value="577" required>
                                    <label class="custom-control-label" for="577">
                                       Casi Siempre
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc27-130" id="578" value="578" required>
                                    <label class="custom-control-label" for="578">
                                       Algunas veces
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc27-130" id="579" value="579" required>
                                    <label class="custom-control-label" for="579">
                                       Casi nunca
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2 ">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc27-130" id="580" value="580" required>
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
                                    <input class="custom-control-input" type="radio" name="sc27-131" id="581" value="581" required>
                                    <label class="custom-control-label " for="581">
                                       Siempre
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc27-131" id="582" value="582" required>
                                    <label class="custom-control-label" for="582">
                                       Casi Siempre
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc27-131" id="583" value="583" required>
                                    <label class="custom-control-label" for="583">
                                       Algunas veces
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc27-131" id="584" value="584" required>
                                    <label class="custom-control-label" for="584">
                                       Casi nunca
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2 ">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc27-131" id="585" value="585" required>
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
                                    <input class="custom-control-input" type="radio" name="sc27-132" id="586" value="586" required>
                                    <label class="custom-control-label " for="586">
                                       Siempre
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc27-132" id="587" value="587" required>
                                    <label class="custom-control-label" for="587">
                                       Casi Siempre
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc27-132" id="588" value="588" required>
                                    <label class="custom-control-label" for="588">
                                       Algunas veces
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc27-132" id="589" value="589" required>
                                    <label class="custom-control-label" for="589">
                                       Casi nunca
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2 ">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc27-132" id="590" value="590" required>
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
                                    <input class="custom-control-input" type="radio" name="sc27-133" id="591" value="591" required>
                                    <label class="custom-control-label " for="591">
                                       Siempre
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc27-133" id="592" value="592" required>
                                    <label class="custom-control-label" for="592">
                                       Casi Siempre
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc27-133" id="593" value="593" required>
                                    <label class="custom-control-label" for="593">
                                       Algunas veces
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc27-133" id="594" value="594" required>
                                    <label class="custom-control-label" for="594">
                                       Casi nunca
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2 ">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc27-133" id="595" value="595" required>
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
                                    <input class="custom-control-input" type="radio" name="sc27-134" id="596" value="596" required>
                                    <label class="custom-control-label " for="596">
                                       Siempre
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc27-134" id="597" value="597" required>
                                    <label class="custom-control-label" for="597">
                                       Casi Siempre
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc27-134" id="598" value="598" required>
                                    <label class="custom-control-label" for="598">
                                       Algunas veces
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc27-134" id="599" value="599" required>
                                    <label class="custom-control-label" for="599">
                                       Casi nunca
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2 ">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc27-134" id="600" value="600" required>
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
                                    <input class="custom-control-input" type="radio" name="sc27-135" id="601" value="601" required>
                                    <label class="custom-control-label " for="601">
                                       Siempre
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc27-135" id="602" value="602" required>
                                    <label class="custom-control-label" for="602">
                                       Casi Siempre
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc27-135" id="603" value="603" required>
                                    <label class="custom-control-label" for="603">
                                       Algunas veces
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc27-135" id="604" value="604" required>
                                    <label class="custom-control-label" for="604">
                                       Casi nunca
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2 ">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc27-135" id="605" value="605" required>
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
                                    <input class="custom-control-input" type="radio" name="sc27-136" id="606" value="606" required>
                                    <label class="custom-control-label " for="606">
                                       Siempre
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc27-136" id="607" value="607" required>
                                    <label class="custom-control-label" for="607">
                                       Casi Siempre
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc27-136" id="608" value="608" required>
                                    <label class="custom-control-label" for="608">
                                       Algunas veces
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc27-136" id="609" value="609" required>
                                    <label class="custom-control-label" for="609">
                                       Casi nunca
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2 ">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc27-136" id="610" value="610" required>
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
                                    <input class="custom-control-input" type="radio" name="sc27-137" id="611" value="611" required>
                                    <label class="custom-control-label " for="611">
                                       Siempre
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc27-137" id="612" value="612" required>
                                    <label class="custom-control-label" for="612">
                                       Casi Siempre
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc27-137" id="613" value="613" required>
                                    <label class="custom-control-label" for="613">
                                       Algunas veces
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc27-137" id="614" value="614" required>
                                    <label class="custom-control-label" for="614">
                                       Casi nunca
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2 ">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc27-137" id="615" value="615" required>
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
                                    <input class="custom-control-input" type="radio" name="sc27-138" id="616" value="616" required>
                                    <label class="custom-control-label " for="616">
                                       Siempre
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc27-138" id="617" value="617" required>
                                    <label class="custom-control-label" for="617">
                                       Casi Siempre
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc27-138" id="618" value="618" required>
                                    <label class="custom-control-label" for="618">
                                       Algunas veces
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc27-138" id="619" value="619" required>
                                    <label class="custom-control-label" for="619">
                                       Casi nunca
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-2 ">
                                 <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="sc27-138" id="620" value="620" required>
                                    <label class="custom-control-label" for="620">
                                       Nunca
                                    </label>
                                 </div>
                              </div>
                           </div> <!-- Cierre ROW respuestas pregunta 138 -->

                           
                        </fieldset>


                        
                        

                    </form> 

                     <br>
                     <br>
                     <br>
                     <br>
                     <br>

                  </div>
               </div>
            </div>
         </div>

      </div>


      <!-- Optional JavaScript -->
      <!-- jQuery -->
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <!-- Popper.js -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
      <!-- Bootstrap JS -->
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
   </body>
</html>
