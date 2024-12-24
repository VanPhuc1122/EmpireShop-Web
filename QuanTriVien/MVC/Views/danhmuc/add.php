<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <?php if (isset($_COOKIE['notice'])) { ?>
        <div class="alert alert-warning">
            <strong>Thông báo</strong> <?= $_COOKIE['notice'] ?>
        </div>
    <?php } ?>
    <form action="?url=danhmuc&operation=insert" method="POST" role="form" enctype="multipart/form-data">
        <div class="form-group">
            <label for="">Mã Danh Mục</label>
            <input type="text" class="form-control" id="" placeholder="" name="id_dm">
        </div>
        <div class="form-group">
            <label for="">Tên Danh Mục</label>
            <input type="text" class="form-control" id="" placeholder="" name="ten_dm">
        </div>
        <button type="submit" class="btn btn-primary">Tạo Mới Danh Mục</button>
    </form>
</table>