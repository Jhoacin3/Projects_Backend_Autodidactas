<?php
  $id=$_POST['id'];
  $variante=$_POST['selectvariante'];
  $palabra=$_POST['palabrachol'];
  $traduccion=$_POST['traduccion'];
  $autor=$_POST['autor'];
  $fuente=$_POST['fuente'];
  $region=$_POST['region'];
  
  // para ver lo que introduce el usuario
  echo "Id  Pelis: ".$id."<br>";
  echo"Nombre: " .$variante."<br>";
  echo "Genero: ".$palabra."<br>";
  echo "Idioma: ".$traduccion."<br>";
  echo "Subtitulo: ".$autor."<br>";
  echo "Año de estreno: ".$fuente."<br>";
  echo "Año de estreno: ".$region."<br>";
  
  $conexion=
  mysqli_connect("localhost","root","", "crud_chol")
  or die("Error al conectar a la BD");
  $consulta="INSERT INTO palabras VALUE
  ('$id','$variante','$palabra','$traduccion','$autor','$fuente','$region')";
  $resultado=mysqli_query($conexion,$consulta);
  echo $consulta;
  if ($resultado==1)
  {
    echo "<h3>LOS DATOS DE LA PELICULA SE HAN ALMACENADO CON EXITO</h3>";
  }
  ?>