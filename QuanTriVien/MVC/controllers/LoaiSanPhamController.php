<?php
 require_once __DIR__ . '/../Models/loaisanpham.php';
class LoaisanphamController
{
	var $loaisanpham_model;
	function __construct()
	{
		$this->loaisanpham_model = new loaisanpham();
	}

	public function list()
	{
		$data = array();
		$data = $this->loaisanpham_model->All(); 
		require_once __DIR__ . '/../Views/admin/index.php';
	}

	public function add()
	{
		$data = $this->loaisanpham_model->danhmuc();
		require_once __DIR__ . '/../Views/admin/index.php';
	}
	public function insert()
	{
		$target_dir = $_SERVER['DOCUMENT_ROOT'] . "/project/public/assets/image/DongHoNam/";
		if (!file_exists($target_dir)) {
			mkdir($target_dir, 0777, true);  // Tạo thư mục nếu chưa tồn tại
		}
		$HinhAnh = "";
		if (isset($_FILES["HinhAnh"]) && $_FILES["HinhAnh"]["error"] == 0) {
			$target_file = $target_dir . basename($_FILES["HinhAnh"]["name"]);
			$status_upload = move_uploaded_file($_FILES["HinhAnh"]["tmp_name"], $target_file);
			
			if ($status_upload) {
				$HinhAnh = basename($_FILES["HinhAnh"]["name"]);
			} else {
				echo "Lỗi upload file!";
				exit;
			}
		} else {
			echo "Không có file được chọn hoặc file không hợp lệ!";
			exit;
		}
		$Ten_lsp = isset($_POST['Ten_lsp']) ? $_POST['Ten_lsp'] : '';
		$MoTa = isset($_POST['MoTa']) ? $_POST['MoTa'] : '';
		$id_dm = isset($_POST['id_dm']) ? $_POST['id_dm'] : '';

		$data = array(
			'Ten_lsp' => $Ten_lsp,
			'HinhAnh' => $HinhAnh,
			'MoTa' => $MoTa,
			'id_dm' => $id_dm
		);
		foreach ($data as $key => $value) {
			if (strpos($value, "'") !== false) {
				$data[$key] = str_replace("'", "\'", $value);
			}
		}
		$this->loaisanpham_model->insert($data);
	}
	public function delete()
	{
		if (isset($_GET['id'])) {
			$this->loaisanpham_model->delete($_GET['id']);
		}
	}
	public function edit()
	{
		$id = isset($_GET['id']) ? $_GET['id'] : 5;
		$data_detail = $this->loaisanpham_model->find($id);

		$data = $this->loaisanpham_model->danhmuc();

		require_once __DIR__ . '/../Views/admin/index.php';
	}
	public function update()
	{
		$target_dir = $_SERVER['DOCUMENT_ROOT'] . "/project/public/assets/image/DongHoNam/";
		if (!file_exists($target_dir)) {
			mkdir($target_dir, 0777, true);  // Tạo thư mục nếu chưa tồn tại
		}
		$id_lsp = isset($_POST['id_lsp']) ? $_POST['id_lsp'] : null;
		if (!$id_lsp) {
			echo "ID sản phẩm không hợp lệ!";
			exit;
		}
		$HinhAnh = isset($_POST['current_image']) ? $_POST['current_image'] : '';
		if (isset($_FILES["HinhAnh"]) && $_FILES["HinhAnh"]["error"] == 0) {
			$target_file = $target_dir . basename($_FILES["HinhAnh"]["name"]);
			$status_upload = move_uploaded_file($_FILES["HinhAnh"]["tmp_name"], $target_file);
	
			if ($status_upload) {
				$HinhAnh = "" . basename($_FILES["HinhAnh"]["name"]);
			} else {
				echo "Lỗi upload file!";
				exit;
			}
		}
		$Ten_lsp = isset($_POST['Ten_lsp']) ? $_POST['Ten_lsp'] : '';
		$MoTa = isset($_POST['MoTa']) ? $_POST['MoTa'] : '';
		$id_dm = isset($_POST['id_dm']) ? $_POST['id_dm'] : '';
		$data = [
			'id_lsp' => $id_lsp,
			'Ten_lsp' => str_replace("'", "\'", $Ten_lsp),
			'MoTa' => str_replace("'", "\'", $MoTa),
			'id_dm' => $id_dm,
			'HinhAnh' => $HinhAnh
		];
		if ($HinhAnh === $_POST['current_image']) {
			unset($data['HinhAnh']);
		}
		$this->loaisanpham_model->update($data);
		setcookie("notice", "Cập nhật thành công", time() + 3, "/");
		header("Location: ?url=loaisanpham&operation=list");
		exit();
	}
}
