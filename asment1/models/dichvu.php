<?php
 require_once "models/db.php";
 class dichvu extends db {
     function getdichvu(){
         $sql = "select * from dichvu";
         return $this->getData($sql);
     }
     function dichvu_inset($name, $image,$price, $description){
         $sql = "INSERT INTO `dichvu`(`id`, `name`, `image`, `price`, `description`) VALUES (null,'$name','$image','$price','$description')";
         return $this->getData($sql);
     }
     function dichvu_update($id, $name, $hinh, $price, $description){
         if ($hinh!= "")
             $sql = " UPDATE `dichvu` SET `name`='$name',`image`='$hinh',`price`='$price',`description`='$description' WHERE id_dv=".$id_dv;
         else
             $sql ="UPDATE `dichvu` SET `name`='$name',`image`='$hinh',`price`='$price',`description`='$description' WHERE id_dv=".$id_dv;
         return $this->getData($sql);
     }
     function dichvu_loadone($id){
         $sql = "SELECT * FROM `dichvu` WHERE id=".$id;
         $dichvu=$this->getData($sql);
         return $dichvu;
     }
      function deletedichvu()
      {
          $id = $_GET['id'];
          $sql = "DELETE FROM `dichvu` WHERE id = $id";
          $this->getData($sql, false);
      }
 }
?>
