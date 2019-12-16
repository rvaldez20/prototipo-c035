<?php

   include_once './config.php';
   include_once './header.php';

   // hacemos una consulta para traer los datos de la DB
   $queryResult = $pdo->query("SELECT * FROM negocios");

   // while($row = $queryResult->fetch(PDO::FETCH_ASSOC)) {
   //    var_dump($row);
   //    echo "<br><br>";
   // }

?>


   <!-- cuerpo body -->
   <div class="container-fluid">
      <div class="row">
         <div class="col-md-12">
               <h1 class="mt-3 text-center">Empresa o Negocios</h1>
         </div>
      </div>

      <div class="row">         
         <a href="./empresaAdd.php" class="btn btn-primary active mb-3 ml-3" role="button" aria-pressed="true">+ Agregar Empresa o negocio</a>
      </div>

      <div class="row">
         <div class="col-md-12">

            <table class="table">
               <thead class="thead-dark">
                  <tr>
                     <th scope="col">#</th>
                     <th scope="col">Empresa</th>
                     <th scope="col">Razón Social</th>
                     <th scope="col">RFC</th>
                     <th scope="col"></th>
                     <!-- <th scope="col"></th> -->
                  </tr>
               </thead>
               <tbody>
                  
                  <?php 
                     while($row = $queryResult->fetch(PDO::FETCH_ASSOC)) {
                        echo '<tr>';
                        echo '<th scope="row">' . $row['id'] . '</th>';
                        echo '<td>' . $row['negocio'] . '</td>';
                        echo '<td>' . $row['razonsocial'] . '</td>';
                        echo '<td>' . $row['rfc'] . '</td>';
                        echo '<td><a href="empresaUpdate.php?id='. $row['id'] .'" class="badge badge-success">Editar</a></td>';
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