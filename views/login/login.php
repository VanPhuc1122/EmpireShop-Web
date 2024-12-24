<?php
    session_start();
    // Bật hiển thị lỗi
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    require_once __DIR__ . '/../../config/db_connect.php';

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password']; 

        $db = Database::getDB();
        $query = "SELECT * FROM nguoidung WHERE Tendangnhap = :name AND Email = :email";
        $stmt = $db->prepare($query);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
    
        if ($user) {
                $_SESSION['username'] = $user;
                $_SESSION['id_quyen'] = $user['id_quyen'];
    
                if ($user['id_quyen'] == 1) {
                    header('Location: /project/index.php');
                    exit();
                } else {
                    echo "<script>
                    alert('Hãy Đăng Nhập Với Tài Khoản Khách Hàng Của Bạn');
                    window.location.href = '?url=login';
                </script>";
                exit;
                }
            } else {
                // Mật khẩu sai
                echo "<script>alert('Thông Tin Đăng Nhập Không Chính Xác. Vui lòng thử lại!');</script>";
            }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login Luxury</title>
    <link href="/project/Admin/MVC/Public/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="/project/Admin/MVC/Public/css/sb-admin-2.min.css" rel="stylesheet">
</head>
<body class="bg-gradient-primary">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-10 col-lg-12 col-md-9">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image">
                                <img src="/project/public/assets/image/DongHoNam/h6.webp" alt="">
                            </div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Login Luxury</h1>
                                    </div>
                                    <form class="user" action="login.php" method="POST">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user"
                                                id="exampleInputname" aria-describedby="nameHelp" name="name"
                                                placeholder="Tên Đăng Nhập" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="email" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="emailHelp" name="email"
                                                placeholder="Email" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user"
                                                id="exampleInputPassword" placeholder="Password"
                                                name="password" required>
                                        </div>
                                        <button type="submit" class="btn btn-primary w-100">Login</button>
                                        <hr>
                                        <p style="padding-left: 35px;">Bạn chưa có tài khoản? <a href="/project/views/login/register.php">Đăng ký ngay</a></p>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="/project/Admin/MVC/Public/vendor/jquery/jquery.min.js"></script>
    <script src="/project/Admin/MVC/Public/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/project/Admin/MVC/Public/vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="/project/Admin/MVC/Public/js/sb-admin-2.js"></script>
</body>
</html>
