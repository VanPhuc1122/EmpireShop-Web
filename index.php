<?php
session_start();
$url = isset($_GET['url']) ? $_GET['url'] : "page"; 
switch ($url) {
    case 'page':
        require_once __DIR__ . '/./controllers/home_controller.php';
        $controller = new HomeController();
        $controller->list();
        break;
        
    case 'search':
        require_once __DIR__ . '/./controllers/search_controller.php';
        $controller = new SearchController();
        $controller->timkiem();
        break;

    case 'locsanpham':
        require_once __DIR__ . '/./controllers/locsanpham_controller.php';
        $controller = new Locsanpham_Controller();
        $controller->locsanpham();
        break;
        
    case 'detail':
        require_once __DIR__ . '/./controllers/detail_controller.php';
        $controller = new detail_controller();
        $controller->list();
        break;

    case 'binhluan':
        require_once __DIR__ . '/./controllers/binhluan_controller.php';
        $controller = new binhluan_controller();
        $controller->addbinhluan();
        break;

    case 'donghonam':
        require_once __DIR__ . '/./controllers/productcontroller.php';
        $controller = new ProductController();
        $controller->list();
        break;
    case 'donghonu':
        require_once __DIR__ . '/./controllers/productcontroller.php';
        $controller = new ProductController();
        $controller->list_donghohu();
        break;
    case 'donghocapdoi':
        require_once __DIR__ . '/./controllers/productcontroller.php';
        $controller = new ProductController();
        $controller->list_donghocapdoi();
        break;

    case 'cart':
        $url = isset($_GET['xuli']) ? $_GET['xuli'] : "list";
        require_once __DIR__ . '/./controllers/cart_controller.php';
        $controller = new CartController();
        switch ($url) {
            case 'list':
                $controller->list_cart();
                break;
            case 'update':
                $controller->update_cart();
                break;
            case 'add':
                $controller->add_cart();
                break;
            case 'delete':
                $controller->delete_cart();
                break;
            case 'deleteall':
                $controller->deleteall_cart();
                break;
            default:
                $controller->list_cart();
                break;
        }
        break;
    case 'checkout':
        $url = isset($_GET['xuli']) ? $_GET['xuli'] : "list";
        require_once __DIR__ . '/./controllers/checkout_controller.php';
        $controller = new CheckOut_Controller();
        switch ($url) {
            case 'list':
                $controller->list();
                break;
            case 'save':
                $controller->save();
                break;
            case 'order_sucess':
                $controller->order_sucess();
                break;
            default:
                $controller->list();
                break;
        }
        break;
    case 'thuonghieu':
        require_once __DIR__ . '/./controllers/brand_controller.php';
        brand_controller::thuonghieu();
        break;
    
    case 'login':
        require_once __DIR__ . '/./controllers/login_controller.php';
        LoginController::ShowLogin();
        break;
    case 'logout':
        require_once __DIR__ . '/./controllers/login_controller.php';
        LoginController::logout();
        break;
    case 'Register':
        require_once __DIR__ . '/./controllers/login_controller.php';
        LoginController::Showregister();
        break;
    default:
        echo "Không tìm thấy trang phù hợp để điều hướng";
        break;
}
