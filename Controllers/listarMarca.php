<?php
require '../Controllers/Config/db2.php';

$query = 'SELECT * FROM marca';
$res = mysqli_query($conn, $query);
if(mysqli_errno($conn))
{
    print "Error" . mysqli_errno($conn) . mysqli_error($conn);
}
else
{
    print "<table id='tb' class='table table-bordered'";
    print "<tr><td>Nombre</td><td>Imagen/Logo</td><td>Descipcion</td><td>Creado el:</td></tr>";
    while ($row = mysqli_fetch_array($res))
    {
        print "<tr><td>".$row['nombre']."</td><td>".$row['imagen']."</td><td><img src=''".$row['descripcion']."</td><td>".$row['created_at']."</td></tr>";
    }
    print "</table>";


    mysqli_close($conn);
}
