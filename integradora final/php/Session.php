<?php
    require 'bd_bd.php';
    $userBD = "root";
    $passUserBD = "aldairGC15";
    $obj = new DB($userBD, $passUserBD);
class UserSession{
    public function__construct(){
        session_start();
    }
    public function setCurrentUser($user){
        $_SESSION['user'] = $user;
    }
    public function getCurrentUser($){
        return $_SESSION['user']
    }
    public function closeSession(){
        session_unset();
        session_destroy():
    }
}
?>