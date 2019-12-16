<?php

   include_once './config.php';
   include_once './header.php';

   // hacemos una consulta para traer los datos de la DB
   $queryResult = $pdo->query("SELECT trabajadores.id, trabajadores.nombre, trabajadores.apellidop, trabajadores.apellidom, trabajadores.rfc, trabajadores.curp, trabajadores.email, negocios.razonsocial FROM trabajadores, negocios WHERE trabajadores.negocioId=negocios.id");

   // hacemos una consulta para traer los datos de la DB
   //$queryResult = $pdo->query("SELECT * FROM trabajadores");

   // while($row = $queryResult->fetch(PDO::FETCH_ASSOC)) {
   //    var_dump($row);
   //    echo "<br><br>";
   // }

?>


   <!-- cuerpo body -->
   <div class="container-fluid">
      <div class="row">
         <div class="col-md-12">
            <h1 class="mt-3 text-center">Trabajador Listado</h1>
         </div>
      </div>

      <div class="row">         
         <a href="./trabajadorAdd.php" class="btn btn-primary active mb-3 ml-3" role="button" aria-pressed="true">+ Agregar Trabajador</a>
      </div>

      <div class="row">
         <div class="col-md-12">

         <table class="table">
            <thead class="thead-dark">
               <tr>
                  <th scope="col">#</th>
                  <th scope="col">Nombre</th>
                  <th scope="col">Apellido Paterno</th>
                  <th scope="col">Apellido Materno</th>
                  <th scope="col">email</th>
                  <th scope="col">Negocio</th>
                  <th scope="col"></th>
               </tr>
            </thead>
            <tbody>
               
               <?php 
                  while($row = $queryResult->fetch(PDO::FETCH_ASSOC)) {
                     echo '<tr>';
                     echo '<th scope="row">' . $row['id'] . '</th>';
                     echo '<td>' . $row['nombre'] . '</td>';
                     echo '<td>' . $row['apellidop'] . '</td>';
                     echo '<td>' . $row['apellidom'] . '</td>';
                     echo '<td>' . $row['email'] . '</td>';
                     echo '<td>' . $row['razonsocial'] . '</td>';
                     echo '<td><a href="trabajadorUpdate.php?id='. $row['id'] .'" class="badge badge-success">Editar</a></td>';
                     // echo '<td><a href="#" class="badge badge-danger">Eliminar</a></td>';
                     echo '</tr>';
                  }
               ?>
                             
            </tbody>
         </table>

         </div>
      </div>
     
   </div> <!-- Cierre container -->


<?php

   include_once './footer.php';

?>