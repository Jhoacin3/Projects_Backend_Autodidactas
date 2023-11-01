<?php
include "../../templates/header.php"
?>
<br>
<div class="row">
<div class="col-2"></div>
<div class="col">
<div class="card">
    <div class="card-header">
        <h5 class="text-center">Ingrese el dato para verificar si eres apto para la beca</h5>
    </div>
    <div class="card-body">

    <form action="ma_save.php" method="POST" enctype="multipart/form-data">

        <div class="mb-3">
            <label for="" class="form-label">Ingrese su promedio actual:</label>
            <input type="number" step="0.01" class="form-control" name="promedio" id="promedio" placeholder="Escriba su promedio final de bachiller">
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Ingrese Acta de nacimiento de su hijo</label>
            <input type="file" class="form-control" name="doc_madre" id="doc_madre">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Fecha de ingreso</label>
            <input type="date" class="form-control" name="ingreso" id="ingreso">
        </div>

        <input type="submit" name="btn_registrar" class="btn btn-success" value="Verificar">
    </form>

    </div>
    <div class="card-footer text-muted">
    </div>
</div>
</div>

<div class="col-2"></div>
</div>