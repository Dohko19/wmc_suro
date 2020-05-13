<?php
require '../Config/db2.php';
require '../Config/Carbon/autoload.php';

use Carbon\Carbon;
use Carbon\CarbonInterval;
;
$pathoco = './PagosProvisionales/Oco/';
$pathppi = './PagosProvisionales/PPI/';

$periodo = $_POST['periodp'];
$anio = $_POST['aniop'];

$ppi = $_FILES['ppi'];
$oco = $_FILES['oco'];
$created_at = Carbon::now()->format('Y-m-d H:i:s');


    $ocotempName = $oco['tmp_name'];
    $ocoName = $oco['name'];

    $ppitempName = $ppi['tmp_name'];
    $ppiName = $ppi['name'];

    $destinooco = $pathoco . $ocoName;
    $destinoppi = $pathppi . $ppiName;
    if (move_uploaded_file($ppitempName, $destinoppi)) {
        if (move_uploaded_file($ocotempName, $destinooco)) {
            echo "Moving...";
            $query = "INSERT INTO pagos_provisionales (periodo, anio, pago_provisional, cumplimiento_oficial, created_at)
                VALUES('$periodo','$anio','$ppiName', '$ocoName', '$created_at')";

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
    }