<?php
require '../Config/db2.php';
require '../Config/Carbon/autoload.php';

use Carbon\Carbon;
use Carbon\CarbonInterval;

$pathgr1 = './Nom035/gr1/';
$pathgr3 = './Nom035/gr3/';

$centro = $_POST['centrornn'];
$mes = $_POST['mesrn'];
$anio = $_POST['aniorn'];

$gr1 = $_FILES['gr1rn'];
$gr3 = $_FILES['gr3rn'];

$created_at = Carbon::now()->format('Y-m-d H:i:s');

if ((isset($gr1)) AND isset($gr3))
{
    echo "seteado";
            $gr1tempName = $gr1['tmp_name'];
            $gr1name = $gr1['name'];

            $gr3tempName = $gr3['tmp_name'];
            $gr3name = $gr3['name'];

            $destinogr1 = $pathgr1 . $gr1name;
            $destinogr3 = $pathgr3 . $gr3name;

            if (move_uploaded_file($gr3tempName, $destinogr1))
            {
                if (move_uploaded_file($gr1tempName, $destinogr3))
                {
                    $query = "INSERT INTO nom035 (centro, mes, anio, gr1, gr3, created_at)
                            VALUES ('$centro','$mes','$anio','$gr1name','$gr3name','$created_at')";
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