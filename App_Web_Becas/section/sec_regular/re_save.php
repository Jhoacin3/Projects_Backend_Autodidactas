<?php
include "../../templates/header.php"
?>

<?php
include("../../templates/bd.php");
$message = ""; // Inicializacion de msj

if ($_POST) {
    // RECEPCION DE DATOS
    $re_semestre = isset($_POST["semestre"]) ? $_POST["semestre"] : "";
    $re_promedio = isset($_POST["promedio"]) ? $_POST["promedio"] : "";
    $re_ingreso = isset($_POST["ingreso"]) ? $_POST["ingreso"] : "";
    
    if ($re_semestre >= 3 && $re_promedio>=9) {
        $umas = 155.24;
        $message = "Felicidades, fuiste apto para permanecer a esta beca, tus datos han sido guardados.";

    }else {
        $umas = 0;
        $message = "Lo siento, identificamos que tu promedio: ". $re_semestre ." y tu calificación: ". $re_promedio ." no son aptos para esta beca, gracias.";
    }

    // INSERTAR A LA BD
    $sentencia = $conexion->prepare("INSERT INTO `modu_regular` (`id`, `semestres`, `promedios`, `fechadeingreso`, `umas`) VALUES (NULL,:re_semestre,:re_promedio,:re_ingreso,:umas)");

    
    
    // ASIGNAR LOS VALORES QUE VIENEN DEL METODO POST (FORMULARIO)
    // NO NECESITAS COMILLAS ALREDEDOR DE LOS VALORES BIND
    $sentencia->bindParam(":re_semestre", $re_semestre);
    $sentencia->bindParam(":re_promedio", $re_promedio);
    $sentencia->bindParam(":re_ingreso", $re_ingreso);
    $sentencia->bindParam(":umas", $umas);
    
    // EJECUTAR TODO
    $sentencia->execute();
    
    // Aquí puedes agregar una redirección o mensaje de éxito si deseas
}
?>
    <p><?php echo $message; ?></p>
