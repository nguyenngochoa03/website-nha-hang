<?php
 require_once "models/danhmuc.php";
require_once "models/sanpham.php";
 // DANH MỤC

 class danhmucControllers

 {
  function listdanhmuc()
  {
   //gọi model
   $danhmuc = new danhmuc();
   $danhmuc = $danhmuc->getdanhmuc();

   include_once "views/Admin/danhmuc/listdanhmuc.php";
  }

  function add_danhmuc()
  {
   $danhmuc = new danhmuc();
   if (isset($_POST["themmoi"]) && ($_POST["themmoi"])) {
    $name = $_POST["name"];
    $description = $_POST["description"];
    $hinh = $_FILES['hinh']['name'];
    $maxsize = 2000000;
    $allowUpload = true;
    $allowType = ['jpg', 'png', 'jpeg', 'gif'];
    $target_dir = 'views/src/upload/';
    $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
    if ($_FILES['hinh']['size'] > $maxsize) {
     $thongbao = " Ảnh của bạn có dung lượng quá lớn không thể upload";
     $allowUpload = false;
    }
    if (!in_array($target_file, $allowType)) {
     $thongbao = 'Chỉ được upload các định dạng JPG, PNG, JPEG, GIF';
     $allowupload = false;
    }
    if ($allowUpload == true) {
     move_uploaded_file($_FILES['hinh']['tmp_name'], $target_file);
     $thongbao = "Ảnh của bạn đã được thêm thành công ";
     $danhmuc = $danhmuc->getdanhmuc_inset($name, $hinh, $description);
     $thongbao = "Thêm thành công";
     header("location: ?url=/");
    } else {
     $thongbao = "Bạn không thể thêm danh mục";
    }

   }
   include_once "views/Admin/danhmuc/add_danhmuc.php";
  }

  function upload_danhmuc()
  {
   $danhmuc = new danhmuc();
   if (isset($_POST['capnhat']) && $_POST['capnhat']) {
    $id =$_POST['id'];
    $usename = $_POST['usename'];
    $description = $_POST['description'];
    $hinh = $_FILES['hinh']['name'];
    $maxsize = 2000000;
    $allowUpload = true;
    $allowType = ['jpg', 'png', 'jpeg', 'gif'];
    $target_dir = 'views/src/upload/';
    $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
    if ($_FILES['hinh']['size'] > $maxsize) {
     $thongbao = " Ảnh của bạn có dung lượng quá lớn không thể upload";
     $allowUpload = false;
    }
    if (!in_array($target_file, $allowType)) {
     $thongbao = 'Chỉ được upload các định dạng JPG, PNG, JPEG, GIF';
     $allowupload = false;
    }
    if ($allowUpload == true) {
     move_uploaded_file($_FILES['hinh']['tmp_name'], $target_file);
     $thongbao = "Ảnh của bạn đã được thêm thành công ";
     $danhmuc = $danhmuc->getdanhmuc_update($id,$usename,$hinh, $description);
//     echo $danhmuc;
     $thongbao = "Thêm thành công";
     header("location:index.php?url=listdanhmuc");
    }
   }
   include_once "views/Admin/danhmuc/upload_danhmuc.php";
  }

  function editdanhmuc()
  {
   $danhmuc = new danhmuc();
   if (isset($_GET['id']) && ($_GET['id'] > 0)) {
    $editdanhmuc = $danhmuc->danhmuc_loadone($_GET['id']);

   }
   include_once "views/Admin/danhmuc/upload_danhmuc.php";
  }

  function deletedanhmuc()
  {
   $danhmuc = new danhmuc();
   $danhmuc->deletedanhmuc();
   header("location:index.php?url=listdanhmuc");
   include_once "views/Admin/danhmuc/listdanhmuc.php";
  }
 }


 // SẢN PHẨM

class sanphamControllers
{
 function add_sanpham()
 {
  $sanpham = new sanpham();
  if (isset($_POST["themmoi"]) && ($_POST["themmoi"])) {
   $name = $_POST["name"];
   $price = $_POST["price"];
   $description = $_POST["description"];
   $hinh = $_FILES['hinh']['name'];
   $maxsize = 2000000;
   $allowUpload = true;
   $allowType = ['jpg', 'png', 'jpeg', 'gif'];
   $target_dir = 'views/src/upload/';
   $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
   if ($_FILES['hinh']['size'] > $maxsize) {
    $thongbao = " Ảnh của bạn có dung lượng quá lớn không thể upload";
    $allowUpload = false;
   }
   if (!in_array($target_file, $allowType)) {
    $thongbao = 'Chỉ được upload các định dạng JPG, PNG, JPEG, GIF';
    $allowupload = false;
   }
   if ($allowUpload == true) {
    move_uploaded_file($_FILES['hinh']['tmp_name'], $target_file);
    $thongbao = "Ảnh của bạn đã được thêm thành công ";
    $sanpham = $sanpham->sanpham_inset($name, $hinh, $price, $description);
    $thongbao = "Thêm thành công";
    header("location: ?url=list_sanpham");
   } else {
    $thongbao = "Bạn không thể thêm danh mục";
   }

  }
  include_once "views/Admin/sanpham/add_sanpham.php";
 }

 function listsanpham()
 {
  //gọi model
  $sanpham = new sanpham();
  $sanpham = $sanpham->getsanpham();

  include_once "views/Admin/sanpham/list_sanpham.php";
 }

 function upload_sanpham()
 {
  $sanpham = new sanpham();
  if (isset($_POST['capnhat']) && $_POST['capnhat']) {
   $id = $_POST['id'];
   $usename = $_POST['usename'];
   $price = $_POST['price'];
   $description = $_POST['description'];
   $hinh = $_FILES['hinh']['name'];
   $maxsize = 2000000;
   $allowUpload = true;
   $allowType = ['jpg', 'png', 'jpeg', 'gif'];
   $target_dir = 'views/src/upload/';
   $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
   if ($_FILES['hinh']['size'] > $maxsize) {
    $thongbao = " Ảnh của bạn có dung lượng quá lớn không thể upload";
    $allowUpload = false;
   }
   if (!in_array($target_file, $allowType)) {
    $thongbao = 'Chỉ được upload các định dạng JPG, PNG, JPEG, GIF';
    $allowupload = false;
   }
   if ($allowUpload == true) {
    move_uploaded_file($_FILES['hinh']['tmp_name'], $target_file);
    $thongbao = "Ảnh của bạn đã được thêm thành công ";
    $sanpham = $sanpham->sanpham_update($id, $usename, $hinh, $price, $description);
//     echo $danhmuc;
    $thongbao = "Thêm thành công";
    header("location:index.php?url=list_sanpham");
   }
  }
  include_once "views/Admin/sanpham/upload_sanpham.php";
 }

 function edit_sanpham()
 {
  $sanpham = new sanpham();
  if (isset($_GET['id']) && ($_GET['id'] > 0)) {
   $editsanpham = $sanpham->sanpham_loadone($_GET['id']);

  }
  include_once "views/Admin/sanpham/upload_sanpham.php";
 }
 function delete_sanpham(){
  $sanpham = new sanpham();
  $sanpham-> deletesanpham();
  header("location:index.php?url=list_sanpham");
  include_once "views/Admin/sanpham/list_sanpham.php";
 }
}
?>
