<?php
    require_once("model.php");
    class cart extends model{
        public function detail_sp($id){
            $query = "SELECT * FROM sanpham WHERE id_sanpham = $id";
            $result = $this->connect->query($query);
            return $result->fetch_assoc();
        }
    }