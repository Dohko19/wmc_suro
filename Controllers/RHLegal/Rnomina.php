<?php
require '../Config/db2.php';
require '../Config/Carbon/autoload.php';
use Carbon\Carbon;
use Carbon\CarbonInterval;

$pathRN = './RecibosNomina/';

$nss = $_POST['nssrn'];
$nombre = $_POST['nombrern'];
$centro = $_POST['centrorn'];
$tienda = $_POST['tiendarn'];

$recibo = $_FILES['reciborn'];
$created_at = Carbon::now()->format('Y-m-d H:i:s');

if (isset($recibo))
{
    if(file_exists($pathRN) || @mkdir($pathRN))
    {
        $recibotempName = $recibo['tmp_name'];
        $reciboname = $recibo['name'];

        $destinonomina = $pathRN . $reciboname;
        if (move_uploaded_file($recibotempName, $destinonomina))
        {
            $query = "INSERT INTO recibos_nomina (nss, nombre, centro, tienda, recibo, created_at)
                            VALUES ('$nss','$nombre','$centro','$tienda','$reciboname','$created_at')";
            if (mysqli_query($conn,$query))
            {
                echo 1;
                mysqli_close($conn);
            }
            else
            {
                echo mysqli_errno($conn);
                echo mysqli_error($conn);
            }
        }
    }
}