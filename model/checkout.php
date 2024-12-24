<?php
require_once("model.php");

class CheckOut extends model {
    public function save($data) {
        $col = "";
        $val = "";
        foreach ($data as $key => $value) {
            $col .= $key . ",";
            $val .= "'" . $value . "',";  
        }
        $col = trim($col, ",");
        $val = trim($val, ",");
        
        $query = "INSERT INTO hoadon($col) VALUES ($val);";
        $status = $this->connect->query($query);

        $query_id_hoadon = "SELECT id_hoadon FROM hoadon ORDER BY ngay_dat DESC LIMIT 1";
        $data_id_hoadon = $this->connect->query($query_id_hoadon)->fetch_assoc(); 

        if ($data_id_hoadon) {
            $id_hoadon = $data_id_hoadon['id_hoadon'];
            $status_ct = true;
            foreach ($_SESSION['sanpham'] as $value) {
                $id_sanpham = $value['id_sanpham'];
                $soluong = $value['soluong'];
                $gia_sp = $value['gia_sp'];
                $query_ct = $this->connect->prepare("INSERT INTO chitiethoadon (id_hoadon, id_sanpham, soluong, gia_sp) VALUES (?, ?, ?, ?)");
                $query_ct->bind_param("iiii", $id_hoadon, $id_sanpham, $soluong, $gia_sp);
                $status_ct = $query_ct->execute();
            }
        }
        if ($status == true && $status_ct == true) {
            header('location: ?url=checkout&xuli=order_sucess');
            exit;
        } else {
            header('location: ?url=checkout');
            exit;
        }
    }
}
?>
