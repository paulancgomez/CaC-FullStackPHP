<?php
/*echo "<pre>";
var_dump($_GET);
echo "</pre>";
*/
include("conexion.php");

$conexion = conexion();

$id = $_GET["id"];

$sql = "SELECT * FROM lista WHERE id = $id";

$query = mysqli_query($conexion, $sql);

$fila = mysqli_fetch_assoc($query);

include "headerHtml.php";
?>

<section class="container mt-4">
<form action="editarItem.php" method="post">
    <input type="text" name="id" id="" value="<?php echo $fila["id"] ?>" hidden>    
    <input type="text" name="item" id="" value="<?php echo $fila["item"] ?>">
    <input type="text" name="cantidad" id="" value="<?php echo $fila["cantidad"] ?>">

    <input type="submit" value="Modificar">
</form>
</section>

<?php include "footerHtml.php" ?>