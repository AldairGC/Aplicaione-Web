<?php
class DB {
    //Propiedades
    private $servername = "localhost";
    private $dbname = "bd_bd";
    private $conn;

    function __construct($username, $password) {
        $this->conn = new mysqli($this->servername, $username, $password, $this->dbname);
        $this->conn->set_charset("utf8");
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }
    function __destruct() {
        $this->conn->close();
    }

    function insert_user($nombre, $pass, $correo)
    {
        $sql = "SELECT nombreUsuario, correo, contraseña FROM login WHERE correo = '$correo' || nombreUsuario = '$nombre'";
        $result = $this->conn->query($sql);
        if($result->num_rows > 0)
        {
            header('location: /integradora%20final/try_register.html');         
        }else{
            $query = $this->conn->prepare("INSERT INTO login (nombreUsuario, contraseña, correo) VALUES ('$nombre', md5('$pass'), '$correo')");
            $query->execute();
            $_SESSION = true; 
            header('location: /integradora%20final/index.php');
        }
    }

    function validar_user($nombre, $passw)
    {
        $sql = "SELECT nombreUsuario, contraseña FROM login WHERE nombreUsuario = '$nombre' and contraseña = md5('$passw')";
        $result = $this->conn->query($sql);
        if($result->num_rows > 0)
        {
            header('location: /integradora%20final/index.php');
            $_SESSION = true;
        }
        else {   
            header('location: /integradora%20final/try_login.html');         
        }
    }
}
?>