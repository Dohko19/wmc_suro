<?php

require '../Controllers/Config/db2.php';

$query = 'SELECT * FROM expediente_electronico';
$res = mysqli_query($conn, $query);
if (mysqli_errno($conn)) {
    print "Error" . mysqli_errno($conn) . mysqli_error($conn);
    mysqli_close($conn);
} else {
        print "<table class='mb-0 table table-hover'>";
        print "<thead>
                <tr>
                    <th>NSS</th>
                    <th>Nombre</th>
                    <th>Centro</th>
                    <th>Marca</th>
                    <th>Expediente</th>
                </tr>
                </thead>";
        print "<tbody>";
    while ($row = mysqli_fetch_array($res)) {
        print "<tr><td>" . $row['nss'] .
            "</td><td>" . $row['nombre'] . " " . $row['ap_paterno'] . " " . $row['ap_materno'] .
            "</td><td>" . $row['centro'] .
            "</td><td>" . $row['centro'] .
            "</td><td>" . "<a href='./RHLegal/expedienteRH/'". $row['expediente'] . ">Descargar</a>".
            "</td></tr>";

    }
        print "</tbody>";


    mysqli_close($conn);
}

