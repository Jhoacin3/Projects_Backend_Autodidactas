<header>
        <nav class="text-light bg-dark">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                  <a class="nav-link active" href="index.html">Inicio</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="tabla.php">Registro de palabras</a>
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
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<?php
  $id=$_POST['id'];
  $variante=$_POST['selectvariante'];
  $palabra=$_POST['palabrachol'];
  $traduccion=$_POST['traduccion'];
  $autor=$_POST['autor'];
  $fuente=$_POST['fuente'];
  $region=$_POST['region'];
  
  $conexion=
  mysqli_connect("localhost","root","", "crud_chol")
  or die("Error al conectar a la BD");
  $consulta=" UPDATE palabras SET
   Variante='$variante', PalabraChol='$palabra', TraduccionChol='$traduccion', autor='$autor', fuente='$fuente', region='$region'
     WHERE id='$id'";
  $resultado=mysqli_query($conexion,$consulta);
  echo $consulta;
  if ($resultado==1)
  {
    echo "<h3>LOS DATOS DE LA PELICULA SE HAN ALMACENADO CON EXITO</h3>";
  }
  ?>