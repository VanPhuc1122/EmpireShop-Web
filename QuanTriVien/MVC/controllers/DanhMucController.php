<?php
 require_once __DIR__ . '/../Models/danhmuc.php';
class DanhmucController
{
	var $danhmuc_model;
	function __construct()
	{
		$this->danhmuc_model = new Danhmuc();
	}

	public function list()
	{
		$data = array();
		$data = $this->danhmuc_model->All(); 
		require_once __DIR__ . '/../Views/admin/index.php';
	}

	public function add()
	{
		 require_once __DIR__ . '/../Views/admin/index.php';
	}
	public function insert()
	{
		$data = array(
			'id_dm' => $_POST['id_dm'],
			'ten_dm' => $_POST['ten_dm']
		);
		foreach ($data as $key => $value) {
            if (strpos($value, "'") != false) {
                $value = str_replace("'", "\'", $value);
                $data[$key] = $value;
            }
        }
	    $this->danhmuc_model->insert($data);
		header('Location: ?url=danhmuc&operation=list');
		exit();
	}
	public function delete()
	{
		if (isset($_GET['id'])) {
			$this->danhmuc_model->delete($_GET['id']);
		}
		header('Location: ?url=danhmuc&operation=list');
    	exit();
	}
	public function edit()
	{
		$id = isset($_GET['id']) ? $_GET['id'] : 5;
		$data = $this->danhmuc_model->find($id);
		require_once __DIR__ . '/../Views/admin/index.php';
	}
	public function update()
	{
		$data = array(
			'id_dm' => $_POST['id_dm'],
			'ten_dm' => $_POST['ten_dm'],
		);
		foreach ($data as $key => $value) {
            if (strpos($value, "'") != false) {
                $value = str_replace("'", "\'", $value);
                $data[$key] = $value;
            }
        }
		$this->danhmuc_model->update($data);
		header('Location: ?url=danhmuc&operation=list');
    	exit();
	}
}
