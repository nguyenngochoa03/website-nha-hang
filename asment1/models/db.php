<?php
require_once "env.php";
class db
{
    public $connect;

// tạo kết nối từ project php sang mysql
    function getConnect()
    {
        $connect = new PDO("mysql:host=" . DBHOST
            . ";dbname=" . DBNAME
            . ";charset=" . DBCHARSET,
            DBUSER,
            DBPASS
        );
        return $connect;
    }

    public function __construct()
    {
        $this->connect = $this->getConnect();
    }
# neu nhu ko truyen gi thi se dung cho cau truy van co dang select
# neu truyen getall = false se dung cho cau truy vaan co dang them sua xoa
    function getData($query, $getAll = true)
    {
//    $conn = getConnect();

        $stmt = $this->connect->prepare($query);
        $stmt->execute();
        if ($getAll) {
            return $stmt->fetchAll();
        }

        return $stmt->fetch();
    }
}
?>