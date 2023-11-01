<html>
    <head>
        <title>Pagina de inicio</title>
        <link rel="icon" type="image/jpg" href="../image/faviconMovie.ico">

        <meta charset="utf-8">
        <meta name="viewport" content="while=device-width,initial-scale=1,shrink-to-fit=no"> 
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
      
    </head>
    <body>
      
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

        
        <div class="contenedor">
        <nav class="text-light bg-dark">
        <ul class="nav nav-tabs">
            <li class="nav-item">
              <a class="nav-link active" href="index.html">Inicio</a>
            </li>
           
            <li class="nav-item">
              <a class="nav-link disabled" href="#">CRUD_CHOL</a>
            </li>

            <li class="nav-item">
              <a class="nav-link disabled" href="#">6to. A</a>
            </li>

        </ul>
      </nav>
      <div class="row ">
                <div class="">
                  <center>
                    <h4>Registro de palabras en CH´ol</h4></center>
                  <table class= "table table-atripped
                    table-bordered table-hover">
                    
                      <!-- On cells (`td` or `th`) -->
                      <tr>
                        <td class="table-primary">id</td>
                        <td class="table-secondary">Variante</td>
                        <td class="table-success">Palabra</td>
                        <td class="table-danger">Traduccion</td>
                        <td class="table-warning">Autor</td>
                        <td class="table-warning">fuente</td>
                        <td class="table-warning">Región</td>

                      </tr>
                      <?php
                $conexion=
                mysqli_connect("localhost","root","", "crud_chol")
                or die("Error al conectar a la BD");
                $consulta="SELECT * FROM palabras";
                $resultado=mysqli_query($conexion,$consulta);
                while($row=mysqli_fetch_row($resultado))
                {
                    echo "<tr><td>",$row[0],"</td><td>";
                    echo $row [1],"</td><td>";
                    echo $row [2],"</td><td>";
                    echo $row [3],"</td><td>";
                    echo $row [4],"</td><td>";
                    echo $row [5],"</td><td>";
                    echo $row [6],"</td><td>";
                }
                
                ?>
                  </table>
                    <div class="mb-3">
                      <center>
                    <a class="btn btn-primary" href="agregar.html" role="button">Agregar</a>
                    <a class="btn btn-primary" href="modificar.html" role="button">Modificar</a>
                    <a class="btn btn-primary" href="delete.html" role="button">Eliminar</a>
                     </center>
                    </div>

              </div>
            
    </body>

    <footer>

    </footer> <!--parte de abajo como comentarios -->
</html>