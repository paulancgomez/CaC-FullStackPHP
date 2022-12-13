<?php
include("conexion.php");

$conexion = conexion();

$id = $_GET["id"];

//echo $id;

$sql = "DELETE FROM lista WHERE id=$id";
$query = mysqli_query($conexion, $sql);

if($query){
    Header("Location: index.php");
}

?>