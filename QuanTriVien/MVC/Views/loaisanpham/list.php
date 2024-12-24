<?php if (isset($_COOKIE['notice'])) { ?>
  <div class="alert alert-success">
    <strong>Thông báo</strong> <?= $_COOKIE['notice'] ?>
  </div>
<?php } ?>
<hr>
<div class="container-fluid">
  <div class="card shadow-sm">
    <div class="card-header">
      <h5 class="m-0 font-weight-bold text-primary">Danh Sách Loại Sản Phẩm</h5>
    </div>
    <div class="card-body">
      <table class="table table-striped table-hover" id="dataTable" width="100%" cellspacing="0">
        <thead class="thead-dark">
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Tên LSP</th>
            <th scope="col">Hình Ảnh</th>
            <th scope="col">Mô Tả</th>
            <th scope="col">Thao Tác</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($data as $row) { ?>
            <tr>
              <td><?= $row['id_lsp'] ?></td>
              <td><?= $row['Ten_lsp'] ?></td>
              <td>
                <img src="/project/public/assets/image/DongHoNam/<?= $row['HinhAnh'] ?>" class="img-fluid rounded" style="max-height: 60px;">
              </td>
              <td><?= $row['MoTa'] ?></td>
              <td>
                <?php if (isset($_SESSION['login_admin']) && $_SESSION['login_admin'] == true) { ?>
                  <a href="?url=loaisanpham&operation=edit&id=<?= $row['id_lsp'] ?>" class="btn btn-warning btn-sm">
                    <i class="fas fa-edit"></i> Sửa
                  </a>
                  <a href="?url=loaisanpham&operation=delete&id=<?= $row['id_lsp'] ?>" onclick="return confirm('Bạn có thật sự muốn xóa ?');" class="btn btn-danger btn-sm">
                    <i class="fas fa-trash-alt"></i> Xóa
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
