<?php
    require_once("connection.php");
    class model{
        var $connect;
        public function __construct(){
            $connect = new connection();
            $this->connect = $connect->connect;
        }
        public function limit($a, $b){
            $query = "SELECT * FROM sanpham WHERE trangthai = 1 ORDER BY thoigian DESC LIMIT $a, $b";
            require("result.php");
            return $data;
        }

        public function danhmuc(){
            $query = "SELECT * FROM dmsanpham";
            require("result.php");
            return $data;
        }
        // hàm lấy chi tiết danh mục 
        public function chitietdanhmuc($id){
            $query = "SELECT d.ten_dm as Ten, l.* FROM dmsanpham as d, loaisanpham as l WHERE d.id_dm = l.id_dm and d.id_dm = $id";
            require("result.php");
            return $data;
        }
        
        // hàm lấy sản phẩm theo danh mục
        public function sanpham_danhmuc($a, $b, $danhmuc){
            $query = "SELECT * FROM sanpham WHERE trangthai = 1 and id_dm = $danhmuc ORDER BY thoigian DESC LIMIT $a, $b";
            require("result.php");
            return $data;
        }

    // Hàm sắp xếp sản phẩm
    public function sapxep($a, $b, $danhmuc, $sort) {
        $query = "SELECT * FROM sanpham WHERE id_dm = $danhmuc ";
        switch ($sort) {
            case 'asc':
                $query .= "ORDER BY gia_sp ASC ";  
                break;
            case 'desc':
                $query .= "ORDER BY gia_sp DESC "; 
                break;
            case 'az':
                $query .= "ORDER BY ten_sp ASC ";  
                break;
            case 'za':
                $query .= "ORDER BY ten_sp DESC "; 
                break;
            default:
                $query .= "ORDER BY gia_sp DESC "; 
                break;
        }
                $query .= "LIMIT $a, $b";
                require("result.php");
                return $data;
            }

            // Hàm lấy danh sách sản phẩm liên quan theo tên và danh mục
            public function splienquan($a, $b, $ten_sp, $danhmuc){
                $query = "SELECT * FROM sanpham WHERE trangthai = 1 
                and ten_sp LIKE '%$ten_sp%' and id_dm = $danhmuc ORDER BY thoigian DESC LIMIT $a, $b
                ";
                require("result.php");  
                return $data;
            }
            // Hàm lọc sản phẩm theo điều kiện
            public function locsanpham(
                $thuonghieu = null, $loai_may = null, $chat_lieuday = null,
                $mau_sac = null, $duong_kinh = null, $phong_cach = null, $tinh_nang = null,
                $dochiu_nuoc = null, $danhmuc = null
            ){
                $query = "SELECT s.* FROM sanpham s 
                LEFT JOIN thuonghieu t ON s.id_thuonghieu = t.id_thuonghieu
                LEFT JOIN dmsanpham d ON s.id_danhmuc = d.id_danhmuc WHERE 1=1";

                $filter = [];
                // xử lí lọc
                if(!empty($thuonghieu)){
                    $thuonghieu = $this->connect->real_escape_string($thuonghieu);
                    $filter[] = "t.ten_thuonghieu = '$thuonghieu'";
                }
                if(!empty($loai_may)){
                    $loai_may = $this->connect->real_escape_string($loai_may);
                    $filter[] = "s.loai_may = '$loai_may'";
                }
                if(!empty($chat_lieuday)){
                    $chat_lieuday = $this->connect->real_escape_string($chat_lieuday);
                    $filter[] = "s.chat_lieuday = '$chat_lieuday'"; 
                }
                if(!empty($mau_sac)){
                    $mau_sac = $this->connect->real_escape_string($mau_sac);
                    $filter[] = "s.mau_sac = '$mau_sac'";
                }
                if(!empty($duong_kinh)){
                    $duong_kinh = $this->connect->real_escape_string($duong_kinh);
                    $filter[] = "s.duong_kinh = '$duong_kinh'";
                }
                if(!empty($phong_cach)){
                    $phong_cach = $this->connect->real_escape_string($phong_cach);
                    $filter[] = "s.phong_cach = '$phong_cach'";
                }
                if(!empty($tinh_nang)){
                    $tinh_nang = $this->connect->real_escape_string($tinh_nang);
                    $filter[] = "s.tinh_nang = '$tinh_nang'";
                }
                if(!empty($dochiu_nuoc)){
                    $dochiu_nuoc = $this->connect->real_escape_string($dochiu_nuoc);
                    $filter[] = "s.dochiu_nuoc = '$dochiu_nuoc'";
                }
                if(!empty($danhmuc)){
                    $danhmuc = $this->connect->real_escape_string($danhmuc);
                    $filter[] = "d.ten_dm = '$danhmuc'";
                }
                // Gắn điều kiện lọc vào câu truy vấn
                if(!empty($filter)){
                    $query .= " AND " . implode(' AND ', $filter);
                }
                $query .= " LIMIT 0, 12";
                require("result.php");
                return $data;
            }
        }