<?php
require '../Controllers/Config/db2.php';

$query = 'SELECT nombre, username, avatar, permisos FROM usuarios';
$res = mysqli_query($conn, $query);
if(mysqli_errno($conn))
{
    print "Error" . mysqli_errno($conn) . mysqli_error($conn);
}
else
{
    print "<table id='tb' class='table table-bordered'";
    print "<tr><td>Nombre</td><td>Nombre de Usuario</td><td>Permisos</td></tr>";
    while ($row = mysqli_fetch_array($res))
    {
        if($row['permisos'] == '1')
        {
            $permiso = "Administrador";
        }
        else
        {
            $permiso = "Moderador";
        }
        print "<tr><td>".$row['nombre']."</td><td>".$row['username']."</td><td>".$permiso."</td></tr>";
    }
    print "</table>";

    mysqli_close($conn);
}
