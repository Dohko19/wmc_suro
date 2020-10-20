<?php
header("Cache-Control: no-cache, must-revalidate");
header("Pragma: no-cache");
include_once '../Models/User.php';
include_once '../Controllers/Config/user_session.php';
$userSession = new UserSession();
$user = new User();

if (isset($_SESSION['user']))
{
    $user->setUser($userSession->getCurrentUser());
}else { 
    header('location: /');
    echo "no hay sesion";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EL PHP WE</title>
</head>
<body>
    <h1>Puedo Mantener la sesion</h1>
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

    <a href="/Views/logout.php" tabindex="0" class="dropdown-item btn">Cerrar Sesion</a>

</body>
</html>