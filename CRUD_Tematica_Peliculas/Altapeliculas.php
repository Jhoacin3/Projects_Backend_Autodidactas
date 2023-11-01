<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<header>
        <nav class="text-light bg-dark">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                  <a class="nav-link active" href="index.html">Inicio</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="consultapelicula.php">Peliculas</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link disabled" href="#">Desarrollo Web</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link disabled" href="#">Jhoacin Escolastico Sanchez</a>
                </li>
            </ul>
          </nav>
        </div>
</header>


<?php
  $Idpelicula=$_POST['imputidpeliculas'];
  $nombre=$_POST['inputnombre'];
  $genero=$_POST['selectgenero'];
  $idioma=$_POST['selectidioma'];
  $subtitulo=$_POST['selectsubtitulos'];
  $estreno=$_POST['selectestreno'];
  
  // para ver lo que introduce el usuario
  echo "Id  Pelis: ".$Idpelicula."<br>";
  echo"Nombre: " .$nombre."<br>";
  echo "Genero: ".$genero."<br>";
  echo "Idioma: ".$idioma."<br>";
  echo "Subtitulo: ".$subtitulo."<br>";
  echo "Año de estreno: ".$estreno."<br>";
  
  $conexion=
  mysqli_connect("localhost","root","", "peliculas")
  or die("Error al conectar a la BD");
  $consulta="INSERT INTO pelicula VALUE
  ('$Idpelicula','$nombre','$genero','$idioma','$subtitulo','$estreno')";
  $resultado=mysqli_query($conexion,$consulta);
  echo $consulta;
  if ($resultado==1)
  {
    echo "<h3>LOS DATOS DE LA PELICULA SE HAN ALMACENADO CON EXITO</h3>";
  }
  ?>