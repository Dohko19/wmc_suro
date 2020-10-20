<?php
header("Cache-Control: no-cache, must-revalidate");
header("Pragma: no-cache");
require './Controllers/Config/Carbon/autoload.php';
use Carbon\Carbon;
use Carbon\CarbonInterval;

date_default_timezone_set('America/Mexico_City');

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>WMC - SURO</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="This is an example dashboard created using build-in elements and components.">
    <meta name="msapplication-tap-highlight" content="no">
    <link href="./main.css" rel="stylesheet"></head>
<body>
<div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
    <div class="app-header header-shadow">
        <div class="app-header__logo">
            <div class="logo-src"></div>
            <div class="header__pane ml-auto">
                <div>
                    <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                    </button>
                </div>
            </div>
        </div>
        <div class="app-header__mobile-menu">
            <div>
                <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                </button>
            </div>
        </div>
        <div class="app-header__menu">
                <span>
                    <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                        <span class="btn-icon-wrapper">
                            <i class="fa fa-ellipsis-v fa-w-6"></i>
                        </span>
                    </button>
                </span>
        </div>    <div class="app-header__content">
            <div class="app-header-left">
                <ul class="header-menu nav">
                    <li class="nav-item">
                        <a onclick="users()" class="nav-link">
                            <i class="nav-link-icon fa fa-user-alt"> </i>
                            Usuarios/Clientes
                        </a>
                    </li>
                    <li class="btn-group nav-item">
                        <a onclick="marcasuc()" class="nav-link">
                            <i class="nav-link-icon fa fa-10x fa-user-tie"></i>
                            Marcas/Sucursales
                        </a>
                    </li>
                    <li class="dropdown nav-item">
                        <a onclick="esep()" href="#ESVPP" class="nav-link">
                            <i class="nav-link-icon fa fa-cog"></i>
                            EMA/SUA/EVA/PAGOS PROVISIONALES
                        </a>
                    </li>
                    <li class="dropdown nav-item">
                        <a onclick="recursosHumanos()" href="#ESVPP" class="nav-link">
                            <i class="nav-link-icon fa fa-cog"></i>
                            Recursos Humanos
                        </a>
                    </li>
                </ul>
            </div>
            <div class="app-header-right">
                <div class="header-btn-lg pr-0">
                    <div class="widget-content p-0">
                        <div class="widget-content-wrapper">
                            <div class="widget-content-left">
                                <div class="btn-group">
                                    <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="p-0 btn">
                                        <img width="42" class="rounded-circle" src="assets/images/avatars/1.jpg" alt="">
                                        <i class="fa fa-angle-down ml-2 opacity-8"></i>
                                    </a>
                                    <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                                        <a href="/Views/logout.php" tabindex="0" class="dropdown-item btn">Cerrar Sesion</a>
<!--                                        <button type="button" tabindex="0" class="dropdown-item">Settings</button>-->
<!--                                        <h6 tabindex="-1" class="dropdown-header">Header</h6>-->
<!--                                        <button type="button" tabindex="0" class="dropdown-item">Actions</button>-->
<!--                                        <div tabindex="-1" class="dropdown-divider"></div>-->
<!--                                        <button type="button" tabindex="0" class="dropdown-item">Dividers</button>-->
                                    </div>
                                </div>
                            </div>
                            <div class="widget-content-left  ml-3 header-user-info">
                                <div class="widget-heading">
                                    <?php
                                        echo $user->getNombre();

                                    ?>
                                </div>
                                <div class="widget-subheading">
                                    <?php
                                    echo $user->getUsername();
                                    ?>
                                </div>
                            </div>
                            <div class="widget-content-right header-user-info ml-3">
                                <button type="button" class="btn-shadow p-1 btn btn-primary btn-sm show-toastr-example">
                                    <i class="fa text-white fa-calendar pr-1 pl-1"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="ui-theme-settings">
        <button type="button" id="TooltipDemo" class="btn-open-options btn btn-warning">
            <i class="fa fa-cog fa-w-16 fa-spin fa-2x"></i>
        </button>
    </div>
    <div class="app-main">
        <div class="app-sidebar sidebar-shadow">
            <div class="app-header__logo">
                <div class="logo-src"></div>
                <div class="header__pane ml-auto">
                    <div>
                        <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="app-header__mobile-menu">
                <div>
                    <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </div>
            </div>
            <div class="app-header__menu">
                <span>
                    <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                        <span class="btn-icon-wrapper">
                            <i class="fa fa-ellipsis-v fa-w-6"></i>
                        </span>
                    </button>
                </span>
            </div>
                <div class="scrollbar-sidebar">
                <div class="app-sidebar__inner">
                    <ul id="menu" class="vertical-nav-menu">
                        <li class="app-sidebar__heading">Dashboard</li>
                        <li>
                            <a href="/" class="mm-active">
                                <i class="metismenu-icon pe-7s-rocket"></i>
                                Inicio
                            </a>
                        </li>
                        <li>
                            <a href="Views/prueba.php" class="mm-active">
                                <i class="metismenu-icon pe-7s-rocket"></i>
                                Prueba de   
                            </a>
                        </li>
                        <li class="app-sidebar__heading">Consultas</li>
                        <li>
                            <a href="#">
                                <i class="metismenu-icon pe-7s-diamond"></i>
                                Recursos Humanos
                                <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                            </a>
                            <ul>
                                <li>
                                    <a onclick="RH()" href="#RH">
                                        <i class="metismenu-icon"></i>
                                        Expediente Electronico
                                    </a>
                                </li>
                                <li>
                                    <a onclick="recibosNomina()" href="#recibosNomina">
                                        <i class="metismenu-icon">
                                        </i>Recibos de Nomina
                                    </a>
                                </li>
                                <li>
                                    <a onclick="nom035()" href="#nom035">
                                        <i class="metismenu-icon">
                                        </i>NOM-035
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">
                                <i class="metismenu-icon pe-7s-car"></i>
                                Legal
                                <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                            </a>
                            <ul>
                                <li>
                                    <a onclick="ema()" href="#ema">
                                        <i class="metismenu-icon">
                                        </i>EMA
                                    </a>
                                </li>
                                <li>
                                    <a onclick="eba()" href="#eba">
                                        <i class="metismenu-icon">
                                        </i>EBA
                                    </a>
                                </li>
                                <li>
                                    <a onclick="sua()" href="#sua">
                                        <i class="metismenu-icon">
                                        </i>SUA
                                    </a>
                                </li>
                                <li>
                                    <a onclick="pagosprovisionales()" href="#pagosprovisionales">
                                        <i class="metismenu-icon">
                                        </i>Pagos provisionales
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="app-main__outer">
            <div id="loading">
                <div class="app-main__inner">
                    <div class="app-page-title">
                        <div class="page-title-wrapper">
                            <div class="page-title-heading">
                                <div class="page-title-icon">
                                    <i class="pe-7s-paint icon-gradient bg-mean-fruit">
                                    </i>
                                </div>
                                <div>Grafica de Programa de Limpieza
                                </div>
                            </div>
                            <div class="page-title-actions">
                            </div>
                        </div>
                    </div>
                    <div class="row">

                        <div class="col-md-11">
                            <div class="mb-3 card">
                                <div class="card-header-tab card-header-tab-animation card-header">
                                    <div class="card-header-title">
                                        <i class="header-icon lnr-apartment icon-gradient bg-love-kiss"> </i>
                                        Centros Grupo Axo
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="tab-content">
                                        <div class="tab-pane fade show active" id="tabs-eg-77">
                                            <div class="card mb-3 widget-chart widget-chart2 text-left w-100">
                                                <div class="widget-chat-wrapper-outer">
                                                    <div class="widget-chart-wrapper widget-chart-wrapper-lg opacity-10 m-0">
                                                        <canvas id="canvas"></canvas>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
<script src="/assets/scripts/jquery-3.5.0.js"></script>
<script type="text/javascript" src="/assets/scripts/main.js"></script>
<script src="/assets/js/axios.min.js"></script>

<script type="text/javascript">
    function RH(){
        jQuery.ajax({
            url: 'Views/rh/expElectronico.php',
            type: 'POST',
            beforeSend: function () {
                jQuery("#loading").html("<br /><br /><i class='icon-spinner icon-spin orange bigger-125'></i>&nbsp;&nbsp;Procesando, Espere por favor...");
            },
            success: function (data) {
                jQuery("#loading").html(data);
            }
        });
    }
    function recibosNomina(){
        jQuery.ajax({
            url: 'Views/rh/recibosNomina.php',
            type: 'POST',
            beforeSend: function () {
                jQuery("#loading").html("<br /><br /><i class='icon-spinner icon-spin orange bigger-125'></i>&nbsp;&nbsp;Procesando, Espere por favor...");
            },
            success: function (data) {
                jQuery("#loading").html(data);
            }
        });
    }
    function nom035(){
        jQuery.ajax({
            url: 'Views/rh/nom035.php',
            type: 'POST',
            beforeSend: function () {
                jQuery("#loading").html("<br /><br /><i class='icon-spinner icon-spin orange bigger-125'></i>&nbsp;&nbsp;Procesando, Espere por favor...");
            },
            success: function (data) {
                jQuery("#loading").html(data);
            }
        });
    }
    function ema(){
        jQuery.ajax({
            url: 'Views/legal/ema.php',
            type: 'POST',
            beforeSend: function () {
                jQuery("#loading").html("<br /><br /><i class='icon-spinner icon-spin orange bigger-125'></i>&nbsp;&nbsp;Procesando, Espere por favor...");
            },
            success: function (data) {
                jQuery("#loading").html(data);
            }
        });
    }
    function eba(){
        jQuery.ajax({
            url: 'Views/legal/eba.php',
            type: 'POST',
            beforeSend: function () {
                jQuery("#loading").html("<br /><br /><i class='icon-spinner icon-spin orange bigger-125'></i>&nbsp;&nbsp;Procesando, Espere por favor...");
            },
            success: function (data) {
                jQuery("#loading").html(data);
            }
        });
    }
    function sua(){
        jQuery.ajax({
            url: 'Views/legal/sua.php',
            type: 'POST',
            beforeSend: function () {
                jQuery("#loading").html("<br /><br /><i class='icon-spinner icon-spin orange bigger-125'></i>&nbsp;&nbsp;Procesando, Espere por favor...");
            },
            success: function (data) {
                jQuery("#loading").html(data);
            }
        });
    }
    function pagosprovisionales(){
        jQuery.ajax({
            url: 'Views/legal/pagosprovisionales.php',
            type: 'POST',
            beforeSend: function () {
                jQuery("#loading").html("<br /><br /><i class='icon-spinner icon-spin orange bigger-125'></i>&nbsp;&nbsp;Procesando, Espere por favor...");
            },
            success: function (data) {
                jQuery("#loading").html(data);
            }
        });
    }
    function users(){
        jQuery.ajax({
            url: 'Views/Usuarios/create.php',
            type: 'POST',
            beforeSend: function () {
                jQuery("#loading").html("<br /><br /><i class='icon-spinner icon-spin orange bigger-125'></i>&nbsp;&nbsp;Procesando, Espere por favor...");
            },
            success: function (data) {
                jQuery("#loading").html(data);
            }
        });
    }

    function marcasuc()
    {
        jQuery.ajax({
            url: 'Views/sucmarca/home.php',
            type: 'POST',
            beforeSend: function () {
                jQuery("#loading").html("<br /><br /><i class='icon-spinner icon-spin orange bigger-125'></i>&nbsp;&nbsp;Procesando, Espere por favor...");
            },
            success: function (data) {
                jQuery("#loading").html(data);
            }
        })
    }

    function esep()
    {
        jQuery.ajax({
            url: 'Views/legal/admin/eba.php',
            type: 'POST',
            beforeSend: function () {
                jQuery("#loading").html("<br /><br /><i class='icon-spinner icon-spin orange bigger-125'></i>&nbsp;&nbsp;Procesando, Espere por favor...");
            },
            success: function (data) {
                jQuery("#loading").html(data);
            }
        })
    }

    function recursosHumanos()
    {
        jQuery.ajax({
            url: 'Views/rh/admin/create.php',
            type: 'POST',
            beforeSend: function () {
                jQuery("#loading").html("<br /><br /><i class='icon-spinner icon-spin orange bigger-125'></i>&nbsp;&nbsp;Procesando, Espere por favor...");
            },
            success: function (data) {
                jQuery("#loading").html(data);
            }
        })
    }
</script>
<script type="text/javascript">
    document.onreadystatechange = function(){
        var selected_parent;
        if(document.readyState === 'interactive'){
            selected_parent = $('#menu').children().find('a').filter('.mm-active').parent('li').index();
            jQuery.data( document.body, "selected_parent", selected_parent);
        }
        if(document.readyState === 'complete'){
            var selected_parent = jQuery.data( document.body, "selected_parent" );
            $('#menu').children('li:eq('+selected_parent+')').children('a').addClass('mm-active');
        }
    }
</script>

</html>

