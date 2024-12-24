<header>
    <title>Thông Tin Đặt Hàng</title>
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
                    <li class="breadcrumb-item active">Thanh Toán</li>
                </ol>
            </nav>
        </div>
    </div>
   <!-- Section -->
   <section class="pages checkout section-padding">
	<div class="container">
		<div class="row">
        <h2 style="padding-left: 370px;">Thanh Toán Hoá Đơn Của Bạn</h2>
        <br><br>
			<div class="col-sm-6">
				<div class="main-input single-cart-form padding60">
					<div class="log-title">
						<h3><strong>Thông Tin Giao Hàng</strong></h3>
					</div>
					<div class="custom-input">
					<form action="?url=checkout&xuli=save" method="post">
                        <input type="text" name="ten_khach_hang" placeholder="Tên Khách Hàng" required value="<?php echo isset($_SESSION['username']['ten_khach_hang']) ? htmlspecialchars($_SESSION['username']['ten_khach_hang']) : ''; ?>">
                        <br><br>

                        <input type="text" name="email_khach_hang" placeholder="Email Khách Hàng" required>
                        <br><br>

                        <input type="text" name="so_dien_thoai" placeholder="Số Điện Thoại" required pattern="[0-9]+" minlength="10" value="<?php echo isset($_SESSION['username']['so_dien_thoai']) ? htmlspecialchars($_SESSION['username']['so_dien_thoai']) : ''; ?>">
                        <br><br>

                        <input type="text" name="dia_chi_nhan" placeholder="Địa Chỉ Nhận" required value="">
                        <br><br>
                            <select class="form-select city" name="tinh_thanh_pho" id="city" aria-label="" >
                            <option selected value="">Tỉnh/Thành phố</option>
                            <option value="Thành phố Hồ Chí Minh">TP.HCM</option>
                            <option value="Hà Nội">Hà Nội</option>
                            <option value="Đà Nẵng">Đà Nẵng</option>
                            <option value="An Giang">An Giang</option>
                            <option value="Bà Rịa - Vũng Tàu">Bà Rịa - Vũng Tàu</option>
                            <option value="Bắc Giang">Bắc Giang</option>
                            <option value="Bắc Kạn">Bắc Kạn</option>
                            <option value="Bạc Liêu">Bạc Liêu</option>
                            <option value="Bắc Ninh">Bắc Ninh</option>
                            <option value="Bến Tre">Bến Tre</option>
                            <option value="Bình Dương">Bình Dương</option>
                            <option value="Bình Phước">Bình Phước</option>
                            <option value="Bình Thuận">Bình Thuận</option>
                            <option value="Bình Định">Bình Định</option>
                            <option value="Cà Mau">Cà Mau</option>
                            <option value="Cần Thơ">Cần Thơ</option>
                            <option value="Cao Bằng">Cao Bằng</option>
                            <option value="Đăk Lăk">Đắk Lắk</option>
                            <option value="Đắk Nông">Đắk Nông</option>
                            <option value="Điện Biên">Điện Biên</option>
                            <option value="Đồng Nai">Đồng Nai</option>
                            <option value="Đồng Tháp">Đồng Tháp</option>
                            <option value="Gia Lai">Gia Lai</option>
                            <option value="Hà Giang">Hà Giang</option>
                            <option value="Hà Nam">Hà Nam</option>
                            <option value="Hà Tĩnh">Hà Tĩnh</option>
                            <option value="Hải Dương">Hải Dương</option>
                            <option value="Hải Phòng">Hải Phòng</option>
                            <option value="Hậu Giang">Hậu Giang</option>
                            <option value="Hoà Bình">Hoà Bình</option>
                            <option value="Hưng Yên">Hưng Yên</option>
                            <option value="Khánh Hoà">Khánh Hoà</option>
                            <option value="Kiên Giang">Kiên Giang</option>
                            <option value="Kon Tum">Kon Tum</option>
                            <option value="Lai Châu">Long Châu</option>
                            <option value="Lâm Đồng">Lâm Đồng</option>
                            <option value="Lạng Sơn">Lạng Sơn</option>
                            <option value="Lào Cai">Lào Cai</option>
                            <option value="Long An">Long An</option>
                            <option value="Nam Định">Nam Định</option>
                            <option value="Nghệ An">Nghệ An</option>
                            <option value="Ninh Bình">Ninh Bình</option>
                            <option value="Ninh Thuận">Ninh Thuận</option>
                            <option value="Phú Thọ">Phú Thọ</option>
                            <option value="Phú Yên">Phú Yên</option>
                            <option value="Quảng Bình">Quảng Bình</option>
                            <option value="Quảng Nam">Quảng Nam</option>
                            <option value="Quảng Ngãi">Quảng Ngãi</option>
                            <option value="Quảng Ninh">Quảng Ninh</option>
                            <option value="Quảng Trị">Quảng Trị</option>
                            <option value="Sóc Trăng">Sóc Trăng</option>
                            <option value="Sơn La">Sơn La</option>
                            <option value="Tây Ninh">Tây Ninh</option>
                            <option value="Thái Bình">Thái Bình</option>
                            <option value="Thái Nguyên">Thái Nguyên</option>
                            <option value="Thanh Hoá">Thanh Hoá</option>
                            <option value="Thừa Thiên Huế">Thừa Thiên Huế</option>
                            <option value="Tiền Giang">Tiền Giang</option>
                            <option value="Trà Vinh">Trà Vinh</option>
                            <option value="Tuyên Quang">Tuyên Quang</option>
                            <option value="Vĩnh Long">Vĩnh Long</option>
                            <option value="Vĩnh Phúc">Vĩnh Phúc</option>
                            <option value="Yên Bái">Yên Bái</option>
                           </select>
                           <br>
                            <textarea name="ghi_chu" placeholder="Ghi Chú"></textarea>
                            <br>
                            <input type="checkbox" name="PhuongThucTT" value="Thanh Toán Khi Nhận Hàng"> Thanh Toán Khi Nhận Hàng
							</br><br>
							<div class="submit-text">
								<button type="submit">Thanh toán</button>
							</div>
						</form>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-6">
				<div class="padding60">
					<div class="log-title">
						<h3><strong>Hóa Đơn Của Bạn</strong></h3>
					</div>
					<div class="cart-form-text pay-details table-responsive">
						<table>
							<thead>
								<tr>
									<th>Sản phẩm</th>
									<td>Thành Tiền</td>
								</tr>
							</thead>
							<tbody>
								<?php if(isset($_SESSION['sanpham'])){
                                    foreach($_SESSION['sanpham'] as $value){
                                 ?>
								<tr>
									<th><?= $value['ten_sp'] ?></th>
									<td><?= number_format($value['ThanhTien']) ?> VNĐ</td>
								</tr>
                                <?php }
								} ?>
						        <tr>
							<th>Giảm Giá</th>
							<td>0%</td>
						</tr>
						<tr>
							<th>Vận Chuyển</th>
							<td>45,000 VNĐ</td>
						</tr>
						<tr>
							<th>Phí Vat</th>
							<td>0 VNĐ</td>
						</tr>
							</tbody>
							<tfoot>
								<tr>
									<th>Tổng Tiền</th>
									<td><?= number_format($count+45000) ?> VNĐ</td>
								</tr>
							</tfoot>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
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
<!-- Contact -->
<!-- <div class="contact-online">
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
