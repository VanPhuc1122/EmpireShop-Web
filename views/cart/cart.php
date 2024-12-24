    <header>
        <title>Giỏ Hàng</title>
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
                        <li class="breadcrumb-item active">Cart</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!-- Section -->
<section class="pages cart-page section-padding">
    <div class="container">
        <div class="row">
            <div class="col-12">
            <h2 style="padding-left: 370px;">Giỏ Hàng Của Bạn</h2>
                <div class="table-responsive padding60">
                    <table class="wishlist-table text-center" id="dathang">
                        <thead>
                            <tr>
                                <th>Sản phẩm</th>
                                <th>Giá</th>
                                <th>Số lượng</th>
                                <th>Thành tiền</th>
                                <th>Xóa</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if(isset($_SESSION['sanpham'])){
                                    foreach($_SESSION['sanpham'] as $value) {
                                ?>
                                    <tr>
                                        <td class="td-img text-left">
                                            <a href="?url=detail&id=<?= $value['id_sanpham'] ?>"><img src="/project/public/assets/image/GioiThieuSanPham/<?= $value['HinhAnh1'] ?>" alt="Ảnh Sản Phẩm"/></a>
                                            <div class="items-dsc">
                                                <h5><a href="?url=detail&id=<?= $value['id_sanpham']?>"><?= $value['ten_sp'] ?></a></h5>
                                            </div>
                                        </td>
                                        <td><?= number_format($value['gia_sp']) ?>VNĐ</td>
                                        <td>
                                            <form action="" method="POST">
                                                <div class="plus-minus">
                                                    <a href="?url=cart&xuli=delete&id=<?= $value['id_sanpham'] ?>" class="dec qtybutton">-</a>
                                                    <b class="plus-minus-box"><?= $value['soluong'] ?></b>
                                                    <a href="?url=cart&xuli=update&id=<?= $value['id_sanpham'] ?>" class="inc qtybutton"
                                                    onclick="return checkQuantity(<?= $value['id_sanpham'] ?>, <?= $value['soluong'] ?>)">
                                                    +</a>
                                                </div>
                                            </form>
                                        </td>
                                        <td>
                                            <strong><?= number_format($value['ThanhTien']) ?>VNĐ</strong>
                                        </td>
                                        <td>
                                            <a href="?url=cart&xuli=deleteall&id=<?= $value['id_sanpham'] ?>"><i class="bi bi-trash3"></i></a>
                                        </td>
                                    </tr>
                                    <?php }
							    } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <div class="single-cart-form padding60">
                    <h3><strong>Chi Tiết Thanh Toán</strong></h3>
                    <div class="cart-form-text pay-details">
                        <form action="?url=checkout" method="post">
                            <table>
                                <tbody>
                                    <tr>
                                        <th>Tổng Giỏ Hàng</th>
                                        <td><?= number_format($count)?>VNĐ</td>
                                    </tr>
                                    <tr>
                                        <th>Giảm giá</th>
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
                                        <th>Tổng tiền</th>
                                        <td><?= number_format($count+45000) ?> VNĐ</td>
                                    </tr>
                                </tfoot>
                            </table>
                            <br>
                            <div class="submit-text"><button type="submit">Đặt hàng</button></div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-12">
                <div class="single-cart-form padding60">
                    <h3><strong >Mã Khuyến Mãi</strong></h3>
                    <div class="cart-form-text">
                        <p>Nhập Mã Khuyến Mãi</p>
                        <form action="" method="post">
                            <input type="text" class="form-control" name="subject" placeholder="Nhập Mã Khuyến Mãi Tại Đây" />
                            <br>
                            <div class="submit-text"><button type="submit">Áp Dụng Ngay</button></div>
                        </form>
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
            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
            <script>
                function checkQuantity(productId, currentQuantity) {
                    if (currentQuantity >= 5) {
                        alert("Bạn chỉ có thể mua tối đa 5 sản phẩm!");
                        return false;
                    }
                    return true;
                }
            </script>
            <!-- ---------------------------------------------------------------------------- -->
                <div id="search-top" class="search relative" style="transform: translateY(-150%);">
                <div class="container">
                    <button id="search-close" class="search-close-button icon-icon-close2"></button>
                    <div class="row relative row-form">
                        <form  action="index.php" method="GET" class="search-form">
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
