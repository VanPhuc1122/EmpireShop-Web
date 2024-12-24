<?php
require_once("model.php");

class Hoadon extends Model
{
    var $table = "hoadon";
    var $content = "id_hoadon";
    
    // Hàm lấy tất cả hóa đơn theo trạng thái
    public function trangthai($id)
    {
        $query = "SELECT * FROM hoadon WHERE TrangThai = ? ORDER BY id_hoadon DESC";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("i", $id); 
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $data[] = $row;
            }
            return $data;
        } else {
            return null;
        }
        $stmt->close();
    }

    // Hàm lấy chi tiết hóa đơn
    public function chitiethoadon($id)
    {
        $query = "SELECT ct.*, s.ten_sp AS Ten, s.gia_sp, (s.gia_sp * ct.soluong) AS tongtien
                  FROM chitiethoadon AS ct
                  JOIN sanpham AS s ON ct.id_sanpham = s.id_sanpham
                  WHERE ct.id_hoadon = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("i", $id); 
        $stmt->execute();
        $result = $stmt->get_result();
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $data[] = $row;
            }
            return $data;
        } else {
            return null;
        }
        $stmt->close();
    }
}
?>
