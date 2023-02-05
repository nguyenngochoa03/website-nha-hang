<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Danh mục nhà hàng</title>
    <style>
        h1{
            text-align: center;
            color: #a01a1f;
            background: white;
            border-radius: 20px;
            height: 70px;
        }
        .form-group{
            background: #46c35f;
            width: 90%;
            margin: 0 auto;
            height: 700px;
            border-radius: 20px;
        }

        table{
            text-align: center;
            width: 100%;
            height: 100px;
            color: #a01a1f;
        }
        .menu{
            background:#0f1531;
            border-radius: 5px;
            text-align: center;
        }
        .menu ul {
            padding: 15px;
        }
        .menu ul li{
            list-style-type: none;
            display: inline;
            padding: 0px 20px;
        }
        .menu ul li a{
            text-decoration: none;
            font-family: 'Roboto', sans-serif;
            font-size: 1.2vw;
            color: #FCE0A6;
            transition: 0.5s;
        }
        .menu ul li a:hover{
            color: #F9F400;
            font-size: 1vw;
            font-weight: 900;
        }
    </style>
</head>
<body>
<div class="form-group">

    <table border="1">
        <h1>  Danh sách Sản phẩm nhà hàng </h1>
        <div class="menu">
            <ul>
                <li><a href="index.php?url=themdanhmuc">Danh mục</a></li>
                <li><a href="index.php?url=themsanpham">Sản phẩm</a></li>
                <li><a>Đơn đặt hàng</a></li>
                <li><a>Người Dùng</a></li>
                <li><a>Thống kê</a></li>
                <li><a>Dịch vụ</a></li>
            </ul>
            <tr>
                <td>ID</td>
                <td>Tên danh mục</td>
                <td>Ảnh</td>
                <td>Giá tiền</td>
                <td>Mô tả</td>
                <td>Chức năng</td>
            </tr>

            <?php
            foreach ($sanpham as $key=>$value) {
                extract($value);
                $hinh = "views/src/upload/" . $image;
                if (is_file($hinh)) {
                    $image= "<img src='" . $hinh . "' height='80px'>";
                }
                else {
                    $image = "không có hình ảnh ";
                }

                echo'
            <tr>
            <td>' .$id. '</td>
            <td>' .$name. '</td>
            <td>' .$image. '</td>           
            <td>' .$price. ' </td>
             <td>' .$description. ' </td>
            <td><a href="?url=suasanpham&id='.$id.'"><input   type="button"  value="Sửa"></a></td>
            <td><a href="?url=themsanpham"><input   type="submit" name="themmoi" value="Thêm mới"></a></td>           
            <td><a href="?url=xoasanpham&id='.$id.'" onclick="return confirm(`Bạn muốn xóa?`)" ; id="delete">
                                    <input class="btn btn-danger btn2" type="button" value="Xóa"></a></td>
                                    
        </tr>
        
         ';
            }
            ?>
        </div>
    </table>

</div>
</body>
</html>

