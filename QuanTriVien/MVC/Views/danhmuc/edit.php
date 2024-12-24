<?php if (isset($_COOKIE['notice'])) { ?>
    <div class="alert alert-success">
        <strong>Thông báo</strong> <?= $_COOKIE['notice'] ?>
    </div>
<?php } ?>
<hr>
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <form action="?url=danhmuc&operation=update" method="POST" role="form" enctype="multipart/form-data">
        <div class="form-group">
            <label for="">Mã Danh Mục</label>
            <input type="text" class="form-control" id="" placeholder="" name="id_dm" value="<?= $data['id_dm'] ?>">
        </div>
        <div class="form-group">
            <label for="">Tên Danh Mục</label>
            <input type="text" class="form-control" id="" placeholder="" name="ten_dm" value="<?= $data['ten_dm'] ?>">
        </div>
        <button type="submit" class="btn btn-primary">Cập nhật</button>
    </form>
</table>