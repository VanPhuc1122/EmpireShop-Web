<?php if(isset($_COOKIE['notice'])){ ?>
  <div class="alert alert-success">
    <strong>Thông báo</strong> <?= $_COOKIE['notice'] ?>
  </div>
<?php } ?>
<hr>
<div class="container-fluid">
  <div class="card shadow-sm">
    <div class="card-header">
      <h5 class="m-0 font-weight-bold text-primary">Danh Sách Sản Phẩm</h5>
    </div>
    <div class="card-body">
      <table class="table table-striped table-hover" id="dataTable" width="100%" cellspacing="0">
        <thead class="thead-dark">
          <tr>
            <th scope="col">ID</th>
            <th scope="col">MSP</th>
            <th scope="col">Tên Sản Phẩm</th>
            <th scope="col">Hình Ảnh</th>
            <th scope="col">Giá</th>
            <th scope="col">Status</th>
            <th scope="col">Thao Tác</th>
          </tr>
        </thead>
        <tbody>
          <?php if(!empty($data)) { ?>
            <?php foreach($data as $row){ ?>
              <tr>
                <th scope="row"><?= $row['id_sanpham'] ?></th>
                <td><?= $row['ma_sp'] ?></td>
                <td><?= $row['ten_sp'] ?></td>
                <td>
                  <img src="/project/public/assets/image/GioiThieuSanPham/<?= $row['HinhAnh1'] ?>" class="img-fluid rounded" style="max-width: 200px; max-height: 220px;">
                </td>
                <td><?= number_format($row['gia_sp']) ?> VNĐ</td>
                <td>
                  <span class="badge <?= $row['trangthai'] == 'Hiển thị' ? 'badge-success' : 'badge-danger' ?>"><?= $row['trangthai'] ?></span>
                </td>
                <td>
                  <?php if(isset($_SESSION['login_admin']) && $_SESSION['login_admin']){ ?>
                    <a href="?url=sanpham&operation=edit&id=<?= $row['id_sanpham'] ?>" class="btn btn-warning btn-sm">
                      <i class="fas fa-edit"></i> Sửa
                    </a>
                    <a href="?url=sanpham&operation=delete&id=<?= $row['id_sanpham'] ?>" onclick="return confirm('Bạn có thật sự muốn xóa sản phẩm này?');" class="btn btn-danger btn-sm">
                      <i class="fas fa-trash-alt"></i> Xóa
                    </a>
                  <?php } ?>
                </td>
              </tr>
            <?php } ?>
          <?php } else { ?>
            <tr>
              <td colspan="7" class="text-center">Không có sản phẩm nào để hiển thị.</td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</div>

<script>
  $(document).ready(function() {
    $('#dataTable').DataTable({
      "responsive": true,
      "autoWidth": false
    });
  });
</script>
