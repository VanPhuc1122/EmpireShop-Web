<?php if (isset($_COOKIE['notice'])): ?>
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Thông báo:</strong> <?= htmlspecialchars($_COOKIE['notice']) ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
<?php endif; ?>
<hr>
<form action="?url=nguoidung&operation=insert" method="POST" role="form" enctype="multipart/form-data">
    <div class="container-fluid mt-4">
        <div class="row justify-content-center">
            <div class="col-12 col-md-10 col-lg-8">
                <div class="card shadow-sm">
                    <div class="card-header text-center">
                        <h3 class="mb-0">Thêm Người Dùng Mới</h3>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="Tendangnhap">Tên Đăng Nhập</label>
                            <input type="text" class="form-control" name="Tendangnhap" placeholder="Nhập tên đăng nhập" required>
                        </div>
                        <div class="form-group">
                            <label for="Email">Email</label>
                            <input type="email" class="form-control" name="Email" placeholder="Nhập email" required>
                        </div>
                        <div class="form-group">
                            <label for="So_dienthoai">Số Điện Thoại</label>
                            <input type="text" class="form-control" name="So_dienthoai" placeholder="Nhập số điện thoại" required>
                        </div>
                        <div class="form-group">
                            <label for="GioiTinh">Giới Tính</label>
                            <select name="GioiTinh" class="form-control" required>
                                <option value="Nam">Nam</option>
                                <option value="Nữ">Nữ</option>
                                <option value="Khác">Khác</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="Diachi">Địa Chỉ</label>
                            <input type="text" class="form-control" name="Diachi" placeholder="Nhập địa chỉ" required>
                        </div>
                        <div class="form-group">
                            <label for="Password">Mật Khẩu</label>
                            <input type="password" class="form-control" name="Password" placeholder="Nhập mật khẩu" required>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary btn-lg">Tạo Người Dùng</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
