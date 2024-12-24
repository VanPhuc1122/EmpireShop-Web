<?php
class connection{
    var $connect;
    public function __construct(){
        $servername = "localhost";
        $username = "root";
        $password = "";
        $db_name = "webdonghotructuyen";

        // tạo kết nối csdl
        $this->connect = new mysqli($servername, $username, $password, $db_name);
        $this->connect->set_charset("utf8");
        // check
        if($this->connect->connect_error){
            die("Connect Dataabase Failed ". $this->connect->connect_error);
        }
    }
}