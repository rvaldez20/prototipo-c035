<?php

   // include_once 'config.php';
   include_once 'header.php';

   // requerimos la conexión a la base de datos
   require "config.php";

   $result = false;
   // var_dump($_POST);

   if(!empty($_POST)) {

      //Validamos los valores delos campos
      if(!empty($_POST['negocio'])) {$negocio = $_POST['negocio'];}
      if(!empty($_POST['razonsocial'])) {$razonsocial = $_POST['razonsocial'];}
      if(!empty($_POST['rfc'])) {$rfc = $_POST['rfc'];}
      
      // agregamos la nueva empresa
      $sql = "INSERT INTO negocios(negocio, razonsocial, rfc) VALUES(:negocio, :razonsocial, :rfc)";
      $query = $pdo->prepare($sql);
      $result = $query->execute([
         'negocio' => $negocio,
         'razonsocial' => $razonsocial,
         'rfc' => $rfc
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
                  Empresa guardado correctamente
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