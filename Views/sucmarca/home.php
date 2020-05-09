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
                <div>Marcas y Sucursales
                    <div class="page-title-subheading">
                        Da de alta marcas y sucursales para poder dar de alta algun usuario o cliente
                    </div>
                </div>
            </div>

        </div>
    </div>
    <ul class="body-tabs body-tabs-layout tabs-animated body-tabs-animated nav">
        <li class="nav-item">
            <a role="tab" class="nav-link active" id="tab-0" data-toggle="tab" href="#tab-content-0">
                <span>Crear Marca</span>
            </a>
        </li>
        <li class="nav-item">
            <a role="tab" class="nav-link" id="tab-1" data-toggle="tab" href="#tab-content-1">
                <span id="boton-marcas" >Lista de Marcas</span>
            </a>
        </li>
        <li class="nav-item">
            <a role="tab" class="nav-link" id="tab-2" data-toggle="tab" href="#tab-content-2">
                <span id="boton-sucursal">Lista de Sucursales</span>
            </a>
        </li>
        <li class="nav-item">
            <a role="tab" class="nav-link" id="tab-3" data-toggle="tab" href="#tab-content-3">
                <span>Dar de alta Sucursales</span>
            </a>
        </li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
            <div class="row">
                <div class="col-md-12">
                    <div class="main-card mb-3 card">
                        <div class="card-body"><h5 class="card-title">Dar de alta una Marca</h5>
                            <div id="formulario">
                                <form  id="marcadata" method="post" enctype="multipart/form-data" class="form-horizontal">
                                    <div class="position-relative form-group">
                                        <label for="nombre" class="">Nombre de la Marca</label>
                                        <input name="nombre" id="nombre" placeholder="Nombre de la Marca" type="text" class="form-control">
                                    </div>
                                    <div class="position-relative form-group">
                                        <label for="imagen" class="">Imagen de la Marca</label>
                                        <input name="imagen" id="imagen" type="file" class="form-control">
                                        <small class="text-muted">*Con este nombre es con el que accederas al WMC</small>
                                    </div>
                                    <div class="position-relative form-group">
                                        <label for="descripcion" class="">Descripcion de la Marca</label>
                                        <textarea class="form-control" name="descripcion" id="descripcion" cols="30" rows="10" placeholder="Descripcion Opcional"></textarea>
                                    </div>
                                    <button class="mt-1 btn btn-primary" id="marcabutton" type="button">Enviar</button>
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
                        <div class="card-body"><h5 class="card-title">Lista de Marcas</h5>
                            <div>
                                <div id="#loading"></div>
                                <div id="list-marca"></div>
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
                            <div class="card-body"><h5 class="card-title">Sucursales</h5>
                                <div class="position-relative form-group">
                                    <div>
                                        <div id="list-sucursal"></div>
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
                                    <form id="sucursaldata" method="POST" enctype="multipart/form-data" class="form-horizontal">
                                        <div class="position-relative form-group">
                                            <label for="nombresucursal" class="">Nombre de la Sucursal</label>
                                            <input name="nombresucursal" id="nombresucursal" placeholder="Nombre de la Sucursal" type="text" class="form-control">
                                        </div>
                                        <div class="position-relative form-group">
                                            <label for="imagensuc" class="">Imagen</label>
                                            <input name="imagensuc" id="imagensuc" type="file" accept="image/*" class="form-control">
                                        </div>
                                        <button class="mt-1 btn btn-primary" id="sucursalbutton" type="button">Enviar</button>
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
        function validarMarca(){
            if($("#nombre").val() == ""){
                toastr.error('El campo Nombre no pede estar vacio', {timeOut: 5000, progressBar: true});
                $("#nombre").focus();       // Esta función coloca el foco de escritura del usuario en el campo Nombre directamente.
                return false;
            }
            if($("#imagen").val() == ""){
                toastr.error('El campo Imagen debe contener una imagen.', {timeOut: 5000, progressBar: true});
                $("#imagen").focus();
                return false;
            }
            return true;
        }

        $(document).ready( function() {   // Esta parte del código se ejecutará automáticamente cuando la página esté lista.
            $("#marcabutton").click( function() {   // Con esto establecemos la acción por defecto de nuestro botón de enviar.
                var datos = $("#marcadata").serializeArray();
                var imagen = new formData($("#marcadata")[0]);
                if(validarMarca()){                               // Primero validará el formulario.
                    $.post("/Controllers/MarcaController.php", datos, function(res){
                        if(res == 1){
                            toastr.success('la marca se registro correctamente.', {timeOut: 5000, progressBar: true});
                            $('#userdata').trigger("reset");
                        } else {
                            toastr.error('Error al registrar la Marca.', {timeOut: 5000, progressBar: true});
                        }
                    });
                }
            });
        });

        $("#boton-marcas").on("click", getMarca);
        function getMarca() {
            $.ajax({
                url: '/Controllers/listarMarca.php',
                type: 'get',
                success: function(event) {
                    document.getElementById('list-marca').innerHTML = event;
                }

            });
        }

        $("#boton-sucursal").on("click", getSucursal);
        function getSucursal(){
            $.ajax({
                url: '/Controllers/listarSucursales.php',
                type:'get',
                success: function (event) {
                    document.getElementById('list-sucursal').innerHTML = event;

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
        function validarSucursal(){
            if($("#nombresucursal").val() == ""){
                toastr.error('El campo Nombre no pede estar vacio', {timeOut: 5000, progressBar: true});
                $("#nombresucursal").focus();       // Esta función coloca el foco de escritura del usuario en el campo Nombre directamente.
                return false;
            }
            return true;
        }

        $(document).ready( function() {   // Esta parte del código se ejecutará automáticamente cuando la página esté lista.
            $("#sucursalbutton").click( function() {

                if(validarSucursal()){                               // Primero validará el formulario.
                    $.post("/Controllers/SucursalController.php", $("#sucursaldata").serialize(), function(res){
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


