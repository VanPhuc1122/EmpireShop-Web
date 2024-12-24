<?php
require_once("connection.php");
class login
{
    var $conn;
   public function __construct()
    {
        $connect = new Connection();
        $this->conn = $connect->conn;
    }
   public function tk_sanpham($id){
        $query = "SELECT count(id_sanpham) as Count FROM sanpham WHERE id_dm = $id";
        return $this->conn->query($query)->fetch_assoc();
   }
   public function tk_thongbao(){
        $query = "SELECT count(id_hoadon) as Count FROM hoadon WHERE TrangThai = 0";
        return $this->conn->query($query)->fetch_assoc();
    }
   public function tk_dtthang($month){
        $query = "SELECT SUM(tong_tien) as Count FROM hoadon WHERE MONTH(ngay_dat) = $month And TrangThai = 1";
        return $this->conn->query($query)->fetch_assoc();
    }
   public function tk_dtnam($year){
        $query = "SELECT SUM(tong_tien) as Count FROM hoadon WHERE YEAR(ngay_dat) = $year And TrangThai = 1";

        return $this->conn->query($query)->fetch_assoc();
    }
   public function tk_nguoidung($id){
        $query = "SELECT count(Ma_ND) as Count FROM nguoidung WHERE id_quyen = $id";
        return $this->conn->query($query)->fetch_assoc();
    }
}
