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
  
  
  // Se obtiene solo el nombre del trabajador seleccionado y se guarda en $only_nomtrabajador
  $pos = -1;
  for ($i = 0; $i <= strlen($nomtrabajador); $i++) {
    if( $nomtrabajador[$i] === '(' ) {
      $pos = $i;
      break;
    }
  }
  $only_nomtrabajador = substr($nomtrabajador, 0, $pos);

  // echo $folioCuestionario;
  // echo '<br>';
  // echo $nomtrabajador;
  // echo '<br>';
  // echo $only_nomtrabajador;
  
  
  // Se definen array para guardar los valores de las respuestas del formulario
  // uno es para las respuestas con opcion ($respuestasArray) 
  // y para las respuestas abiertas ($respuestasAbiertasArray)
  $respuestasArray = array();
  $respuestasAbiertasArray = array();

  // se guarda la posicion del array que ocuparia la pregunta 4 la cual seria posicion 3
  $posNiveEstudio = 3;

  // se valida que tengamos valores y se van insertando las respuestas en los respectivos array
  // segun sean con opciones o respuestas 
  if(!empty($_POST['sexo'])) {$sexo = $_POST['sexo'];}
  array_push($respuestasArray, $sexo);
  if(!empty($_POST['edad'])) {$edad = $_POST['edad'];}
  array_push($respuestasArray, $edad);
  if(!empty($_POST['edocivil'])) {$edocivil = $_POST['edocivil'];}
  array_push($respuestasArray, $edocivil);
  if(!empty($_POST['sininfo'])) {$sininfo = $_POST['sininfo'];} else {$sininfo = 0;}

  // validamos si existe o no informaicón de nivel de estudios
  // si selecciono la opción Sin Informacion(sininfo) todos los demas se ponen como 0
  if ($sininfo != 0){
    array_push($respuestasArray, 20);
    array_push($respuestasArray, 0);  // para primeari
    array_push($respuestasArray, 0);  // para secundaria
    array_push($respuestasArray, 0);  // para preparatoria o bachillerato
    array_push($respuestasArray, 0);  // para para tecnivco superior
    array_push($respuestasArray, 0);  // para licenciatura
    array_push($respuestasArray, 0);  // para maestria
    array_push($respuestasArray, 0);  // para doctorado

  } else {
    // si no selecciono la opcion Sin Informacion (sin info) se establecen los valores
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

  // pregunta abierta
  // al ser pregunta abierta se agrega -1 en $respuestasArray 
  // y se agrega la respuesta abierta en $respuestasAbiertasArray
  if(!empty($_POST['puesto'])) {$puesto = trim($_POST['puesto']);}
  array_push($respuestasArray, -1);
  array_push($respuestasAbiertasArray, $puesto);

  // pregunta abierta
  // al ser pregunta abierta se agrega -1 en $respuestasArray 
  // y se agrega la respuesta abierta en $respuestasAbiertasArray
  if(!empty($_POST['area'])) {$area = trim($_POST['area']);}
  array_push($respuestasArray, -1);
  array_push($respuestasAbiertasArray, $area);

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

  // pregunta abierta
  // al ser pregunta abierta se agrega -1 en $respuestasArray 
  // y se agrega la respuesta abierta en $respuestasAbiertasArray
  if(!empty($_POST['experienciayears'])) {$experienciayears = $_POST['experienciayears'];}
  array_push($respuestasArray, -1);
  array_push($respuestasAbiertasArray, $experienciayears);

  if(!empty($_POST['tiempopuestoactual'])) {$tiempopuestoactual = $_POST['tiempopuestoactual'];}
  array_push($respuestasArray, $tiempopuestoactual);
  if(!empty($_POST['tiempoexperiencia'])) {$tiempoexperiencia = $_POST['tiempoexperiencia'];}
  array_push($respuestasArray, $tiempoexperiencia);




  //Primero obtenemos el id del trabjador seleccionado en base al nombre del trabajador seleccionado
  $sqlTrabajador = "SELECT id FROM trabajadores WHERE concat(nombre, ' ', apellidop, ' ', apellidom)=:nomtrabajador";
  $queryTrabajador = $pdo->prepare($sqlTrabajador);
  $queryTrabajador->execute([
    'nomtrabajador' => $only_nomtrabajador
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
  $fechaHoraActual = date('Y-m-d H:i:s', $fechaModificada);
  //echo $fechahora;

  $fase1_Ok = 1;
   

  // -------------------- INSERT TABLE: cuestionario

  // Se procede a guardar la información en cuestionarios
  $sqlCuestionario = "INSERT INTO cuestionario(folioCuestionario, trabajadorId, fase1, fechafase1) VALUES(:folioCuestionario, :trabajadorId, :fase1, :fechafase1)";
  $queryCuestionario = $pdo->prepare($sqlCuestionario);

  $queryCuestionario->execute([      
    'folioCuestionario' => $folioCuestionario,
    'trabajadorId' => $trabajadorId,
    'fase1' => $fase1_Ok,
    'fechafase1' => $fechaHoraActual
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

  // ahora guardamos las respuestas de la fase1 del cuestionariodetalle
  $sqlCuestionarioDetalle = "INSERT INTO cuestionariosdetalle(cuestionarioId, preguntaId, respuestaId, fase) VALUES(:cuestionarioId, :preguntaId, :respuestaId, :fase)";
  $queryCuestionarioDetalle = $pdo->prepare($sqlCuestionarioDetalle);

  // se guardan las respuestas de las preguntas 1, 2 y 3 con la ocpicon seleccionada
  // y se guardan las opciones del nivel de estudio con numero de pregunta 4 cada una
  for ($i = 0; $i < $numRespuestas; $i++) {
    if($i >= 3 && $i < 10){
        $queryCuestionarioDetalle->execute([      
          'cuestionarioId' => $idCuestionario,
          'preguntaId' => 4,
          'respuestaId' => $respuestasArray[$i],
          'fase' => 1
        ]);      
    } else {
        $queryCuestionarioDetalle->execute([      
          'cuestionarioId' => $idCuestionario,
          'preguntaId' => $idPreguntaInicial,
          'respuestaId' => $respuestasArray[$i],
          'fase' => 1       
        ]);
        $idPreguntaInicial++;
    }            
  }

  // ahora guardamos las respuestas de la fase1 del cuestionariodetallera (respuestas abiertas)
  // son las preguntas 5, 6 y 12
  $sqlCuestionarioDetallera = "INSERT INTO cuestionariosdetallera(cuestionarioId, preguntaId, respuestaabierta) VALUES(:cuestionarioId, :preguntaId, :respuestaabierta)";
  $queryCuestionarioDetallera = $pdo->prepare($sqlCuestionarioDetallera);

  // para guardar las preguntas abiertas que son la 5, 6 y 12 en $respuestasAbiertasArray
  $x = 0; 
  for ($i = 0; $i < 3 ; $i++) {
          
    switch ($i) {
        case 0:
          $x = 5;
          break;
        case 1:
          $x = 6;
          break;
        case 2:
          $x = 12;
          break;
    }

    $queryCuestionarioDetallera->execute([      
        'cuestionarioId' => $idCuestionario,
        'preguntaId' => $x,
        'respuestaabierta' => $respuestasAbiertasArray[$i],
    ]);   
  }

  // Se actualiza el campo fase1 igual a 1 indicando que el trabajador ya completo la fase1
  $sqlTrabajadorFase1 = "UPDATE trabajadores SET fase1=1 WHERE id=:trabajadorId";
  $queryTrabajadorFase1 = $pdo->prepare($sqlTrabajadorFase1);
  $queryTrabajadorFase1->execute([ 
    'trabajadorId' => $trabajadorId,
  ]);


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
   <div class="row">            
      
      <?php
         if($queryCuestionarioDetalle && $queryCuestionarioDetallera){
            echo '
            <div class="alert alert-success mt-3 col-md-12" role="alert">
               Respuestas del cuestionario Fase 1 se han guardado correctamente
            </div>
            ';
         }
      ?>

      <div class="col-md-12">
         <a href="./index.php" class="btn btn-primary active mb-3 ml-3" role="button" aria-pressed="true">Continuar</a>
      </div>
    
   </div> <!-- Cierre row -->
</div> <!-- Cierre container -->