<?php
?>
<div class="app-main__inner">
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="pe-7s-display1 icon-gradient bg-premium-dark">
                    </i>
                </div>
                <div>Listado de usuarios
                    <div class="page-title-subheading">
                        En esta seccion puedes ver el listado de clientes, usuarios, crear usuarios y crear clientes (para crear clientes asegurate
                        de crear antes una marca y una sucursal a la que pertenecen)
                    </div>
                </div>
            </div>

        </div>
    </div>
    <ul class="body-tabs body-tabs-layout tabs-animated body-tabs-animated nav">
        <li class="nav-item">
            <a role="tab" class="nav-link active" id="tab-0" data-toggle="tab" href="#tab-content-0">
                <span>Crear Usuario</span>
            </a>
        </li>
        <li class="nav-item">
            <a role="tab" class="nav-link" id="tab-1" data-toggle="tab" href="#tab-content-1">
                <span id="boton-usuarios" >Lista de Usuarios</span>
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
                        <div class="card-body"><h5 class="card-title">Controls Types</h5>
                            <div id="formulario">
                                <form  id="userdata" method="post" enctype="multipart/form-data" class="form-horizontal">
                                    <div class="position-relative form-group">
                                        <label for="nombre" class="">Nombre</label>
                                        <input name="nombre" id="nombre" placeholder="Nombre del Usuario" type="text" class="form-control">
                                    </div>
                                    <div class="position-relative form-group">
                                        <label for="username" class="">Nombre de Usuario (username)</label>
                                        <input name="username" id="username" placeholder="Nombre de usuario" type="text" class="form-control">
                                        <small class="text-muted">*Con este nombre es con el que accederas al WMC</small>
                                    </div>
                                    <div class="position-relative form-group">
                                        <label for="password" class="">Password</label>
                                        <input name="password" id="password" placeholder="Ingresa la Contraseña"
                                               type="password" class="form-control">
                                    </div>
                                    <div class="position-relative form-group">
                                        <label for="permiso" class="">Rol</label>
                                        <select name="permiso" id="permiso" class="form-control" >
                                            <option disabled value="">Seleccione un elemento</option>
                                            <option value="1">Administrador</option>
                                            <option value="2">Moderador</option>
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
                        <div class="card-body"><h5 class="card-title">Lista de Usuarios</h5>
                            <div>
                                <div id="#loading"></div>
                                <div id="list-usuarios"></div>
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

