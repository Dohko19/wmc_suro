<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>WMC SURO - Iniciar Sesion.</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="Tables are the backbone of almost all web applications.">
    <meta name="msapplication-tap-highlight" content="no">
    <link href="./main.css" rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/toastr.min.css">
</head>
<body>
<div class="app-main__outer" style="padding-top: 120px">
    <div class="app-main__inner">
        <ul class="body-tabs body-tabs-layout tabs-animated body-tabs-animated nav">
            <li class="nav-item">
                <a role="tab" class="nav-link" id="tab-1" data-toggle="tab" href="#tab-content-1">
                    <span></span>
                </a>
            </li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane tabs-animation fade show active" id="tab-content-1" role="tabpanel">
                <div class="row">
                    <div class="col-md-4"></div>
                    <div class="col-md-4">
                        <?php
                        if(isset($errorLogin)){
                            echo '<span style="color: red;">' . $errorLogin . '</span>';
                        }
                        ?>
                        <div class="mb-6 card card-body"><h5 class="card-title">Iniciar Sesion</h5>
                            <form action="" method="POST">
                                <div class="form-group">
                                    <input type="text" name="username" autofocus class="form-control" placeholder="Nombre de Usuario">
                                </div>
                                <div class="div form-group">
                                    <input type="password" name="password" class="form-control" placeholder="Contraseña">
                                </div>
                                <button type="submit" class="btn btn-primary btn-block">Log in</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="/assets/scripts/jquery-3.5.0.js"></script>
<script src="/assets/scripts/main.js"></script>
<script src="/assets/scripts/toastr.min.js"></script>
</body>
</html>