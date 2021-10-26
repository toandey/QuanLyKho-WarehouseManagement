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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Báo Cáo - Hệ thống quản lý kho hàng</title>
    <!---->

    <!--css-->
    <link rel="stylesheet" href="./css/style.css">
    <!--icon-->
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
        padding: 0px;
        margin: 0px;
        border: 1px;
        box-sizing: border-box;
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
    .container{
        text-align: center;
        width: 100%;
        height: 100%;
        margin-left: auto;
        margin-right: auto;
    }
    .footer1{
        position: fixed;
        bottom: 0;
        width: 100%;
    }
    .head-report{
        font-size: 1.2rem;

    }
    .xuat-bao-cao{
        margin: 10px auto;
        padding: 20px;
        width: 200%;
        max-width: 50%;
    }
    .bao-cao-hang-ton{
        padding: 10px;
        margin-bottom: 10px;
        border: 1px solid darkgrey;
        border-radius: 10px;

    }
    #input-text{
        border: 1px solid black;
        margin: 5px 5px;
        width: 3000px;
        max-width: 30%;
        padding: 5px;
        border-radius: 5px;
    }
    #button-text{
        border: 1px solid black;
        margin: 5px 5px;
        width: 3000px;
        max-width: 130px;
        padding: 5px;
        border-radius: 5px;
        background-color: green;
        color: white;
    }
</style>
<body>
    <div class="header">
        Hệ thống quản lý kho
    </div>
    <div class="vien"></div>
    <div class="menu2">
      Xin chào <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>  
      <div class="doi-mat-khau-dang-xuat">
        <a href="reset-password.php" ><button style="background-color: #ffca2c; color:black" id="doi-mat-khau-dang-xuat">Đổi mật khẩu</button></a>
      </div>
      <div class="doi-mat-khau-dang-xuat">
        <a href="logout.php"><button id="doi-mat-khau-dang-xuat" style="background-color: #dc3545;">Đăng xuất</button></a>
      </div>
    </div>    
    <div class="vien"></div>
    <div class="nav-bar">
        <nav class="navbar navbar-expand-lg navbar-light bg-light" style="max-height: 35px">
            <div class="container-fluid">
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link" href="./dashboard.php">Tổng Quan</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="./product.php">Sản Phẩm</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Báo Cáo</a>
                </ul>
                </form>
              </div>
            </div>
        </nav>
    </div>
    <div class="vien"></div>

    <div class="container">
        <div class="xuat-bao-cao">
            <div class="bao-cao-hang-ton">
                <div class="head-report">Xuất Báo Cáo Hàng Tồn Kho</div>
                Từ <input type="date"  id="input-text">
                Đến <input type="date"  id="input-text">
                <button id="button-text">Xuất báo cáo</button>
            </div>

            <div class="bao-cao-hang-ton">
                <div class="head-report">Xuất Báo Cáo Giá Trị Kho</div>
                Từ <input type="date"  id="input-text">
                Đến <input type="date"  id="input-text">
                <button id="button-text">Xuất báo cáo</button>
            </div>

            <div class="bao-cao-hang-ton">
                <div class="head-report">Xuất Danh Sách Phiếu Nhập</div>
                Từ <input type="date"  id="input-text">
                Đến <input type="date"  id="input-text">
                <button id="button-text">Xuất báo cáo</button>
            </div>

            <div class="bao-cao-hang-ton">
                <div class="head-report">Xuất Danh Sách Phiếu Xuất</div>
                Từ <input type="date"  id="input-text">
                Đến <input type="date"  id="input-text">
                <button id="button-text">Xuất báo cáo</button>
            </div>

            <div class="bao-cao-hang-ton">
                <div class="head-report">Xuất Báo Cáo</div>
                Từ <input type="date"  id="input-text">
                Đến <input type="date"  id="input-text">
                <button id="button-text">Xuất báo cáo</button>
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