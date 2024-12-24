<title>Hiển Thị Tìm Kiếm Sản Phẩm</title>
<?php
        require_once __DIR__ . "/../footer/header1.php";
?>
<main>
    <div class="container-fluid bg-gray hidden-tablet hidden-mobile">
            <div class="breadcrumb-section container">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="?url=page">Home</a></li>
                        <li class="breadcrumb-item active">Kết Quả Tìm Kiếm Của Bạn</li>
                    </ol>
                </nav>
            </div>
        </div>
    <section>
            <div class="container d-flex justify-content-center align-items-center">
                <h1>Kết Quả Tìm Kiếm Sản Phẩm </h1>
            </div>
            
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
                <button class="product-wishlist" title="Xem Chi Tiết">
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
            echo '<p>Không Có Sản Phẩm Với Từ Khoá Bạn Tìm Kiếm ! Vui Lòng Tìm Kiếm Lại.</p>';
       }?>
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
                    <form action="index.php" method="GET" class="search-form">
                        <input type="hidden" name="url" value="search">
                        <input type="text" name="key" placeholder="Nhập Sản Phẩm Tìm Kiếm" class="search-input" autocomplete="off">
                        <button class="search-form-button icon-magnifier" type="submit"></button>
                    </form>
                </div>
            </div>
        </div>
        <!-- ------------------------------------------------------------------ -->
        <!-- -------------------------------------------------- -->
        <div class="body-overlay"></div>
    </div>
    <!-- Nút backtop -->
    <div id="bttop">
        <div class="btt-icon">
            <span class="icon-return-top"></span>
        </div>
    </div>
    <div class="modal fade" id="loading" aria-labelledby="Đang tải dữ liệu..." aria-modal="true" role="dialog">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <img width="48" src="" alt="loading" />
            </div>
        </div>
    </div>
</body>
</html>
