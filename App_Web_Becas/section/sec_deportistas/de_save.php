<?php
include "../../templates/header.php"
?>
<?php
include("../../templates/bd.php");
$message = ""; // Inicializacion de msj

if ($_POST) {
    // RECEPCION DE DATOS
    $de_promedio = isset($_POST["promedio"]) ? $_POST["promedio"] : "";
    $de_doc = isset($_FILES["doc_deportista"]['name']) ? $_FILES["doc_deportista"]['name'] : "";
    $de_ingreso = isset($_POST["ingreso"]) ? $_POST["ingreso"] : "";

    // Validación del promedio y definición de la variable "umas" 1 umas
    // $umas = () ? 103.74 : 0;
      if($de_promedio >= 9 && $de_promedio <= 10){
        $umas =103.74;
        $message = "Felicidades, fuiste apto para permanecer a esta beca, tus datos han sido guardados.";
      }else if ($de_promedio>=8.5 && $de_promedio <= 10) {
        $umas =0;
        $message = "Hemos identificado que tu promedio es apto para las siguientes becas:";
            $message .= "<p> <a href='../sec_madresSol/index.php'>Beca para madres solteras</a></p>";

    }else {
        $umas =0;
        $message = "Lo siento, identificamos que tu promedio no es apto para esta beca ni para ninguna otra beca.";
    }
    // INSERTAR A LA BD
    $sentencia=$conexion->prepare("INSERT INTO `modu_deportistas` (`id`, `promedios`, `documentos`, `umas`, `fechadeingreso`) VALUES (NULL, :de_promedio, :de_doc, :umas, :de_ingreso);
    ");
    // ASIGNAR LOS VALORES QUE VIENEN DEL METODO POST (FORMULARIO)
    // REEMPLAZA LOS DATOS ACTUALES POR LOS GENERALES
    $sentencia->bindParam(":de_promedio",$de_promedio);
    $sentencia->bindParam(":de_doc",$de_doc);
    $sentencia->bindParam(":de_ingreso",$de_ingreso);
    $sentencia->bindParam(":umas",$umas);
    // EJECUTAR TODO
    $sentencia->execute();

}
?>
    <p><?php echo $message; ?></p>