<?php  
    require_once("model.php");
    class search extends model{
        public function timkiem($a){
            $a = "'%".$a."%'";
            $query = "SELECT * FROM sanpham WHERE ten_sp LIKE $a LIMIT 0, 12";
            require("result.php");
            return $data;
        }
    }