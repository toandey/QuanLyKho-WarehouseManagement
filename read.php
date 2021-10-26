<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Chi Tiết Sản Phẩm - Hệ Thống Quản Lý Kho</title>

    <!--css-->
    <link rel="stylesheet" href="./css/style.css">
    <!--icon-->
  <link rel="shortcut icon" href="https://codesign.com.bd/conversations/content/images/2020/03/Sprint-logo-design-Codesign-agency.png" type="image/x-icon">
  <!--seo-->
  <meta property = "og:description" content="Hệ thống quản lý kho hàng thông minh, hiện đại, dễ dàng sử dụng. Phù hợp cho hộ kinh doanh và các doanh nghiệp nhỏ.">
  <meta property = "og:title" content="HỆ THỐNG QUẢN LÝ KHO HÀNG - ĐĂNG NHẬP - ĐĂNG KÝ">
  <meta property = "og:url" content="QUANLYKHO.GA">
  <meta property = "og:image" content="https://quanlykho.ga/img/img-logo-seo.png">
  <meta property = "og:type" content="software">

    <!--boostrap-->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{
            font-size: 16pt;
        }
        .wrapper{
            width: 800px;
            margin: 0 auto;
        }
        .footer1{
          position: fixed;
          bottom: 0;
          width: 100%;
        }
    </style>
</head>
<body>
    <div class="header">
        Hệ thống quản lý kho
    </div>
    <div class="vien"></div>
  <?php
    if (isset($_GET["id"]) && !empty(trim($_GET["id"]))) {
        require_once "config.php";

        $id = trim($_GET["id"]);
        $query = mysqli_query($link, "SELECT * FROM sanpham WHERE ID = '$id'");

        if ($sanpham    = mysqli_fetch_assoc($query)) {
            $masanpham  = $sanpham["masanpham"];
            $tensanpham = $sanpham["tensanpham"];
            $gianhap    = $sanpham["gianhap"];
            $giaban     = $sanpham["giaban"];
            $tonkho     = $sanpham["tonkho"];
        } else {
            header("location: read.php");
            exit();
        }

        mysqli_close($link);
    } else {
        header("location: read.php");
        exit();
    }
  ?>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h1> Chi tiết sản phẩm</h1>
                    </div>
                    <div class="form-group">
                        <b>Mã sản phẩm: </b><?php echo $masanpham ?>
                    </div>
                    <div class="form-group">
                        <b>Tên sản phẩm: </b> <?php echo $tensanpham ?>
                    </div>
                    <div class="form-group">
                        <b>Giá Nhập: </b><?php echo $gianhap ?>
                        <b>Giá Bán: </b><?php echo $giaban ?>
                    </div>
                    <div class="form-group">
                        
                    </div>
                    <div class="form-group">
                        <b>Số lượng Hàng Tồn: </b><?php echo $tonkho ?>
                    </div>
                    <p><a href="product.php" class="btn btn-primary">Quay trở lại</a></p>
                </div>
            </div>
        </div>
    </div>
    <div class="footer1">

      <div class="end-footer" style="font-size: 12pt;">
          Copyright 2021 by QuanLyKho. Made with ❤️️ in HaNoi.
      </div>
    </div>
</body>
</html>