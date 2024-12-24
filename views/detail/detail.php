<!-- Nhúng header -->
<header>
    <title>Chi Tiết Sản Phẩm Đồng Hô Nam</title>
 </header>
<?php
        require_once __DIR__ . "/../footer/header1.php";
?>
 <main>
    <?php if($data != null){?>
    <!-- Nội dung chính của trang giới thiệu chi tiết sản phẩm -->
    <div class="container-fluid bg-gray hidden-tablet hidden-mobile">
        <div class="breadcrumb-section container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="?operation=page">Home</a></li>
                    <li class="breadcrumb-item"><a href="">Thương hiệu</a></li>
                    <li class="breadcrumb-item active"><span><?= $data['ten_sp'] ?></span></li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="container-fluid category-brand">
        <div class="container">
            <div class="brand-logo">
                <img src="/project/public/assets/" loading="lazy" alt="Đồng hồ Monthblaic" height="100" width="150" class="img-fluid" >
            </div>
            <div class="brand-mobile-menu hidden-tablet hidden-desktop">
                Menu <span class="icon-chevron-down"></span>
            </div>
            <div class="brand-menu">
                <ul id="brand-menu">
                    <li><a href="index.php?url=donghonam">Đồng hồ Nam</a></li>
                    <li><a href="index.php?url=donghonu">Đồng hồ Nữ</a></li>
                    <li><a href="#">Sản phẩm bán chạy</a></li>
                    <li><a href="#">Sản phẩm mới</a></li>
                    <li><a href="index.php?url=8thuonghieunoitieng">Bài viết</a></li>
                </ul>
            </div>
        </div>
    </div>
    <hr>
    <div class="container_infor--wrapper">
     <div class="container_info">
            <div class="product_content-left">
                <div class="product_content-left-small">
                    <?php if($data['HinhAnh1'] != null){?>
                    <img src="/project/public/assets/image/GioiThieuSanPham/<?= $data['HinhAnh1'] ?>" alt="">
                    <?php } ?>
                    <?php if($data['HinhAnh2'] != null){?>
                    <img src="/project/public/assets/image/GioiThieuSanPham/<?= $data['HinhAnh2'] ?>" alt="">
                    <?php } ?>
                    <?php if($data['HinhAnh3'] != null){?>
                    <img src="/project/public/assets/image/GioiThieuSanPham/<?= $data['HinhAnh3'] ?>" alt="">
                    <?php } ?>
                    <?php if($data['HinhAnh4'] != null){?>
                    <img src="/project/public/assets/image/GioiThieuSanPham/<?= $data['HinhAnh4'] ?>" alt="">
                    <?php } ?>
                   
                </div>
                <div class="product_content-right-big">
                    <?php if($data['HinhAnh1'] != null){?>
                    <img src="/project/public/assets/image/GioiThieuSanPham/<?= $data['HinhAnh1'] ?>" alt="">
                    <?php } ?>
                </div>
            </div>
            
            <div class="product_content-right">
                <div class="product_content-right-product-name">
                    <h3><span><?= $data['ten_sp'] ?></span></h3>
                </div>
                <div class="product_content-right-product-name--thanhphan">
                    <p>MSP: <span><?= $data['ma_sp'] ?></span> </p>
                    <p>|</p>
                    <p><i class="bi bi-star-fill"></i></p>
                    <p><i class="bi bi-star-fill"></i></p>
                    <p><i class="bi bi-star-fill"></i></p>
                    <p><i class="bi bi-star-fill"></i></p>
                    <p><i class="bi bi-star-fill"></i></p>
                    <p>Đánh Giá</p>
                </div>
                <div class="product_content-right-product-price">
                    <p><span id="product-rice"><?= number_format($data['gia_sp'])?> VNĐ</span></p>
                </div>
                <div class="product_content-right-product-thanhtoantragop">
                    <div class="thanhtoan">
                        <a href="?url=cart&xuli=add&id=<?= $data['id_sanpham']?>"><button>THANH TOÁN ONLINE</button></a>
                    </div>
                    <div class="tragop">
                        <a href="?url=cart&xuli=add&id=<?= $data['id_sanpham']?>"><button>THÊM VÀO GIỎ HÀNG</button></a>
                    </div>
                </div>
                <div class="product_content-right-product-title">
                    <h4>Tại Sao Nên Chọn Shop Luxury Chúng Tôi?</h4>
                    <p><i class="bi bi-arrow-right-short"></i>Sản phẩm nhập khẩu chính hãng</p>
                    <p><i class="bi bi-arrow-right-short"></i>Giao hàng trong ngày</p>
                    <p><i class="bi bi-arrow-right-short"></i>Thanh toán sau khi nhận hàng</p>
                    <p><i class="bi bi-arrow-right-short"></i>Bảo hành 6 năm tại công ty</p>
                    <p><i class="bi bi-arrow-right-short"></i>Miễn phí thay pin trọn đời</p>
                    <p><i class="bi bi-arrow-right-short"></i>Gọi <b>8888 6868</b> hoặc <b>0985034632</b> để đặt hàng</p>
                </div>
                <div class="product_content-right-product-lienhe">
                    <p>Liên Hệ Ngay:</p>
                    <a href="" title="Facebook"><i class="bi bi-facebook"></i></a>
                    <a href="" title="Instargam"><i class="bi bi-instagram"></i></a>
                    <a href="" title="Email"><i class="bi bi-envelope"></i></a>
                    <a href="" title="Location"><i class="bi bi-geo-alt"></i></a>
                </div>
            </div>
        </div>
        <br><br><br>
        <div class="container_menubar">
            <ul class="container_menubar--list">
                <a href="">GIỚI THIỆU</a>
                <a href="">THÔNG SỐ</a>
                <a href="">ĐÁNH GIÁ</a>
                <a href="">SẢN PHẨM TƯƠNG TỰ</a>
                <a href="">ĐÃ XEM</a>
            </ul>
            <div class="container_product--gioithieu bg-gray">
                    <h3>GIỚI THIỆU CHI TIẾT</h3>
                    <p><?= $data['mo_ta'] ?></p>
            </div>
            <div class="container_product--thongso bg-gray">
            <h3>THÔNG SỐ KỸ THUẬT</h3>
                <table>
                    <tr>
                        <th><b>Bộ sưu tập</b>: <?= $data['bosuu_tap'] ?></th>
                        <th><b>Mã sản phẩm</b>: <?= $data['ma_sp'] ?></th>
                    </tr>
                    <tr>
                        <th><hr></th>
                        <th><hr></th>
                    </tr>
                    <tr>
                        <th><b>Giới tính</b>: <?= $data['gioi_tinh'] ?></th>
                        <th><b>Loại máy</b>: <?= $data['loai_may'] ?></th>
                    </tr>
                    <tr>
                        <th><hr></th>
                        <th><hr></th>
                    </tr>
                    <tr>
                        <th><b>Đường kính</b>:  <?= $data['duong_kinh'] ?></th>
                        <th><b>Màu sắc</b>:  <?= $data['mau_sac'] ?></th>
                    </tr>
                    <tr>
                        <th><hr></th>
                        <th><hr></th>
                    </tr>
                    <tr>
                        <th><b>Phong cách</b>:  <?= $data['phong_cach'] ?></th>
                        <th><b>Chất liệu dây</b>:  <?= $data['chat_lieuday'] ?></th>
                    </tr>
                    <tr>
                        <th><hr></th>
                        <th><hr></th>
                    </tr>
                    <tr>
                        <th><b>Tính năng</b>:  <?= $data['tinh_nang'] ?></th>
                        <th><b>Độ chịu nước</b>:  <?= $data['dochiu_nuoc'] ?></th>
                    </tr>
                    <tr>
                        <th><hr></th>
                        <th><hr></th>
                    </tr>
                </table>
            </div>
            <?php } ?>
            <div class="container_product--danhgia bg-gray">
                    <h3>ĐÁNH GIÁ</h3>
                    <h1>5 / 5</h1>
                    <div class="star">
                    <p><i class="bi bi-star"></i></p>
                    <p><i class="bi bi-star"></i></p>
                    <p><i class="bi bi-star"></i></p>
                    <p><i class="bi bi-star"></i></p>
                    <p><i class="bi bi-star"></i></p>
                    </div>
                    <!-- Mục Đánh Giá -->
                    <?php if (isset($_SESSION['username']['Tendangnhap'])): ?>
            <?php if ($data): ?>
            <p>Chào, <?php echo htmlspecialchars($_SESSION['username']['Tendangnhap']); ?>. Bạn có thể để lại đánh giá của mình dưới đây.</p>
            <form action="index.php?url=binhluan" name="danhgia" id="danhgia" method="post">
                <input type="hidden" name="id_sanpham" value="<?php echo isset($_GET['id']) ? $_GET['id'] : ''; ?>">
                <textarea name="binhluan" id="binhluan" placeholder="Nội dung bình luận" required></textarea><br><br>
                <button type="submit" name="guibinhluan">Thêm Bình Luận</button>
            </form>
            <?php else: ?>
                    <p>Bạn cần mua sản phẩm trước khi đánh giá. <a href="?url=cart">Mua ngay</a>.</p>
            <?php endif; ?>
            <?php else: ?>
                <p>Vui lòng <a href="/project/views/login/login.php">đăng nhập và mua hàng</a> để đánh giá sản phẩm.</p>
            <?php endif; ?>
                    <hr>
                <?php
                    require_once __DIR__ . '/../../controllers/binhluan_controller.php';
                    $id_sanpham = isset($_GET['id']) ? $_GET['id'] : null;
                    if ($id_sanpham) {
                        $controller = new binhluan_controller();
                        $data_binhluan = $controller->binhluan_model->GetBinhLuan($id_sanpham);
                    }
                    ?>
                <div id="binhluan_list">
                    <?php if (!empty($data_binhluan)): ?>
                        <?php foreach ($data_binhluan as $binhluan): ?>
                            <div class="binhluan_item">
                                <div class="binhluan_header">
                                    <strong class="binhluan_name"><?= htmlspecialchars($binhluan['ten_nguoibinhluan']) ?>:</strong>
                                    <span class="binhluan_date"><?= date("d/m/Y H:i:s", strtotime($binhluan['ngay_tao'])) ?></span>
                                </div>
                                <p class="binhluan_content"><?= $binhluan['noi_dung'] ?></p>
                                <hr>
                            </div>
                        <?php endforeach; ?>
                    <?php else: ?>
                    <?php endif; ?>
                </div>
            </div>
                     <!-- Sản PHẩm Tương Tự -->
             <h1 style="padding-left: 550px;">Sản Phẩm Tương Tự</h1>
                <div class="product-container d-flex">`
            <?php
            if(isset($data_lq) and $data_lq != NULL){
                foreach($data_lq as $value){
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
            echo '<p>Không Có Sản Phẩm.</p>';
       }?>
    </div>
    </div>
<br><br>
</main> 
        <!-- Nhúng footer -->
        <?php
             require_once __DIR__ . "/../footer/footer1.php";
        ?>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script>
            $(document).ready(function(){
                $('#danhgia').submit(function(e){
                    e.preventDefault();
                    const formData = $(this).serialize(); // lấy dữ liệu từ form

                    $.ajax({
                        url : 'index.php?url=binhluan',
                        type: 'POST',
                        data: formData,
                        success:function(response){
                            const data = JSON.parse(response); 
                            if(data.success){
                                // thêm bình luận vào danh sách
                                const newComment = `
                                <div class="binhluan_item">
                                    <div class="binhluan_header">
                                        <strong class="binhluan_name">${data.comment.ten_nguoibinhluan}:</strong>
                                        <span class="binhluan_date">${data.comment.ngay_tao}</span>
                                    </div>
                                    <p class="binhluan_content">${data.comment.noi_dung}</p>
                                    <hr>
                                </div>
                                `;
                                $('#binhluan_list').prepend(newComment);
                                $('#binhluan').val(''); // xoá nội dung bình luận ở textarea
                            }else{
                                alert('Gửi Bình Luận Thất Bại!');
                            }
                        },
                        error:function(){
                            alert('Có Lỗi Xảy Ra. Vui Lòng THử Lại');
                        }
                    })
                })
            })
        </script>

        <script>
            const bigimg = document.querySelector(".product_content-right-big img");
            const smallimg = document.querySelectorAll(".product_content-left-small img");

            let currentIndex = 0;
            let isScoll = false;
            function updatebigImg(index){
                bigimg.src = smallimg[index].src;
            }
            document.querySelector(".product_content-right-big").addEventListener("click", function(event){
                if(isScoll) return;
                isScoll = true;
                if(event.deltaY > 0){
                    currentIndex = (currentIndex + 1) % smallimg.length;
                }else{

                    currentIndex = (currentIndex - 1 + smallimg.length) % smallimg.length;
                }
                updatebigImg(currentIndex);
                event.preventDefault();
                setTimeout(function(){
                    isScoll = false;
                }, 300);
            })
                            
                // làm nhấn nút button viết đánh giá hiển thị form
                const toggleButton = document.getElementById('button_danhgia');
                const form = document.getElementById('danhgia');
                toggleButton.addEventListener('click', function(){
                    if(form.style.display === 'none' || form.style.display === ''){
                        form.style.display = 'block';
                    }else{
                        form.style.display = 'none';
                    }
                });
                // xét trạng thái ban đầu là ẩn
                form.style.display = 'none';
        </script>
        <!-- Link trang js -->
        <link rel="stylesheet" href="/project/public/assets/js/pagejs.js">
        <!-- ---------------------------------------------------------------------------- -->
            <div id="search-top" class="search relative" style="transform: translateY(-150%);">
            <div class="container">
                <button id="search-close" class="search-close-button icon-icon-close2"></button>
                <div class="row relative row-form">
                    <form action="" class="search-form" method="GET">
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
