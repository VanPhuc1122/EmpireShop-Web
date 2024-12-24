<?php
    class Database{
        private static $dsn = 'mysql:host=localhost;dbname=webdonghotructuyen';
        private static $username = 'root';
        private static $password = '';
        private static $db;
        public static function getDB(){
            if(!isset(self::$db)){
                try {
                    self::$db = new PDO(self::$dsn, self::$username, self::$password, self::$db);
                    self::$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                } catch (PDOException $e) {
                    $error_message = $e->getMessage();
                    echo 'Lỗi kết nối cơ sở dữ liệu'. $error_message;
                    exit();
                }
            }
            return self::$db; // trả về dữ liệu
        }
    }
?>