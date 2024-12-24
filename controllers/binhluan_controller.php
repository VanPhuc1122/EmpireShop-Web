<?php
require_once __DIR__ . '/../model/binhluan.php';

class binhluan_controller {
    var $binhluan_model;

    public function __construct() {
        $this->binhluan_model = new binhluan();
    }
        public function addbinhluan() {
            if ($_SERVER['REQUEST_METHOD'] === "POST") {
                $id_sanpham = isset($_POST['id_sanpham']) ? $_POST['id_sanpham'] : null;
                $ten_nguoibinhluan = isset($_SESSION['username']['Tendangnhap']) ? $_SESSION['username']['Tendangnhap'] : null;
                $noi_dung = isset($_POST['binhluan']) ? trim($_POST['binhluan']) : null;

                if($id_sanpham && $ten_nguoibinhluan && $noi_dung){
                    $data_binhluan = $this->binhluan_model->AddBinhLuan($id_sanpham, $ten_nguoibinhluan, $noi_dung);
                    if($data_binhluan){
                        $response = [
                            'success' => true,
                            'comment' => [
                                'ten_nguoibinhluan' => htmlspecialchars($ten_nguoibinhluan),
                                'noi_dung' => htmlspecialchars($noi_dung),
                                'ngay_tao' => date('d/m/Y H:i:s')
                            ]
                        ];
                    }else{
                        $response = ['sucess' => false];
                    }
                    echo json_encode($response);
                    exit;
                }
            }
        }     
}
