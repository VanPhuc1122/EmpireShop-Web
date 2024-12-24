<?php if (isset($_COOKIE['notice'])) { ?>
    <div class="alert alert-success">
        <strong>Thông báo</strong> <?= $_COOKIE['notice'] ?>
    </div>
<?php } ?>
<hr>
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <form action="?url=loaisanpham&operation=update" method="POST" role="form" enctype="multipart/form-data">
        <input type="hidden" name="id_lsp" value="<?= $data_detail['id_lsp'] ?>">
        <h1 style="padding-left: 300px;">Cập Nhật Loại Sản Phẩm</h1>
        <div class="form-group">
            <label for="">Tên loại sản phẩm</label>
            <input type="text" class="form-control" id="" placeholder="" name="Ten_lsp" value="<?=$data_detail['Ten_lsp'] ?>">
        </div>
        <div class="form-group">
            <label for="">Hình ảnh</label>
            <img src="/project/public/assets/image/DongHoNam/<?=$data_detail['HinhAnh']?>" height="200px" width="200px">
            <input type="file" class="form-control" id="" placeholder="" name="HinhAnh" >
        </div>
        <div class="form-group">
            <label for="">Mô tả</label>
            <input type="text" class="form-control" id="" placeholder="" name="MoTa"  value="<?=$data_detail['MoTa'] ?>">
        </div>
        <div class="form-group">
            <label for="cars">Danh mục: </label>
            <select id="" name="id_dm" class="form-control">
                <?php foreach ($data as $row) { ?>
                    <option <?= ($data_detail['id_dm'] == $row['id_dm'] ) ? 'selected' : '' ?> value="<?= $row['id_dm'] ?>"> <?=$row['ten_dm']?></option>
                <?php } ?>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Cập nhật</button>
    </form>
</table>