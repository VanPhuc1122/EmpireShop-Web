<?php if (isset($_COOKIE['notice'])) { ?>
    <div class="alert alert-success">
        <strong>Thông báo</strong> <?= $_COOKIE['notice'] ?>
    </div>
<?php } ?>
<hr>
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <form action="?url=khuyenmai&operation=update" method="POST" role="form" enctype="multipart/form-data">
        <input type="hidden" name="ma_khuyenmai" value="<?= $data['ma_khuyenmai'] ?>">
        <div class="form-group">
            <label for="">Tên Khuyến Mãi</label>
            <input type="text" class="form-control" id="" placeholder="" name="ten_khuyenmai" value="<?= $data['ten_khuyenmai'] ?>">
        </div>
        <div class="form-group">
            <label for="">Loại Khuyến Mãi</label>
            <input type="text" class="form-control" id="" placeholder="" name="loai_khuyen_mai" value="<?= $data['loai_khuyen_mai'] ?>">
        </div>
        <div class="form-group">
            <label for="">Giá trị Khuyến Mãi</label>
            <input type="text" class="form-control" id="" placeholder="" name="giatri_khuyenmai" value="<?= $data['giatri_khuyenmai'] ?>">
        </div>
        <div class="form-group">
               <label for="">Trạng thái</label>
               <select id="" name="trangthai" class="form-control">
                    <option <?= ($data['trangthai'] == '0')?'selected':''?> value="0"> Ẩn</option>
                    <option <?= ($data['trangthai'] == '1')?'selected':''?> value="1"> Hiện</option>
               </select>
           </div>
        <button type="submit" class="btn btn-primary">Cập nhật</button>
    </form>
</table>