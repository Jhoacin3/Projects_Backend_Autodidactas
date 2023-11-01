<?php
include("./templates/bd.php");
// RESULTADO TOTAL DE UMAS BECAS
$tables = array("modu_deportistas", "modu_madres", "modu_nuevos", "modu_regular"); // Lista de nombres de tablas
$sumaTotal = 0;
// itera las tablas de la bd y almacena en la variable table
foreach ($tables as $table) {
    // suma las columnas llamadas umas de la bd
    $query = "SELECT SUM(umas) as total FROM $table";
    $resultado = $conexion->query($query);

    if ($resultado) {
        //  devolver un array asociativo donde los nombres de las columnas son las claves.
        $fila = $resultado->fetch(PDO::FETCH_ASSOC);
        // La suma total obtenida de la fila actual se agrega a la variable $sumaTotal. Esto acumula las sumas totales de todas las tablas recorridas en el bucle foreach.
        $sumaTotal += $fila['total']; // Sumar al total acumulado
    }
}
    // RESULTADO DE DEPORTISTAS
        $query = "SELECT SUM(umas) as de_total FROM modu_deportistas";
        $de_resultado = $conexion->query($query);
        $de_sumaTotal = 0;

    if ($resultado)
    {
    $de_fila = $de_resultado->fetch(PDO::FETCH_ASSOC);
    $de_sumaTotal = $de_fila['de_total'];
    }

    // RESULTADO DE MADRES SOLTERAS
        $query = "SELECT SUM(umas) as ma_total FROM modu_madres";
        $ma_resultado = $conexion->query($query);
        $ma_sumaTotal = 0;

    if ($resultado)
    {
    $ma_fila = $ma_resultado->fetch(PDO::FETCH_ASSOC);
    $ma_sumaTotal = $ma_fila['ma_total'];
    }
    // RESULTADO DE NUEVO INGRESO
        $query = "SELECT SUM(umas) as nu_total FROM modu_nuevos";
        $nu_resultado = $conexion->query($query);
        $nu_sumaTotal = 0;

    if ($resultado)
    {
    $nu_fila = $nu_resultado->fetch(PDO::FETCH_ASSOC);
    $nu_sumaTotal = $nu_fila['nu_total'];
    }
    // RESULTADO DE REGULARES
        $query = "SELECT SUM(umas) as re_total FROM modu_regular";
        $re_resultado = $conexion->query($query);
        $re_sumaTotal = 0;

    if ($resultado)
    {
    $re_fila = $re_resultado->fetch(PDO::FETCH_ASSOC);
    $re_sumaTotal = $re_fila['re_total'];
    }

?>



    <!-- HTML -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SISTEMA DE BECAS MEDIA SUPERIOR</title>
    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
    <br>
    <h3 class="text-center">Becas para estudiantes de nivel Media Superior</h3>
    <br>
    <div class="row">
        <div class="col">
        <div class="card" style="width: 18rem;">
                <img src="./img/modulo_ nuevoIngreso.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Beca para Nuevo Ingreso</h5>
                    <p class="card-text">Registrate y verifica si eres apto para postularte
                    <br>
                    </br>
                    Hay un total de: <?php echo $nu_sumaTotal; ?> UMAS.
                    </p>
                    <a href="./section/sec_nuevoIngreso/index.php" class="btn btn-primary">Ingresar</a>
                </div>
            </div>
        </div>

        <div class="col">
        <div class="card" style="width: 18rem;">
                <img src="./img/modulo_madres.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Beca para Madres Estudiantes</h5>
                    <p class="card-text">Registrate y verifica si eres apto para postularte 
                    <br>
                    </br>
                    Hay un total de: <?php echo $ma_sumaTotal; ?> UMAS.
                    </p>
                    <a href="./section/sec_madresSol/index.php" class="btn btn-primary">Ingresar</a>
                </div>
            </div>
        </div>


        <div class="col">
            <div class="card" style="width: 18rem;">
                <img src="./img/modulo_deportista.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Beca para Estudiantes Deportistas</h5>
                    <p class="card-text">Registrate y verifica si eres apto para postularte 
                    <br>
                    </br>
                    Hay un total de: <?php echo $de_sumaTotal; ?> UMAS.
                    </p>
                    <a href="./section/sec_deportistas/index.php" class="btn btn-primary">Ingresar</a>
                </div>
            </div>
        </div>
        
        <div class="col">
            <div class="card" style="width: 18rem;">
                <img src="./img/modulo_regularUni.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Beca Media Superior</h5>
                    <p class="card-text">Registrate y verifica si eres apto para postularte
                    <br>
                    </br>
                    Hay un total de: <?php echo $re_sumaTotal; ?> UMAS.
                    </p>
                    <a href="./section/sec_regular/index.php" class="btn btn-primary">Ingresar</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card" style="width: 18rem;">
                <img src="./img/total.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title text-center">TOTAL DE UMAS</h5>
                    <p class="card-text">Hay un total de: <?php echo $sumaTotal; ?> UMAS.</p>
                    <a href="./index.php" class="btn btn-info">Actualizar pagina</a>
                </div>
            </div>
        </div>
                
    </div>
    
</body>
</html>