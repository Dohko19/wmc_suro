<?php
?>

<div class="app-main__inner">
    <div class="row">
        <div class="col-md-12 col-lg-12">
            <div class="mb-3 card">
                <div class="card-header-tab card-header-tab-animation card-header">
                    <div class="card-header-title">
                        <i class="header-icon lnr-apartment icon-gradient bg-love-kiss"> </i>
                        Descarga de recibos de Nomina
                    </div>
                </div>
                <div class="card-body">
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="tabs-eg-77">
                            <div class="row">
                                <div class="col-md-4"></div>
                                <div class="col-md-4 text-center form-group">
                                    Semana
                                    <input type="text" name="semana" placeholder="Semana que consulta" class="form-control">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 col-lg-12">
                                    <h5 class="card-title"></h5>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $("#boton-recibonomina").on("click", getRN);
        function getRN(){
            $.ajax({
                url: '/Controllers/listarExpedienteElectronico.php',
                type:'get',
                success: function (event) {
                    document.getElementById('list-expediente').innerHTML = event;

                }
            })
        }
    </script>