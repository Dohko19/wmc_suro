<?php
require '../Config/db2.php';
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
                $query = "INSERT INTO archive (pdf, foto) VALUES ('$filename', '$fotoName')";
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
            else
            {
                $query = "INSERT INTO archive (pdf) VALUES ('$filename')";
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