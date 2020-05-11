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
                <div>Recusos Humanos
                    <div class="page-title-subheading">
                        Sección Recusos Humanos
                    </div>
                </div>
            </div>

        </div>
    </div>
    <ul class="body-tabs body-tabs-layout tabs-animated body-tabs-animated nav">
        <li class="nav-item">
            <a role="tab" class="nav-link active" id="tab-0" data-toggle="tab" href="#tab-content-0">
                <span>Expediente Electronico</span>
            </a>
        </li>
        <li class="nav-item">
            <a role="tab" class="nav-link" id="tab-1" data-toggle="tab" href="#tab-content-1">
                <span id="boton-usuarios" >SUA</span>
            </a>
        </li>
        <li class="nav-item">
            <a role="tab" class="nav-link" id="tab-2" data-toggle="tab" href="#tab-content-2">
                <span id="boton-clientes">Pagos Provisionales</span>
            </a>
        </li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
            <div class="row">
                <div class="col-md-12">
                    <div class="main-card mb-3 card">
                        <div class="card-body"><h5 class="card-title">Expediente electronico</h5>
                            <div id="">
                                <form  id="expelectronico" method="post" enctype="multipart/form-data" class="form-horizontal">
                                    <div class="position-relative form-group">
                                        <label for="nssrh" class="">NSS</label>
                                        <input name="nssrh" id="nssrh" placeholder="Numero de Seguro Social" type="text"
                                               class="form-control">
                                    </div>
                                    <div class="position-relative form-group">
                                        <label for="nombrerh" class="">Nombre</label>
                                        <input name="nombrerh" id="nombrerh" placeholder="Nombre" type="text" class="form-control">
                                    </div>
                                    <div class="position-relative form-group">
                                        <label for="aprh" class="">Apellido Paterno</label>
                                        <input name="aprh" id="aprh" placeholder="Apellido Paterno"
                                               type="text" class="form-control">
                                    </div>
                                    <div class="position-relative form-group">
                                        <label for="amrh" class="">Apellido Materno</label>
                                        <input name="amrh" id="amrh" placeholder="Apellido Materno"
                                               type="text" class="form-control">
                                    </div>
                                    <div class="position-relative form-group">
                                        <label for="centrorh" class="">Centro</label><br>
                                        <input name="centrorh" id="centrorh" placeholder="Centro"
                                               type="text" class="form-control">
                                    </div>
                                    <h3>Domicilio:</h3>
                                    <div class="position-relative form-group">
                                        <label for="callerh" class="">Calle</label>
                                        <input name="callerh" id="callerh" placeholder="Calle"
                                               type="text" class="form-control">
                                    </div>
                                    <div class="position-relative form-group">
                                        <label for="numerointeriorrh" class="">Numero Interior</label>
                                        <input name="numerointeriorrh" id="numerointeriorrh" placeholder="Numero Interior"
                                               type="number"
                                               min="1"
                                               class="form-control">
                                    </div>
                                    <div class="position-relative form-group">
                                        <label for="numerorh" class="">Numero</label>
                                        <input name="numerorh" id="numerorh" placeholder="Numero"
                                               type="number"
                                               min="1"
                                               class="form-control">
                                    </div>
                                    <div class="position-relative form-group">
                                        <label for="coloniarh" class="">Colonia</label>
                                        <input name="coloniarh" id="coloniarh" placeholder="Colonia"
                                               type="text"
                                               min="1"
                                               class="form-control">
                                    </div>
                                    <div class="position-relative form-group">
                                        <label for="delmunrh" class="">Delegacion/Municipio</label>
                                        <input name="delmunrh" id="delmunrh" placeholder="Delegacion/Municipio"
                                               type="text"
                                               class="form-control">
                                    </div>
                                    <div class="position-relative form-group">
                                        <label for="cprh" class="">Codigo Postal</label>
                                        <input name="cprh" id="cprh" placeholder="Codigo Postal"
                                               type="number"
                                               min="1"
                                               class="form-control">
                                    </div>
                                    <div class="position-relative form-group">
                                        <label for="ciudadrh" class="">Ciudad</label>
                                        <input name="ciudadrh" id="ciudadrh" placeholder="Ciudad"
                                           type="text"
                                           class="form-control"
                                           required>
                                    </div>
                                    <div class="position-relative form-group">
                                        <label for="expdienterh" class="">Expediente (PDF)</label>
                                        <input name="expdienterh" id="expdienterh" placeholder="Ciudad"
                                           type="file"
                                           accept="application/pdf"
                                           class="form-control"
                                           required>
                                    </div>
                                    <div class="position-relative form-group">
                                        <label for="fotorh" class="">Foto</label>
                                        <input name="fotorh" id="fotorh" placeholder="Ciudad"
                                           type="file"
                                           accept="image/*"
                                           class="form-control"
                                           required>
                                    </div>
                                    <button class="mt-1 btn btn-primary" id="expelecbutton" type="submit">Enviar</button>
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
                                <form id="suadata" method="post" enctype="multipart/form-data" class="form-horizontal">
                                    <div class="position-relative form-group">
                                        <label for="periodo" class="">Periodo</label>
                                        <br>
                                        Numero de Mes:
                                        <input name="nomes" id="nomes" placeholder="Numero de Mes" type="number"
                                               min="1"
                                               max="12"
                                               value="2"
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
                                               value="1970"
                                               class="form-control">
                                    </div><div class="position-relative form-group">
                                        <label for="cdc" class="">Cedula de Determinacion de Cuotas</label>
                                        <input name="cdc" id="cdc" placeholder="SMGV" type="file" class="form-control">
                                    </div>
                                    <div class="position-relative form-group">
                                        <label for="liquidacion" class="">Resumen de Liquidacion</label>
                                        <input name="liquidacion" id="liquidacion" placeholder="liquidacion"
                                               type="file" class="form-control">
                                    </div>
                                    <div class="position-relative form-group">
                                        <label for="pagosua" class="">Pago SUA</label>
                                        <input name="pagosua" id="pagosua" placeholder="pagosua"
                                               type="file" class="form-control">
                                    </div>
                                    <button class="mt-1 btn btn-primary" id="suabutton" type="button">Enviar</button>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane tabs-animation fade" id="tab-content-2" role="tabpanel">
            <div class="row">
                <div class="col-md-12">
                    <div class="main-card mb-3 card">
                        <div class="card-body"><h5 class="card-title">Pagos Provisionales</h5>
                            <div class="position-relative form-group">
                                <div>
                                    <form id="ppdata" method="post" enctype="multipart/form-data" class="form-horizontal">
                                        <div class="position-relative form-group">
                                            <label for="periodo" class="">Periodo</label>
                                            <input name="period" id="period" placeholder="Numero de Mes" type="number"
                                                   min="1"
                                                   max="12"
                                                   class="form-control">
                                            <br>
                                            Mes:
                                            <select class="form-control" name="mesp" id="mesp">
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
                                            <label for="aniop" class="">Año</label>
                                            <input name="aniop" id="anio" placeholder="Año ej. 2020" type="number"
                                                   min="1970"
                                                   max="2050"
                                                   class="form-control">
                                        </div><div class="position-relative form-group">
                                            <label for="ppi" class="">Pago Provisional de Impuestos</label>
                                            <input name="ppi" id="ppi" type="file" class="form-control">
                                        </div>
                                        <div class="position-relative form-group">
                                            <label for="oco" class="">Opinion de Cumplimiento Oficial</label>
                                            <input name="oco" id="oco"
                                                   type="file" class="form-control">
                                        </div>
                                        <button class="mt-1 btn btn-primary" id="ppbutton" type="button">Enviar</button>
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
        function validarEexpedienteElectronico(){
            if($("#nssrh").val() == ""){
                toastr.error('El campo NSS no pede estar vacio', {timeOut: 5000, progressBar: true});
                $("#nssrh").focus();       // Esta función coloca el foco de escritura del usuario en el campo Nombre directamente.
                return false;
            }
            if($("#nombrerh").val() == ""){
                toastr.error('El campo Nombre no pede estar vacio', {timeOut: 5000, progressBar: true});
                $("#nombrerh").focus();       // Esta función coloca el foco de escritura del usuario en el campo Nombre directamente.
                return false;
            }
            if($("#aprh").val() == ""){
                toastr.error('El campo Apellido Paterno no pede estar vacio', {timeOut: 5000, progressBar: true});
                $("#aprh").focus();       // Esta función coloca el foco de escritura del usuario en el campo Nombre directamente.
                return false;
            }
            if($("#amrh").val() == ""){
                toastr.error('El campo Apellido Materno no pede estar vacio', {timeOut: 5000, progressBar: true});
                $("#amrh").focus();       // Esta función coloca el foco de escritura del usuario en el campo Nombre directamente.
                return false;
            }
            if($("#centrorh").val() == ""){
                toastr.error('El campo Centro no pede estar vacio', {timeOut: 5000, progressBar: true});
                $("#centrorh").focus();       // Esta función coloca el foco de escritura del usuario en el campo Nombre directamente.
                return false;
            }
            if($("#callerh").val() == ""){
                toastr.error('El campo Calle no pede estar vacio', {timeOut: 5000, progressBar: true});
                $("#callerh").focus();       // Esta función coloca el foco de escritura del usuario en el campo Nombre directamente.
                return false;
            }
            if($("#numerorh").val() == ""){
                toastr.error('El campo Numero no pede estar vacio', {timeOut: 5000, progressBar: true});
                $("#numerorh").focus();       // Esta función coloca el foco de escritura del usuario en el campo Nombre directamente.
                return false;
            }
            if($("#coloniarh").val() == ""){
                toastr.error('El campo Colonia no pede estar vacio', {timeOut: 5000, progressBar: true});
                $("#coloniarh").focus();       // Esta función coloca el foco de escritura del usuario en el campo Nombre directamente.
                return false;
            }
            if($("#delmunrh").val() == ""){
                toastr.error('El campo Delegacion/Municipio no pede estar vacio', {timeOut: 5000, progressBar: true});
                $("#delmunrh").focus();       // Esta función coloca el foco de escritura del usuario en el campo Nombre directamente.
                return false;
            }
            if($("#cprh").val() == ""){
                toastr.error('El campo Codigo Postal no pede estar vacio', {timeOut: 5000, progressBar: true});
                $("#cprh").focus();       // Esta función coloca el foco de escritura del usuario en el campo Nombre directamente.
                return false;
            }
            if($("#ciudadrh").val() == ""){
                toastr.error('El campo Ciudad no pede estar vacio', {timeOut: 5000, progressBar: true});
                $("#ciudadrh").focus();       // Esta función coloca el foco de escritura del usuario en el campo Nombre directamente.
                return false;
            }
            return true;
        }
        $("#expelectronico").on("submit", function(e){
            e.preventDefault();
            if (validarEexpedienteElectronico())
            {
                var formData = new FormData(document.getElementById("expelectronico"));
                console.log(formData);
                $.ajax({
                    url: "/Controllers/RH/expediente.php",
                    type: "POST",
                    dataType: "HTML",
                    data: formData,
                    cache: false,
                    contentType: false,
                    processData: false
                })
                    .done(function () {
                        toastr.info('Expediente dado de alta correctamente', {timeOut: 3000, progressBar: true});
                        $('#expelectronico').trigger("reset");
                    })
                    .fail(function () {
                        console.log("ERROR");
                    })
            }
            else
            {
                toastr.error('Verifica los campos y vuelve a intentarlo.', {timeOut: 5000, progressBar: true});
            }

        })
    </script>
