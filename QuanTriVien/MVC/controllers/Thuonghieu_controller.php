<?php
 require_once __DIR__ . '/../Models/thuonghieu.php';
class ThuonghieuController
{
	var $thuonghieu_model;
	function __construct()
	{
		$this->thuonghieu_model = new thuonghieu();
	}

	public function list()
	{
		$data = array();
		$data = $this->thuonghieu_model->All(); 
		 require_once __DIR__ . '/../Views/admin/index.php';
	}

	public function add()
	{
		 require_once __DIR__ . '/../Views/admin/index.php';
		
	}
	public function insert()
	{
		$target_dir = "/project/public/assets/image/brand/";  // thư mục chứa file upload
        $HinhAnh = "";

        $target_file = $target_dir . basename($_FILES["HinhAnh"]["name"]); // link sẽ upload file lên

        $status_upload = move_uploaded_file($_FILES["HinhAnh"]["tmp_name"], $target_file);

        if ($status_upload) { // nếu upload file không có lỗi 
            $HinhAnh =  "image/brand/" . basename($_FILES["HinhAnh"]["name"]);
        }
		$data = array(
			'HinhAnh' => $HinhAnh
		);
		foreach ($data as $key => $value) {
            if (strpos($value, "'") != false) {
                $value = str_replace("'", "\'", $value);
                $data[$key] = $value;
            }
        }
		$this->thuonghieu_model->insert($data);
	}
	public function delete()
	{
		if (isset($_GET['id'])) {
			$this->thuonghieu_model->delete($_GET['id']);
		}
	}
	public function edit()
	{
		$id = isset($_GET['id']) ? $_GET['id'] : 1;
		$data = $this->thuonghieu_model->find($id);
		 require_once __DIR__ . '/../Views/admin/index.php';
	}
	public function update()
	{
        $target_dir = "/project/public/assets/image/brand/";  // thư mục chứa file upload
        $HinhAnh = "";

        $target_file = $target_dir . basename($_FILES["HinhAnh"]["name"]); // link sẽ upload file lên

        $status_upload = move_uploaded_file($_FILES["HinhAnh"]["tmp_name"], $target_file);

        if ($status_upload) { // nếu upload file không có lỗi 
            $HinhAnh =  "image/brand/" . basename($_FILES["HinhAnh"]["name"]);
        }
		$data = array(
			'id_thuonghieu' => $_POST['id_thuonghieu'],
            'ten_thuonghieu' => $_POST['ten_thuonghieu'],
			'HinhAnh' =>  $HinhAnh,
		);
		foreach ($data as $key => $value) {
            if (strpos($value, "'") != false) {
                $value = str_replace("'", "\'", $value);
                $data[$key] = $value;
            }
        }
        if ($HinhAnh == "") {
            unset($data['HinhAnh']);
        }
		$this->thuonghieu_model->update($data);
	}
}
