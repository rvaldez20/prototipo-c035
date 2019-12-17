<?php

   // include_once 'config.php';
   include_once 'header.php';

   // requerimos la conexión a la base de datos
   require "config.php";


?>


   <!-- cuerpo body -->
   <div class="container">
      <div class="row">
         <div class="col-md-12">
               <h1 class="mt-3 text-center">Agregar Empresa</h1>
         </div>
      </div>

      
      <form action="empresaConfirmAdd.php" method="POST" class="mt-4">
         <div class="row">
            <div class="col-md-6">
               <!--  -->
               <div class="form-group">
                  <label for="negocio">Empresa o Negocio:</label>
                  <input type="text" class="form-control" name="negocio" id="negocio" required>
               </div>
            </div>
            <div class="col-md-6">
               <!--  -->
               <div class="form-group">
                  <label for="razonsocial">Razon Social:</label>
                  <input type="text" class="form-control" name="razonsocial" id="razonsocial" required>
               </div>
            </div>  
            <div class="col-md-6">
               <!--  -->
               <div class="form-group">
                  <label for="rfc">RFC:</label>                  
                  <input type="text" class="form-control" name="rfc" id="rfc" required>                  
               </div>
            </div>  

            <div class="col-md-12">
               <!--  -->
               <div class="form-group">
                  <button type="submit" class="btn btn-primary btn-block mt-2">Guardar</button>
               </div>
            </div> 

            
         </div>         

      </form>
    

   </div> <!-- Cierre container -->


<?php

   include_once './footer.php';

?>