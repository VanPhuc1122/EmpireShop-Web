<?php
require_once __DIR__ . '/../Models/banner.php';
class BannerController
{
	var $banner_model;
	function __construct()
	{
		$this->banner_model = new Banner();
	}

	public function list()
	{
		$data = array();
		$data = $this->banner_model->All(); 
		require_once __DIR__ . '/../Views/admin/index.php';
	}

	public function add()
	{
		 require_once __DIR__ . '/../Views/admin/index.php';
		
	}
	public function insert()
	{
		$target_dir = "/project/public/assets/image/HinhNen/";  // thư mục chứa file upload
        $HinhAnh = "";

        $target_file = $target_dir . basename($_FILES["HinhAnh"]["name"]); // link sẽ upload file lên

        $status_upload = move_uploaded_file($_FILES["HinhAnh"]["tmp_name"], $target_file);

        if ($status_upload) { // nếu upload file không có lỗi 
            $HinhAnh =  "image/hinhnen/" . basename($_FILES["HinhAnh"]["name"]);
        }
		$data = array(
			'hinhanh' => $HinhAnh
		);
		foreach ($data as $key => $value) {
            if (strpos($value, "'") != false) {
                $value = str_replace("'", "\'", $value);
                $data[$key] = $value;
            }
        }
		$this->banner_model->insert($data);
	}
	public function delete()
	{
		if (isset($_GET['id'])) {
			$this->banner_model->delete($_GET['id']);
		}
	}
	public function edit()
	{
		$id = isset($_GET['id']) ? $_GET['id'] : 1;
		$data = $this->banner_model->find($id);
		 require_once __DIR__ . '/../Views/admin/index.php';
	}
	public function update()
	{
        $target_dir = "/project/public/assets/image/HinhNen/";  // thư mục chứa file upload
        $HinhAnh = "";

        $target_file = $target_dir . basename($_FILES["HinhAnh"]["name"]); // link sẽ upload file lên

        $status_upload = move_uploaded_file($_FILES["HinhAnh"]["tmp_name"], $target_file);

        if ($status_upload) { // nếu upload file không có lỗi 
            $HinhAnh =  "image/hinhnen/" . basename($_FILES["HinhAnh"]["name"]);
        }
		$data = array(
			'id' => $_POST['id'],
			'hinhanh' =>  $HinhAnh,
		);
		foreach ($data as $key => $value) {
            if (strpos($value, "'") != false) {
                $value = str_replace("'", "\'", $value);
                $data[$key] = $value;
            }
        }
        if ($HinhAnh == "") {
            unset($data['hinhanh']);
        }
		$this->banner_model->update($data);
	}
}
