<?php
require '../Controllers/Config/db2.php';
$nss = false;
if(isset($_POST['cliente']) OR isset($_POST['nss']) OR isset($_POST['marca_id']) OR isset($_POST['sucursal_id']) OR isset($_POST['user_id'])) {
    $cliente = $_POST['cliente'];
    $nss = $_POST['nss'];
    $marca_id = $_POST['marca_id'];
    $sucursal_id = $_POST['sucursal_id'];
    $user_id = $_POST['user_id'];

    $query = "INSERT INTO clientes (nombre, nss, user_id, sucursal_id, marca_id) VALUES ('$cliente', '$nss', '$user_id', '$sucursal_id', '$marca_id')";
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
}
else
{
    $errorCliente = "Todos los campos deben estar llenados";
    echo mysqli_error($conn);
}