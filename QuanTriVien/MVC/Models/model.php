<?php
require_once("connection.php");
class Model
{
    var $conn;
    var $table;
    var $content;
   public function __construct()
    {
        $connect = new connection();
        $this->conn = $connect->conn;
    }
   public function All()
    {
        $query = "select * from $this->table ORDER BY $this->content DESC ";

        require("result.php");

        return $data;
    }
   public function find($id)
    {
        $query = "select * from $this->table where $this->content =$id";
        return $this->conn->query($query)->fetch_assoc();
    }
        public function delete($id){
            $query = "DELETE FROM $this->table WHERE $this->content = ?";
            $stmt = $this->conn->prepare($query);
            $stmt->bind_param("i", $id);
            $stmt->execute();
            setcookie('notice', ' Xoá Thành Công', time() + 3);
            header('Location: ?url=' . $this->table);
        }
        public function insert($data){
            $col = "";
            $val = "";
            foreach($data as $key => $value){
                $col .= $key . ",";
                $val .= "'" . $this->conn->real_escape_string($value) . "',";
            }
            $col = trim($col, ",");
            $val = trim($val, ",");
    
            $query = "INSERT INTO $this->table($col) VALUES ($val)";
            $status = $this->conn->query($query);
            if($status == true){
                setcookie('notice', ' Thêm Dữ Liệu Thành Công', time() + 3);
                header('Location: ?url=' . $this->table);
            } else {
                setcookie('notice', ' Thêm Dữ Liệu Không Thành Công', time() + 3);
                header('Location: ?url=' . $this->table . '&operation=add');
            }
        }
        
        // Hàm update 
     public function update($data){
        $val = "";
        foreach($data as $key => $value){
            $val .= $key . "='" . $this->conn->real_escape_string($value) . "',";
        }
        $val = trim($val, ",");

        $query = "UPDATE $this->table SET $val WHERE $this->content = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("i", $data[$this->content]);
        $stmt->execute();

        if($stmt->affected_rows > 0){
            setcookie('notice', ' Update Thành Công', time() + 3);
            header('Location: ?url=' . $this->table);
        } else {
            setcookie('notice', ' Update không thành công', time() + 3);
            header('Location: ?url=' . $this->table . '&operation=edit&id=' . $data[$this->content]);
            }
        }
}
