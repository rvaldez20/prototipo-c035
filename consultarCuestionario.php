<?php

   // include_once 'config.php';
   include_once 'header.php';

   // requerimos la conexión a la base de datos
   require "config.php";

   // hacemos una consulta para traer los datos de la DB
   $queryResult = $pdo->query("SELECT trabajadores.id, trabajadores.nombre, trabajadores.apellidop, trabajadores.apellidom, trabajadores.rfc, trabajadores.curp, trabajadores.email, negocios.razonsocial FROM trabajadores, negocios WHERE trabajadores.negocioId=negocios.id ORDER BY trabajadores.negocioId,  trabajadores.nombre");

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
            <h2 class="mt-3 text-center">Datos Generales del Cuestionario</h2>
         </div>
      </div>

      <div class="row">
         <div class="col-md-12">
            <table class="table table-bordered">
               <thead>
                  <tr>
                     <th scope="col" class="text-center">#</th>
                     <th scope="col" class="text-center">Folio</th>
                     <th scope="col" class="text-center">Trabajador</th>
                     <th scope="col" class="text-center">Fase I</th>
                     <th scope="col" class="text-center">Fase II</th>
                     <th scope="col" class="text-center">Fase III</th>
                     <th scope="col" class="text-center">Fase IV</th>
                  </tr>
               </thead>
               <tbody>
                  <tr>
                     <th class="text-center" scope="row">1</th>
                     <td>DESPACHO-BRENDA-001</td>
                     <td>Aurora lopez Solis</td>
                     <td class="text-center"><span class="badge badge-success">Aplicado</span></td>
                     <td class="text-center"><span class="badge badge-warning">Pendiente</span></td>
                     <td class="text-center"><span class="badge badge-warning">Pendiente</span></td>
                     <td class="text-center"><span class="badge badge-warning">Pendiente</span></td>                    
                  </tr>                 
                  <tr>                                                              
                     <td colspan="3"></td>
                     <td class="text-center"><span class="badge badge-primary">2020-01-13 15:35:58</span></td>
                     <td class="text-center">NA</td>
                     <td class="text-center">NA</td>
                     <td class="text-center">NA</td>                                         
                  </tr>                 
               </tbody>
            </table>   
         </div>         
      </div>   

      <div class="row">
         <div class="col-md-12">
            <h2 class="mt-3 text-center">Preguntas / Respuestas Fase I</h2>
         </div>
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
                  // while($row = $queryResult->fetch(PDO::FETCH_ASSOC)) {
                  //    echo '<tr>';
                  //    echo '<th scope="row">' . $row['id'] . '</th>';
                  //    echo '<td>' . $row['nombre'] . '</td>';
                  //    echo '<td>' . $row['apellidop'] . '</td>';
                  //    echo '<td>' . $row['apellidom'] . '</td>';
                  //    echo '<td>' . $row['email'] . '</td>';
                  //    echo '<td>' . $row['razonsocial'] . '</td>';
                  //    echo '<td><a href="trabajadorUpdate.php?id='. $row['id'] .'" class="badge badge-success">Editar</a></td>';
                  //    // echo '<td><a href="#" class="badge badge-danger">Eliminar</a></td>';
                  //    echo '</tr>';
                  //}
               ?>
                             
            </tbody>
         </table>

         </div>
      </div>
     
   </div> <!-- Cierre container -->


<?php

   include_once './footer.php';

?>