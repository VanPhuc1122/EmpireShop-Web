<?php if (isset($_COOKIE['notice'])) { ?>
  <div class="alert alert-success">
    <strong>Thông báo</strong> <?= $_COOKIE['notice'] ?>
  </div>
<?php } ?>
<hr>
<div class="container-fluid">
  <div class="card shadow-sm">
    <div class="card-header">
      <h5 class="m-0 font-weight-bold text-primary">Danh Sách Đánh Giá Sản Phẩm</h5>
    </div>
    <div class="card-body">
      <table class="table table-striped table-hover" id="dataTable" width="100%" cellspacing="0">
        <thead class="thead-dark">
          <tr>
            <th scope="col">ID_BinhLuan</th>
            <th scope="col">ID_SanPham</th>
            <th scope="col">Tên Người Bình Luận</th>
            <th scope="col">Nội Dung</th>
            <th scope="col">Ngày Bình Luận</th>
            <th scope="col">Thao Tác</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($data as $row) { ?>
            <tr>
              <td><?= $row['id_binhluan'] ?></td>
              <td><?= $row['id_sanpham'] ?></td>
              <td><?= $row['ten_nguoibinhluan'] ?></td>
              <td><?= $row['noi_dung'] ?></td>
              <td><?= $row['ngay_tao'] ?></td>
              <td>
                <?php if (isset($_SESSION['login_admin']) && $_SESSION['login_admin'] == true) { ?>
                  <a href="?url=binhluan&operation=delete&id=<?= $row['id_binhluan'] ?>" onclick="return confirm('Bạn có thật sự muốn xóa bình luận ?');" class="btn btn-danger btn-sm" title="Xóa Bình Luận">
                    <i class="fas fa-trash-alt"></i>
                  </a>
                <?php } ?>
              </td>
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
