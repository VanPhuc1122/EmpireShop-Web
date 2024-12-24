<?php if (isset($_COOKIE['notice'])) { ?>
  <div class="alert alert-success">
    <strong>Thông báo</strong> <?= $_COOKIE['notice'] ?>
  </div>
<?php } ?>
<hr>

<div class="container-fluid">
  <div class="card shadow-sm">
    <div class="card-header">
      <h5 class="m-0 font-weight-bold text-primary">Danh Sách Banner</h5>
    </div>
    <div class="card-body">
      <table class="table table-striped table-hover" id="dataTable" width="100%" cellspacing="0">
        <thead class="thead-dark">
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Hình Ảnh</th>
            <th scope="col">Trạng Thái</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($data as $row) { ?>
            <tr>
              <td><?= $row['id'] ?></td>
            <td><?= $row['hinhanh'] ?></td>
              <td>
                <?php if (isset($_SESSION['login_admin']) && $_SESSION['login_admin'] == true) { ?>
                  <a href="?url=banner&operation=edit&id=<?= $row['id'] ?>" class="btn btn-warning btn-sm" title="Sửa Banner">
                    <i class="fas fa-edit"></i>
                  </a>
                  <a href="?url=banner&operation=delete&id=<?= $row['id'] ?>" onclick="return confirm('Bạn có thật sự muốn xóa banner ?');" class="btn btn-danger btn-sm" title="Xóa Banner">
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
