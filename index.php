<?php
header("Cache-Control: no-cache, must-revalidate");
header("Pragma: no-cache");
include_once 'Models/User.php';
include_once 'Controllers/Config/user_session.php';


$userSession = new UserSession();
$user = new User();

if (isset($_SESSION['user']))
{
    //echo "hay Sesion";
    $user->setUser($userSession->getCurrentUser());
    include_once './Views/home.php';
}
elseif (isset($_POST['username']) && isset($_POST['password']))
{
//    echo "validacion de login";
    $userForm = $_POST['username'];
    $passForm = $_POST['password'];

    if ($user->userExists($userForm, $passForm))
    {
//        echo "usuario Validado";
        $userSession->setCurrentUser($userForm);
        $user->setUser($userForm);

        include_once './Views/home.php';
    }
    else
    {
//        echo "Nombre de Usuario y/o Contraseña Incorrecto";
        $errorLogin = "Nombre de Usuario y/o Contraseña Incorrecto";
        include_once './Views/login.php';
    }
}
else
{
//    echo "login";
    include_once './Views/login.php';
}
?>

