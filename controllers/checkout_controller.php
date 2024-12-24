    <?php
             require_once __DIR__ . '/../model/checkout.php';
             class CheckOut_Controller{
                var $checkout_model;
                public function __construct(){
                    $this->checkout_model = new CheckOut();
                }
                public function list(){
                    if(isset($_SESSION['username'])){
                        $data_danhmuc = $this->checkout_model->danhmuc();
                        $data_chitietdanhmuc = array();
                        for($i = 1; $i <= count($data_danhmuc); $i++){
                            $data_chitietdanhmuc[$i] = $this->checkout_model->chitietdanhmuc($i);
                        }
                        $count = 0;
                        if(isset($_SESSION['sanpham'])){
                            foreach($_SESSION['sanpham'] as $value){
                                $count += $value['ThanhTien'];
                            }
                        }
                        require_once __DIR__ . '/../views/index.php';
                    }else{
                        header('location: ?url=login');
                    }
                }
                public function save(){
                    date_default_timezone_set('Asia/Ho_Chi_Minh');
                    $ThoiGian =  date('Y-m-d H:i:s');
                    $count = 0;
                    if(isset($_SESSION['sanpham'])){
                        foreach($_SESSION['sanpham'] as $value){
                            $count += $value['ThanhTien'];
                        } 
                    }
                    $data = array(
                        'Ma_ND' => $_SESSION['username']['Ma_ND'],
                        'ngay_dat' => $ThoiGian,
                        'ten_khach_hang' => $_POST['ten_khach_hang'],
                        'email_khach_hang' => $_POST['email_khach_hang'],
                        'so_dien_thoai' => $_POST['so_dien_thoai'],
                        'dia_chi_nhan' => $_POST['dia_chi_nhan'],
                        'tinh_thanh_pho' => $_POST['tinh_thanh_pho'],
                        'PhuongThucTT' => $_POST['PhuongThucTT'],
                        'ghi_chu' => $_POST['ghi_chu'],
                        'tong_tien' => $count,
                        'trangthai' => '0',
                    );
                    if($_SERVER['REQUEST_METHOD'] === "POST"){
                        $email_khach_hang = $_POST['email_khach_hang'];
                        $_SESSION['checkout'] = [
                            'email_khach_hang' => htmlspecialchars($email_khach_hang)
                        ];
                    }
                    $this->checkout_model->save($data);           
                }
                public function order_sucess(){
                    $data_danhmuc = $this->checkout_model->danhmuc();
                    $data_chitietdanhmuc = array();

                    for($i = 1; $i <= count($data_danhmuc); $i++){
                        $data_chitietdanhmuc[$i] = $this->checkout_model->chitietdanhmuc($i);
                    }
                    $count = 0;
                    if(isset($_SESSION['sanpham'])){
                        foreach($_SESSION['sanpham'] as $value){
                            $count += $value['ThanhTien'];
                        }
                    }
                    require_once __DIR__ . '/../views/index.php';
                }
             }