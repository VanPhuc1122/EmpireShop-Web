<?php
require("model.php");
class sanpham extends model
{
    var $table = "sanpham";
    var $content = "id_sanpham";
   public function khuyenmai(){
        $query = "select * from khuyenmai";
        require("result.php");
        return $data;
    }
   public function loaisp(){
        $query = "select * from loaisanpham";
        require("result.php");
        return $data;
    }
    public function danhmuc(){
     $query = "select * from dmsanpham";
     require("result.php");
     return $data;
 }
   public function thuonghieu(){
     $query = "select * from thuonghieu";
     require("result.php");
     return $data;
}
}
