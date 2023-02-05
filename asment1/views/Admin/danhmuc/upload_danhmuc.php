<?php
if(is_array($editdanhmuc)){
    extract($editdanhmuc);
}
//var_dump($editdanhmuc);
$hinhpast = "views/src/upload/" . $editdanhmuc[0]['image'];
if (is_file($hinhpast)) {
    $image = "<img src='" .$hinhpast ."' height='80px'>";
}
else {
    $image = "không có hình ảnh ";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
            width: 70%;
            margin: 0 auto;
            height: 700px;
            border-radius: 20px;
        }
        .group{
            padding: 20px 80px;

        }
        .group label{
            font-size: 1.5vw;
            padding: 0px 20px;
            color: #0f1531;
        }
        .group input{
            padding: 7px 200px;
            border-radius: 20px;

        }
        .group1{
            padding: 20px 80px;
            text-align: center;
            font-size: 1.5vw;
        }
        .group1 input{
            padding: 7px 80px;
            border-radius: 10px;
        }
        .group1 input:hover{
            background: #cc3700;
        }
        .menu{
            background:#0f1531;
            border-radius: 5px;
            text-align: center;
        }
        .menu ul {
            padding: 5px;
        }
        .menu ul li{
            list-style-type: none;
            display: inline;
            padding: 0px 50px;
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
<div class="form-group" >
    <form action="?url=capnhatdanhmuc" method="post" enctype="multipart/form-data">
        <table border="1">
            <h1> Cập nhật danh mục nhà hàng </h1>
            <div class="menu">
                <ul>
                    <li><a href="index.php?url=themdanhmuc">Danh mục</a></li>
                    <li><a href="index.php?url=themsanpham">Sản phẩm</a></li>
                    <li><a>Đơn đặt hàng</a></li>
                    <li><a>Người Dùng</a></li>
                    <li><a>Thống kê</a></li>
                </ul>
            </div>
            <div class="group" >
                <label for="">Mã danh mục</label>
                <input disabled name="id" value="<?php echo  $editdanhmuc[0]['id']; ?>" type="text" class="form-control">
            </div>
            <div class="group">
                <label for="">Tên danh mục</label>
                <input  name="usename" value="<?php echo  $editdanhmuc[0]['name']; ?>" type="text" class="form-control">
            </div>
            <div class="group">
                <label for="">Ảnh</label>
                <input name="hinh" type="file" class="form-control">
                <?php echo $editdanhmuc[0]['image']; ?>
            </div>
            <div class="group">
                <label for="">Mô tả</label>
                <input name="description" value="<?php echo $editdanhmuc[0]['description']; ?>"type="text" class="form-control">
            </div>
        </table>
        <div class="group1">
            <input type="hidden" name="id" value="<?php echo $editdanhmuc[0]['id']; ?>">
            <input class="btn btn-gradient-primary me-2" type="submit" name="capnhat" value="Cập nhật">
            <input class="btn btn-secondary" type="reset" name="reset" value="Nhập lại">
            <a href="?url=listdanhmuc"><input class="btn btn-primary" type="button" value="Danh sách"></a>
        </div>
    </form>
        </div>
    <?php
    if(isset($thongbao)&&($thongbao!=""))echo $thongbao;
    ?>

</body>
</html>
