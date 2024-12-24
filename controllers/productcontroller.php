<?php 
    require_once __DIR__ . '/../model/product.php';
    class ProductController{
        var $product_model;
        public function __construct(){
            $this->product_model = new product();
        }
        public function list(){
            $data_danhmuc = $this->product_model->danhmuc();
            $data_chitietdanhmuc = array();
            for($i = 1; $i <= count($data_danhmuc); $i++){
                $data_chitietdanhmuc[$i] = $this->product_model->chitietdanhmuc($i);
            }
            $data = $this->product_model->sanpham_danhmuc(0, 12, 1);
            require_once __DIR__ . '/../views/index.php';
        }
        public function list_donghohu(){
            $data_danhmuc = $this->product_model->danhmuc();
            $data_chitietdanhmuc = array();
            for($i = 1; $i <= count($data_danhmuc); $i++){
                $data_chitietdanhmuc[$i] = $this->product_model->chitietdanhmuc($i);
            }
            $data = $this->product_model->sanpham_danhmuc(0, 12, 2);
            require_once __DIR__ . '/../views/index.php';
        }
        public function list_donghocapdoi(){
            $data_danhmuc = $this->product_model->danhmuc();
            $data_chitietdanhmuc = array();
            for($i = 1; $i <= count($data_danhmuc); $i++){
                $data_chitietdanhmuc[$i] = $this->product_model->chitietdanhmuc($i);
            }
            $data = $this->product_model->sanpham_danhmuc(0, 12, 3);
            require_once __DIR__ . '/../views/index.php';
        }
        public function sapxepsanpham(){
            $data_danhmuc = $this->product_model->danhmuc();
            $data_chitietdanhmuc = array();
            for($i = 1; $i <= count($data_danhmuc); $i++){
                $data_chitietdanhmuc[$i] = $this->product_model->chitietdanhmuc($i);
            }
            $sort = isset($_GET['sort']) ? $_GET['sort'] : ''; 
            $danhmuc = isset($_GET['dmsanpham']) ? $_GET['dmsanpham'] : 1;
            $data = $this->product_model->sapxep(0, 12, $danhmuc, $sort);
            require_once __DIR__ . '/../views/product/donghonam.php';
        }
        public function sx_sanpham_nu(){
            $data_danhmuc = $this->product_model->danhmuc();
            $data_chitietdanhmuc = array();
            for($i = 1; $i <= count($data_danhmuc); $i++){
                $data_chitietdanhmuc[$i] = $this->product_model->chitietdanhmuc($i);
            }
            $sort = isset($_GET['sort']) ? $_GET['sort'] : ''; 
            $danhmuc = isset($_GET['dmsanpham']) ? $_GET['dmsanpham'] : 2;
            $data = $this->product_model->sapxep(0, 12, $danhmuc, $sort);
        
            require_once __DIR__ . '/../views/product/donghonu.php';
        }
        public function sx_sanpham_capdoi(){
            $data_danhmuc = $this->product_model->danhmuc();
            $data_chitietdanhmuc = array();
            for($i = 1; $i <= count($data_danhmuc); $i++){
                $data_chitietdanhmuc[$i] = $this->product_model->chitietdanhmuc($i);
            }
            $sort = isset($_GET['sort']) ? $_GET['sort'] : ''; 
            $danhmuc = isset($_GET['dmsanpham']) ? $_GET['dmsanpham'] : 3;
            $data = $this->product_model->sapxep(0, 12, $danhmuc, $sort);
        
            require_once __DIR__ . '/../views/product/donghocapdoi.php';
        }
    }