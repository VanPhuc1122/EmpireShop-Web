<?php
 require_once __DIR__ . '/../Models/nguoidung.php';
class NguoiDungController
{
    var $nguoidung_model;
    public function __construct()
    {
        $this->nguoidung_model = new NguoiDung();
    }
    public function list()
    {
        $data = $this->nguoidung_model->All();
     require_once __DIR__ . '/../Views/admin/index.php';
    }
    public function add()
    {
     require_once __DIR__ . '/../Views/admin/index.php';
    }
    public function insert(){
        $data = array(
            'Tendangnhap' => $_POST['Tendangnhap'],
            'GioiTinh' => $_POST['GioiTinh'],
            'So_dienthoai' => $_POST['So_dienthoai'],
            'Email' => $_POST['Email'],
            'DiaChi' => $_POST['Diachi'],
            'Password' => md5($_POST['Password']),
            'id_quyen' => '2',
            'trangthai' => '1'
        );
        foreach($data as $key => $value){
            if(strpos($value, "'") != false){
                $value = str_replace("'", "\'", $value);
                $data[$key] = $value;
            }
        }
        $this->nguoidung_model->insert($data);
    }
    public function delete()
    {
        $id = $_GET['id'];
        $this->nguoidung_model->delete($id);
    }
    public function edit()
    {
        $id = isset($_GET['id']) ? $_GET['id'] : 1;
        $data = $this->nguoidung_model->find($id);
      require_once __DIR__ . '/../Views/admin/index.php';
    }
    public function update()
    {
        $data = array(
            'Ma_ND' => $_POST['Ma_ND'],
            'Tendangnhap' => $_POST['Tendangnhap'],
            'GioiTinh' => $_POST['GioiTinh'],
            'So_dienthoai' => $_POST['So_dienthoai'],
            'Email' =>    $_POST['Email'],
            'Diachi'  =>   $_POST['Diachi'],
            'Password' => md5($_POST['Password']),
            'id_quyen' =>  $_POST['id_quyen'],
            'trangthai'  =>  $_POST['trangthai']
        );
        foreach ($data as $key => $value) {
            if (strpos($value, "'") != false) {
                $value = str_replace("'", "\'", $value);
                $data[$key] = $value;
            }
        }
        $this->nguoidung_model->update($data);
    }
}
