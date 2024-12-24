<?php if (isset($_COOKIE['notice'])) { ?>
    <div class="alert alert-success">
        <strong>Thông báo: </strong> <?= $_COOKIE['notice'] ?>
    </div>
<?php } ?>
<hr>

<div class="container">
    <h2 class="text-center mb-4">Cập Nhật Người Dùng</h2>
    <form action="?url=nguoidung&operation=update" method="POST" role="form" enctype="multipart/form-data">
        <input type="hidden" name="Ma_ND" value="<?= $data['Ma_ND'] ?>">
        <div class="form-group">
            <label for="Tendangnhap">Tên Đăng Nhập</label>
            <input type="text" class="form-control" name="Tendangnhap" value="<?= $data['Tendangnhap'] ?>" placeholder="Nhập tên đăng nhập">
        </div>
        <div class="form-group">
            <label for="Email">Email</label>
            <input type="email" class="form-control" name="Email" value="<?= $data['Email'] ?>" placeholder="Nhập email">
        </div>
        <div class="form-group">
            <label for="So_dienthoai">Số Điện Thoại</label>
            <input type="text" class="form-control" name="So_dienthoai" value="<?= $data['So_dienthoai'] ?>" placeholder="Nhập số điện thoại">
        </div>
        <div class="form-group">
            <label for="Diachi">Địa Chỉ</label>
            <input type="text" class="form-control" name="Diachi" value="<?= $data['Diachi'] ?>" placeholder="Nhập địa chỉ">
        </div>
        <div class="form-group">
            <label for="GioiTinh">Giới Tính</label>
            <select name="GioiTinh" class="form-control">
                <option <?= ($data['GioiTinh'] == 'Nam') ? 'selected' : '' ?> value="Nam">Nam</option>
                <option <?= ($data['GioiTinh'] == 'Nữ') ? 'selected' : '' ?> value="Nữ">Nữ</option>
                <option <?= ($data['GioiTinh'] == 'Khác') ? 'selected' : '' ?> value="Khác">Khác</option>
            </select>
        </div>
        <div class="form-group">
            <label for="Password">Mật Khẩu</label>
            <input type="password" class="form-control" name="Password" value="<?= $data['Password'] ?>" placeholder="Nhập mật khẩu">
        </div>
        <div class="form-group">
            <label for="trangthai">Trạng Thái</label>
            <input type="text" class="form-control" name="trangthai" value="<?= $data['trangthai'] ?>" placeholder="Nhập trạng thái">
        </div>
        <div class="form-group">
            <label for="id_quyen">Id Quyền</label>
            <select name="id_quyen" class="form-control">
                <option <?= ($data['id_quyen'] == '1') ? 'selected' : '' ?> value="1">Khách Hàng</option>
                <option <?= ($data['id_quyen'] == '2') ? 'selected' : '' ?> value="2">Quản Trị Viên</option>
                <option <?= ($data['id_quyen'] == '3') ? 'selected' : '' ?> value="3">Nhân Viên</option>
            </select>
        </div>
        <div class="form-group text-center">
            <button type="submit" class="btn btn-primary btn-lg">Cập Nhật</button>
        </div>
    </form>
</div>
