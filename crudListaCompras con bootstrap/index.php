<?php
/*
CRUD Lista de Compras
1- Crear BD
2- Datos conexion: server, ususrio, clave
3- Crear función conexion()




*/


include("conexion.php");

$conexion = conexion();
/*
echo "<pre>";
var_dump($conexion);
echo "</pre>";
*/
//guardamos la consulta en un variable
$todosLosItems = "SELECT * FROM lista";
//guardamos el resultado de ejecutar la consulta
$consulta = mysqli_query($conexion, $todosLosItems);
/*
echo "<pre>";
var_dump($consulta);
echo "</pre>";
*/

include "headerHtml.php";
?>
        <div class="card p-3 my-5 bg-info">
            <h5>Nuevo Item</h5>
            <form action="agregarItem.php" method="POST" class="row g-3">
                
                    <div class="col-sm-5">
                        <input type="text" class="form-control" id="item" name="item" placeholder="Item">
                    </div>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" id="cantidad" name="cantidad" placeholder="Cantidad">
                    </div>                                    
                    <div class="col ms-sm-1">
                        <button type="submit" class="btn btn-primary w-100"><i class="bi bi-plus-square"></i></button>
                    </div>
    
                
            </form>
        </div>
        <table class="table bg-info table-striped mt-3">
            <thead>
                <th class="col-sm-4 text-center">Item</th>
                <th class="col-sm-4 text-center">Cantidad</th>
                <th class="col-sm-2 text-center"></th>
                <th class="col-sm-2 text-center"></th>
            </thead>
            <tbody>
            <?php                 
                while($fila = mysqli_fetch_array($consulta)){
            ?>            
                <tr>

                    <td class="col-sm-4"><?php echo $fila["item"] ?></td>
                    <td class="col-sm-4 text-center"><?php echo $fila["cantidad"] ?></td>
                    <td class="col-sm-2 text-center"><a href="FormEditarItem.php?id=<?php echo $fila['id']?>"><button class="btn btn-secondary"><i class="bi bi-pencil-square"></i></button></a></td>
                    <td class="col-sm-2 text-center"><a href="eliminarItem.php?id=<?php echo $fila['id']?>"><button class="btn btn-danger"><i class="bi bi-trash"></i></button></a></td>
                </tr>
                
            <?php
                }
                
            ?>
                
            </tbody>
        </table>
    <?php include "footerHtml.php" ?>