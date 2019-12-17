<?php

   // include_once 'config.php';
   include_once 'header.php';

   // requerimos la conexión a la base de datos
   require "config.php";

   $id = $_POST['id'];
   $negocioNew = $_POST['negocio'];
   $razonsocialNew = $_POST['razonsocial'];
   $rfcNew = $_POST['rfc'];

   $sql = "UPDATE negocios SET negocio=:negocio, razonsocial=:razonsocial, rfc=:rfc WHERE id=:id";
   $query = $pdo->prepare($sql);

   $result = $query->execute([
      'id' => $id,
      'negocio' => $negocioNew,
      'razonsocial' => $razonsocialNew,
      'rfc' => $rfcNew
   ]);


?>

   <!-- cuerpo body -->
   <div class="container">

      <div class="row">            
         

         <?php
            if($result){
               echo '
               <div class="alert alert-success mt-3 col-md-12" role="alert">
                  La Empresa se actualizo correctamente
               </div>
               ';
            }
         ?>

         <div class="col-md-12">
            <a href="./empresas.php" class="btn btn-primary active mb-3 ml-3" role="button" aria-pressed="true">Regresar a Empresas</a>
         </div>
         
      </div>
      
      

   </div> <!-- Cierre container -->


<?php

   include_once './footer.php';

?>