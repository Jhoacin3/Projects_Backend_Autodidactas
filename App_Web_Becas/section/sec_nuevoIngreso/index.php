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
        <form action="nu_save.php" method="POST">

            <div class="mb-3">
              <label for="promedio" class="form-label">Ingrese su promedio general de bachiller:</label>
              <input type="number" step="0.01"
                class="form-control" name="promedio" id="promedio" aria-describedby="helpId" placeholder="Escriba su promedio final de bachiller">
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
