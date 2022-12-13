<?php
echo "<pre>";
var_dump($_POST);
echo "</pre>";

include("conexion.php");

$conexion = conexion();

$item = $_POST["item"];
$cantidad = $_POST["cantidad"];

$sql = "INSERT INTO lista VALUES (NULL, '$item', '$cantidad')";

$query = mysqli_query($conexion, $sql);


if($query) {
    Header("Location: index.php");
}


?>