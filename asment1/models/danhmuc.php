<?php
require_once "models/db.php";
class danhmuc extends db
{
    function getdanhmuc(){
        $sql = "select * from danhmuc";
        return $this->getData($sql);
    }
    function getdanhmuc_inset($name,$image,$description){
       $sql ="INSERT INTO `danhmuc`(`id`, `name`, `image`, `description`) VALUES (null,'$name','$image','$description')";
        return $this->getData($sql);
    }
    function getdanhmuc_update($id,$name,$hinh,$description){
        if ($hinh!= "")
            $sql = "UPDATE `danhmuc` SET `name`='$name',`image`='$hinh',`description`='$description' WHERE id=".$id;
        else
            $sql ="UPDATE `danhmuc` SET `name`='$name',`image`='$hinh',`description`='$description' WHERE id=".$id;
        return $this->getData($sql);
    }

    function danhmuc_loadone($id){
        $sql = "SELECT * FROM `danhmuc` WHERE id=".$id;
        $danhmuc=$this->getData($sql);
        return $danhmuc;
    }
    function deletedanhmuc()
{
    $id = $_GET['id'];
    $sql = "delete from danhmuc where id = $id";
    $this->getData($sql, false);
}
}
?>
