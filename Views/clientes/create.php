<?php
require '../../Controllers/Config/db2.php';

$query = 'SELECT id, nombre FROM usuarios';
$res = mysqli_query($conn, $query);
?>
<form  id="" method="post" enctype="multipart/form-data" class="form-horizontal">
    <div class="position-relative form-group">
        <label for="cliente" class="">Cliente</label>
        <input name="cliente" id="cliente" placeholder="Nombre del cliente" type="text" class="form-control">
    </div>
    <div class="position-relative form-group">
        <label for="nss" class="">NSS</label>
        <input name="nss" id="nss" placeholder="Numero de Seguro Social (NSS)" type="text" class="form-control">
    </div>
    <div class="position-relative form-group">
        <label for="marca" class="">Marca</label>
        <select name="marca" id="marca" class="form-control" >
            <option disabled value="">Seleccione un elemento</option>
        </select>
    </div>
    <div class="position-relative form-group">
        <label for="user_id" class="">Jefe Inmediato</label>
        <select name="user_id" id="user_id" class="form-control" >
            <option disabled value="">Seleccione un elemento</option>
            <?php
            while($row = mysqli_fetch_array($res))
            {

            ?>
                <option value="<?php print "".$row['id'] .""; ?>"><?php print $row['nombre']; ?></option>
            <?php
            }
            ?>
        </select>
    </div>
    <button class="mt-1 btn btn-primary" id="" type="button">Enviar</button>
</form>
