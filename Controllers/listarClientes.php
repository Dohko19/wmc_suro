<?php
require '../Controllers/Config/db2.php';

$query = 'SELECT c.*, u.nombre AS name FROM clientes c JOIN usuarios u ON c.user_id =u.id';
$res = mysqli_query($conn, $query);
if(mysqli_errno($conn))
{
    print "Error" . mysqli_errno($conn) . mysqli_error($conn);
}
else
{
    print "<table id='tb' class='table table-bordered'";
    print "<tr><td>Nombre</td><td>NSS</td><td>Usuario</td></tr>";
    while ($row = mysqli_fetch_array($res))
    {
        print "<tr><td>".$row['nombre']."</td><td>".$row['nss']."</td><td>".$row['name']."</td></tr>";
    }
    print "</table>";


    mysqli_close($conn);
}
