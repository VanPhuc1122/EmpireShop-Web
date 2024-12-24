<?php 
         require_once __DIR__ . '/../model/cart.php';
         class CartController{
            var $cart_model;
            public function __construct(){
                $this->cart_model = new cart();
            }
            public function list_cart(){
                $data_danhmuc = $this->cart_model->danhmuc();
                $data_chitietdanhmuc = array();
                for($i = 1; $i <= count($data_danhmuc); $i++){
                    $data_chitietdanhmuc[$i] = $this->cart_model->chitietdanhmuc($i);
                }
                $count = 0;
                if(isset($_SESSION['sanpham'])){
                    foreach($_SESSION['sanpham'] as $value){
                        $count += $value['ThanhTien'];
                    }
                }
                require_once __DIR__ . '/../views/index.php';
            }
            public function add_cart(){
                $id = $_GET['id'];
                $data = $this->cart_model->detail_sp($id);
                $count = 0;
                if(isset($_SESSION['sanpham'][$id])){
                    $arr = $_SESSION['sanpham'][$id];
                    $arr['soluong'] = $arr['soluong'] + 1;
                    $arr['ThanhTien'] = $arr['soluong'] * $arr["gia_sp"];
                    $_SESSION['sanpham'][$id] = $arr;
                }else{
                    $arr['id_sanpham'] = $data['id_sanpham'];
                    $arr['ten_sp'] = $data['ten_sp'];
                    $arr['gia_sp'] = $data['gia_sp'];
                    $arr['soluong'] = 1;
                    $arr['ThanhTien'] = $data['gia_sp'];
                    $arr['HinhAnh1'] = $data['HinhAnh1'];
                    $_SESSION['sanpham'][$id] = $arr;
                }
                foreach($_SESSION['sanpham'] as $value){
                    $count += $value['ThanhTien'];
                }
                header('Location:?url=cart#dathang');
            }
            public function update_cart(){
                $arr = $_SESSION['sanpham'][$_GET['id']];
                $arr['soluong'] = $arr['soluong'] + 1;
                $arr['ThanhTien'] = $arr['soluong'] * $arr['gia_sp'];
                $_SESSION['sanpham'][$_GET['id']] = $arr;
                header('Location: ?url=cart#dathang');
            }
            public function delete_cart(){
                $arr = $_SESSION['sanpham'][$_GET['id']];
                if($arr['soluong'] == 1){
                    unset($_SESSION['sanpham'][$_GET['id']]);
                }else{
                    $arr = $_SESSION['sanpham'][$_GET['id']];
                    $arr['soluong'] = $arr['soluong'] - 1;
                    $arr['ThanhTien'] = $arr['soluong'] * $arr['gia_sp'];
                    $_SESSION['sanpham'][$_GET['id']] = $arr;
                }
              header('Location: ?url=cart#dathang');  
            }
            public function deleteall_cart(){
                unset($_SESSION['sanpham'][$_GET['id']]);
                header('Location: ?url=cart#dathang');
            }
         }