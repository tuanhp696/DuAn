<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>

<head>
    <title>Danh sách sản phẩm</title>
    <link rel="icon" href="logo/bxs-car.svg" alt="">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="logo/bxs-car.svg" alt="">
    <style>
        .container {
            width: 1200px;
            margin: 30px auto;
            margin-top: 90px;
        }

        h1 {
            text-align: center;
        }

        .product-items {
            padding: 30px;
            text-align: center;
        }

        .product-item {
            float: left;
            width: 23%;
            margin: 1%;
            padding: 25px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            line-height: 26px;
            height: 290px;
            box-shadow: 5px 5px 1px 1px darkgray;
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
            <a href="cart.php"><img src="logo/bxs-shopping-bag-alt.svg"></a>
        </div>

        <div class="item">
            <a href="Login.php"><img src="logo/bxs-user.svg"></a>
        </div>

    </div>
    <hr width="100%" size="5px" align="center" color="black" />
    <?php
    $search = isset($_GET['title']) ? $_GET['title'] : "";
    if ($search) {
        $where = "WHERE `title` LIKE '%" . $search . "'%";
    }
    include 'connect2.php';
    $item_per_page = !empty($_GET['per_page']) ? $_GET['per_page'] : 8;
    $current_page = !empty($_GET['page']) ? $_GET['page'] : 1; //Trang hiện tại
    $offset = ($current_page - 1) * $item_per_page;
    if ($search) {

        $products = mysqli_query($con, "SELECT * FROM `product` WHERE `title` LIKE '%" . $search . "%' ORDER BY `id` ASC  LIMIT " . $item_per_page . " OFFSET " . $offset);
        $totalRecords = mysqli_query($con, "SELECT * FROM `product`WHERE `title` LIKE '%" . $search . "%'");
    } else {

        $products = mysqli_query($con, "SELECT * FROM `product` ORDER BY `id` ASC  LIMIT " . $item_per_page . " OFFSET " . $offset);
        $totalRecords = mysqli_query($con, "SELECT * FROM `product`");
    }
    $totalRecords = $totalRecords->num_rows;
    $totalPages = ceil($totalRecords / $item_per_page);
    ?>
    <div class="container">
        <h1>Danh sách sản phẩm</h1>
        <div class="product-items">
            <?php
            while ($row = mysqli_fetch_array($products)) {
            ?>
                <div class="product-item">
                    <div class="product-img">
                        <a href="Sanpham-detail.php?id=<?= $row['id'] ?>"><img src="img/<?php echo $row['thumbnail']; ?>" /></a>
                    </div>
                    <strong><a href="Sanpham-detail.php?id=<?= $row['id'] ?>"><?= $row['title'] ?></a></strong><br />
                    <label>Giá: </label><span class="product-price"><?= number_format($row['price'], 0, ",", ".") ?>VNĐ</span><br />
                    
                </div>
            <?php } ?>
            <div class="clear-both"></div>
            <?php
            include './pagination.php';
            ?>
            <div class="clear-both"></div>
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