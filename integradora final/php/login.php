<?php
    require 'bd_bd.php';
    $user = $_POST['userName'];
    $password = $_POST['userPw'];
    $userBD = "root";
    $passUserBD = "aldairGC15";
    $obj = new DB($userBD, $passUserBD);
    $obj->VALIDAR_USER($user, $password);
?>


