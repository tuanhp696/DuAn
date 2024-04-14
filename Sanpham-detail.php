<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>

<head>
    <title>Thông tin sản phẩm</title>
    <link rel="icon" href="logo/bxs-car.svg" alt="">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="logo/bxs-car.svg" alt="">
    <style>
        #container {
            width: 1200px;
            margin: 30px auto;
            margin-top: 0px;
            padding-top: 110px;
        }

        h1 {
            text-align: center;
        }


        #add-to-cart-form input[type='text'] {
            margin-top: 10px;
            height: 30px;
            line-height: 30px;
        }

        #add-to-cart-form input[type='submit'] {
            width: 150px;
            height: 40px;
            margin-top: 20px;
            background: #1d1a1a;
            border: none;
            outline: none;
            color: #fff;
            font-weight: bold;
            border-radius: 20px;
            transition: 0.4s;
            font-size: medium;
        }

        #add-to-cart-form input[type='submit']:hover {
            background: rgb(130, 129, 127);
            font-size: 18px;

        }

        .product-items {
            border: 1px solid #ccc;
            padding: 30px;
        }

        .product-item {
            float: left;
            width: 23%;
            margin: 1%;
            padding: 10px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            line-height: 26px;
        }

        .product-item label {
            font-weight: bold;
        }

        .product-item p {
            margin: 0;
            line-height: 26px;
            max-height: 52px;
            overflow: hidden;
        }

        .product-price {
            color: red;
            font-weight: bold;
        }

        .product-img {
            padding: 5px;
            border: 1px solid #ccc;
            margin-bottom: 5px;
        }

        .product-item img {
            max-width: 100%;
        }

        .product-item ul {
            margin: 0;
            padding: 0;
            border-right: 1px solid #ccc;
        }

        .product-item ul li {
            float: left;
            width: 33.3333%;
            list-style: none;
            text-align: center;
            border: 1px solid #ccc;
            border-right: 0;
            box-sizing: border-box;
        }

        .clear-both {
            clear: both;
        }

        a {
            text-decoration: none;
        }

        .buy-button {
            text-align: right;
            margin-top: 10px;
        }

        .buy-button a {
            background: #444;
            padding: 5px;
            color: #fff;
        }

        #pagination {
            text-align: right;
            margin-top: 15px;
        }

        .page-item {
            border: 1px solid #ccc;
            padding: 5px 9px;
            color: #000;
        }

        .current-page {
            background: #000;
            color: #FFF;
        }

        #product-detail {
            border-top: 1px solid #000;
            padding: 15px 0 0 0;
        }

        #product-img {
            width: 30%;
            float: left;
        }

        #product-info {
            float: right;
            width: 70%;
            text-align: left;
            padding-left: 30px;
        }

        #product-img img {
            max-width: 100%;
            padding: 5px;
            border: 1px solid #000;
            background: #eee;
        }

        h1 {
            text-align: left;
            margin-top: 0;
        }

        label.add-to-cart {
            background: #000;
            border: 1px solid #000;
            margin-top: 15px;
            padding: 15px;
            display: inline-block;
            color: #fff;
        }

        label a {
            color: #FFF;
        }

        #gallery {
            margin-top: 10px;
        }

        #gallery ul {
            margin: 0;
            padding: 0;
        }

        #gallery ul li {
            width: 150px;
            float: left;
            list-style: none;
            margin-right: 5px;
            margin-bottom: 5px;
            height: 100px;
            text-align: center;
            padding: 5px;
            border: 1px solid #000;
            background: #eee;
        }

        #gallery ul li img {
            max-width: 100%;
            max-height: 100%;
            vertical-align: middle;
        }

        * {
            box-sizing: border-box;
        }
    </style>
</head>

<body>
    <div id="header">
        <a href="index.html" class="logo">
            <img src="img/logo-xe-mercedes-benz (4).jpg" alt="">
        </a>
        <div id="menu">
            <div class="item">
                <img src="logo/bx-home-alt-2.svg" alt="">
                <a href="user.html">Trang chủ</a>
            </div>
            <div class="item">
                <a href="Sanpham.php">Sản phẩm</a>
            </div>
            <div class="item">
                <a href="contact.php">Liên hệ</a>
            </div>
            <div class="item">
                <a href="Mercedes.html">Thế giới Mercedes-Benz</a>
            </div>
        </div>
        <form id="actions" action="" method="get">

            <input type="text" id="searchInput" value="<?= isset($_GET['title']) ? $_GET['title'] : "" ?>" name="title" placeholder="Tìm kiếm sản phẩm">
            <button id="search-btn" type="submit" value="Tìm Kiếm"><img src="logo/bx-search.svg"></button>

        </form>

        <div class="item">
            <a href="Login.php"><img src="logo/bxs-shopping-bag-alt.svg"></a>
        </div>

        <div class="item">
            <a href="Login.php"><img src="logo/bxs-user.svg"></a>
        </div>

    </div>

    <?php
    include 'connect2.php';
    $result = mysqli_query($con, "SELECT * FROM `product` WHERE `id` = " . $_GET['id']);
    $product = mysqli_fetch_assoc($result);
    // $imgLibrary = mysqli_query($con, "SELECT * FROM `image_library` WHERE `product_id` = ".$_GET['id']);
    // $product['thumbnail'] = mysqli_fetch_all($imgLibrary, MYSQLI_ASSOC);
    ?>
    <div id="container">
        <h2>Thông tin sản phẩm</h2>
        <div id="product-detail">
            <div id="product-img">
                <img src="img/<?php echo $product['thumbnail'] ?>" />
            </div>
            <div id="product-info">
                <h1><?= $product['title'] ?></h1>
                <label>Giá: </label><span class="product-price"><?= number_format($product['price'], 0, ",", ".") ?> VND</span><br />
                <form id="add-to-cart-form" action="cart.php?action=add" method="POST">
                    <input type="text" value="1" name="quantity[<?= $product['id'] ?>]" size="2" /><br />
                    <input type="submit" value="Mua sản phẩm" />
                </form>
                <?php if (!empty($product['images'])) { ?>
                    <div id="gallery">
                        <ul>
                            <?php foreach ($product['thumbnail'] as $img) { ?>
                                <li><img src="<?= $img['path'] ?>" /></li>
                            <?php } ?>
                        </ul>
                    </div>
                <?php } ?>
            </div>
            <div class="clear-both"></div>
            <?= $product['content'] ?>
        </div>
    </div>
    <hr width="100%" size="5px" align="center" color="black" />
    <div id="footer">
        <div class="footer-top w-70">
            <div class="register">
                <h5>Kết nối với Mercedes-Benz</h5>
                <p> Hãy giữ kết nối và nhận ngay quà tặng chính hãng để nâng tầm trải nghiệm dịch vụ.</p>
                <form action="">
                    <div class="register-form">
                        <div class="register-gender w-25">
                            <select name="" id="">
                                <option value selected>Giới tính</option>
                                <option value="male">Nam</option>
                                <option value="female">Nữ</option>
                            </select>
                        </div>
                        <div class="register-name w-80">
                            <input type="text" name="username" id="username" placeholder="Họ Tên">
                        </div>
                    </div>
                    <div class="register-email">
                        <input class="" type="email" name="email" id="email" placeholder="Email....">
                    </div>
                    <div class="register-btn">
                        <button>ĐĂNG KÝ VÀ NHẬN ƯU ĐÃI NGAY</button>
                    </div>
                </form>
            </div>
            <div class="footer-contact">
                <div class="footer-info">
                    <h4>LIÊN HỆ</h4>
                    <p>Nguyễn Trung Kiên
                        (17/3/2002)
                    </p>
                    <p>Trần Thị Thùy Trang
                        (15/12/2002)
                    </p>
                    <p>Nguyễn Đình Quốc Tuấn
                        (18/01/2002)
                    </p>
                    <p>0868889103</p>
                    <div class="footer-soial-netword">
                        <a href="https://www.facebook.com/trang.bell.1512"><img src="logo/bxl-facebook-circle.svg"></a>
                        <a href="https://www.instagram.com/kien_trung22/"><img src="logo/bxl-instagram.svg"></a>
                        <a href="https://www.youtube.com/@MercedesBenz"><img src="logo/bxl-youtube.svg"></a>
                        <a href="https://www.google.com/maps/search/Mercedes"><img src="logo/bx-map.svg"></a>
                    </div>
                </div>
            </div>
            <div class="footer-address">
                <div class="address-HN">
                    <h6>HANOI STORES</h6>
                    <p>33 Hàm Long, Hoàn Kiếm.</p>
                    <p>9 B7 Phạm Ngọc Thạch, Đống Đa.</p>
                    <p>173C Kim Mã, Ba Đình.</p>
                    <p>82 Cầu Giấy, Quan Hoa, Cầu Giấy.</p>
                </div>
                <div class="address-HCM">
                    <h6>TP.HCM STORES</h6>
                    <p>25 Nguyễn Trãi, P.Bến Thành, Quận 1.</p>
                    <p>348 Lê Văn Sỹ, Phường 14, Quận 3.</p>
                    <p>349 Quang Trung, Phường 10, Quận Gò Vấp.</p>
                </div>
            </div>
        </div>
        <div class="footer-center ">
            <div class="d-flex w-70">

                <div class="footer-guarantee ">
                    <span class="border-right">
                        <a href="">Bản quyền nội dung </a>
                    </span>
                    <span class="border-right">
                        <a href="">Cài đặt </a>
                    </span>
                    <span class="border-right">
                        <a href="">Quyền riêng tư và bảo vệ dữ liệu </a>
                    </span>
                    <span><a href="">Thông tin pháp lý </a></span>

                </div>
            </div>

        </div>
        <div class="footer-bottom d-flex">
            <div class="certificate w-50">
                <h5>© 2021 - Bản quyền của CTCP PHÁT TRIỂN SẢN PHẨM SÁNG TẠO VIỆT</h5>
                <p>Giấy chứng nhận ĐKKD số 0108150321 do Sở Kế hoạch và Đầu tư Thành phố Hà Nội cấp ngày 29/01/2018
                    123C
                    Thụy Khuê, Tây Hồ, Hà Nội</p>
            </div>
            <div class="certificate-img">
                <img src="img/Mercedes-Logo.svg.png" alt="">
            </div>
        </div>
    </div>
</body>

</html>