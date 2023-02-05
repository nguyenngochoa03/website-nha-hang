<?php
require_once "models/db.php";
class sanpham extends db{
    function getsanpham(){
        $sql = "select * from sanpham";
        return $this->getData($sql);
    }
    function sanpham_inset($name, $image,$price, $description){
       $sql = "INSERT INTO `sanpham`(`id`, `name`, `image`, `price`, `description`) VALUES (null,'$name','$image','$price','$description')";
        return $this->getData($sql);
    }
    function sanpham_update($id,$name,$hinh,$price, $description){
        if ($hinh!= "")
            $sql = " UPDATE `sanpham` SET `name`='$name',`image`='$hinh',`price`='$price',`description`='$description' WHERE id=".$id;
        else
            $sql ="UPDATE `sanpham` SET `name`='$name',`image`='$hinh',`price`='$price',`description`='$description' WHERE id=".$id;
        return $this->getData($sql);
    }
    function sanpham_loadone($id){
        $sql = "SELECT * FROM `sanpham` WHERE id=".$id;
        $sanpham=$this->getData($sql);
        return $sanpham;
    }
    function deletesanpham()
    {
        $id = $_GET['id'];
        $sql = "delete from sanpham where id = $id";
        $this->getData($sql, false);
    }
}
?>
