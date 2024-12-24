<?php if(isset($data) and $data != null){ ?>
<a href="?url=hoadon&operation=xetduyet&id=<?= $data['0']['id_hoadon'] ?>" class="btn btn-success"> <i class="fas fa-file-invoice"></i></a>
<a href="?url=hoadon&operation=delete&id=<?= $data['0']['id_hoadon'] ?>" onclick="return confirm('Bạn có thật sự muốn xóa ?');" type="button" class="btn btn-danger"> <i class="fas fa-trash-alt"></i></a>
<?php } ?>
<?php if (isset($_COOKIE['notice'])) { ?>
    <div class="alert alert-success">
        <strong>Thông báo</strong> <?= $_COOKIE['notice'] ?>
    </div>
<?php } ?>
<hr>
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <thead>
        <tr>
            <th scope="col">Tên Sản Phẩm</th>
            <th scope="col">Giá Sản Phẩm</th>
            <th scope="col">Số lượng</th>
            <th scope="col">Đơn Giá</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($data as $row) { ?>
            <tr>
                <td><?= $row['Ten'] ?></td>
                <td><?= number_format($row['gia_sp']) ?> VNĐ</td>
                <td><?= $row['soluong'] ?></td>
                <td><?= number_format($row['gia_sp'] * $row['soluong']) ?> VNĐ</td>
            </tr>
        <?php } ?>
</table>
<script>
    $(document).ready(function() {
        $('#dataTable').DataTable();
    });
</script>