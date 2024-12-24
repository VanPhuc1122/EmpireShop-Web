<?php
    require_once __DIR__ . '/../model/locsanpham.php';
    class Locsanpham_Controller{
        var $locsanpham_model;
        public function __construct(){
            $this->locsanpham_model = new locsanpham();
        }
        public function locsanpham(){
            $data_danhmuc = $this->locsanpham_model->danhmuc();
            $data_chitietdanhmuc = array();
            for($i = 1; $i <= count($data_danhmuc); $i++){
                $data_chitietdanhmuc[$i] = $this->locsanpham_model->chitietdanhmuc($i);
            }
            // Lấy dữ liệu từ form và các bộ lọc
            $filter = [
                'thuonghieu'   => filter_input(INPUT_GET, 'thuonghieu', FILTER_SANITIZE_STRING),
                'loai_may'     => filter_input(INPUT_GET, 'loai_may', FILTER_SANITIZE_STRING),
                'chat_lieuday' => filter_input(INPUT_GET, 'chat_lieuday', FILTER_SANITIZE_STRING),
                'mau_sac'      => filter_input(INPUT_GET, 'mau_sac', FILTER_SANITIZE_STRING),
                'duong_kinh'   => filter_input(INPUT_GET, 'duong_kinh', FILTER_SANITIZE_STRING),
                'phong_cach'   => filter_input(INPUT_GET, 'phong_cach', FILTER_SANITIZE_STRING),
                'tinh_nang'    => filter_input(INPUT_GET, 'tinh_nang', FILTER_SANITIZE_STRING),
                'dochiu_nuoc'  => filter_input(INPUT_GET, 'dochiu_nuoc', FILTER_SANITIZE_STRING),
                'danhmuc'      => filter_input(INPUT_GET, 'danhmuc', FILTER_SANITIZE_STRING),
            ];
            $data = $this->locsanpham_model->locsanpham(
                $filter['thuonghieu'],
                $filter['loai_may'],
                $filter['chat_lieuday'],
                $filter['mau_sac'],
                $filter['duong_kinh'],
                $filter['phong_cach'],
                $filter['tinh_nang'],
                $filter['dochiu_nuoc'],
                $filter['danhmuc']
            );
            $error_message = '';
            if(empty($data)){
                $error_message = "Không có sản phẩm nào phù hợp với yêu cầu.";
            }
            require_once __DIR__ . '/../views/index.php';
        }
    }