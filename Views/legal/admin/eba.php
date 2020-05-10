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
                <span id="boton-clientes">Pagos Provisionales</span>
            </a>
        </li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
            <div class="row">
                <div class="col-md-12">
                    <div class="main-card mb-3 card">
                        <div class="card-body"><h5 class="card-title">EMA/EVA</h5>
                            <div id="">
                                <form  id="evaemadata" method="post" enctype="multipart/form-data" class="form-horizontal">
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
                                    <button class="mt-1 btn btn-primary" id="emaevaenviar" type="button">Enviar</button>
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
        function validarEmaEva(){
            if($("#periodo").val() == ""){
                toastr.error('El campo periodo no pede estar vacio', {timeOut: 5000, progressBar: true});
                $("#periodo").focus();       // Esta función coloca el foco de escritura del usuario en el campo Nombre directamente.
                return false;
            }
            if($("#smgv").val() == ""){
                toastr.error('El campo smgv de Usuario no puede estar vacío.', {timeOut: 5000, progressBar: true});
                $("#smgv").focus();
                return false;
            }
            if($("#uma").val() == ""){
                toastr.error('El campo uma no puede estar vacío.', {timeOut: 5000, progressBar: true});
                $("#uma").focus();
                return false;
            }
            if($("#cotizaciones").val() == ""){
                toastr.error('El campo cotizaciones no puede estar vacío.', {timeOut: 5000, progressBar: true});
                $("#cotizaciones").focus();
                return false;
            }
            if($("#desde").val() == ""){
                toastr.error('El campo desde no puede estar vacío.', {timeOut: 5000, progressBar: true});
                $("#desde").focus();
                return false;
            }
            if($("#hasta").val() == ""){
                toastr.error('El campo hasta no puede estar vacío.', {timeOut: 5000, progressBar: true});
                $("#hasta").focus();
                return false;
            }
            if($("#pdf").val() == ""){
                toastr.error('El campo pdf no puede estar vacío.', {timeOut: 5000, progressBar: true});
                $("#pdf").focus();
                return false;
            }
            return true;
        }
        $(document).ready( function() {
            $("#emaevaenviar").click( function() {
                $.ajax({
                    url: "Controllers/EvaEmaController.php",
                    data: $("#evaemadata").serialize(),
                    contentType: 'multipart/form-data'
                })
                .done(function(res){
                    if(res == 1){
                        toastr.success('El Documento se dio de alta.', {timeOut: 5000, progressBar: true});
                        $('#evaemadata').trigger("reset");
                    }
                    else 
                    {
                        toastr.error('Error al registrar el Cliente.', {timeOut: 5000, progressBar: true});
                    }
                });
            });
        });
    </script>
    <script>
        function validarSUA(){
            if($("#nomes").val() == ""){
                toastr.error('El campo Numero de Mes no puede estar vacio', {timeOut: 5000, progressBar: true});
                $("#nomes").focus();       // Esta función coloca el foco de escritura del usuario en el campo Nombre directamente.
                return false;
            }
            if($("#mes").val() == ""){
                toastr.error('El campo mes de Usuario no puede estar vacío.', {timeOut: 5000, progressBar: true});
                $("#mes").focus();
                return false;
            }
            // if($("#anio").val() == ""){
            //     toastr.error('El campo año no puede estar vacío.', {timeOut: 5000, progressBar: true});
            //     $("#anio").focus();
            //     return false;
            // }
            if($("#cdc").val() == ""){
                toastr.error('El campo Cedula determinacion de cuotas no puede estar vacío.', {timeOut: 5000, progressBar: true});
                $("#cdc").focus();
                return false;
            }
            if($("#liquidacion").val() == ""){
                toastr.error('El campo Resumen de Liquidacion no puede estar vacío.', {timeOut: 5000, progressBar: true});
                $("#liquidacion").focus();
                return false;
            }
            if($("#pagosua").val() == ""){
                toastr.error('El campo Pago SUA no puede estar vacío.', {timeOut: 5000, progressBar: true});
                $("#pagosua").focus();
                return false;
            }
            return true;
        }

        $(document).ready( function() {
            $("#suabutton").click( function() {
                if(validarSUA()){    
                $.ajax({
                    url: "Controllers/SUAController.php",
                    method: 'post',
                    data: $("#suadata").serialize()
                })
                .done(function(res){
                    if(res == 1){
                        toastr.success('El Cliente se dio de alta correctamente.', {timeOut: 5000, progressBar: true});
                        $('#evaemadata').trigger("reset");
                    }
                    else 
                    {
                        toastr.error('Error al registrar.', {timeOut: 5000, progressBar: true});
                    }
                });
                }
                else
                {
                    toastr.error('Error al registrar.', {timeOut: 5000, progressBar: true});
                }
            });
        });
    </script>
     <script>
        function validarppdata(){
            if($("#period").val() == ""){
                toastr.error('El campo Periodo no pede estar vacio', {timeOut: 5000, progressBar: true});
                $("#period").focus();       // Esta función coloca el foco de escritura del usuario en el campo Nombre directamente.
                return false;
            }
            if($("#mesp").val() == ""){
                toastr.error('El campo mes no puede estar vacío.', {timeOut: 5000, progressBar: true});
                $("#mesp").focus();
                return false;
            }
            if($("#aniop").val() == ""){
                toastr.error('El campo año no puede estar vacío.', {timeOut: 5000, progressBar: true});
                $("#aniop").focus();
                return false;
            }
            if($("#ppi").val() == ""){
                toastr.error('El campo Pago Provisional de Impuestos no puede estar vacío.', {timeOut: 5000, progressBar: true});
                $("#ppi").focus();
                return false;
            }
            if($("#oco").val() == ""){
                toastr.error('El campo Cumplimiento fiscal no puede estar vacío.', {timeOut: 5000, progressBar: true});
                $("#oco").focus();
                return false;
            }
            return true;
        }

        $(document).ready( function() {
            $("#ppbutton").click( function() {
                if(validarppdata()){    
                $.ajax({
                    url: "Controllers/EvaEmaController.php",
                    data: $("#ppdata").serialize(),
                    contentType: 'multipart/form-data'
                })
                .done(function(res){
                    if(res == 1){
                        toastr.success('Realizado.', {timeOut: 5000, progressBar: true});
                        $('#evaemadata').trigger("reset");
                    }
                    else 
                    {
                        toastr.error('Error al registrar Pago Provisional.', {timeOut: 5000, progressBar: true});
                    }
                });
                }
                else
                {
                    toastr.error('Error al registrar..', {timeOut: 5000, progressBar: true});
                }
            });
        });
    </script>