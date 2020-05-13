<?php
require '../Config/db2.php';
require '../Config/Carbon/autoload.php';
use Carbon\Carbon;
use Carbon\CarbonInterval;

$path = './expedienteRH/';
$pathFoto = './expedienteRH/fotos/';

$nss = $_POST['nssrh'];
$nombre = $_POST['nombrerh'];
$apellidoPaterno = $_POST['aprh'];
$apellidoMaterno = $_POST['amrh'];
$centro = $_POST['centrorh'];
$calle= $_POST['callerh'];
$numerointerior = $_POST['numerointeriorrh'];
$numero = $_POST['numerorh'];
$colonia = $_POST['coloniarh'];
$delmun = $_POST['delmunrh'];
$cp = $_POST['cprh'];
$ciudad = $_POST['ciudadrh'];
$expediente = $_FILES['expdienterh'];
$foto = $_FILES['fotorh'];
$created_at = Carbon::now()->format('Y-m-d H:i:s');

if ((isset($expediente)) AND ($expediente !=''))
{
    if(file_exists($path) || @mkdir($path))
    {
        $file = $expediente;
        $tempName = $file['tmp_name'];
        $filename = $file['name'];
        if ((isset($foto)) AND ($foto !=''))
        {
            $fotoNametmp = $foto['tmp_name'];
            $fotoName = $foto['name'];
            $movefoto = $fotoNametmp;
            $destinyfoto = $pathFoto . $fotoName;
            if (file_exists($pathFoto) || @mkdir($pathFoto)) {
                move_uploaded_file($movefoto, $destinyfoto);
            }
        }

        $move = $tempName;
        $destiny = $path . $filename;
        if (move_uploaded_file($move, $destiny))
        {
            if ($foto !='')
            {
                $query = "INSERT INTO expediente_electronico (nombre, ap_paterno, ap_materno, centro, nss, calle, numinterior, numero, colonia, delmun, cp, ciudad, expediente, foto, created_at)
                            VALUES ('$nombre', '$apellidoPaterno', '$apellidoMaterno', '$centro', '$nss', '$calle', '$numerointerior', '$numero', '$colonia', '$delmun', '$cp', '$ciudad','$filename', '$fotoName', '$created_at')";
                if (mysqli_query($conn,$query))
                {
                    echo 1;
                    mysqli_close($conn);
                }
                else
                {
                    return mysqli_error($conn);
                }
            }
            else
            {
                $query = "INSERT INTO expediente_electronico (nombre, ap_paterno, ap_materno, centro, nss, calle, numinterior, numero, colonia, delmun, cp, ciudad, expediente, created_at)
                            VALUES ('$nombre', '$apellidoPaterno', '$apellidoMaterno', '$centro', '$nss', '$calle', '$numerointerior', '$numero', '$colonia', '$delmun', '$cp', '$ciudad','$filename', '$created_at')";
                if (mysqli_query($conn,$query))
                {
                    echo 1;
                    mysqli_close($conn);
                }
                else
                {
                    echo mysqli_error($conn);
                }
            }

        }
    }
}