<?php
require_once __DIR__ . '/../model/search.php';

class SearchController {
    var $search_model;

    public function __construct() {
        $this->search_model = new search();
    }

    public function timkiem() {
        $tukhoa = isset($_GET['key']) ? htmlspecialchars(trim($_GET['key'])) : '';
        if (empty($tukhoa)) {
            $data = [];
            $message = "Vui lòng bạn nhập từ khoá tìm kiếm !";
        } else {
            $data = $this->search_model->timkiem($tukhoa);
            if (empty($data)) {
                $message = "Không tìm thấy sản phẩm nào phù hợp với từ khóa '$tukhoa'.";
            } else {
                $message = "Kết quả tìm kiếm cho từ khóa '$tukhoa':";
            }
        }
        require_once __DIR__ . '/../views/index.php';
    }
}
