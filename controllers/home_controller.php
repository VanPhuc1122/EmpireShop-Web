<?php
    require_once __DIR__ . '/../model/home.php';
    
    class HomeController {
        var $home_model;

        public function __construct() {
            $this->home_model = new Home();
        }

        public function list(){
            $data_danhmuc = $this->home_model->danhmuc();
            $data_chitietdanhmuc = array();
            for($i = 1; $i <= count($data_danhmuc); $i++){
                $data_chitietdanhmuc[$i] = $this->home_model->chitietdanhmuc($i);
            }
            $data = $this->home_model->sanpham_danhmuc(0, 4, 1);
            require_once __DIR__ . '/../views/index.php';
        }
    }
?>
