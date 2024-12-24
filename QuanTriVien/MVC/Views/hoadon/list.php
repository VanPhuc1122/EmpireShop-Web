<?php if (isset($_COOKIE['notice'])) { ?>
  <div class="alert alert-success">
    <strong>Thông báo</strong> <?= $_COOKIE['notice'] ?>
  </div>
<?php } ?>
<hr>
<div class="container-fluid">
  <div class="card shadow-sm">
    <div class="card-header">
      <h5 class="m-0 font-weight-bold text-primary">Danh Sách Hoá Đơn</h5>
    </div>
    <div class="card-body">
      <table class="table table-striped table-hover" id="dataTable" width="100%" cellspacing="0">
        <thead class="thead-dark">
          <tr>
            <th scope="col">Tên Khách Hàng</th>
            <th scope="col">Ngày Đặt Hàng</th>
            <th scope="col">Số Điện Thoại</th>
            <th scope="col">Địa Chỉ Nhận</th>
            <th scope="col">Thành Phố</th>
            <th scope="col">Ghi Chú</th>
            <th scope="col">Tổng Tiền</th>
            <th scope="col">Trạng thái</th>
            <th scope="col">Hành Động</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($data as $row) { ?>
            <tr>
              <td><?= $row['ten_khach_hang'] ?></td>
              <td><?= $row['ngay_dat'] ?></td>
              <td><?= $row['so_dien_thoai'] ?></td>
              <td><?= $row['dia_chi_nhan'] ?></td>
              <td><?= $row['tinh_thanh_pho'] ?></td>
              <td><?= $row['ghi_chu'] ?></td>
              <td><?= number_format($row['tong_tien']) ?> VNĐ</td>
              <td>
                <?php if($row['TrangThai'] == 0) { ?>
                  <span class="badge badge-warning">Chưa Xử Lí</span>
                <?php } else { ?>
                  <span class="badge badge-success">Đã Xử Lí</span>
                <?php } ?>
              </td>
              <td>
                <a href="?url=hoadon&operation=chitiet&id=<?= $row['id_hoadon'] ?>" class="btn btn-info btn-sm" title="Xem Chi Tiết">
                  <i class="fas fa-eye"></i>
                </a>
                <a href="?url=hoadon&operation=delete&id=<?= $row['id_hoadon'] ?>" onclick="return confirm('Bạn có thật sự muốn xóa hoá đơn?');" class="btn btn-danger btn-sm" title="Xóa">
                  <i class="fas fa-trash-alt"></i>
                </a>
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
