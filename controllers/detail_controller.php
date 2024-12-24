<?php
     require_once __DIR__ . '/../model/detail.php';
     class detail_controller{
        var $detail_model;
        public function __construct(){
            $this->detail_model = new Detail();
        }
        public function list(){
            $data_danhmuc = $this->detail_model->danhmuc();
            $data_chitietdanhmuc = array();
            for($i = 1; $i <= count($data_danhmuc); $i++){
                $data_chitietdanhmuc[$i] = $this->detail_model->chitietdanhmuc($i);
            }
            $id = $_GET['id'];
            $data = $this->detail_model->detail_sp($id);
            if($data != null){
                $data_lq = $this->detail_model->splienquan(0, 4, $data['ten_sp'], $data['id_dm']);  
            }
            require_once __DIR__ . '/../views/index.php';
        }
     }