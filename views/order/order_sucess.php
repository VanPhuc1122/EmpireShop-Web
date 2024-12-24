<header>
    <title>Hoàn Thành Thanh Toán</title>
 </header>
<?php
         require_once __DIR__ . "/../footer/header1.php";
?>
        <main>
        <div class="container-fluid bg-gray hidden-tablet hidden-mobile">
        <div class="breadcrumb-section container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="?url=page">Home</a></li>
                    <li class="breadcrumb-item active">Hoàn Thành Thanh Toán</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Section Order_Complete -->
    <section class="pages checkout order-complete section-padding">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 text-center">
				<div class="complete-title">
					<h4>Cảm ơn bạn đã mua sắm tại Shop! Vui lòng chờ phê duyệt đơn hàng.</h4>
					<h4>Kiểm tra email của bạn xem chi tiết đơn hàng!</h4>
				</div>
                <br>
                <img src="/project/public/assets/image/Logo/9343.png_860.png" alt="Xin Cảm Ơn" width="260px" height="240px">
			</div>
            
		</div>
        <?php
            use PHPMailer\PHPMailer\PHPMailer;
            use PHPMailer\PHPMailer\Exception;
            require_once __DIR__ . '/../../vendor/autoload.php';
            require_once __DIR__ . "/../../controllers/checkout_controller.php";
            function sendOrderEmail($toEmail, $orderDetails) {
                $mail = new PHPMailer(true);
                try {
                    $mail->isSMTP();
                    $mail->Host = 'smtp.gmail.com'; 
                    $mail->SMTPAuth = true;
                    $mail->Username = 'Phucv1513@gmail.com'; 
                    $mail->Password = 'sjtb muhw sfke erjt'; 
                    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
                    $mail->Port = 587;

                    $mail->setFrom('Phucv1513@gmail.com', 'Shop Empire Luxury');
                    $mail->addAddress($toEmail); 

                    $mail->isHTML(true);
                    $mail->Subject = 'Hoa Don Dat Hang Cua Ban';

                    // Gửi nội dung hóa đơn
                    $mail->Body = $orderDetails;
                    $mail->send();
                } catch (Exception $e) {
                    error_log("Không thể gửi email. Lỗi: {$mail->ErrorInfo}"); 
                    echo "Không thể gửi email. Lỗi: {$mail->ErrorInfo}";
                }   
            }
             // Xây dựng nội dung email
            if(isset($_SESSION['checkout']['email_khach_hang'])){
                $email_khach_hang = $_SESSION['checkout']['email_khach_hang'];
                $orderDetails = '
             <h3 style="color: #333;">Cảm ơn bạn đã đặt hàng tại Shop Empire Luxury!</h3>
             <p style="font-size: 14px; color: #555;">Dưới đây là chi tiết đơn hàng của bạn:</p>
             <table style="width: 100%; border-collapse: collapse; font-family: Arial, sans-serif;">
                 <thead>
                     <tr style="background-color: #f2f2f2; text-align: left; border-bottom: 2px solid #ddd;">
                         <th style="padding: 8px; border: 1px solid #ddd;">Tên Sản Phẩm</th>
                         <th style="padding: 8px; border: 1px solid #ddd;">Số Lượng</th>
                         <th style="padding: 8px; border: 1px solid #ddd;">Thành Tiền</th>
                     </tr>
                 </thead>
             <tbody>';
         // Duyệt qua sản phẩm trong giỏ hàng
         if (isset($_SESSION['sanpham'])) {
             foreach ($_SESSION['sanpham'] as $value) {
                 $orderDetails .= '
                     <tr style="text-align: left;">
                         <td style="padding: 8px; border: 1px solid #ddd;">' . htmlspecialchars($value['ten_sp']) . '</td>
                         <td style="padding: 8px; border: 1px solid #ddd;">' . htmlspecialchars($value['soluong']) . '</td>
                         <td style="padding: 8px; border: 1px solid #ddd;">' . number_format($value['ThanhTien']) . ' VNĐ</td>
                     </tr>';
             }
         }
         $orderDetails .= '
                 </tbody>
                 <tfoot>
                     <tr style="font-weight: bold;">
                         <td colspan="2" style="padding: 8px; border: 1px solid #ddd; text-align: left;">Phí Vận Chuyển:</td>
                         <td style="padding: 8px; border: 1px solid #ddd;">45,000 VNĐ</td>
                     </tr>
                     <tr style="font-weight: bold;">
                         <td colspan="2" style="padding: 8px; border: 1px solid #ddd; text-align: left;">Phí VAT:</td>
                         <td style="padding: 8px; border: 1px solid #ddd;">0 VNĐ</td>
                     </tr>
                     <tr style="font-weight: bold;">
                         <td colspan="2" style="padding: 8px; border: 1px solid #ddd; text-align: left;">Tổng Cộng:</td>
                         <td style="padding: 8px; border: 1px solid #ddd;">' . number_format($count + 45000) . ' VNĐ</td>
                     </tr>
                 </tfoot>
             </table>
             <p style="font-size: 14px; color: #555;">Nếu bạn có bất kỳ thắc mắc nào, vui lòng liên hệ với chúng tôi qua email hoặc số hotline: 0985034632 hoặc Fb: Văn Phúc</p>
         ';
            sendOrderEmail($email_khach_hang, $orderDetails);
             }else{
                echo 'Không tìm thấy email';
             }

?>
        <br>
</section>
    </main>
    <?php
            require_once __DIR__ . "/../footer/footer1.php";
    ?>
    <link rel="stylesheet" href="/project/public/assets/js/pagejs.js">
    <!-- ---------------------------------------------------------------------------- -->
        <div id="search-top" class="search relative" style="transform: translateY(-150%);">
        <div class="container">
            <button id="search-close" class="search-close-button icon-icon-close2"></button>
            <div class="row relative row-form">
                <form action="" class="search-form">
                    <input type="text" name="key" placeholder="Nhập Sản Phẩm Tìm Kiếm" class="search-input" autocomplete="off">
                    <button class="search-form-button icon-magnifier" type="submit"></button>
                </form>
            </div>
        </div>
    </div>
    <!-- ------------------------------------------------------------------ -->
    <div class="offcanvas offcanvas-end" data-bs-scroll="true" tabindex="-1" id="sidebar-fav" aria-labelledby="Danh sách ưa thích">
        <div class="offcanvas-header">
            <h2 class="offcanvas-title">Ưa thích</h2>
            <button type="button" class="icon-cross" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
    </div>
    <!-- -------------------------------------------------- -->
    <div class="offcanvas offcanvas-end" data-bs-scroll="true" tabindex="-1" id="sidebar-cart" aria-labelledby="Giỏ hàng">
        <div class="offcanvas-header">
            <h2 class="offcanvas-title">Giỏ hàng</h2>
            <button type="button" class="icon-cross" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
    </div>
    <div class="body-overlay"></div>
</div>
<!-- Nút backtop -->
<div id="bttop">
    <div class="btt-icon">
        <span class="icon-return-top"></span>
    </div>
</div>
<!-- Contact
<div class="contact-online">
    <div class="list-contact">
        <div class="list-icon"><a href="tel:0985034632" class="chat-tooltip btt-icon" data-hover="Gọi Hotline" target="_blank" rel="nofollow noopener"><span class="icon-telephone"></span></a></div>
        <div class="list-icon"><a href="https://www.facebook.com/vanphuc233333" class="chat-tooltip btt-icon" data-hover="Messenger" target="_blank" ><span class="icon-mess"></span></a></div>
        <div class="list-icon"><a href="https://chat.zalo.me/index.html" class="chat-tooltip btt-icon" data-hover="Zalo" target="_blank" rel="nofollow noopener"><span class="icon-zalo"></span></a></div>
        <div class="list-icon"><a href="https://www.google.com/maps/place/Vietnam+-+Korea+University+of+Information+and+Communication+Technology/@15.9752654,108.2506521,17z/data=!3m1!4b1!4m6!3m5!1s0x3142108997dc971f:0x1295cb3d313469c9!8m2!3d15.9752603!4d108.253227!16s%2Fg%2F1yjg80dyy?entry=ttu&g_ep=EgoyMDI0MTAyMy4wIKXMDSoASAFQAw%3D%3D" class="chat-tooltip btt-icon" data-hover="Cửa hàng" target="_blank" rel="nofollow noopener"><span class="icon-map"></span></a></div>
    </div>
    <div class="bt-contact">
        <button class="button btt-icon" arial-label="Liên Hệ" title="Liên hệ" id="open-chat"><span class="icon-message"></span></button>
        <div class="bt-dot"></div>
        <div class="pulsation" style="background-color: #B60000"></div>
        <div class="pulsation" style="background-color: #B60000"></div>
    </div>
</div> -->
<div class="modal fade" id="loading" aria-labelledby="Đang tải dữ liệu..." aria-modal="true" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <img width="48" src="https://cdn.luxshopping.vn/images/loading.svg" alt="loading" />
        </div>
    </div>
</div>
</body>
</html>
