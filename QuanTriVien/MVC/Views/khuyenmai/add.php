<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <?php if (isset($_COOKIE['notice'])) { ?>
        <div class="alert alert-warning">
            <strong>Thông báo</strong> <?= $_COOKIE['notice'] ?>
        </div>
    <?php } ?>
    <form action="?url=khuyenmai&operation=insert" method="POST" role="form" enctype="multipart/form-data">
        <div class="form-group">
            <label for="">Tên Khuyến Mãi</label>
            <input type="text" class="form-control" id="" placeholder="" name="TenKM">
        </div>
        <div class="form-group">
            <label for="">Loại Khuyến Mãi</label>
            <input type="text" class="form-control" id="" placeholder="" name="LoaiKM">
        </div>
        <div class="form-group">
            <label for="">Giá Trị Khuyến Mãi</label>
            <input type="text" class="form-control" id="" placeholder="" name="GiaTriKM">
        </div>
        <button type="submit" class="btn btn-primary">Tạo Mới</button>
    </form>
</table>