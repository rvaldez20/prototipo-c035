<?php

   // include_once 'config.php';
   include_once 'header.php';

   // requerimos la conexión a la base de datos
   require "config.php";


   // ------------ Se procesan los resultados del cuestioanrio Fase I

   // primero obtenemos los valores de los campos
   if(!empty($_POST['folioCuestionario'])) {$folioCuestionario = trim($_POST['folioCuestionario']);}
   if(!empty($_POST['nomtrabajador'])) {$nomtrabajador = trim($_POST['nomtrabajador']);}
   // if(!empty($_POST['fechaAplicacion'])) {$fechaAplicacion = trim($_POST['fechaAplicacion']);}

   

   // array para guardar los valores de las respuestas del formulario
   $respuestasArray = array();
   $posNiveEstudio = 3;

   if(!empty($_POST['sexo'])) {$sexo = $_POST['sexo'];}
   array_push($respuestasArray, $sexo);
   if(!empty($_POST['edad'])) {$edad = $_POST['edad'];}
   array_push($respuestasArray, $edad);
   if(!empty($_POST['edocivil'])) {$edocivil = $_POST['edocivil'];}
   array_push($respuestasArray, $edocivil);
   if(!empty($_POST['sininfo'])) {$sininfo = $_POST['sininfo'];} else {$sininfo = 0;}

   // validamos si existe o no informaicón de nivel de estudios
   if ($sininfo != 0){
      array_push($respuestasArray, 20);
      array_push($respuestasArray, 0);
      array_push($respuestasArray, 0);
      array_push($respuestasArray, 0);
      array_push($respuestasArray, 0);
      array_push($respuestasArray, 0);
      array_push($respuestasArray, 0);
      array_push($respuestasArray, 0);

   } else {
      array_push($respuestasArray, $sininfo);
      if(!empty($_POST['primaria'])) {$primaria = $_POST['primaria'];} else {$primaria = 0;}
      array_push($respuestasArray, $primaria);
      if(!empty($_POST['secundaria'])) {$secundaria = $_POST['secundaria'];} else {$secundaria = 0;}
      array_push($respuestasArray, $secundaria);
      if(!empty($_POST['preparatoria'])) {$preparatoria = $_POST['preparatoria'];} else {$preparatoria = 0;}
      array_push($respuestasArray, $preparatoria);
      if(!empty($_POST['tecnico'])) {$tecnico = $_POST['tecnico'];} else {$tecnico = 0;}
      array_push($respuestasArray, $tecnico);
      if(!empty($_POST['licenciatura'])) {$licenciatura = $_POST['licenciatura'];} else {$licenciatura = 0;}
      array_push($respuestasArray, $licenciatura);
      if(!empty($_POST['maestria'])) {$maestria = $_POST['maestria'];} else {$maestria = 0;}
      array_push($respuestasArray, $maestria);
      if(!empty($_POST['doctorado'])) {$doctorado = $_POST['doctorado'];} else {$doctorado = 0;}
      array_push($respuestasArray, $doctorado);
   }

   if(!empty($_POST['puesto'])) {$puesto = $_POST['puesto'];}
   array_push($respuestasArray, -1);
   if(!empty($_POST['area'])) {$area = $_POST['area'];}
   array_push($respuestasArray, -1);
   if(!empty($_POST['tipopuesto'])) {$tipopuesto = $_POST['tipopuesto'];}
   array_push($respuestasArray, $tipopuesto);
   if(!empty($_POST['tipocontratacion'])) {$tipocontratacion = $_POST['tipocontratacion'];}
   array_push($respuestasArray, $tipocontratacion);
   if(!empty($_POST['tipopersonal'])) {$tipopersonal = $_POST['tipopersonal'];}
   array_push($respuestasArray, $tipopersonal);
   if(!empty($_POST['tipojornadatrabajo'])) {$tipojornadatrabajo = $_POST['tipojornadatrabajo'];}
   array_push($respuestasArray, $tipojornadatrabajo);
   if(!empty($_POST['rotacionturnos'])) {$rotacionturnos = $_POST['rotacionturnos'];}
   array_push($respuestasArray, $rotacionturnos);
   if(!empty($_POST['experienciayears'])) {$experienciayears = $_POST['experienciayears'];}
   array_push($respuestasArray, -1);
   if(!empty($_POST['tiempopuestoactual'])) {$tiempopuestoactual = $_POST['tiempopuestoactual'];}
   array_push($respuestasArray, $tiempopuestoactual);
   if(!empty($_POST['tiempoexperiencia'])) {$tiempoexperiencia = $_POST['tiempoexperiencia'];}
   array_push($respuestasArray, $tiempoexperiencia);


   

   // -------------------- INSERT TABLE: cuestionario

   //Primero obtenemos el id del trabjador seleccionado en base al nombre concatenado
   $sqlTrabajador = "SELECT id FROM trabajadores WHERE concat(nombre, ' ', apellidop, ' ', apellidom)=:nomtrabajador";
   $queryTrabajador = $pdo->prepare($sqlTrabajador);
   $queryTrabajador->execute([
      'nomtrabajador' => $nomtrabajador
   ]);
   // obtenemos la columna con el id especificado
   $rowTrabajador = $queryTrabajador->fetch(PDO::FETCH_ASSOC);
   // Guardamos el id del negocio seleccionado en una variable
   $trabajadorId = $rowTrabajador['id'];

   // echo '----';
   // echo '<br>';
   // echo $folioCuestionario;
   // echo '<br>';
   // echo $trabajadorId;
   // echo '<br>';
   // echo '----';
  
   
   // Se obtiene la fecha y hora en que se aplica el cuestionario
   $fechafull = date('Y-m-d H:i:s');
   $fechaModificada = strtotime ( '-6 hour' , strtotime ( $fechafull ) );
   $fechaHora = date('Y-m-d H:i:s', $fechaModificada);
   //echo $fechahora;

   $fase1Ok = 1;
   

   // Se procede a guardar la información en cuestionarios
   $sqlCuestionario = "INSERT INTO cuestionario(folioCuestionario, trabajadorId, fase1, fechafase1) VALUES(:folioCuestionario, :trabajadorId, :fase1, :fechafase1)";
   $queryCuestionario = $pdo->prepare($sqlCuestionario);

   $queryCuestionario->execute([      
      'folioCuestionario' => $folioCuestionario,
      'trabajadorId' => $trabajadorId,
      'fase1' => $fase1Ok,
      'fechafase1' => $fechaHora
   ]);

   // Ahora obtenemos el id del cuestionario que acabamos de insertar
   $sqlIdCuestionario = "SELECT id FROM cuestionario ORDER BY id DESC LIMIT 1";
   $queryIdCuestionario = $pdo->prepare($sqlIdCuestionario);
   $queryIdCuestionario->execute();
   // obtenemos la columna con el id especificado
   $rowIdCuestionario = $queryIdCuestionario->fetch(PDO::FETCH_ASSOC);
   // Guardamos el id del negocio seleccionado en una variable
   $idCuestionario = $rowIdCuestionario['id'];

   // obtenemos el numero de respuestas
   $numRespuestas = count($respuestasArray);
   

   // echo '----';
   // echo '<br>';
   // echo $idCuestionario;
   // echo '<br>';
   // echo $numRespuestas;
   // echo '<br>';
   // echo '----';

   // var_dump($respuestasArray);
   $idPreguntaInicial = 1;

   // ahora gusardamos las respuestas de la fase1 del cuestionario
   $sqlCuestionarioDetalle = "INSERT INTO cuestionariosdetalle(cuestionarioId, preguntaId, respuestaId) VALUES(:cuestionarioId, :preguntaId, :respuestaId)";
   $queryCuestionarioDetalle = $pdo->prepare($sqlCuestionarioDetalle);

   for ($i = 0; $i < $numRespuestas; $i++) {

      if($i>=3 && $i<10){
         $queryCuestionarioDetalle->execute([      
            'cuestionarioId' => $idCuestionario,
            'preguntaId' => 4,
            'respuestaId' => $respuestasArray[$i],
         ]);      
      } else {

         $queryCuestionarioDetalle->execute([      
            'cuestionarioId' => $idCuestionario,
            'preguntaId' => $idPreguntaInicial,
            'respuestaId' => $respuestasArray[$i]         
         ]);

         $idPreguntaInicial++;
      }

            
   }


   // -------------------- ***************************

   

   // var_dump($respuestasArray);



   // echo "Folio Cuestionario: " . $folioCuestionario . "<br>";
   // echo "Nombre Trabjador: " . $nomtrabajador . "<br>";
   // echo "Fecha/Hora Aplicacion: " . $fechaAplicacion . "<br>";

   // echo "Sexo: " . $sexo . "<br>";
   // echo "Edad: " . $edad . "<br>";
   // echo "Estado Civil: " . $edocivil . "<br>";
   // echo "Sin Información: " . $sininfo . "<br>";
   // echo "Primaria: " . $primaria . "<br>";
   // echo "Secundaria: " . $secundaria . "<br>";
   // echo "Preparatoria: " . $preparatoria . "<br>";
   // echo "Técnico: " . $tecnico . "<br>";
   // echo "Licenciatura: " . $licenciatura . "<br>";
   // echo "Maestria: " . $maestria . "<br>";
   // echo "Doctorado: " . $doctorado . "<br>";

   // echo "Puesto: " . $puesto . "<br>";
   // echo "Area: " . $area . "<br>";
   // echo "Tipo Puesto: " . $tipopuesto . "<br>";
   // echo "Tipo Contratacion: " . $tipocontratacion . "<br>";
   // echo "Tipo Personal: " . $tipopersonal . "<br>";
   // echo "Tipo Jornada de Trabajo: " . $tipojornadatrabajo . "<br>";
   // echo "Rotación de Turnos: " . $rotacionturnos . "<br>";
   // echo "Experiencia en Años: " . $experienciayears . "<br>";
   // echo "Tiempo en el puesto Actual: " . $tiempopuestoactual . "<br>";
   // echo "Tiempo Experiencia Laboral: " . $tiempoexperiencia . "<br>";



?>

   <!-- cuerpo body -->
   <div class="container">

      <div class="alert alert-primary text-center mt-4" role="alert">
         <h2>Fase II. Cuestionario para identificar a los trabajadores que fueron sujetos a acontecimientos traumáticos severos.</h2>
      </div>

      <form action="cfase3.php" method="GET">
         
         <div class="alert alert-success text-center" role="alert">
            <h4>¿Ha precenciado o sufrido alguna vez, durante o con motivo de trabajo un acontecimiento como los siguientes?</h4>
         </div>

         <!-- TITULO I SUBCATEGORIA-3 -->
         <div class="alert alert-danger text-left" role="alert">
            <h5>I.- Aconteciomientos traumático severo</h5>
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

         <!-- TITULO II SUBCATEGORIA-4 -->
         <div class="alert alert-danger text-left" role="alert">
            <h5>II.- Recuerdos persistentes sobre el acontecimiento (durante el último mes):</h5>
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
                     <input class="custom-control-input" type="radio" name="sc4-21" id="79" value="79" required>
                     <label class="custom-control-label " for="79">
                        Si
                     </label>
                  </div>
               </div>
               <div class="col-sm-1 border-bottom">
                  <div class="custom-control custom-radio">
                     <input class="custom-control-input" type="radio" name="sc4-21" id="80" value="80" required>
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

         <!-- TITULO III SUBCATEGORIA-5 -->
         <div class="alert alert-danger text-left" role="alert">
            <h5>III.- Esfuerzo por evitar circunstancias parecidas o asociadas al acontecimiento (durante el último mes):</h5>
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
                     <input class="custom-control-input" type="radio" name="sc5-23" id="84" value="84" required>
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

         <!-- TITULO IV SUBCATEGORIA-6 -->
         <div class="alert alert-danger text-left" role="alert">
            <h5>IV.- Afectación (durante el último mes):</h5>
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

         <!-- BOTON GUARDAR CUESTIONARIO-->
         <div class="form-group row">
            <div class="col-sm-12">
               <button type="submit" class="btn btn-primary btn-lg btn-block">Guardar y continuar Fase III</button>
            </div>
         </div>


      </form> 

   </div> <!-- Cierre container -->

<?php

   include_once 'footer.php';

?>