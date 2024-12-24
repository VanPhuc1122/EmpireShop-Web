<?php 
    class Connection{
        var $conn;

        function __construct()
        {

            $severname ="localhost"; 
            $username ="root";
            $password =""; 
            $db_name ="webdonghotructuyen";

            //Tao ket noi CSDL
            $this->conn = new mysqli($severname,$username,$password,$db_name);
            $this->conn->set_charset("utf8");

            // Kiểm tra kết nối
            if ($this->conn->connect_error) {
		        die("Connection failed: " . $this->conn->connect_error);
		    }
        }
    }

?>