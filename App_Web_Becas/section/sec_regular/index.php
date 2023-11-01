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
        <form action="re_save.php" method="POST">

            <div class="mb-3">
                <label for="" class="form-label">Selecciona tu semestre actual</label>
                <select class="form-select form-select-lg" name="semestre" id="semestre">
                    <option selected disabled>Seleccione un semestre</option>
                    <option value="1">1er Semestre</option>
                    <option value="2">2er Semestre</option>
                    <option value="3">3er Semestre</option>
                    <option value="4">4to Semestre</option>
                    <option value="5">5to Semestre</option>
                    <option value="6">6to Semestre</option>
                    <option value="7">7mo Semestre</option>
                    <option value="8">8vo Semestre</option>
                    <option value="9">9no Semestre</option>
                </select>
            </div>

            <div class="mb-3">
              <label for="promedio" class="form-label">Ingrese su promedio actual:</label>
              <input type="number" step="0.01"
                class="form-control" name="promedio" id="promedio" aria-describedby="helpId" placeholder="Escriba su promedio actual">
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
