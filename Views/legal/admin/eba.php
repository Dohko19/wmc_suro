<?php
require '../../../Controllers/Config/db2.php';

$query = 'SELECT id, nombre FROM clientes';
$res = mysqli_query($conn, $query);
?>
<div class="app-main__inner">
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="pe-7s-display1 icon-gradient bg-premium-dark">
                    </i>
                </div>
                <div>EMA/EVA
                    <div class="page-title-subheading">
                        Subir Reporte de EMA y EVA
                    </div>
                </div>
            </div>

        </div>
    </div>
    <ul class="body-tabs body-tabs-layout tabs-animated body-tabs-animated nav">
        <li class="nav-item">
            <a role="tab" class="nav-link active" id="tab-0" data-toggle="tab" href="#tab-content-0">
                <span>EMA/EVA</span>
            </a>
        </li>
        <li class="nav-item">
            <a role="tab" class="nav-link" id="tab-1" data-toggle="tab" href="#tab-content-1">
                <span id="boton-usuarios" >SUA</span>
            </a>
        </li>
        <li class="nav-item">
            <a role="tab" class="nav-link" id="tab-2" data-toggle="tab" href="#tab-content-2">
                <span id="boton-clientes">Ver Clientes</span>
            </a>
        </li>
        <li class="nav-item">
            <a role="tab" class="nav-link" id="tab-3" data-toggle="tab" href="#tab-content-3">
                <span>Dar de alta Clientes</span>
            </a>
        </li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
            <div class="row">
                <div class="col-md-12">
                    <div class="main-card mb-3 card">
                        <div class="card-body"><h5 class="card-title">EMA/EVA</h5>
                            <div id="formulario">
                                <form  id="" method="post" enctype="multipart/form-data" class="form-horizontal">
                                    <div class="position-relative form-group">
                                        <label for="periodo" class="">Periodo</label>
                                        <input name="periodo" id="periodo" placeholder="Periodo (numero de mes ej. 1)" type="number"
                                               min="1"
                                               max="12"
                                               class="form-control">
                                        <br>
                                        <input name="anio" id="anio" placeholder="Periodo (año ej. 2020)" type="number"
                                               min="1970"
                                               max="2050"
                                               class="form-control">
                                    </div>
                                    <div class="position-relative form-group">
                                        <label for="smgv" class="">S.M.G.V</label>
                                        <input name="smgv" id="smgv" placeholder="SMGV" type="text" class="form-control">
                                    </div>
                                    <div class="position-relative form-group">
                                        <label for="uma" class="">U.M.A</label>
                                        <input name="uma" id="uma" placeholder="UMA"
                                               type="text" class="form-control">
                                    </div>
                                    <div class="position-relative form-group">
                                        <label for="cotizaciones" class="">Cotizaciones</label>
                                        <input name="cotizaciones" id="cotizaciones" placeholder="Cotizaciones"
                                               type="text" class="form-control">
                                    </div>
                                    <div class="position-relative form-group">
                                        <label for="desde" class="">Fecha Correspondiente</label><br>
                                        Desde:
                                        <input name="desde" id="desde" placeholder="desde"
                                               type="date" class="form-control">
                                        Hasta:
                                        <input name="hasta" id="hasta" placeholder="hasta"
                                               type="date" class="form-control">
                                    </div>
                                    <div class="position-relative form-group">
                                        <label for="pdf" class="">PDF</label>
                                        <input name="pdf" id="pdf" placeholder="PDF"
                                               type="file" class="form-control">
                                    </div>
                                    <div class="position-relative form-group">
                                        <label for="cliente_id" class="">Relacionado con el Cliente</label>
                                        <select name="cliente_id" id="cliente_id" class="form-control" >
                                            <option disabled value="">Seleccione un cliente</option>
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
                                    <div class="position-relative form-group">
                                        <label for="permiso" class="">Tipo de documento</label>
                                        <select name="tipo" id="tipo" class="form-control" >
                                            <option disabled selected>Seleccione un elemento</option>
                                            <option value="1">EMA</option>
                                            <option value="2">EVA</option>
                                        </select>
                                    </div>
                                    <button class="mt-1 btn btn-primary" id="botonenviar" type="button">Enviar</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="tab-pane tabs-animation fade" id="tab-content-1" role="tabpanel">
            <div class="row">
                <div class="col-md-12">
                    <div class="main-card mb-3 card">
                        <div class="card-body"><h5 class="card-title">Dar de Alta SUA</h5>
                            <div>
                                <form  id="" method="post" enctype="multipart/form-data" class="form-horizontal">
                                    <div class="position-relative form-group">
                                        <label for="periodo" class="">Periodo</label>
                                        <br>
                                        Numero de Mes:
                                        <input name="nomes" id="nomes" placeholder="Numero de Mes" type="number"
                                               min="1"
                                               max="12"
                                               class="form-control">
                                        <br>
                                        Mes:
                                        <select class="form-control" name="mes" id="mes">
                                            <option value="Enero">Enero</option>
                                            <option value="Febrero">Febrero</option>
                                            <option value="Marzo">Marzo</option>
                                            <option value="Abril">Abril</option>
                                            <option value="Mayo">Mayo</option>
                                            <option value="Junio">Junio</option>
                                            <option value="Agosto">Agosto</option>
                                            <option value="Septiembre">Septiembre</option>
                                            <option value="Octubre">Octubre</option>
                                            <option value="Noviembre">Noviembre</option>
                                            <option value="Diciembre">Diciembre</option>
                                        </select>
                                    </div>
                                    <div class="position-relative form-group">
                                        <label for="anio" class="">Año</label>
                                        <input name="anio" id="anio" placeholder="Año ej. 2020" type="number"
                                               min="1970"
                                               max="2050"
                                               class="form-control">
                                    </div><div class="position-relative form-group">
                                        <label for="smgv" class="">Cedula de Determinacion de Cuotas</label>
                                        <input name="smgv" id="smgv" placeholder="SMGV" type="file" class="form-control">
                                    </div>
                                    <div class="position-relative form-group">
                                        <label for="uma" class="">Resumen de Liquidacion</label>
                                        <input name="liquidacion" id="liquidacion" placeholder="liquidacion"
                                               type="file" class="form-control">
                                    </div>
                                    <div class="position-relative form-group">
                                        <label for="pdf" class="">Pago SUA</label>
                                        <input name="pagosua" id="pagosua" placeholder="pagosua"
                                               type="file" class="form-control">
                                    </div>
                                    <button class="mt-1 btn btn-primary" id="botonenviar" type="button">Enviar</button>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane tabs-animation fade" id="tab-content-2" role="tabpanel">
            <form class="">
                <div class="row">
                    <div class="col-md-12">
                        <div class="main-card mb-3 card">
                            <div class="card-body"><h5 class="card-title">Clientes <a onclick="clienteAlta()" href="#clientesAlta" class="btn btn-info float-right">Dar de alta Cliente</a onclick="clienteAlta()"></h5>
                                <div class="position-relative form-group">
                                    <div>
                                        <div id="listarClientes"></div>
                                        <div id="list-clientes"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="tab-pane tabs-animation fade" id="tab-content-3" role="tabpanel">
            <div class="row">
                <div class="col-md-12">
                    <div class="main-card mb-3 card">
                        <div class="card-body"><h5 class="card-title">Dar de alta Clientes</h5>
                            <div class="position-relative form-group">
                                <div>
                                    <?php
                                    require '../../Controllers/Config/db2.php';

                                    $query = 'SELECT id, nombre FROM usuarios';
                                    $query2 = 'SELECT id, nombre FROM marca';
                                    $query3 = 'SELECT id, nombre FROM sucursal';
                                    $res = mysqli_query($conn, $query);
                                    $res2 = mysqli_query($conn, $query2);
                                    $res3 = mysqli_query($conn, $query3);
                                    ?>
                                    <?php
                                    if(isset($errorCliente)){
                                        echo '<span style="color: #ff0000;">' . $errorCliente . '</span>';
                                    }
                                    ?>
                                    <form id="clientedata" method="POST" enctype="multipart/form-data" class="form-horizontal">
                                        <div class="position-relative form-group">
                                            <label for="cliente" class="">Cliente</label>
                                            <input name="cliente" id="cliente" placeholder="Nombre del cliente" type="text" class="form-control">
                                        </div>
                                        <div class="position-relative form-group">
                                            <label for="nss" class="">NSS</label>
                                            <input name="nss" id="nss" placeholder="Numero de Seguro Social (NSS)" type="text" class="form-control">
                                        </div>
                                        <div class="position-relative form-group">
                                            <label for="marca_id" class="">Marca</label>
                                            <select name="marca_id" id="marca_id" class="form-control" >
                                                <option disabled value="1">Seleccione un elemento</option>
                                                <?php
                                                while($row = mysqli_fetch_array($res2))
                                                {

                                                    ?>
                                                    <option value="<?php print "".$row['id'] .""; ?>"><?php print $row['nombre']; ?></option>
                                                    <?php
                                                }
                                                ?>
                                            </select>
                                        </div>
                                        <div class="position-relative form-group">
                                            <label for="sucursal_id" class="">Sucursal</label>
                                            <select name="sucursal_id" id="sucursal_id" class="form-control" >
                                                <option disabled value="1">Seleccione un elemento</option>
                                                <?php
                                                while($row = mysqli_fetch_array($res3))
                                                {

                                                    ?>
                                                    <option value="<?php print "".$row['id'] .""; ?>"><?php print $row['nombre']; ?></option>
                                                    <?php
                                                }
                                                ?>
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
                                        <button class="mt-1 btn btn-primary" id="clientebutton" type="button">Enviar</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <link rel="stylesheet" href="/assets/css/toastr.min.css">
    <script src="/assets/scripts/jquery-3.5.0.js"></script>
    <script type="text/javascript" src="/assets/scripts/main.js"></script>
    <script src="/assets/js/axios.min.js"></script>
    <script src="/assets/scripts/toastr.min.js"></script>
    <script>
        function validarUser(){
            if($("#nombre").val() == ""){
                toastr.error('El campo Nombre no pede estar vacio', {timeOut: 5000, progressBar: true});
                $("#nombre").focus();       // Esta función coloca el foco de escritura del usuario en el campo Nombre directamente.
                return false;
            }
            if($("#username").val() == ""){
                toastr.error('El campo Nombre de Usuario no puede estar vacío.', {timeOut: 5000, progressBar: true});
                $("#username").focus();
                return false;
            }
            if($("#password").val() == ""){
                toastr.error('El campo Password no puede estar vacío.', {timeOut: 5000, progressBar: true});
                $("#password").focus();
                return false;
            }
            return true;
        }

        $(document).ready( function() {   // Esta parte del código se ejecutará automáticamente cuando la página esté lista.
            $("#botonenviar").click( function() {     // Con esto establecemos la acción por defecto de nuestro botón de enviar.
                if(validarUser()){                               // Primero validará el formulario.
                    $.post("/Controllers/UserController.php", $("#userdata").serialize(), function(res){
                        if(res == 1){
                            toastr.success('El Usuario se registro correctamente.', {timeOut: 5000, progressBar: true});
                            $('#userdata').trigger("reset");
                        } else {
                            toastr.error('Error al registrar el usuario.', {timeOut: 5000, progressBar: true});
                        }
                    });
                }
            });
        });

        $("#boton-usuarios").on("click", getUsers);
        function getUsers() {
            $.ajax({
                url: '/Controllers/listarUsuarios.php',
                type: 'get',
                success: function(event) {
                    document.getElementById('list-usuarios').innerHTML = event;
                }

            });
        }

        $("#boton-clientes").on("click", getCliente);
        function getCliente(){
            $.ajax({
                url: '/Controllers/listarClientes.php',
                type:'get',
                success: function (event) {
                    document.getElementById('list-clientes').innerHTML = event;

                }
            })
        }
    </script>

    <script>
        function clienteAlta(){
            jQuery.ajax({
                url: 'Views/clientes/create.php',
                type: 'POST',
                beforeSend: function () {
                    jQuery("#formalta").html("<br /><br /><i class='icon-spinner icon-spin orange bigger-125'></i>&nbsp;&nbsp;Procesando, Espere por favor...");
                },
                success: function (data) {
                    jQuery("#formalta").html(data);
                }
            });
        }
    </script>

    <script>
        function validarUser(){
            if($("#cliente").val() == ""){
                toastr.error('El campo Nombre no pede estar vacio', {timeOut: 5000, progressBar: true});
                $("#cliente").focus();       // Esta función coloca el foco de escritura del usuario en el campo Nombre directamente.
                return false;
            }
            if($("#nss").val() == ""){
                toastr.error('El campo NSS o numero de seguro social no puede estar vacío.', {timeOut: 5000, progressBar: true});
                $("#nss").focus();
                return false;
            }
            if($("#user_id").val() == ""){
                toastr.error('El cliente debe estar refenciado por un Usuario.', {timeOut: 5000, progressBar: true});
                $("#user_id").focus();
                return false;
            }
            if($("#sucursal_id").val() == ""){
                toastr.error('El cliente debe estar refenciado a una sucursal.', {timeOut: 5000, progressBar: true});
                $("#sucursal_id").focus();
                return false;
            }
            if($("#marca_id").val() == ""){
                toastr.error('El cliente debe estar refenciado a una marca.', {timeOut: 5000, progressBar: true});
                $("#marca_id").focus();
                return false;
            }
            return true;
        }

        $(document).ready( function() {   // Esta parte del código se ejecutará automáticamente cuando la página esté lista.
            $("#clientebutton").click( function() {     // Con esto establecemos la acción por defecto de nuestro botón de enviar.
                if(validarUser()){                               // Primero validará el formulario.
                    $.post("/Controllers/ClienteController.php", $("#clientedata").serialize(), function(res){
                        if(res == 1){
                            toastr.success('El Cliente se dio de alta correctamente.', {timeOut: 5000, progressBar: true});
                            $('#clientedata').trigger("reset");
                        } else {
                            toastr.error('Error al registrar el cliente.', {timeOut: 5000, progressBar: true});
                        }
                    });
                }
            });
        });
    </script>

