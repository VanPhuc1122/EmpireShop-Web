<?php
    require_once("model.php");
    class binhluan extends model{
        // Lấy danh sách sản phẩm bình luận
        public function GetBinhLuan($id_sanpham) {
            $query = "SELECT * FROM blsanpham WHERE id_sanpham = ? ORDER BY ngay_tao DESC";
            $stmt = $this->connect->prepare($query);
            $stmt->bind_param("i", $id_sanpham);
            $stmt->execute();
            $result = $stmt->get_result();
            if ($result->num_rows > 0) {
                $data = $result->fetch_all(MYSQLI_ASSOC); 
            } else {
                $data = []; 
            }
            return $data;
        }
        
        // Thêm bình luận
        public function AddBinhLuan($id_sanpham, $ten_nguoibinhluan, $noi_dung) {
            $sql = "INSERT INTO blsanpham (id_sanpham, ten_nguoibinhluan, noi_dung, ngay_tao) VALUES (?, ?, ?, NOW())";
            $stmt = $this->connect->prepare($sql);
            if (!$stmt->execute([$id_sanpham, $ten_nguoibinhluan, $noi_dung])) {
                return false;
            }
            return true;
        }        
        
        // // Xoá bình luận
        // public function deletebinhluan($id_binhluan){
        //     $query = "DELETE FROM blsanpham WHERE id_binhluan = ?";
        //     require("result.php");
        //     return $data;
        // }
        // // Sửa nội dung bình luận
        // public function updatebinhluan($id_binhluan, $noi_dung){
        //     $query = "UPDATE blsanpham SET noi_dung = ?, ngay_tao = NOW() WHERE id_binhluan = ?";
        //     require("result.php");
        //     return $data;
        // }
    }