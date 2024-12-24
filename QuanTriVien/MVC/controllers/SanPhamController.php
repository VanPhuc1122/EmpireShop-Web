<?php
 require_once __DIR__ . '/../Models/sanpham.php';
class SanphamController
{
    var $sanpham_model;
    public function __construct()
    {
        $this->sanpham_model = new sanpham();
    }
    public function list()
    {
         $data = $this->sanpham_model->All();
         require_once __DIR__ . '/../Views/admin/index.php';
    }
    public function add()
    {
        $data_km = $this->sanpham_model->khuyenmai();
        $data_lsp = $this->sanpham_model->loaisp();
        $data_dm = $this->sanpham_model->danhmuc();
        $data_thuonghieu = $this->sanpham_model->thuonghieu();
       require_once __DIR__ . '/../Views/admin/index.php';
    }
    public function insert() {
        $target_dir = $_SERVER['DOCUMENT_ROOT'] . "/project/public/assets/image/GioiThieuSanPham/";
        if (!file_exists($target_dir)) {
            mkdir($target_dir, 0777, true);
        }
        $uploadedImages = []; 
        for ($i = 1; $i <= 4; $i++) {
            $fileKey = "HinhAnh$i";
            $uploadedImages[$fileKey] = ""; 
            if (!empty($_FILES[$fileKey]['name'])) {
                $target_file = $target_dir . basename($_FILES[$fileKey]["name"]);
                $status_upload = move_uploaded_file($_FILES[$fileKey]["tmp_name"], $target_file);
                if ($status_upload) {
                    $uploadedImages[$fileKey] = "" . basename($_FILES[$fileKey]["name"]);
                } else {
                    echo "Lỗi upload file $fileKey!";
                }
            }
        }
        $TrangThai = isset($_POST['trangthai']) ? 1 : 0;
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $ThoiGian = date('Y-m-d H:i:s');
        $data = [
            'id_lsp' => $_POST['id_lsp'],
            'id_dm' => $_POST['id_dm'],
            'id_thuonghieu' => $_POST['id_thuonghieu'],
            'ten_sp' => $_POST['ten_sp'],
            'gia_sp' => $_POST['gia_sp'],
            'HinhAnh1' => $uploadedImages['HinhAnh1'],
            'HinhAnh2' => $uploadedImages['HinhAnh2'],
            'HinhAnh3' => $uploadedImages['HinhAnh3'],
            'HinhAnh4' => $uploadedImages['HinhAnh4'],
            'soluong' => $_POST['soluong'],
            'bao_hanh' => $_POST['bao_hanh'],
            'ma_km' => $_POST['ma_khuyenmai'],
            'mo_ta' => $_POST['mo_ta'],
            'bosuu_tap' => $_POST['bosuu_tap'],
            'ma_sp' => $_POST['ma_sp'],
            'gioi_tinh' => $_POST['gioi_tinh'],
            'loai_may' => $_POST['loai_may'],
            'duong_kinh' => $_POST['duong_kinh'],
            'mau_sac' => $_POST['mau_sac'],
            'phong_cach' => $_POST['phong_cach'],
            'chat_lieuday' => $_POST['chat_lieuday'],
            'tinh_nang' => $_POST['tinh_nang'],
            'dochiu_nuoc' => $_POST['dochiu_nuoc'],
            'sodanhgia' => 0,
            'trangthai' => $TrangThai,
            'thoigian' => $ThoiGian
        ];
        foreach ($data as $key => $value) {
            $data[$key] = str_replace("'", "\'", $value);
        }
        $this->sanpham_model->insert($data);
    }
        public function delete()
    {
        $id = $_GET['id'];
        $this->sanpham_model->delete($id);
    }
    public function edit()
    {
        $id = isset($_GET['id']) ? $_GET['id'] : 1;
        $data_km = $this->sanpham_model->khuyenmai();
        $data_lsp = $this->sanpham_model->loaisp();
        $data_dm = $this->sanpham_model->danhmuc();
        $data_thuonghieu = $this->sanpham_model->thuonghieu();
        $data = $this->sanpham_model->find($id);
         require_once __DIR__ . '/../Views/admin/index.php';
    }
    public function update() {
        var_dump($_POST); 
        // Đường dẫn tới thư mục chứa ảnh
        $target_dir = $_SERVER['DOCUMENT_ROOT'] . "/project/public/assets/image/GioiThieuSanPham/";
        $image_fields = ['HinhAnh1', 'HinhAnh2', 'HinhAnh3', 'HinhAnh4'];
        $images = [];

        foreach ($image_fields as $field) {
            $images[$field] = "";
            if (isset($_FILES[$field]) && $_FILES[$field]['error'] === UPLOAD_ERR_OK) {
                $target_file = $target_dir . basename($_FILES[$field]["name"]);
                
                // Kiểm tra file ảnh có hợp lệ   không trùng tên
                if (file_exists($target_file)) {
                    echo "File " . basename($_FILES[$field]["name"]) . " đã tồn tại.";
                    continue; 
                }
                // Kiểm tra kiểu file chỉ chấp nhận hình ảnh
                $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
                $allowed_types = ['jpg', 'jpeg', 'png', 'webp'];  
                if (!in_array($imageFileType, $allowed_types)) {
                    echo "Chỉ hỗ trợ các file ảnh: JPG, JPEG, PNG, WEBP.";
                    continue;
                }
                if ($_FILES[$field]["size"] > 5000000) {
                    echo "File quá lớn.";
                    continue;
                }
                // Di chuyển file ảnh vào thư mục
                if (move_uploaded_file($_FILES[$field]["tmp_name"], $target_file)) {
                    $images[$field] = basename($_FILES[$field]["name"]);
                } else {
                    echo "Lỗi trong quá trình tải lên file " . $_FILES[$field]["name"];
                    continue;
                }
            }
        }
        $trangthai = isset($_POST['trangthai']) ? $_POST['trangthai'] : 0;
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $thoigian = date('Y-m-d H:i:s');
        $data = array(
            'id_sanpham' => $_POST['id_sanpham'] ?? null,
            'id_lsp' => $_POST['id_lsp'],
            'id_dm' => $_POST['id_dm'] ?? null,
            'id_thuonghieu' => $_POST['id_thuonghieu'] ?? null,
            'ten_sp' => $_POST['ten_sp'] ?? null,
            'gia_sp' => $_POST['gia_sp'] ?? null,
            'HinhAnh1' => $images['HinhAnh1'],
            'HinhAnh2' => $images['HinhAnh2'],
            'HinhAnh3' => $images['HinhAnh3'],
            'HinhAnh4' => $images['HinhAnh4'],
            'soluong' => $_POST['soluong'] ?? null,
            'bao_hanh' => $_POST['bao_hanh'] ?? null,
            'ma_km' => $_POST['ma_khuyenmai'],
            'ma_sp' => $_POST['ma_sp'] ?? null,
            'gioi_tinh' => $_POST['gioi_tinh'] ?? null,
            'loai_may' => $_POST['loai_may'] ?? null,
            'duong_kinh' => $_POST['duong_kinh'] ?? null,
            'mau_sac' => $_POST['mau_sac'] ?? null,
            'phong_cach' => $_POST['phong_cach'] ?? null,
            'chat_lieuday' => $_POST['chat_lieuday'] ?? null,
            'tinh_nang' => $_POST['tinh_nang'] ?? null,
            'dochiu_nuoc' => $_POST['dochiu_nuoc'] ?? null,
            'sodanhgia' => $_POST['sodanhgia'] ?? null,
            'trangthai' => $trangthai,
            'thoigian' => $thoigian
        );
        $data = array_filter($data, fn($value) => !is_null($value));
        foreach ($image_fields as $field) {
            if (empty($images[$field])) {
                unset($data[$field]);
            }
        }
        $this->sanpham_model->update($data);
    }   
}
