<?php
require '../Controllers/Config/db2.php';
require '../Controllers/Config/Carbon/autoload.php';
use Carbon\Carbon;
use Carbon\CarbonInterval;

date_default_timezone_set('America/Mexico_City');

if (isset($_POST['nombre']) OR isset($_POST['descripcion']))
{
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $created_at = Carbon::now();
    $mes = Carbon::now()->month;
    $anio = Carbon::now()->year;

    $query = "INSERT INTO marca (nombre, descripcion, created_at, mes, anio) VALUES ('$nombre', '$descripcion', '$created_at', '$mes', '$anio')";
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
 die;