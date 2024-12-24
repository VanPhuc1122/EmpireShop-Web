<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
  <?php if (isset($_COOKIE['notice'])) { ?>
    <div class="alert alert-warning">
      <strong>Thông báo</strong> <?= $_COOKIE['notice'] ?>
    </div>
  <?php } ?>

  <form action="?url=sanpham&operation=insert" method="POST" role="form" enctype="multipart/form-data">
        <h1 style="padding-left: 300px;">Thêm Sản Phẩm Mới</h1>
    <div class="form-group">
      <label for="cars">Danh Mục: </label>
      <select id="" name="id_dm" class="form-control">
        <?php foreach ($data_dm as $row) { ?>
          <option value="<?= $row['id_dm'] ?>"><?= $row['ten_dm'] ?></option>
        <?php } ?>
      </select>
    </div>

    <div class="form-group">
      <label for="cars">Loại sản phẩm: </label>
      <select id="" name="id_lsp" class="form-control">
        <?php foreach ($data_lsp as $row) { ?>
          <option value="<?= $row['id_lsp'] ?>"><?= $row['Ten_lsp'] ?></option>
        <?php } ?>
      </select>
    </div>

    <div class="form-group">
      <label for="cars">Thương Hiệu: </label>
      <select id="" name="id_thuonghieu" class="form-control">
        <?php foreach ($data_thuonghieu as $row) { ?>
          <option value="<?= $row['id_thuonghieu'] ?>"><?= $row['ten_thuonghieu'] ?></option>
        <?php } ?>
      </select>
    </div>

    <div class="form-group">
      <label for="">Tên sản phẩm</label>
      <input type="text" class="form-control" id="" placeholder="" name="ten_sp">
    </div>
    <div class="form-group">
      <label for="">Đơn Giá</label>
      <input type="text" class="form-control" id="" placeholder="" name="gia_sp">
    </div>

    <div class="form-group">
      <label for="">Hình ảnh 1 </label>
      <input type="file" class="form-control" id="" placeholder="" name="HinhAnh1">
    </div>
    <div class="form-group">
      <label for="">Hình ảnh 2</label>
      <input type="file" class="form-control" id="" placeholder="" name="HinhAnh2">
    </div>
    <div class="form-group">
      <label for="">Hình ảnh 3</label>
      <input type="file" class="form-control" id="" placeholder="" name="HinhAnh3">
    </div>
    <div class="form-group">
      <label for="">Hình ảnh 4</label>
      <input type="file" class="form-control" id="" placeholder="" name="HinhAnh4">
    </div>
    
    <div class="form-group">
      <label for="cars">Mã khuyến mãi </label>
      <select id="" name="ma_khuyenmai" class="form-control">
        <?php foreach ($data_km as $row) { ?>
          <option value="<?= $row['ma_khuyenmai'] ?>"><?= $row['ten_khuyenmai'] ?></option>
        <?php } ?>
      </select>
    </div>

    <div class="form-group">
      <label for="">Số Lượng</label>
      <input type="text" class="form-control" id="" placeholder="" name="soluong">
    </div>

    <div class="form-group">
      <label for="">Bảo Hành</label>
      <input type="text" class="form-control" id="" placeholder="" name="bao_hanh">
    </div>

    <label for="">Mô tả</label>
    <div class="form-group">
      <textarea class="form-control" id="summernote" placeholder="" name="mo_ta"></textarea>
    </div>
    <div class="form-group">
      <label for="">Bộ sưu tập</label>
      <input type="text" class="form-control" id="" placeholder="" name="bosuu_tap">
    </div>
    <div class="form-group">
      <label for="">Mã Sản Phẩm</label>
      <input type="text" class="form-control" id="" placeholder="" name="ma_sp">
    </div>
    <div class="form-group">
      <label for="">Giới Tính</label>
      <input type="text" class="form-control" id="" placeholder="" name="gioi_tinh">
    </div>
    <div class="form-group">
      <label for="">Loại Máy</label>
      <input type="text" class="form-control" id="" placeholder="" name="loai_may">
    </div>
    <div class="form-group">
        <label for="">Đường Kính</label>
        <input type="text" class="form-control" id="" placeholder="" name="duong_kinh">
      </div>
      <div class="form-group">
        <label for="">Màu Sắc</label>
        <input type="text" class="form-control" id="" placeholder="" name="mau_sac">
      </div>
      <div class="form-group">
        <label for="">Phong Cách</label>
        <input type="text" class="form-control" id="" placeholder="" name="phong_cach">
      </div>
      <div class="form-group">
        <label for="">Chất Liệu Dây</label>
        <input type="text" class="form-control" id="" placeholder="" name="chat_lieuday">
      </div>
      <div class="form-group">
        <label for="">Tính Năng</label>
        <input type="text" class="form-control" id="" placeholder="" name="tinh_nang">
      </div>
      <div class="form-group">
        <label for="">Độ Chịu Nước</label>
        <input type="text" class="form-control" id="" placeholder="" name="dochiu_nuoc">
      </div>
      <div class="form-group">
        <label for="">Số Đánh Giá</label>
        <input type="text" class="form-control" id="" placeholder="" name="sodanhgia">
      </div>
    <div class="form-group">
      <label for="">Trạng thái</label>
      <input type="checkbox" id="" placeholder="" value="1" name="trangthai"><em> Hiển Thị Sản Phẩm </em>
      <input type="checkbox" id="" placeholder="" value="0" name="trangthai"><em> Ẩn Sản Phẩm </em>
    </div>
    <button type="submit" class="btn btn-primary">Tạo Mới Sản Phẩm</button>
  </form>
  <script>
    $(document).ready(function() {
      $('#summernote').summernote();
    });
  </script>
</table>