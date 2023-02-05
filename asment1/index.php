<?php

$url = isset($_GET['url']) == true ? $_GET['url'] : "/";
switch ($url) {

    case '/':
        require_once 'controllers/adminControllers.php';
        $danhmucController = new danhmucControllers();
        echo $danhmucController->listdanhmuc();
        break;
    case 'listdanhmuc':
        require_once 'controllers/adminControllers.php';
        $danhmucController = new danhmucControllers();
        echo $danhmucController->listdanhmuc();
        break;
    case 'themdanhmuc':
        require_once 'controllers/adminControllers.php';
        $danhmucController = new danhmucControllers();
        echo $danhmucController->add_danhmuc();
        break;
    case 'capnhatdanhmuc':
        //dieu huong ve trang danh sach san pham
        require_once 'controllers/adminControllers.php';
        $danhmucController = new danhmucControllers();
        echo $danhmucController->upload_danhmuc();
        break;
    case 'suadanhmuc':
        require_once 'controllers/adminControllers.php';
        $danhmucController = new danhmucControllers();
        echo $danhmucController->editdanhmuc();
        break;
    case 'xoadanhmuc':
        require_once 'controllers/adminControllers.php';
        $danhmucController = new danhmucControllers();
        echo $danhmucController->deletedanhmuc();
        break;
        // SẢN PHẨM

//    case '/':
//        require_once 'controllers/adminControllers.php';
//        $sanphamController = new sanphamControllers();
//        echo $sanphamController->listsanpham();
//        break;
}
?>
