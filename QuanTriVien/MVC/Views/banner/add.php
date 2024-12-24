<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <?php if (isset($_COOKIE['notice'])) { ?>
        <div class="alert alert-warning">
            <strong>Thông báo</strong> <?= $_COOKIE['notice'] ?>
        </div>
    <?php } ?>
    <form action="?url=banner&operation=insert" method="POST" role="form" enctype="multipart/form-data">
        <div class="form-group">
            <label for="">Hình ảnh</label>
            <input type="file" class="form-control" id="" placeholder="" name="HinhAnh">
        </div>
        <button type="submit" class="btn btn-primary">Tạo Mới</button>
    </form>
</table>