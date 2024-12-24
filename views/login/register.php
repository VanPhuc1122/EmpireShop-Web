<!DOCTYPE html>
<html lang="en">
<?php
    session_start();

    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    require_once __DIR__ . '/../../config/db_connect.php';

    $name = isset($_POST['name']) ? trim($_POST['name']) : null;
    $email = isset($_POST['email']) ? trim($_POST['email']) : null;
    $So_dienthoai = isset($_POST['So_dienthoai']) ? trim($_POST['So_dienthoai']) : null;
    $password = isset($_POST['password']) ? $_POST['password'] : null;
    $confirm_password = isset($_POST['confirm_password']) ? $_POST['confirm_password'] : null;

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (empty($name) || empty($email) || empty($So_dienthoai) || empty($password) || empty($confirm_password)) {
            echo "<script>alert('Vui lòng điền đầy đủ thông tin');</script>";
            exit();
        }

    
        if ($password !== $confirm_password) {
            echo "<script>alert('Mật khẩu và xác nhận mật khẩu không khớp');</script>";
            exit();
        }

    
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        $id_quyen = 1;

        try {
        
            $db = Database::getDB();

        
            $query = "INSERT INTO nguoidung (Tendangnhap, Email, So_dienthoai, Password, id_quyen) 
                    VALUES (:name, :email, :So_dienthoai, :password, :id_quyen)";
            $stmt = $db->prepare($query);

    
            $stmt->bindParam(':name', $name, PDO::PARAM_STR);
            $stmt->bindParam(':email', $email, PDO::PARAM_STR);
            $stmt->bindParam(':So_dienthoai', $So_dienthoai, PDO::PARAM_STR);
            $stmt->bindParam(':password', $hashed_password, PDO::PARAM_STR);
            $stmt->bindParam(':id_quyen', $id_quyen, PDO::PARAM_INT);

            if ($stmt->execute()) {
                $_SESSION['username'] = $name;
                $_SESSION['email'] = $email;
                echo "<script>alert('Đăng Ký Tài Khoản Thành Công');</script>";
                header('Location: /project/views/login/login.php');
            } else {
                echo "<script>alert('Đăng ký không thành công, vui lòng thử lại');</script>";
            }
        } catch (PDOException $e) {
            echo "Lỗi: " . $e->getMessage();
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Register Luxury</title>
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
                                        <h1 class="h4 text-gray-900 mb-4">Register Luxury</h1>
                                    </div>
                                    <form class="user" action="" method="POST">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user"
                                                id="exampleInputname" name="name"
                                                placeholder="Tên Đăng Nhập" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="email" class="form-control form-control-user"
                                                id="exampleInputEmail" name="email"
                                                placeholder="Email" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user"
                                                id="exampleInputSo_dienthoai" name="So_dienthoai"
                                                placeholder="Số điện thoại" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user"
                                                id="exampleInputPassword" placeholder="Password"
                                                name="password" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user"
                                                id="exampleInputconfirm_password" placeholder="Confirm Password"
                                                name="confirm_password" required>
                                        </div>
                                        <button type="submit" class="btn btn-primary w-100">Register</button>
                                        <hr>
                                        <p style="padding-left: 35px;">Bạn Đã Có Tài Khoản? <a href="/project/views/login/login.php">Đăng Nhập Ngay</a></p>
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
