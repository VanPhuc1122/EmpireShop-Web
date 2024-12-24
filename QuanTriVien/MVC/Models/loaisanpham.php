<?php
require_once("model.php");
class loaisanpham extends Model
{
    var $table = "loaisanpham";
    var $content = "id_lsp";
    function danhmuc(){
        $query = "select * from dmsanpham";
        require("result.php");
        return $data;
    }
}