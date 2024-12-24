<?php if(isset($_COOKIE['notice'])){?>  
  <div class="alert alert-success alert-dismissible fade show" role="alert">
      <strong>Thông báo:</strong> <?= $_COOKIE['notice'] ?> 
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
      </button>
  </div>
<?php } ?>
<hr>

<div class="container-fluid">
  <div class="card shadow-sm">
  <div class="card-header">
      <h5 class="m-0 font-weight-bold text-primary">Danh Sách Người Dùng</h5>
    </div>
    <div class="card-body">
      <table class="table table-bordered table-striped table-hover" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Tên Đăng Nhập</th>
            <th scope="col">Số Điện Thoại</th>
            <th scope="col">Email</th>
            <th scope="col">Giới Tính</th>
            <th scope="col">Quyền</th>
            <th scope="col">Trạng Thái</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach($data as $row){?>
            <tr>
              <th scope="row"><?= $row['Ma_ND'] ?></th>
              <td><?= $row['Tendangnhap'] ?></td>
              <td><?= $row['So_dienthoai'] ?></td>
              <td><?= $row['Email'] ?></td>
              <td><?= $row['GioiTinh'] ?></td>
              <td>
                <?php 
                  if($row['id_quyen'] == 2){
                    echo 'Quản Trị Viên';
                  }else{
                    if($row['id_quyen'] == 1){
                      echo 'Khách Hàng ';
                    }else{
                      echo 'Nhân Viên';
                    }
                  }
                ?>
              </td>
              <td>
                <?php if(isset($_SESSION['login_admin']) && $_SESSION['login_admin'] == true){ ?>
                  <a href="?url=nguoidung&operation=edit&id=<?= $row['Ma_ND'] ?>" class="btn btn-warning btn-sm"> <i class="fas fa-edit"></i></a>
                  <a href="?url=nguoidung&operation=delete&id=<?= $row['Ma_ND'] ?>" onclick="return confirm('Bạn có thật sự muốn xóa ?');" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></a>
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
    $('#dataTable').DataTable();
  });
</script>
