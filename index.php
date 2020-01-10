<?php

   // include_once 'config.php';
   include_once 'header.php';

   // requerimos la conexión a la base de datos
   require "config.php";

   // hacemos una consulta para traer los datos de la DB
   $queryResult = $pdo->query("SELECT cuestionario.id, cuestionario.folioCuestionario, trabajadores.nombre, trabajadores.apellidop, trabajadores.apellidom, cuestionario.fase1, cuestionario.fechafase1, cuestionario.fase2, cuestionario.fechafase2, cuestionario.fase3, cuestionario.fechafase3, cuestionario.fase4, cuestionario.fechafase4 FROM cuestionario, trabajadores WHERE cuestionario.trabajadorId = trabajadores.id");

   // while($row = $queryResult->fetch(PDO::FETCH_ASSOC)) {
   //    var_dump($row);
   //    echo "<br><br>";
   // }


?>


   <!-- cuerpo body -->
   <div class="container-fluid">
      <div class="row">
         <div class="col-md-12">
               <h1 class="mt-3">Listado de encuestas aplicadas</h1>
         </div>
      </div>

      <div class="row">
         <div class="col-md-12">

            <table class="table">
               <thead class="thead-dark">
                  <tr>
                     <th scope="col">#</th>
                     <th scope="col">Folio</th>
                     <th scope="col">Trabajador</th>                     
                     <th scope="col">Fase 1</th>                     
                     <th scope="col">Fase 2</th>                     
                     <th scope="col">Fase 3</th>                     
                     <th scope="col">Fase 4</th>
                     <th scope="col"></th>
                  </tr>
               </thead>
               <tbody>
                  
                  <?php                     
                     while($row = $queryResult->fetch(PDO::FETCH_ASSOC)) {
                        echo '<tr>';
                        echo '<th scope="row">' . $row['id'] . '</th>';
                        echo '<td>' . $row['folioCuestionario'] . '</td>';
                        echo '<td>' . $row['nombre'] . ' ' . $row['apellidop'] . ' ' . $row['apellidom'] . '</td>';

                        // se verifica cada fase
                        if($row['fase1'] == 1) {
                           echo '<td><span class="badge badge-success" data-toggle="tooltip" data-placement="left" title="' . 'Aplicada: ' . $row['fechafase1'] .'">Aplicada</span></td>';
                        } else{ 
                           echo '<td><span class="badge badge-warning">Sin Aplicar</span></td>';
                        }

                        if($row['fase2'] == 1) {
                           echo '<td><span class="badge badge-success">Aplicada</span></td>';
                        } else{ 
                           echo '<td><span class="badge badge-warning">Sin Aplicar</span></td>';
                        }

                        if($row['fase3'] == 1) {
                           echo '<td><span class="badge badge-success">Aplicada</span></td>';
                        } else{ 
                           echo '<td><span class="badge badge-warning">Sin Aplicar</span></td>';
                        }
                        if($row['fase4'] == 1) {
                           echo '<td><span class="badge badge-success">Aplicada</span></td>';
                        } else{ 
                           echo '<td><span class="badge badge-warning">Sin Aplicar</span></td>';
                        }

                        
                        
                        
                        echo '<td><a href="consultarCuestionario.php?id='. $row['id'] .'" class="badge badge-success">Ver</a></td>';
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

<script>
   $(function () {
      $('[data-toggle="tooltip"]').tooltip()
   })
</script>