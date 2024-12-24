<?php if (isset($_COOKIE['notice'])) { ?>
    <div class="alert alert-success">
        <strong>Thông báo</strong> <?= $_COOKIE['notice'] ?>
    </div>
<?php } ?>
<hr>
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <form action="?url=banner&operation=update" method="POST" role="form" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $data['id'] ?>">
        <div class="form-group">
            <label for="">Hình ảnh</label>
            <img src="/project/public/assets/<?=$data['hinhanh']?>" height="200px" width="400px">
            <input type="file" class="form-control" id="" placeholder="" name="HinhAnh" value="<?=$data['hinhanh']?>">
        </div>
        <button type="submit" class="btn btn-primary">Cập nhật</button>
    </form>
</table>