<?php
 require_once "models/db.php";
 class dichvu extends db {
     function getdichvu(){
         $sql = "select * from dichvu";
         return $this->getData($sql);
     }
     function dichvu_inset($name, $image,$price, $description){
         $sql = "INSERT INTO `dichvu`(`id_dv`, `name`, `image`, `price`, `description`) VALUES (null,'$name','$image','$price','$description')";
         return $this->getData($sql);
     }

 }
?>
