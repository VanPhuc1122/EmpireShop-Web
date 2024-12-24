<?php
require_once("model.php");

class NguoiDung extends Model {
    public function __construct(){
        $this->table = 'nguoidung';  
        $this->content = 'Ma_ND';      
        parent::__construct();    
    }
}

