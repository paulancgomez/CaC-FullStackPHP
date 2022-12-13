<?php
include("conexion.php");

$conexion = conexion();

$id = $_GET["id"];

//echo $id;

$sql = "SELECT * FROM lista WHERE id=$id";
$query = mysqli_query($conexion, $sql);
$fila = mysqli_fetch_array($query);

include "headerHtml.php"
?>
<div class="vh-100">
    <div class="card p-3 bg-secondary my-5">
            <h4>Editar Item</h4>
            <form action="editarItem.php" method="POST" class="row g-3">
                <div class="col d-none">
                    <input class="" type="text" name="id" id="id" value="<?php echo $fila["id"] ?>">
                </div>
                <div class="col-sm-5">
                    <input type="text" class="form-control" id="item" name="item" value="<?php echo $fila["item"] ?>">
                </div>
                <div class="col-sm-5">
                    <input type="text" class="form-control" id="cantidad" name="cantidad" value="<?php echo $fila["cantidad"] ?>">
                </div>
                <div class="col-sm-1 ms-sm-1">
                    <button type="submit" class="btn btn-primary w-100">Modificar</button>
                </div>
                
            </form>
    </div>
</div>

<?php include "footerHtml.php" ?>