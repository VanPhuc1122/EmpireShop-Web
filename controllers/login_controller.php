<?php
class LoginController{
    public static function ShowLogin(){
        require_once __DIR__ . '/../views/login/login.php'; 
    }
    public static function Showregister(){
        require_once __DIR__ . '/../views/login/register.php';
    }
    public static function logout(){
        require_once __DIR__ . '/../views/login/logout.php';
    }
}
?>