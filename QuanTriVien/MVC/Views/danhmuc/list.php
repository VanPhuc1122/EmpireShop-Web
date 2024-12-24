<?php if (isset($_COOKIE['notice'])) { ?>
  <div class="alert alert-success">
    <strong>Thông báo</strong> <?= $_COOKIE['notice'] ?>
  </div>
<?php } ?>
<hr>
<div class="container-fluid">
  <div class="card shadow-sm">
    <div class="card-header">
      <h5 class="m-0 font-weight-bold text-primary">Danh Sách Danh Mục</h5>
    </div>
    <div class="card-body">
      <table class="table table-striped table-hover" id="dataTable" width="100%" cellspacing="0">
        <thead class="thead-dark">
          <tr>
            <th scope="col">Mã Danh Mục</th>
            <th scope="col">Tên Danh Mục</th>
            <th scope="col">Thao Tác</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($data as $row) { ?>
            <tr>
              <td><?= $row['id_dm'] ?></td>
              <td><?= $row['ten_dm'] ?></td>
              <td>
                <?php if (isset($_SESSION['login_admin']) && $_SESSION['login_admin'] == true) { ?>
                  <a href="?url=danhmuc&operation=edit&id=<?= $row['id_dm'] ?>" class="btn btn-warning btn-sm" title="Sửa Danh Mục">
                    <i class="fas fa-edit"></i>
                  </a>
                  <a href="?url=danhmuc&operation=delete&id=<?= $row['id_dm'] ?>" onclick="return confirm('Bạn có thật sự muốn xóa danh mục ?');" class="btn btn-danger btn-sm" title="Xóa Danh Mục">
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
