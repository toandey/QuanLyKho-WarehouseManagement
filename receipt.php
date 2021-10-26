<div?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>


<DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phiếu nhập hàng - Hệ thống quản lý kho</title>

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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<style>
    *{
        margin: 0;
        border: 1;
    }
    .menu2{
        text-align: right;
        padding: 5px 50px;
    }
    .doi-mat-khau-dang-xuat{
        display: inline-block;
    }
    #doi-mat-khau-dang-xuat{
        color: white;
        margin-right: 5px;
        border-radius: 3px;
        width: 500px;
        max-width: 120px;
        padding: 0px 5px;
    }
    .footer1{
        position: fixed;
        bottom: 0;
        width: 100%;
    }
    .button1{
      margin-top: 30px;
      text-align: center;
    }
    .phieuxuat{
        margin: 30px auto;
        padding: 20px;
        width: 500%;
        max-width: 50%;
        border: 1px solid darkgrey;
        background-color: whitesmoke;
        border-radius: 12px;
    }
    .tao-phieu-xuat{

    }
    .input{

    }
    #input-text{
        width: 1000px;
        max-width: 100%;
    }
    #input-text1{
        width: 1000px;
        max-width: 49.6%;
        margin-top: 10px;
    }
    #button{
        border: 1;
        background-color: forestgreen;
        color: white;
    }
</style>
<body>
    <div class="header">
        Hệ thống quản lý kho
    </div>
    <div class="vien"></div>
    
    <div class="container">
      
      <div class="phieuxuat">
        <div class="tao-phieu-xuat">
            <h4 style="text-align: center;">Phiếu Nhập Hàng</h4>
            <div style="text-align: center;">Số:..............</div>
            <div style="text-align: center;">Ngày:..............</div>
            <p></p>

            <label>Nhà Cung Cấp</label><br>
            <div class="input">
                <input id="input-text" type="text" placeholder="Nhà Cung Cấp">

            </div>
            <input id="input-text1" type="text" placeholder="Địa Chỉ">
            <input id="input-text1" type="text" placeholder="Số Điện Thoại">
            <br>
            <p></p>
            <label>Mã Sản Phẩm</label><br>
            <div class="input">
                <input id="input-text" type="text" placeholder="Mã Sản Phẩm">
            </div>
            <label>Tên Sản Phẩm</label><br>
            <div class="input">
                <input id="input-text" type="text" placeholder="Tên Sản Phẩm">
            </div>
            <input id="input-text1" type="text" placeholder="Số Lượng">
            <input id="input-text1" type="text" placeholder="Giá Nhập">

        </div>
        <div class="button1">
            <a href="./product.php"><button type="button" class="btn btn-primary">Submit</button></a>
            <a href="./product.php"><button type="button" class="btn btn-secondary">Quay Trở Lại</button></a>
          </div>
      </div>
    </div>
    <div class="footer1">
        <div class="vien"></div>
        <div class="end-footer" style="font-size: 12pt;">
            Copyright 2021 by QuanLyKho. Made with ❤️️ in HaNoi.
        </div>
    </div>
</body>
</html>