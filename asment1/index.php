<?php

$url = isset($_GET['url']) == true ? $_GET['url'] : "/";
switch ($url) {

    case '/':
        // gọi qua danh sách sản phẩm
        require_once 'controllers/adminControllers.php';
        // khỏi tại đối tượng
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

    case 'list_sanpham':
        require_once 'controllers/adminControllers.php';
        $sanphamController = new sanphamControllers();
        echo $sanphamController->listsanpham();
        break;
    case 'themsanpham':
        require_once 'controllers/adminControllers.php';
        $sanphamController = new sanphamControllers();
        echo $sanphamController->add_sanpham();
        break;
    case 'capnhatsanpham':

        require_once 'controllers/adminControllers.php';
        $sanphamController = new sanphamControllers();
        echo $sanphamController->upload_sanpham();
        break;
    case 'suasanpham':
        require_once 'controllers/adminControllers.php';
        $sanphamController = new sanphamControllers();
        echo $sanphamController->edit_sanpham();
        break;
    case "xoasanpham":
        require_once 'controllers/adminControllers.php';
        $sanphamController = new sanphamControllers();
        echo $sanphamController->delete_sanpham();
        break;

        // DỊCH VỤ
    case 'themdichvu':
        require_once 'controllers/adminControllers.php';
        $dichvuController = new dichvuControllers();
        echo $dichvuController->add_dichvu();
        break;
    case 'list_dichvu':
        require_once 'controllers/adminControllers.php';
        $dichvuController = new dichvuControllers();
        echo $dichvuController->listdichvu();
        break;
    case 'capnhatdịchvu':
        require_once 'controllers/adminControllers.php';
        $dichvuController = new dichvuControllers();
        echo $dichvuController->upload_dichvu();
        break;
    case 'suadichvu':
        require_once 'controllers/adminControllers.php';
        $dichvuController = new dichvuControllers();
        echo $dichvuController->edit_dichvu();
        break;
    case "xoadichvu":
        require_once 'controllers/adminControllers.php';
        $dichvuController = new dichvuControllers();
        echo $dichvuController->delete_dichvu();
        break;
}
?>
