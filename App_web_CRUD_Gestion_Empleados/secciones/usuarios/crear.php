<?php 
include("../../bd.php");

if($_POST){
  print_r($_POST);

    // validamos si nombredelpuesto si existe, pero si no existe: (:"") lo colocará en blanco... pero falta validarlo.
    // ERROR
    $usuario=(isset($_POST["usuario"])?$_POST["usuario"]:"");
    $password=(isset($_POST["password"])?$_POST["password"]:"");
    $correo=(isset($_POST["correo"])?$_POST["correo"]:"");

    // preparar la inserccion de los datos
    $sentencia=$conexion->prepare("INSERT INTO tb_usuarios (id,usuario,contraseña,correo)
    VALUES (NULL,:usuario,:password,:correo)");

    // asignando los valores que vienen del metodo POST (LOS QUE VIENEN DEL FORMULARIO)
    // bindParam: escribir la sentencia y ejecutarlo
    // ASIGNAN VALORES QUE TIENEN USO DE nombre de la :variable
    $sentencia->bindParam(":usuario",$usuario);
    $sentencia->bindParam(":password",$password);
    $sentencia->bindParam(":correo",$correo);
    $sentencia->execute();
    // basicamente le decimos redireccioname a index.php
    // header("location:index.php");
    $mensaje=  "Usuario creado </br>  creado en la base de datos";
    header("location:index.php?mensaje=".$mensaje);


}
?>
<?php include("../../templates/header.php"); ?> 
<h3 class="text-center" >Crear Usuarios</h3>




<br/>

<style>
        body{
            background: url(fondo3.svg);
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: 100% 100%; 
        }
</style>

<div class="card">
    <div class="card-header">
        Datos del usuario
    </div>
    <div class="card-body">
        <form action="" method="post" enctype="multi/part/form-data">
                
        <div class="mb-3">
          <label for="" class="form-label">Nombre del usuario</label>
          <input type="text"
            class="form-control" name="usuario" id="usuario" aria-describedby="helpId" placeholder="nombre del usuario">
        </div>

        <div class="mb-3">
          <label for="password" class="form-label">Contraseña</label>
          <input type="password"
            class="form-control" name="password" id="password" aria-describedby="helpId" placeholder="Escriba su contraseña">
        </div>

        <div class="mb-3">
          <label for="correo" class="form-label">Correo</label>
          <input type="email"
            class="form-control" name="correo" id="correo" aria-describedby="helpId" placeholder="Escriba su correo">
        </div>

        <button type="submit" class="btn btn-success">Agregar</button>
        <!-- boton a ... por que cancelar nos llevara a la seccion anterior como es cancelación -->
        <a name="" id="" class="btn btn-danger" href="index.php" role="button">Cancelar</a>
        </form>
    </div>
    <div class="card-footer text-muted">
    
    </div>
</div>



<?php include("../../templates/footer.php"); ?>
