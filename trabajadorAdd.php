<?php

   include_once './config.php';
   include_once './header.php';

   
   // obtenemos el catalogo de los negocios dados de alta en la DB
   $queryResult = $pdo->query("SELECT * FROM negocios");

   // while($row = $queryResult->fetch(PDO::FETCH_ASSOC)) {
   //    var_dump($row);
   //    echo "<br><br>";
   // }

?>


   <!-- cuerpo body -->
   <div class="container">
      <div class="row">
         <div class="col-md-12">
               <h1 class="mt-3 text-center">Agregar Trabajador</h1>
         </div>
      </div>

      <div class="alert alert-info text-left mt-4" role="alert">
         Campos Obligatorios ( * )
      </div>
      
      <form action="trabajadorConfirmAdd.php" method="POST" class="mt-4">
         <div class="row">
            <div class="col-md-6">
               <!-- Campo Nombre -->
               <div class="form-group">
                  <label for="nombre">Nombre <span class="badge badge-info">( * )</span></label>                  
                  <input type="text" class="form-control" name="nombre" id="nombre" required>
               </div>
            </div>
            <div class="col-md-6">
               <!-- Acampo Aperllido Paterno -->
               <div class="form-group">
                  <label for="apellidop">Apellido Paterno <span class="badge badge-info">( * )</span></label>
                  <input type="text" class="form-control" name="apellidop" id="apellidop" required>
               </div>
            </div>  
            <div class="col-md-6">
               <!-- Campo Paellido Materno -->
               <div class="form-group">
                  <label for="apellidom">Apellido Materno <span class="badge badge-info">( * )</span></label>
                  <input type="text" class="form-control" name="apellidom" id="apellidom" required>
               </div>
            </div>  
            <div class="col-md-6">
               <!-- Campo RFC -->
               <div class="form-group">
                  <label for="rfc">RFC <span class="badge badge-info">( * )</span></label>
                  <input type="text" class="form-control" name="rfc" id="rfc" required>
               </div>
            </div>  
            <div class="col-md-6">
               <!-- Campo CURP -->
               <div class="form-group">
                  <label for="curp">CURP:</label>
                  <input type="text" class="form-control" name="curp" id="curp">
               </div>
            </div>  
            <div class="col-md-6">
               <!-- Campo EMAIL -->
               <div class="form-group">
                  <label for="email">Email:</label>
                  <input type="email" class="form-control" name="email" id="email" require>
               </div>
            </div>  
            <div class="col-md-6">
               <!-- SELECT  -->
               <div class="form-group">
                  <label for="negocio">Negocio <span class="badge badge-info">( * )</span></label>
                  <select class="form-control" id="negocio" name="negocio">

                     <?php
                        
                        while($row = $queryResult->fetch(PDO::FETCH_ASSOC)) {
                           echo '<option >' . $row['razonsocial'] . '</option>';
                        }

                     ?>
                        
                  </select>
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