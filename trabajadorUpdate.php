<?php

   include_once './config.php';
   include_once './header.php';

   // Obtenemos el catalogo de negocios de la db
   $queryResult = $pdo->query("SELECT * FROM negocios");

   $id = $_GET['id'];
   
   
   // hacemos una consulta para traer el trabajador datos de la DB
   $sql = "SELECT * FROM trabajadores WHERE id=:id";
   $query = $pdo->prepare($sql);

   $query->execute([
      'id' => $id
   ]);
   
   // obtenemos la columna con el id especificado
   $row = $query->fetch(PDO::FETCH_ASSOC);
   // var_dump($row);

   // creamos variables para cada campo
   $nombre = $row['nombre'];
   $apellidop = $row['apellidop'];
   $apellidom = $row['apellidom'];
   $rfc = $row['rfc'];
   $curp = $row['curp'];
   $email = $row['email'];
   $negocioId = $row['negocioId'];
   
   // con el id hay que obtener el nombre del negocio

   // hacemos una consulta para obtener la razon social al que pertence el empleado
   $sqlnegocio = "SELECT * FROM negocios WHERE id=:negocioId";
   $querynegocio = $pdo->prepare($sqlnegocio);

   $querynegocio->execute([
      'negocioId' => $negocioId
   ]);

   // obtenemos la columna con el id especificado
   $rownegocio = $querynegocio->fetch(PDO::FETCH_ASSOC);
   // echo '<br><br>';
   // var_dump($rownegocio);

   // guardamos en una variable la raozn social
   $razonsocial = $rownegocio['razonsocial'];


?>


   <!-- cuerpo body -->
   <div class="container">
      <div class="row">
         <div class="col-md-12">
               <h1 class="mt-3 text-center">Actualizar Trabajador</h1>
         </div>
      </div>

      
      <div class="alert alert-info text-left mt-4" role="alert">
         Campos Obligatorios ( * )
      </div>
      
      <form action="trabajadorConfirmUpdate.php" method="POST" class="mt-4">
         <div class="row">
            <div class="col-md-6">
               <!-- Campo Nombre -->
               <div class="form-group">
                  <label for="nombre">Nombre <span class="badge badge-info">( * )</span></label>                  
                  <input type="text" class="form-control" name="nombre" id="nombre" value="<?php echo $nombre ?>" required>
               </div>
            </div>
            <div class="col-md-6">
               <!-- Acampo Aperllido Paterno -->
               <div class="form-group">
                  <label for="apellidop">Apellido Paterno <span class="badge badge-info">( * )</span></label>
                  <input type="text" class="form-control" name="apellidop" id="apellidop" value="<?php echo $apellidop ?>" required>
               </div>
            </div>  
            <div class="col-md-6">
               <!-- Campo Paellido Materno -->
               <div class="form-group">
                  <label for="apellidom">Apellido Materno <span class="badge badge-info">( * )</span></label>
                  <input type="text" class="form-control" name="apellidom" id="apellidom" value="<?php echo $apellidom ?>" required>
               </div>
            </div>  
            <div class="col-md-6">
               <!-- Campo RFC -->
               <div class="form-group">
                  <label for="rfc">RFC <span class="badge badge-info">( * )</span></label>
                  <input type="text" class="form-control" name="rfc" id="rfc" value="<?php echo $rfc ?>" required>
               </div>
            </div>  
            <div class="col-md-6">
               <!-- Campo CURP -->
               <div class="form-group">
                  <label for="curp">CURP:</label>
                  <input type="text" class="form-control" name="curp" value="<?php echo $curp ?>" id="curp">
               </div>
            </div>  
            <div class="col-md-6">
               <!-- Campo EMAIL -->
               <div class="form-group">
                  <label for="email">Email:</label>
                  <input type="email" class="form-control" name="email" id="email" value="<?php echo $email ?>" require>
               </div>
            </div>  
            <div class="col-md-6">
               <!-- SELECT  -->
               <div class="form-group">
               <label for="negocio">Negocio <span class="badge badge-info">( * )</span></label>
               <select class="form-control" id="negocio" name="negocio">

                  <?php
                     
                     while($row = $queryResult->fetch(PDO::FETCH_ASSOC)) {

                        // sleeccionamos el negocio en base al que se asigno el negocioId
                        if($razonsocial == $row['razonsocial']){
                           echo '<option selected>' . $row['razonsocial'] . '</option>';
                        } else {
                           echo '<option >' . $row['razonsocial'] . '</option>';
                        }
                     }

                  ?>
                     
               </select>
               </div>
            </div>  

            <div class="col-md-12">
               <!-- Cramos un imput invisible para mandar el ID del trabajador a actualizar -->
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