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
      <style>
        
        body{
          background: url(image/Vecteezy-White-Background_jm1220.jpg);
          background-repeat:no-repeat;
          background-size:100%;
        }
      </style>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

        
        <div class="contenedor">
        <nav class="text-light bg-dark">
        <ul class="nav nav-tabs">
            <li class="nav-item">
              <a class="nav-link active" href="index.html">Inicio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Peliculas</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#">Desarrollo Web</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#">Jhoacin Escolastico Sanchez</a>
            </li>
        </ul>
      </nav>

            <div class="row">
                <div class="col">
                    
                </div>
                <!-- para una tabla se necesita table... se neceita
                tr table row
                tres etiquetas se colocó... table: diseño de bootstrap
                table-atripped:negro y blanco diseño...
                 table-hover: para cuando pase cursor se sombrea chido
                -->
                <div class="col-6">
                  <center>
                    <h4>Tabla de Peliculas</h4></center>
                  <table class= "table table-atripped
                    table-bordered table-hover">
                    
                      <!-- On cells (`td` or `th`) -->
                      <tr>
                        <td class="table-danger">Id de la pelicula</td>

                        <td class="table-primary">Nombre</td>
                        <td class="table-secondary">Genero</td>
                        <td class="table-success">Idioma</td>
                        <td class="table-danger">Subtitulación</td>
                        <td class="table-warning">Año de estreno</td>

                      </tr>
                    
                <?php
                $conexion=
                mysqli_connect("localhost","root","", "peliculas")
                or die("Error al conectar a la BD");
                $consulta="SELECT * FROM pelicula";
                $resultado=mysqli_query($conexion,$consulta);
                while($row=mysqli_fetch_row($resultado))
                {
                    echo "<tr><td>",$row[0],"</td><td>";
                    echo $row [1],"</td><td>";
                    echo $row [2],"</td><td>";
                    echo $row [3],"</td><td>";
                    echo $row [4],"</td><td>";
                    echo $row [5],"</td></tr>";
                }
                
                ?>
                  </table>
                    <div class="mb-3">
                      <center>
                    <a class="btn btn-primary" href="Peliculas.html" role="button">Agregar</a>
                    <a class="btn btn-primary" href="UpdatePeliculas.html" role="button">Modificar</a>
                    <a class="btn btn-primary" href="DeletePeliculas.html" role="button">Eliminar</a>
                     </center>
                    </div>

              </div>

                <div class="col">
                    
                </div>

            </div>
        </div>
        
        
    </body>

    <footer>

    </footer> <!--parte de abajo como comentarios -->
</html>