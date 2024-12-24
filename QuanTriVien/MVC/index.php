<?php
session_start();
if (isset($_SESSION['login_admin']) && $_SESSION['login_admin'] == true) {
    $url = isset($_GET['url']) ? $_GET['url'] : "login";
    $operation = isset($_GET['operation']) ? $_GET['operation'] : "admin";
    switch ($url) {
        case 'danhmuc':
            require_once('./controllers/DanhMucController.php');
            $controller = new DanhmucController();
            switch ($operation) {
                case 'list':
                    $controller->list();
                    break;
                case 'add':
                    $controller->add();
                    break;
                case 'insert':
                    $controller->insert();
                    break;
                case 'delete':
                    $controller->delete();
                    break;
                case 'edit':
                    $controller->edit();
                    break;
                case 'update':
                    $controller->update();
                    break;
                default:
                    $controller->list();
                    break;
            }
            break;
        case 'banner':
            require_once('./controllers/BannerController.php');
            $controller = new BannerController();
            switch ($operation) {
                case 'list':
                    $controller->list();
                    break;
                case 'add':
                    $controller->add();
                    break;
                case 'insert':
                    $controller->insert();
                    break;
                case 'delete':
                    $controller->delete();
                    break;
                case 'edit':
                    $controller->edit();
                    break;
                case 'update':
                    $controller->update();
                    break;
                default:
                    $controller->list();
                    break;
            }
            break;
        case 'binhluan':
            require_once('./controllers/BinhLuanController.php');
            $controller = new binhluan_controller();
            switch ($operation) {
                case 'list':
                    $controller->list();
                    break;
                case 'delete':
                    $controller->delete();
                    break;
                default:
                    $controller->list();
                    break;
            }
            break;
        case 'nguoidung':
            require_once('./controllers/NguoiDungController.php');
            $controller = new NguoiDungController();
            switch ($operation) {
                case 'list':
                    $controller->list();
                    break;
                case 'add':
                    $controller->add();
                    break;
                case 'insert':
                    $controller->insert();
                    break;
                case 'delete':
                    $controller->delete();
                    break;
                case 'edit':
                    $controller->edit();
                    break;
                case 'update':
                    $controller->update();
                    break;
                default:
                    $controller->list();
                    break;
            }
            break;
        case 'sanpham':
            require_once('./controllers/SanPhamController.php');
            $controller = new SanphamController();
            switch ($operation) {
                case 'list':
                    $controller->list();
                    break;
                case 'add':
                    $controller->add();
                    break;
                case 'insert':
                    $controller->insert();
                    break;
                case 'delete':
                    $controller->delete();
                    break;
                case 'edit':
                    $controller->edit();
                    break;
                case 'update':
                    $controller->update();
                    break;
                default:
                    $controller->list();
                    break;
            }
            break;
        case 'loaisanpham':
            require_once('./controllers/LoaiSanPhamController.php');
            $controller = new LoaisanphamController();
            switch ($operation) {
                case 'list':
                    $controller->list();
                    break;
                case 'add':
                    $controller->add();
                    break;
                case 'insert':
                    $controller->insert();
                    break;
                case 'delete':
                    $controller->delete();
                    break;
                case 'edit':
                    $controller->edit();
                    break;
                case 'update':
                    $controller->update();
                    break;
                default:
                    $controller->list();
                    break;
            }
            break;
        case 'hoadon':
            require_once('./controllers/HoaDonController.php');
            $controller = new HoadonController();
            switch ($operation) {
                case 'list':
                    $controller->list();
                    break;
                case 'chitiet':
                    $controller->chitiet();
                    break;
                case 'delete':
                    $controller->delete();
                    break;
                case 'xetduyet':
                    $controller->xetduyet();
                    break;
                default:
                    $controller->list();
                    break;
            }
            break;
            case 'login':
                require_once('./controllers/LoginController.php');
                $controller = new LoginController();
                switch ($operation) {
                    case 'admin':
                        $controller->admin();
                        break;
                    default:
                        $controller->admin();
                        break;
                }
                break;
        default:
            header('location: ?url=login');
    }
}
