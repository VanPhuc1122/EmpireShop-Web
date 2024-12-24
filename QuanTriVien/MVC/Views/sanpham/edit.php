<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
  <?php if(isset($_COOKIE['notice'])){ ?>
    <div class="alert alert-warning">
      <strong>Thông báo</strong> <?= $_COOKIE['notice'] ?>
    </div>
  <?php } ?>

  <form action="?url=sanpham&operation=update" method="POST" role="form" enctype="multipart/form-data">
  <?php if (isset($data['id_sanpham'])): ?>
    <input type="hidden" name="id_sanpham" value="<?= $data['id_sanpham'] ?>">
    <?php endif; ?>
    <div class="form-group">
        <label for="id_dm">Thương Hiệu:</label>
        <select id="id_dm" name="id_dm" class="form-control">
            <?php foreach ($data_dm as $row) { ?>
            <option <?= isset($data['id_dm']) && $row['id_dm'] == $data['id_dm'] ? 'selected' : '' ?> value="<?= $row['id_dm'] ?>">
                <?= $row['ten_dm'] ?>
            </option>
            <?php } ?>
        </select>
        </div>

        <div class="form-group">
            <label for="cars">Loại sản phẩm: </label>
            <select id="" name="id_lsp" class="form-control">
                <?php foreach ($data_lsp as $row) { ?>
                    <option <?= ($row['id_lsp'] == $data['id_lsp'])?'selected':''?> value="<?= $row['id_lsp'] ?>"><?= $row['Ten_lsp'] ?></option>
                <?php } ?>
            </select>
        </div>

<div class="form-group">
    <label for="id_thuonghieu">Thương Hiệu:</label>
    <select id="id_thuonghieu" name="id_thuonghieu" class="form-control">
        <?php foreach ($data_thuonghieu as $row) { ?>
        <option <?= isset($data['id_thuonghieu']) && $row['id_thuonghieu'] == $data['id_thuonghieu'] ? 'selected' : '' ?> value="<?= $row['id_thuonghieu'] ?>">
            <?= $row['ten_thuonghieu'] ?>
        </option>
        <?php } ?>
    </select>
    </div>

    <div class="form-group">
      <label for="">Tên Sản Phẩm</label>
      <input type="text" class="form-control" name="ten_sp" value="<?= $data['ten_sp']?>">
    </div>

    <div class="form-group">
      <label for="">Đơn Giá</label>
      <input type="text" class="form-control" name="gia_sp" value="<?= $data['gia_sp']?>">
    </div>

    <div class="form-group">
      <label for="">Hình Ảnh 1</label>
      <?php if (isset($data['HinhAnh1']) && $data['HinhAnh1']) { ?>
        <img src="/project/public/assets/image/GioiThieuSanPham/<?=$data['HinhAnh1']?>" height="200px" width="200px">
      <?php } ?>
      <input type="file" class="form-control" id="" placeholder="" name="HinhAnh1" value="<?=$data['HinhAnh1']?>">
    </div>

    <div class="form-group">
      <label for="">Hình Ảnh 2</label>
      <?php if (isset($data['HinhAnh2']) && $data['HinhAnh2']) { ?>
        <img src="/project/public/assets/image/GioiThieuSanPham/<?=$data['HinhAnh2']?>" height="200px" width="200px">
      <?php } ?>
      <input type="file" class="form-control" id="" placeholder="" name="HinhAnh2" value="<?=$data['HinhAnh2']?>">
    </div>

    <div class="form-group">
      <label for="">Hình Ảnh 3</label>
      <?php if (isset($data['HinhAnh3']) && $data['HinhAnh3']) { ?>
        <img src="/project/public/assets/image/GioiThieuSanPham/<?=$data['HinhAnh3']?>" height="200px" width="200px">
      <?php } ?>
      <input type="file" class="form-control" id="" placeholder="" name="HinhAnh3" value="<?=$data['HinhAnh3']?>">
    </div>

    <div class="form-group">
      <label for="">Hình Ảnh 4</label>
      <?php if (isset($data['HinhAnh4']) && $data['HinhAnh4']) { ?>
        <img src="/project/public/assets/image/GioiThieuSanPham/<?=$data['HinhAnh4']?>" height="200px" width="200px">
      <?php } ?>
      <input type="file" class="form-control" id="" placeholder="" name="HinhAnh4" value="<?=$data['HinhAnh4']?>">
    </div>

    <div class="form-group">
      <label for="">Bảo Hành</label>
      <input type="text" class="form-control" name="bao_hanh" value="<?= $data['bao_hanh']?>">
    </div>

    <div class="form-group">
        <label for="ma_khuyenmai">Khuyến Mãi:</label>
        <select id="ma_khuyenmai" name="ma_khuyenmai" class="form-control">
            <?php foreach ($data_km as $row) { ?>
                <option value="<?= $row['ma_khuyenmai'] ?>" 
                    <?= isset($data['ma_khuyenmai']) && $row['ma_khuyenmai'] == $data['ma_khuyenmai'] ? 'selected' : '' ?>>
                    <?= $row['ten_khuyenmai'] ?>
                </option>
            <?php } ?>
        </select>
    </div>

    <div class="form-group">
      <label for="">Số Lượng</label>
      <input type="text" class="form-control" name="soluong" value="<?= $data['soluong']?>">
    </div>


    <div class="form-group">
      <label for="">Bảo Hành</label>
      <input type="text" class="form-control" name="bao_hanh" value="<?= $data['bao_hanh']?>">
    </div>

    <div class="form-group">
        <label for="">Mô Tả</label>
        <textarea class="form-control" id="summernote" name="mo_ta" value="<?= $data['mo_ta'] ?>"></textarea>
    </div>

    <div class="form-group">
      <label for="">Bộ Sưu Tập</label>
      <input type="text" class="form-control" name="bosuu_tap" value="<?= $data['bosuu_tap']?>">
    </div>

    <div class="form-group">
      <label for="">Mã Sản Phẩm</label>
      <input type="text" class="form-control" name="ma_sp" value="<?= $data['ma_sp']?>">
    </div>

    <div class="form-group">
      <label for="">Giới Tính</label>
      <input type="text" class="form-control" name="gioi_tinh" value="<?= $data['gioi_tinh']?>">
    </div>

    <div class="form-group">
      <label for="">Loại Máy</label>
      <input type="text" class="form-control" name="loai_may" value="<?= $data['loai_may']?>">
    </div>

    <div class="form-group">
      <label for="">Đường Kính</label>
      <input type="text" class="form-control" name="duong_kinh"  value="<?= $data['duong_kinh']?>">
    </div>

    <div class="form-group">
      <label for="">Màu Sắc</label>
      <input type="text" class="form-control" name="mau_sac" value="<?= $data['mau_sac']?>">
    </div>

    <div class="form-group">
      <label for="">Phong Cách</label>
      <input type="text" class="form-control" name="phong_cach" value="<?= $data['phong_cach']?>">
    </div>

    <div class="form-group">
      <label for="">Chất Liệu Dây</label>
      <input type="text" class="form-control" name="chat_lieuday" value="<?= $data['chat_lieuday']?>">
    </div>

    <div class="form-group">
      <label for="">Tính Năng</label>
      <input type="text" class="form-control" name="tinh_nang" value="<?= $data['tinh_nang']?>">
    </div>

    <div class="form-group">
      <label for="">Độ Chịu Nước</label>
      <input type="text" class="form-control" name="dochiu_nuoc" value="<?= $data['dochiu_nuoc']?>">
    </div>

    <div class="form-group">
      <label for="">Số Đánh Giá</label>
      <input type="text" class="form-control" name="sodanhgia" value="<?= $data['sodanhgia']?>">
    </div>

    <div class="form-group">
      <label for="">Trạng Thái</label>
      <input type="checkbox" id="" placeholder="" value="1" <?= isset($data['trangthai']) && $data['trangthai'] == 1 ? 'checked' : '' ?> name="trangthai"><em> Hiển Thị Sản Phẩm </em>
      <input type="checkbox" id="" placeholder="" value="0" <?= isset($data['trangthai']) && $data['trangthai'] == 0 ? 'checked' : '' ?> name="trangthai"><em> Ẩn Sản Phẩm </em>
    </div>
    <button type="submit" class="btn btn-primary">Cập Nhật Sản Phẩm</button>
  </form>
</table>
<script>
    $(document).ready(function() {
      $('#summernote').summernote();
    });
</script>
