<?php
require '../Controllers/Config/db2.php';
require '../Controllers/Config/Carbon/autoload.php';
use Carbon\Carbon;
use Carbon\CarbonInterval;

date_default_timezone_set('America/Mexico_City');
var_dump($_FILES);
if (isset($_POST['nombresucursal']))
{
    $nombre = $_POST['nombresucursal'];
    $created_at = Carbon::now();
    $mes = Carbon::now()->month;
    $anio = Carbon::now()->year;

    $query = "INSERT INTO sucursal (nombre, created_at, mes, anio) VALUES ('$nombre', '$created_at', '$mes', '$anio')";
    if (mysqli_query($conn, $query))
    {
        echo 1;
        mysqli_close($conn);
    }
    else
    {
        //Si hay algún error con la inserción, se muestra un mensaje
        echo mysqli_error($conn);
    }
}
die;