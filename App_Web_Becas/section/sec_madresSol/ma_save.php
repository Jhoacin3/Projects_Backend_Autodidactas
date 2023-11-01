<?php
include "../../templates/header.php"
?>

<?php
include("../../templates/bd.php");
$message = ""; // Inicializacion de msj

if ($_POST) {
    // RECEPCION DE DATOS
    $ma_promedio = isset($_POST["promedio"]) ? $_POST["promedio"] : "";
    $ma_doc = isset($_FILES["doc_madre"]['name']) ? $_FILES["doc_madre"]['name'] : "";
    $ma_ingreso = isset($_POST["ingreso"]) ? $_POST["ingreso"] : "";

    // Validación del promedio y definición de la variable "umas" 2.5 umas
    $umas = ($ma_promedio >= 8.5) ? 258.98 : 0;
    // INSERTAR A LA BD
    $sentencia=$conexion->prepare("INSERT INTO `modu_madres` (`id`, `promedios`, `documentos`, `umas`, `fechadeingreso`) VALUES (NULL, :ma_promedio, :ma_doc, :umas, :ma_ingreso);
    ");

    // ASIGNAR LOS VALORES QUE VIENEN DEL METODO POST (FORMULARIO)
    // REEMPLAZA LOS DATOS ACTUALES POR LOS GENERALES
    $sentencia->bindParam(":ma_promedio",$ma_promedio);
    $sentencia->bindParam(":ma_doc",$ma_doc);
    $sentencia->bindParam(":ma_ingreso",$ma_ingreso);
    $sentencia->bindParam(":umas",$umas);
    // EJECUTAR TODO
    $sentencia->execute();
    
    if ($umas <= 8.4) {
        $message = "Lo siento, identificamos que tu promedio: ". $ma_promedio . "y posiblemente tu documento: ". $ma_doc ." no es apto para solicitar estabeca ni ninguna de las demas por tu promedio, gracias.";
    }else {
        $message = "Felicidades, por tu promedio de: ".$ma_promedio. " fuiste apto para permanecer a esta beca, tus datos han sido guardados.";

    }
}
?>
    <p><?php echo $message; ?></p>

