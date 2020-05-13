<?php
require '../Config/db2.php';
require '../Config/Carbon/autoload.php';
use Carbon\Carbon;
use Carbon\CarbonInterval;

$pathcdc = './SUA/cdc/';
$pathliquidacion = './SUA/liquidacion/';
$pathsua = './SUA/pagossua/';

$nomes = $_POST['nomes'];
$mes = $_POST['mes'];
$anio = $_POST['anio'];

$cdc = $_FILES['cdc'];
$liquidacion = $_FILES['liquidacion'];
$pagosua = $_FILES['pagosua'];
$created_at = Carbon::now()->format('Y-m-d H:i:s');

if ((isset($cdc)) AND isset($liquidacion) AND isset($pagosua))
{
    echo "seteado";

    if(file_exists($pathcdc) || @mkdir($pathcdc))
    {
        echo "path creado 1";
        if(file_exists($pathliquidacion) || @mkdir($pathliquidacion))
        {
            echo "path creado 2";
            if (file_exists($pathsua) || @mkdir($pathsua))
            {
                echo "path creado 3";
                $cdctempName = $cdc['tmp_name'];
                $cdcname = $cdc['name'];
                $movecdc = $cdctempName;

                $liquidacion = $liquidacion;
                $liquidaciontempName = $liquidacion['tmp_name'];
                $liquidacionname = $liquidacion['name'];
                $moveliquidacion = $liquidaciontempName;

                $pagosua = $pagosua;
                $pagosutempName = $pagosua['tmp_name'];
                $pagosuname = $pagosua['name'];
                $movesua = $pagosutempName;

                $destinocdc = $pathcdc . $cdcname;
                $destinoliquidacion = $pathliquidacion . $liquidacionname;
                $destinosua = $pathsua . $pagosuname;

                if (move_uploaded_file($movecdc, $destinocdc))
                {
                    echo "<br>";
                    echo "movido 1";
                    if (move_uploaded_file($moveliquidacion, $destinoliquidacion))
                    { echo "<br>";
                        echo "movido 2";


                        if (move_uploaded_file($movesua, $destinosua))
                        {
                            echo "movido 3";
                            $query = "INSERT INTO sua (nomes, mes, anio, ced_det_cuota, resumen_liquidacion, pago_sua, created_at)
                            VALUES ('$nomes','$mes','$anio','$cdcname','$liquidacionname','$pagosuname','$created_at')";
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
                        else
                        {
                            echo "<br>";
                            echo "error al mover 3";
                        }
                    }
                }
            }
        }
    }

}
