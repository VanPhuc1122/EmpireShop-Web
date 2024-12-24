<div class="container mt-5">
    <h2 class="text-center mb-4">Bộ Lọc Sản Phẩm</h2>
    <div class="row align-items-center border p-3 rounded" id="container_filter">
        <form action="index.php" method="GET" id="filterForm" class="row g-3">
            <input type="hidden" name="url" value="donghonam">

            <div class="col-lg-3 col-md-4 col-6 mb-3">
                <label for="brandFilter" class="form-label">Thương Hiệu</label>
                <select class="form-select" id="brandFilter" name="thuonghieu">
                    <option value="" selected>Lựa Chọn</option>
                    <?php
                    $thuonghieu = ['Versace', 'Logines Legend', 'Citizen', 'Mont Blanc', 'Michael Kors', 'Bulova', 'Breguet', 'Baume & Mercier', 'Guess', 'Gucci'];
                    foreach ($thuonghieu as $thuonghieu) {
                        $selected = isset($_GET['thuonghieu']) && $_GET['thuonghieu'] === $thuonghieu ? 'selected' : '';
                        echo "<option value=\"$thuonghieu\" $selected>$thuonghieu</option>";
                    }
                    ?>
                </select>
            </div>

            <div class="col-lg-3 col-md-4 col-6 mb-3">
                <label for="machineType" class="form-label">Loại Máy</label>
                <select class="form-select" id="machineType" name="loai_may">
                    <option value="" selected>Lựa Chọn</option>
                    <?php
                    $loai_may = ['Quatz', 'Automatic', 'Eco-Driver', 'Solar', 'Smart Watch'];
                    foreach ($loai_may as $loai_may) {
                        $selected = isset($_GET['loai_may']) && $_GET['loai_may'] === $loai_may ? 'selected' : '';
                        echo "<option value=\"$loai_may\" $selected>$loai_may</option>";
                    }
                    ?>
                </select>
            </div>

            <div class="col-lg-3 col-md-4 col-6 mb-3">
                <label for="materialFilter" class="form-label">Chất Liệu Dây</label>
                <select class="form-select" id="materialFilter" name="chat_lieuday">
                    <option value="" selected>Lựa Chọn</option>
                    <?php
                    $chat_lieuday = ['Dây Kim Loại', 'Dây Da', 'Silicone', 'Dây Cao Su', 'Plastic'];
                    foreach ($chat_lieuday as $chat_lieuday) {
                        $selected = isset($_GET['chat_lieuday']) && $_GET['chat_lieuday'] === $chat_lieuday ? 'selected' : '';
                        echo "<option value=\"$chat_lieuday\" $selected>$chat_lieuday</option>";
                    }
                    ?>
                </select>
            </div>

            <div class="col-lg-3 col-md-4 col-6 mb-3">
                <label for="colorFilter" class="form-label">Màu Sắc</label>
                <select class="form-select" id="colorFilter" name="mau_sac">
                    <option value="" selected>Lựa Chọn</option>
                    <?php
                    $mau_sac = ['Xanh', 'Đen', 'Nâu', 'Crystal', 'Bạc', 'Xanh Lá Cây', 'Vàng'];
                    foreach ($mau_sac as $mau_sac) {
                        $selected = isset($_GET['mau_sac']) && $_GET['mau_sac'] === $mau_sac ? 'selected' : '';
                        echo "<option value=\"$mau_sac\" $selected>$mau_sac</option>";
                    }
                    ?>
                </select>
            </div>

            <div class="col-lg-3 col-md-4 col-6 mb-3">
                <label for="diameterFilter" class="form-label">Đường Kính</label>
                <select class="form-select" id="diameterFilter" name="duongkinh">
                    <option value="" selected>Lựa Chọn</option>
                    <?php
                    $duong_kinh = ['34mm', '35mm', '36mm', '37mm', '38mm', '39mm', '40mm', '41mm', '42mm', '43mm', '44mm', '45mm'];
                    foreach ($duong_kinh as $duong_kinh) {
                        $selected = isset($_GET['duong_kinh']) && $_GET['duong_kinh'] === $duong_kinh ? 'selected' : '';
                        echo "<option value=\"$duong_kinh\" $selected>$duong_kinh</option>";
                    }
                    ?>
                </select>
            </div>

            <div class="col-12 text-center">
                <button type="submit" class="btn btn-primary">Lọc Sản Phẩm</button>
                <a href="index.php?url=donghonam" class="btn btn-secondary">Đặt Lại</a>
            </div>
        </form>
    </div>
</div>

<script>
document.getElementById('filterForm').addEventListener('submit', function (event) {
    const form = event.target;
    const elements = form.elements;

    for (let i = elements.length - 1; i >= 0; i--) {
        const element = elements[i];

        // Nếu giá trị rỗng, loại bỏ input/select khỏi form
        if (element.value.trim() === '') {
            element.disabled = true;
        }
    }
});
</script>