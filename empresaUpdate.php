<?php

   // include_once 'config.php';
   include_once 'header.php';

   // requerimos la conexión a la base de datos
   require "config.php";

   // obtenemos el ID del empleado seleccionado
   $id = $_GET['id'];
   
   // hacemos una consulta para traer los datos de la DB
   $sql = "SELECT * FROM negocios WHERE id=:id";
   $query = $pdo->prepare($sql);

   $query->execute([
      'id' => $id
   ]);
   
   // obtenemos la columna con el id especificado
   $row = $query->fetch(PDO::FETCH_ASSOC);

   // creamos variables para cada campo
   $negocioValue = $row['negocio'];
   $razonsocialValue = $row['razonsocial'];
   $rfcValue = $row['rfc'];
   // var_dump($negocioValue);

?>


   <!-- cuerpo body -->
   <div class="container">
      <div class="row">
         <div class="col-md-12">
               <h1 class="mt-3 text-center">Actualizar Empresa</h1>
         </div>
      </div>

      
      <form action="empresaConfirmUpdate.php" method="POST">
         <div class="row">
            <div class="col-md-6">
               <!--  -->
               <div class="form-group">
                  <label for="negocio">Empresa o Negocio:</label>
                  <input type="text" class="form-control" name="negocio" id="negocio" value="<?php echo $negocioValue ?>" required>
               </div>
            </div>
            <div class="col-md-6">
               <!--  -->
               <div class="form-group">
                  <label for="razonsocial">Razon Social:</label> 
                  <input type="text" class="form-control" name="razonsocial" id="razonsocial" value="<?php echo $razonsocialValue ?>" required>
               </div>
            </div>  
            <div class="col-md-6">
               <!--  -->
               <div class="form-group">
                  <label for="rfc">RFC:</label>
                  <input type="text" class="form-control" name="rfc" id="rfc" value="<?php echo $rfcValue ?>" required>
               </div>
            </div>  

            <div class="col-md-12">
               <!-- Cramos un imput invisible para mandar el ID de la empresa -->
               <input type="hidden" name="id" value="<?php echo $id ?>">
               <div class="form-group">
                  <button type="submit" class="btn btn-primary btn-block mt-2">Gurdar Cambios</button>
               </div>
            </div> 
   
         </div>         

      </form>
    

      

   </div> <!-- Cierre container -->


<?php

   include_once './footer.php';

?>