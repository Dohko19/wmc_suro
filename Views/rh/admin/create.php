<?php
require '../../../Controllers/Config/db2.php';

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
                <span id="boton-usuarios" >Recibos de Nomina</span>
            </a>
        </li>
        <li class="nav-item">
            <a role="tab" class="nav-link" id="tab-2" data-toggle="tab" href="#tab-content-2">
                <span id="boton-clientes">NOM-035</span>
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
                        <div class="card-body"><h5 class="card-title">Recibos de Nomina</h5>
                            <div id="">
                                <form  id="rnomina" method="post" enctype="multipart/form-data" class="form-horizontal">
                                    <div class="position-relative form-group">
                                        <label for="nssrn" class="">NSS</label>
                                        <input name="nssrn" id="nssrn" placeholder="Numero de Seguro Social" type="text"
                                               class="form-control">
                                    </div>
                                    <div class="position-relative form-group">
                                        <label for="nombrern" class="">Nombre Completo</label>
                                        <input name="nombrern" id="nombrern" placeholder="Nombre Completo" type="text" class="form-control">
                                    </div>
                                    <div class="position-relative form-group">
                                        <label for="centrorn" class="">Centro</label><br>
                                        <input name="centrorn" id="centrorn" placeholder="Centro"
                                               type="text" class="form-control">
                                    </div>
                                    <div class="position-relative form-group">
                                        <label for="tiendarn" class="">Tienda</label>
                                        <input name="tiendarn" id="tiendarn" placeholder="Tienda"
                                               type="text" class="form-control">
                                    </div>
                                    <div class="position-relative form-group">
                                        <label for="reciboNomina" class="">Recibo de Nomina</label>
                                        <input name="reciborn" id="fotorh"
                                               type="file"
                                               accept="application/pdf"
                                               class="form-control"
                                               required>
                                    </div>
                                    <button class="mt-1 btn btn-primary" type="submit">Enviar</button>
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
                        <div class="card-body"><h5 class="card-title">NOMBRE-35</h5>
                            <div id="">
                                <form  id="nom35" method="post" enctype="multipart/form-data" class="form-horizontal">
                                    <div class="position-relative form-group">
                                        <label for="centrorn" class="">Centro</label>
                                        <input name="centrornn" id="centrornn" placeholder="Centro" type="text"
                                               class="form-control">
                                    </div>
                                    <div class="position-relative form-group">
                                        <label for="mesrn" class="">MES</label>
                                        <select class="form-control" name="mesrn" id="mesrn">
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
                                        <label for="aniorn" class="">AÑO</label><br>
                                        <input name="aniorn" id="aniorn" placeholder="Año"
                                               type="number" class="form-control"
                                                min="1950"
                                               max="2050">

                                    </div>
                                    <div class="position-relative form-group">
                                        <label for="gr1rn" class="">Recibo de Nomina</label>
                                        <input name="gr1rn" id="gr1rn"
                                               type="file"
                                               accept="application/pdf"
                                               class="form-control"
                                               required>
                                    </div>
                                    <div class="position-relative form-group">
                                        <label for="gr3rn" class="">Recibo de Nomina</label>
                                        <input name="gr3rn" id="gr3rn"
                                               type="file"
                                               accept="application/pdf"
                                               class="form-control"
                                               required>
                                    </div>
                                    <button class="mt-1 btn btn-primary" type="submit">Enviar</button>
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
    <script>
        function validarNOM()
        {
            if($("#centrornn").val() == ""){
                 toastr.error('El campo Centro no pede estar vacio', {timeOut: 5000, progressBar: true});
                $("#centrornn").focus();       // Esta función coloca el foco de escritura del usuario en el campo Nombre directamente.
                return false;
            }
            if($("#mesrn").val() == ""){
                toastr.error('El campo Mes no pede estar vacio', {timeOut: 5000, progressBar: true});
                $("#mesrn").focus();       // Esta función coloca el foco de escritura del usuario en el campo Nombre directamente.
                return false;
            }
            if($("#aniorn").val() == ""){
                toastr.error('El campo Año no pede estar vacio', {timeOut: 5000, progressBar: true});
                $("#aniorn").focus();       // Esta función coloca el foco de escritura del usuario en el campo Nombre directamente.
                return false;
            }
            if($("#gr3rn").val() == ""){
                toastr.error('El campo GR1 no pede estar vacio', {timeOut: 5000, progressBar: true});
                $("#gr3rn").focus();       // Esta función coloca el foco de escritura del usuario en el campo Nombre directamente.
                return false;
            }
            if($("#gr1rn").val() == ""){
                toastr.error('El campo GR3 no pede estar vacio', {timeOut: 5000, progressBar: true});
                $("#gr1rn").focus();       // Esta función coloca el foco de escritura del usuario en el campo Nombre directamente.
                return false;
            }
            return true;
        }

        $("#nom35").on("submit", function(e){
            e.preventDefault();
            if (validarNOM())
            {
                var formData = new FormData(document.getElementById("nom35"));
                $.ajax({
                    url: "/Controllers/RHLegal/Nom35.php",
                    type: "POST",
                    dataType: "HTML",
                    data: formData,
                    cache: false,
                    contentType: false,
                    processData: false
                })
                    .done(function () {
                        toastr.info('SUA dado de alta correctamente', {timeOut: 3000, progressBar: true});
                        $('#nom35').trigger("reset");
                    })
                    .fail(function( jqXHR, textStatus, errorThrown ) {
                        if (jqXHR.status === 0) {

                            toastr.error('Not connect: Verify Network.');

                        } else if (jqXHR.status == 404) {

                            toastr.error('Requested page not found [404]');

                        } else if (jqXHR.status == 500) {

                            toastr.error('Internal Server Error [500].');

                        } else if (textStatus === 'parsererror') {

                            toastr.error('Requested JSON parse failed.');

                        } else if (textStatus === 'timeout') {

                            toastr.error('Time out error.');

                        } else if (textStatus === 'abort') {

                            toastr.error('aborted.');

                        } else {

                            toastr.error('Uncaught Error: ' + jqXHR.responseText);

                        }
                    })
            }
            else
            {
                toastr.error('Verifica los campos y vuelve a intentarlo.', {timeOut: 5000, progressBar: true});
            }

        })
    </script>
<script>
    function validarReciboNomina()
    {
        if($("#nssrn").val() == ""){
            toastr.error('El campo Periodo no pede estar vacio', {timeOut: 5000, progressBar: true});
            $("#nssrn").focus();       // Esta función coloca el foco de escritura del usuario en el campo Nombre directamente.
            return false;
        }
        if($("#nombrern").val() == ""){
            toastr.error('El campo Mes no pede estar vacio', {timeOut: 5000, progressBar: true});
            $("#nombrern").focus();       // Esta función coloca el foco de escritura del usuario en el campo Nombre directamente.
            return false;
        }
        if($("#centrorn").val() == ""){
            toastr.error('El campo Año no pede estar vacio', {timeOut: 5000, progressBar: true});
            $("#centrorn").focus();       // Esta función coloca el foco de escritura del usuario en el campo Nombre directamente.
            return false;
        }
        if($("#tiendarn").val() == ""){
            toastr.error('El campo Pago provisional no pede estar vacio', {timeOut: 5000, progressBar: true});
            $("#tiendarn").focus();       // Esta función coloca el foco de escritura del usuario en el campo Nombre directamente.
            return false;
        }
        if($("#reciboNomina").val() == ""){
            toastr.error('El campo Opinion de Cumplimineto Fiscal no pede estar vacio', {timeOut: 5000, progressBar: true});
            $("#reciboNomina").focus();       // Esta función coloca el foco de escritura del usuario en el campo Nombre directamente.
            return false;
        }
        return true;
    }

    $("#rnomina").on("submit", function(e){
        e.preventDefault();
        if (validarReciboNomina())
        {
            var formData = new FormData(document.getElementById("rnomina"));
            $.ajax({
                url: "/Controllers/RHLegal/Rnomina.php",
                type: "POST",
                dataType: "HTML",
                data: formData,
                cache: false,
                contentType: false,
                processData: false
            })
                .done(function () {
                    toastr.info('El Recibo de Nomina fue  dado de alta correctamente', {timeOut: 3000, progressBar: true});
                    $('#ppdata').trigger("reset");
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
<!--    <script>-->
<!--    function validarSUA(){-->
<!--        if($("#nomes").val() == ""){-->
<!--            toastr.error('El campo Numero de Mes no puede estar vacio', {timeOut: 5000, progressBar: true});-->
<!--            $("#nomes").focus();       // Esta función coloca el foco de escritura del usuario en el campo Nombre directamente.-->
<!--            return false;-->
<!--        }-->
<!--        if($("#mes").val() == ""){-->
<!--            toastr.error('El campo mes de Usuario no puede estar vacío.', {timeOut: 5000, progressBar: true});-->
<!--            $("#mes").focus();-->
<!--            return false;-->
<!--        }-->
<!--        if($("#cdc").val() == ""){-->
<!--            toastr.error('El campo Cedula determinacion de cuotas no puede estar vacío.', {timeOut: 5000, progressBar: true});-->
<!--            $("#cdc").focus();-->
<!--            return false;-->
<!--        }-->
<!--        if($("#liquidacion").val() == ""){-->
<!--            toastr.error('El campo Resumen de Liquidacion no puede estar vacío.', {timeOut: 5000, progressBar: true});-->
<!--            $("#liquidacion").focus();-->
<!--            return false;-->
<!--        }-->
<!--        if($("#pagosua").val() == ""){-->
<!--            toastr.error('El campo Pago SUA no puede estar vacío.', {timeOut: 5000, progressBar: true});-->
<!--            $("#pagosua").focus();-->
<!--            return false;-->
<!--        }-->
<!--        return true;-->
<!--    }-->
<!---->
<!--    $(document).ready( function() {-->
<!--        $("#suabutton").click( function() {-->
<!--            if(validarSUA()){-->
<!--                var formData = new FormData();-->
<!--                formData.append('cdc',$('#cdc').prop('files')[0]);-->
<!--                formData.append('liquidacion',$('#liquidacion').prop('files')[1]);-->
<!--                formData.append('pagosua',$('#pagosua').prop('files')[0]);-->
<!--                formData.append('periodo',$('#periodo'));-->
<!--                alert(formData);-->
<!--                $.ajax({-->
<!--                    url: "Controllers/SUAController.php",-->
<!--                    method: 'post',-->
<!--                    // data: $("#suadata").serialize(),-->
<!--                    data: formData,-->
<!--                    processData: false,-->
<!--                    headers: {-->
<!--                        contentType: 'multipart/form-data'-->
<!--                    }-->
<!--                })-->
<!--                    .done(function(res){-->
<!--                        if(res == 1){-->
<!--                            toastr.success('El Cliente se dio de alta correctamente.', {timeOut: 5000, progressBar: true});-->
<!--                            $('#evaemadata').trigger("reset");-->
<!--                        }-->
<!--                        else-->
<!--                        {-->
<!--                            toastr.error('Error al registrar error:1.', {timeOut: 5000, progressBar: true});-->
<!--                        }-->
<!--                    });-->
<!--            }-->
<!--            else-->
<!--            {-->
<!--                toastr.error('Error al registrar.', {timeOut: 5000, progressBar: true});-->
<!--            }-->
<!--        });-->
<!--    });-->
<!--    </script>-->