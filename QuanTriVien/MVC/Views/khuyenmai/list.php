<?php if (isset($_COOKIE['notice'])) { ?>
  <div class="alert alert-success">
    <strong>Thông báo</strong> <?= $_COOKIE['notice'] ?>
  </div>
<?php } ?>
<hr>

<div class="container-fluid">
  <div class="card shadow-sm">
    <div class="card-header">
      <h5 class="m-0 font-weight-bold text-primary">Danh Sách Khuyến Mãi</h5>
    </div>
    <div class="card-body">
      <table class="table table-striped table-hover" id="dataTable" width="100%" cellspacing="0">
        <thead class="thead-dark">
          <tr>
            <th scope="col">Mã Khuyến Mãi</th>
            <th scope="col">Tên Khuyến Mãi</th>
            <th scope="col">Loại Khuyến Mãi</th>
            <th scope="col">Giá trị Khuyến Mãi</th>
            <th scope="col">Ngày bắt đầu</th>
            <th scope="col">Ngày kết thúc</th>
            <th scope="col">Thao Tác</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($data as $row) { ?>
            <tr>
              <td><?= $row['ma_khuyenmai'] ?></td>
              <td><?= $row['ten_khuyenmai'] ?></td>
              <td><?= $row['loai_khuyen_mai'] ?></td>
              <td><?= $row['giatri_khuyenmai'] ?></td>
              <td><?= $row['ngay_bat_dau'] ?></td>
              <td><?= $row['ngay_ket_thuc'] ?></td>
              <td>
                <?php if (isset($_SESSION['login_admin']) && $_SESSION['login_admin'] == true) { ?>
                  <a href="?url=khuyenmai&operation=edit&id=<?= $row['ma_khuyenmai'] ?>" class="btn btn-warning btn-sm" title="Sửa">
                    <i class="fas fa-edit"></i>
                  </a>
                  <a href="?url=khuyenmai&operation=delete&id=<?= $row['ma_khuyenmai'] ?>" onclick="return confirm('Bạn có thật sự muốn xóa khuyến mãi?');" class="btn btn-danger btn-sm" title="Xóa">
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
