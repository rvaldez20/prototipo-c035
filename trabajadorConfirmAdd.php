<?php

   // include_once 'config.php';
   include_once 'header.php';

   // requerimos la conexión a la base de datos
   require "config.php";

   $result = false;
   // var_dump($_POST);

   if(!empty($_POST)) {

      //Validamos los valores delos campos
      if(!empty($_POST['nombre'])) {$nombre = trim($_POST['nombre']);}
      if(!empty($_POST['apellidop'])) {$apellidop = trim($_POST['apellidop']);}
      if(!empty($_POST['apellidom'])) {$apellidom = trim($_POST['apellidom']);}
      if(!empty($_POST['rfc'])) {$rfc = trim($_POST['rfc']);}
      if(!empty($_POST['curp'])) {$curp = trim($_POST['curp']);} else {$curp = null;}
      if(!empty($_POST['email'])) {$email = trim($_POST['email']);} else {$email = null;}
      if(!empty($_POST['negocio'])) {$razonsocial = trim($_POST['negocio']);}

      // obtenesmo el id del negocio al que pertenece el trabajador
      $sqlNegocio = "SELECT id FROM negocios WHERE razonsocial=:razonsocial";
      $queryNegocio = $pdo->prepare($sqlNegocio);

      $queryNegocio->execute([
         'razonsocial' => $razonsocial
      ]);

      // obtenemos la columna con el id especificado
      $row = $queryNegocio->fetch(PDO::FETCH_ASSOC);

      // Guardamos el id del negocio seleccionado en una variable
      $idnegocio = $row['id'];
     
      // agregamos al trabajador
      $sqlInsert = "INSERT INTO trabajadores(nombre, apellidop, apellidom, rfc, curp, email, negocioId) VALUES(:nombre, :apellidop, :apellidom, :rfc, :curp, :email, :negocioId)";
      $queryInsert = $pdo->prepare($sqlInsert);
      $result = $queryInsert->execute([
         'nombre' => $nombre,
         'apellidop' => $apellidop,
         'apellidom' => $apellidom,
         'rfc' => $rfc,
         'curp' => $curp,
         'email' => $email,
         'negocioId' => $idnegocio
      ]);
      
      
   }

?>


   <!-- cuerpo body -->
   <div class="container">

      <div class="row">            
         

         <?php
            if($result){
               echo '
               <div class="alert alert-success mt-3 col-md-12" role="alert">
                  Trabajador guardado correctamente
               </div>
               ';
            }
         ?>

         <div class="col-md-12">
            <a href="./trabajadores.php" class="btn btn-primary active mb-3 ml-3" role="button" aria-pressed="true">Regresar a Trabajadores</a>
         </div>
         
      </div>
      
      

   </div> <!-- Cierre container -->


<?php

   include_once './footer.php';

?>