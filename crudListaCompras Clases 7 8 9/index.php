<?php
include("conexion.php");

$conexion = conexion();

$sql = "SELECT * FROM lista";

$query = mysqli_query($conexion, $sql);
/*
echo "<pre>";
print_r($query);
echo "</pre>";


$registros = mysqli_fetch_all($query);
echo "<pre>";
var_dump($registros);
echo "</pre>";
*/

include "headerHtml.php"
?>


    <main class="container mt-4">
    <h1>Lista de Compras</h1>

    <h2>Nuevo Item</h2>
    <form action="agregarItem.php" method="post">
        <input type="text" name="item" id="item" placeholder="item">
        <input type="text" name="cantidad" id="" placeholder="cantidad">

        <input type="submit" value="Agregar">
    </form>
    
    <table class="table table-striped">
        <thead>
            <!--<th>id</th> -->
            <th>item</th>
            <th>cantida</th>
            <th>accion</th>
            <th>accion</th>
        </thead>
        <tbody>
            <?php
                while($fila = mysqli_fetch_assoc($query)){
            ?>        
            <tr>
                <!--<td><?php echo $fila["id"] ?></td> -->
                <td><?php echo $fila["item"] ?></td>
                <td><?php echo $fila["cantidad"] ?></td>
                <td><a href="formEditarItem.php?id=<?php echo $fila["id"] ?>"><button>Editar</button></a></td>
                <td><a href="eliminarItem.php?id=<?php echo $fila["id"] ?>"><button>Eliminar</button></a></td>
            </tr>
            <?php    }  ?>
            </main>
        </tbody>
    </table>


    <?php include "footerHtml.php" ?>