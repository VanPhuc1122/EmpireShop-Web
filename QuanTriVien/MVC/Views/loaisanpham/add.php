<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <?php if (isset($_COOKIE['notice'])) { ?>
        <div class="alert alert-warning">
            <strong>Thông báo</strong> <?= $_COOKIE['notice'] ?>
        </div>
    <?php } ?>
    <form action="?url=loaisanpham&operation=insert" method="POST" role="form" enctype="multipart/form-data">
    <h1 style="padding-left: 300px;">Thêm Mới Loại Sản Phẩm</h1>
        <div class="form-group">
            <label for="">Tên loại sản phẩm</label>
            <input type="text" class="form-control" id="" placeholder="" name="Ten_lsp">
        </div>
        <div class="form-group">
            <label for="">Hình ảnh</label>
            <input type="file" class="form-control" id="" placeholder="" name="HinhAnh">
        </div>
        <div class="form-group">
            <label for="">Mô tả</label>
            <input type="text" class="form-control" id="" placeholder="" name="MoTa">
        </div>
        <div class="form-group">
            <label for="cars">Danh Mục: </label>
            <select id="" name="id_dm" class="form-control">
                <?php foreach ($data as $row) { ?>
                    <option value="<?= $row['id_dm'] ?>"><?= $row['ten_dm'] ?></option>
                <?php } ?>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Tạo Mới</button>
    </form>
</table>