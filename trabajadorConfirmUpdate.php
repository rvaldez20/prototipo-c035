<?php

   // include_once 'config.php';
   include_once 'header.php';

   // requerimos la conexión a la base de datos
   require "config.php";

   $id = $_POST['id'];

   //Validamos los valores delos campos que recibimos del formulario
   if(!empty($_POST['nombre'])) {$nombreNew = $_POST['nombre'];}
   if(!empty($_POST['apellidop'])) {$apellidopNew = $_POST['apellidop'];}
   if(!empty($_POST['apellidom'])) {$apellidomNew = $_POST['apellidom'];}
   if(!empty($_POST['rfc'])) {$rfcNew = $_POST['rfc'];}
   if(!empty($_POST['curp'])) {$curpNew = $_POST['curp'];} else {$curpNew = null;}
   if(!empty($_POST['email'])) {$emailNew = $_POST['email'];} else {$emailNew = null;}
   if(!empty($_POST['negocio'])) {$razonsocialNew = $_POST['negocio'];}


   // en base al negocio seleccionado obtenemos el ID
   // obtenesmo el id del negocio que se selecciono
   $sqlNegocio = "SELECT id FROM negocios WHERE razonsocial=:razonsocial";
   $queryNegocio = $pdo->prepare($sqlNegocio);

   $queryNegocio->execute([
      'razonsocial' => $razonsocialNew
   ]);

   // obtenemos la columna con el id especificado
   $row = $queryNegocio->fetch(PDO::FETCH_ASSOC);

   // Guardamos el id del negocio seleccionado en una variable
   $idnegocioNew = $row['id'];
   

   $sql = "UPDATE trabajadores SET nombre=:nombre, apellidop=:apellidop, apellidom=:apellidom, rfc=:rfc, curp=:curp, email=:email, negocioId=:negocioId WHERE id=:id";
   $query = $pdo->prepare($sql);

   $result = $query->execute([
      'id' => $id,
      'nombre' => $nombreNew,
      'apellidop' => $apellidopNew,
      'apellidom' => $apellidomNew,
      'rfc' => $rfcNew,
      'curp' => $curpNew,
      'email' => $emailNew,
      'negocioId' => $idnegocioNew
   ]);


?>

   <!-- cuerpo body -->
   <div class="container">

      <div class="row">            
         

         <?php
            if($result){
               echo '
               <div class="alert alert-success mt-3 col-md-12" role="alert">
                  El trabajdor se actualizo correctamente
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