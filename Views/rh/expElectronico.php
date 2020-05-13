<?php

?>
<div class="app-main__inner">
    <div class="row">
        <div class="col-md-12 col-lg-12">
            <div class="mb-3 card">
                <div class="card-header-tab card-header-tab-animation card-header">
                    <div class="card-header-title">
                        <i class="header-icon lnr-apartment icon-gradient bg-love-kiss"> </i>
                        Expediente Electronico

                    </div>

                </div>
                <div class="card-body">
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="tabs-eg-77">
                            <div class="row">
                                <div class="col-md-6">
                                    Fecha Inicial:
                                    <input type="date" name="fechaInicial" class="form-control">
                                </div>
                                <div class="col-md-6">
                                    Fecha Final:
                                    <input type="date" name="fechaFinal" class="form-control" size="20">
                                </div>
                                <br>
                                <div class="col-md-4"></div>
                                <div class="col-md-4 text-center form-group">
                                    Centro
                                    <input type="text" name="centro" placeholder="Centro" class="form-control">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 col-lg-12">
                                    <button class="btn btn-warning" id="boton-expelectronico">Obtener Datos</button>
                                    <h5 class="card-title"></h5>
                                        <div id="list-expediente"></div>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $("#boton-expelectronico").on("click", getExp);
    function getExp(){
        $.ajax({
            url: '/Controllers/listarExpedienteElectronico.php',
            type:'get',
            success: function (event) {
                document.getElementById('list-expediente').innerHTML = event;

            }
        })
    }
</script>