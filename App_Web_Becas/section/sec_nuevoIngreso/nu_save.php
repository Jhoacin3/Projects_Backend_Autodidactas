<?php
include "../../templates/header.php"
?>
<?php
include("../../templates/bd.php");
$message = ""; // Inicializacion de msj

if ($_POST) {
    // RECEPCION DE DATOS
    $nu_promedio = isset($_POST["promedio"]) ? $_POST["promedio"] : "";
    $nu_ingreso = isset($_POST["ingreso"]) ? $_POST["ingreso"] : "";

    // Validación del promedio y definición de la variable "umas"
    // $umas = ($nu_promedio >= 9.6) ? 207.48 : 0;
        // Crear mensaje

        if ($nu_promedio >= 9.6 && $nu_promedio<=10) {
            $umas = 207.48;
            $message = "Felicidades, fuiste apto para permanecer en esta beca, tus datos han sido guardados.";
        } else if ($nu_promedio >= 8.5 && $nu_promedio <= 9.5) {
            $umas = 0;
            $message = "Hemos identificado que tu promedio es apto para las siguientes becas:";
            $message .= "<p> <a href='../sec_deportistas/index.php'>Beca para jóvenes deportistas</a></p>";
            $message .= "<p> <a href='../sec_madresSol/index.php'>Beca para madres solteras</a></p>";

        } else {
            $umas = 0;
            $message = "Lo siento, identificamos que tu promedio no es apto para esta beca ni para ninguna otra beca.";
        }
        
    // INSERTAR A LA BD
    $sentencia = $conexion->prepare("INSERT INTO `modu_nuevos` (`id`, `promedios`, `fechadeingreso`, `umas`) VALUES (NULL, :nu_promedio, :nu_ingreso, :umas)");
    
    // ASIGNAR LOS VALORES QUE VIENEN DEL METODO POST (FORMULARIO)
    $sentencia->bindParam(":nu_promedio", $nu_promedio);
    $sentencia->bindParam(":nu_ingreso", $nu_ingreso);
    $sentencia->bindParam(":umas", $umas);
    
    // EJECUTAR TODO
    $sentencia->execute();
    // 

    
    
}
?>
    <p><?php echo $message; ?></p>
