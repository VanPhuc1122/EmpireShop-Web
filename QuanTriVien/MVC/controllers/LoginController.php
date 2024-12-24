<?php 
    require_once __DIR__ . '/../Models/login.php';
    class LoginController {
        var $login_model;
        public function __construct()
        {
            $this->login_model = new login();
        }
        public function admin()
        {
            $data_tkdonghonam = $this->login_model->tk_sanpham(1);
            $data_tkdonghonu = $this->login_model->tk_sanpham(2);
            $data_tkdonghocapdoi = $this->login_model->tk_sanpham(3);

            $data_hd = $this->login_model->tk_thongbao();

            $month = date("m");
            // Doanh Thu Tháng Của Shop
            $data_countM = $this->login_model->tk_dtthang($month);

            $year = "20".date("y");
            // Doanh Thu Năm Của Shop
            $data_countY = $this->login_model->tk_dtnam($year);
            // khách hàng
            $data_nguoidung = $this->login_model->tk_nguoidung(1);
            // nhân viên
            $data_nhanvien = $this->login_model->tk_nguoidung(3);
            require_once __DIR__ . '/../Views/admin/index.php';
        }
    }
?>