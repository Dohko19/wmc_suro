<?php
include_once '../Controllers/Config/user_session.php';

$userSession = new UserSession();
$userSession->closeSession();

header("location: ../index.php");
