<?php
     require_once __DIR__ . '/../Models/binhluan.php';
     class BinhLuan_Controller{
        var $binhluan_model;
        public function __construct(){
            $this->binhluan_model = new binhluan();
        }
        public function list(){
            $data = array();
            $data = $this->binhluan_model->All();
            require_once __DIR__ . '/../Views/admin/index.php';
        }
        public function delete(){
            $id = $_GET['id'];
            $this->binhluan_model->delete($id);
            header("location: ?url=binhluan");
        }
     }