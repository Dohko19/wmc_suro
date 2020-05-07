<?php
require '../Controllers/Config/db2.php';

    $nombre = $_POST['nombre'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $permiso = $_POST['permiso'];


        $pass = md5($password);
        $query = "INSERT INTO usuarios (nombre, username, password, permisos) VALUES ('$nombre', '$username', '$pass', '$permiso')";


    if (mysqli_query($conn, $query))
    {
        echo 1;
        mysqli_close($conn);
    }
    else
    {
        //Si hay algún error con la inserción, se muestra un mensaje
        echo mysqli_error($conn);
        echo '
               <script>toastr.error(\'Ocurrio un Problema contacte con el administrador o recargue la pagina\');</script>
               ';
//             die( "Parece que ha habido un error. Recargue la página e inténtelo nuevamente." );
    }
