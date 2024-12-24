<!-- Nhúng header -->
<header>
    <title>Đồng Hồ Nữ Cao Cấp Chính Hiệu</title>
 </header>
<?php
        require_once __DIR__ . "/../footer/header1.php";
?>
        <main>
            <!-- Nội dung chính của trang đồng hồ nữ -->
             <div class="container-donghonam">
             <div class="container-img">
                <div class="img-background">
                    <img src="/project/public/assets/image/DongHoNu/background nu.webp" alt="">
                </div>
                <div class="img-con">
                <img src="/project/public/assets/image/DongHoNu/logo.webp" alt="">
                </div>
            </div>
            <div class="container-fluid bg-gray hidden-tablet hidden-mobile" style="transform: translateY(-20px);">
            <div class="breadcrumb-section container">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="?url=page">Home</a></li>
                        <li class="breadcrumb-item active">Đồng Hồ Nữ</li>
                    </ol>
                </nav>
            </div>
        </div>
              <?php require_once("locsanpham.php")?>
            <br><br><br><br>
            <div class="row" id="filter-sort">
                <div class="col p-0">
                    <form action="index.php" method="GET">
                        <input type="hidden" name="url" value="donghonu">
                        <select name="sort" id="sort" onchange="this.form.submit()">
                            <option value="">---- Sắp Xếp Theo ----</option>
                            <option value="az" <?= (isset($_GET['sort']) && $_GET['sort'] == 'az') ? 'selected' : '' ?>>Kí Tự A - Z</option>
                            <option value="za" <?= (isset($_GET['sort']) && $_GET['sort'] == 'za') ? 'selected' : '' ?>>Kí Tự Z - A</option>
                            <option value="asc" <?= (isset($_GET['sort']) && $_GET['sort'] == 'asc') ? 'selected' : '' ?>>Giá Thấp - Cao</option>
                            <option value="desc" <?= (isset($_GET['sort']) && $_GET['sort'] == 'desc') ? 'selected' : '' ?>>Giá Cao - Thấp</option>
                        </select>
                    </form>
                </div>
            </div>
    <br><br>
    
    <div class="product-container d-flex">
            <?php
            if(isset($data) and $data != NULL){
                foreach($data as $value){
            ?>
            <div class="product-box h-100 bg-gray relative" id="image-first">
                <div class="product-image" >
                <a href="?url=detail&id=<?= $value['id_sanpham'] ?>"><img src="/project/public/assets/image/GioiThieuSanPham/<?= $value['HinhAnh1'] ?>" width="280" height="280" alt="" class="img-fluid" loading="lazy"></div>
                <div class="product-info">
                    <a href="?url=detail&id=<?= $value['id_sanpham'] ?>"><p class="product-sku">MSP: <span><?= $value['ma_sp'] ?></span></p></a>
                    <a href="?url=detail&id=<?= $value['id_sanpham'] ?>"><p class="product-title"><?= $value['ten_sp'] ?></p></a>
                    <a href="?url=detail&id=<?= $value['id_sanpham'] ?>">
                        <p class="product-price">
                            <span class="ori-price"><?= number_format($value['gia_sp']) ?></span>
                        </p>
                    </a>    
                </div>
                <a href="?url=detail&id=<?= $value['id_sanpham'] ?>">
                <button class="product-wishlist" title="Xem Chi Tiết" aria-label="Xem Chi Tiết" >
                    <i class="bi bi-eye"></i>
                </button>
                </a>
                <a href="?url=cart&xuli=add&id=<?= $value['id_sanpham']?>">
                <button class="product-addcart" title="Thêm vào giỏ hàng" aria-label="Thêm Vào Giỏ Hàng" >
                    <span class="icon-cart-new"></span>
                </button>
                </a>
            </div>
       <?php }}else{
            echo '<p>Không Có Dữ Liệu Của Bạn.</p>';
       }?>
    </div>

             </div>
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
                    <form action="index.php" method="GET" class="search-form">
                        <input type="hidden" name="url" value="search">
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
            <form id="cartForm" class="cart-form quickcart" action="">
            </form>
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
