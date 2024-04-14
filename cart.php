<?php session_start(); ?>
<!DOCTYPE html>
<html>

<head>
    <title>Giỏ Hàng</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="logo/bxs-car.svg" alt="">
    <link rel="stylesheet" href="css/style.css">
</head>
<style>
    * {
        box-sizing: border-box;
    }

    .container {
        width: 1200px;
        margin: 80px auto;
        padding: 15px;
    }

    h1 {
        text-align: center;
    }

    #cart-form {
        margin-top: 20px;
    }

    .product-items {
        border: 1px solid #000;
        padding: 30px;
    }

    .product-item {
        float: left;
        width: 23%;
        margin: 1%;
        padding: 10px;
        box-sizing: border-box;
        border: 1px solid #000;
        line-height: 26px;
        box-shadow: 5px 5px 1px #AAA;
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
        color: black;
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
        border-right: 1px solid #000;
    }

    .product-item ul li {
        float: left;
        width: 33.3333%;
        list-style: none;
        text-align: center;
        border: 1px solid #000;
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
        border: 1px solid #000;
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
        margin-bottom: 15px;
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

    table {
        border-collapse: collapse;
        width: 1170px;
    }

    table,
    th,
    td {
        border: none;
    }

    table .product-img img {
        max-width: 100px;
    }

    table .product-name {
        width: 350px;
        padding-left: 20px;
    }

    table .product-img {
        width: 120px;
        text-align: center;
    }

    table .product-number {
        width: 50px;
        text-align: center;
    }

    table .product-price {
        width: 100px;
        text-align: center;
    }

    table .product-quantity input {
        width: 40px;
        text-align: center;
    }

    table .product-quantity {
        width: 60px;
        text-align: center;
    }

    table th.total-money {
        color: black;
    }

    table .total-money {
        width: 100px;
        text-align: center;
        font-weight: bold;
        color: red;
    }

    #form-button {
        text-align: right;
        margin-top: 15px;
    }

    .product-delete {
        width: 100px;
        text-align: center;
    }

    .order {
        border-radius: 2px;
    }

    #cart-form label {
        width: 100px;
        display: inline-block;
        margin-top: 15px;
    }

    #cart-form textarea {
        margin-top: 15px;
    }

    #cart-form input {
        line-height: 30px;
        height: 30px;
    }

    #form-button input[name="update_click"] {
        width: 110px;
        height: 35px;
        background: #1d1a1a;
        border: none;
        outline: none;
        color: #fff;
        font-weight: bold;
        border-radius: 20px;
        transition: 0.4s;
        font-size: medium;
    }

    #form-button input[name="update_click"]:hover{
        background: rgb(130, 129, 127);
        font-size: 18px;
    }
    #row-total {
        background: #eee;
        color: #000;
    }


    input[name="order_click"] {
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

    input[name="order_click"]:hover{
        background: rgb(130, 129, 127);
        font-size: 18px;
    }
    #row-total {
        background: #eee;
        color: #000;
    }

    #add-to-cart-form input[type='text'] {
        margin-top: 10px;
        height: 30px;
        line-height: 30px;
    }

    #add-to-cart-form input[type='submit'] {
        background: #000;
        border: 1px solid #000;
        margin-top: 10px;
        padding: 15px;
        display: inline-block;
        color: #fff;
    }
</style>

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

    <hr width="100%" size="5px" align="center" color="black" />
    <?php
    include 'connect2.php';
    if (!isset($_SESSION["cart"])) {
        $_SESSION["cart"] = array();
    }
    $error = false;
    $success = false;
    if (isset($_GET['action'])) {

        function update_cart($add = false)
        {
            foreach ($_POST['quantity'] as $id => $quantity) {
                if ($quantity == 0) {
                    unset($_SESSION["cart"][$id]);
                } else {
                    if ($add) {
                        $_SESSION["cart"][$id] += $quantity;
                    } else {
                        $_SESSION["cart"][$id] = $quantity;
                    }
                }
            }
        }

        switch ($_GET['action']) {
            case "add":
                update_cart(true);
                // header('Location: cart.php');
                break;
            case "delete":
                if (isset($_GET['id'])) {
                    unset($_SESSION["cart"][$_GET['id']]);
                }
                // header('Location: cart.php');
                break;
            case "submit":
                if (isset($_POST['update_click'])) { //Cập nhật số lượng sản phẩm
                    update_cart();
                    header('Location: cart.php');
                } elseif ($_POST['order_click']) { //Đặt hàng sản phẩm
                    if (empty($_POST['fullname'])) {
                        $error = "Bạn chưa nhập tên của người nhận";
                    } elseif (empty($_POST['phoneNumber'])) {
                        $error = "Bạn chưa nhập số điện thoại người nhận";
                    } elseif (empty($_POST['address'])) {
                        $error = "Bạn chưa nhập địa chỉ người nhận";
                    } elseif (empty($_POST['quantity'])) {
                        $error = "Giỏ hàng rỗng";
                    }
                    if ($error == false && !empty($_POST['quantity'])) { //Xử lý lưu giỏ hàng vào db
                        $products = mysqli_query($con, "SELECT * FROM `product` WHERE `id` IN (" . implode(",", array_keys($_POST['quantity'])) . ")");
                        $total = 0;
                        $orderProducts = array();
                        while ($row = mysqli_fetch_array($products)) {
                            $orderProducts[] = $row;
                            $total += $row['price'] * $_POST['quantity'][$row['id']];
                        }
                        $insertOrder = mysqli_query($con, "INSERT INTO `order` (`id`, `fullname`, `phoneNumber`, `address`, `note`, `total`) VALUES (NULL, '" . $_POST['fullname'] . "', '" . $_POST['phoneNumber'] . "', '" . $_POST['address'] . "', '" . $_POST['note'] . "', '" . $total . "');");
                        $orderID = $con->insert_id;
                        $insertString = "";
                        foreach ($orderProducts as $key => $product) {
                            $insertString .= "(NULL, '" . $orderID . "', '" . $product['id'] . "', '" . $_POST['quantity'][$product['id']] . "', '" . $product['price'] . "')";
                            if ($key != count($orderProducts) - 1) {
                                $insertString .= ",";
                            }
                        }
                        $insertOrder = mysqli_query($con, "INSERT INTO `cart` (`id`, `id_product`, `id_cart`, `Soluong`, `price`) VALUES " . $insertString . ";");
                        $success = "Đặt hàng thành công";
                        unset($_SESSION['cart']);
                    }
                }
                break;
        }
    }
    if (!empty($_SESSION["cart"])) {
        $products = mysqli_query($con, "SELECT * FROM `product` WHERE `id` IN (" . implode(",", array_keys($_SESSION["cart"])) . ")");
    }
    ?>
    <div class="container">
        <?php if (!empty($error)) { ?>
            <div id="notify-msg">
                <?= $error ?>. <a href="javascript:history.back()">Quay lại</a>
            </div>
        <?php } elseif (!empty($success)) { ?>
            <div id="notify-msg">
                <?= $success ?>. <a href="Sanpham.php">Tiếp tục mua hàng</a>
            </div>
        <?php } else { ?>

            <h1>Giỏ hàng</h1>
            <form id="cart-form" action="cart.php?action=submit" method="POST">
                <table>
                    <tr>
                        <th class="product-number">STT</th>
                        <th class="product-name">Tên sản phẩm</th>
                        <th class="product-img">Ảnh sản phẩm</th>
                        <th class="product-price">Đơn giá</th>
                        <th class="product-quantity">Số lượng</th>
                        <th class="total-money">Thành tiền (VNĐ)</th>
                        <th class="product-delete">Thao tác</th>
                    </tr>
                    <?php
                    if (!empty($products)) {
                        $total = 0;
                        $num = 1;
                        while ($row = mysqli_fetch_array($products)) {
                    ?>
                            <tr>
                                <td class="product-number"><?= $num++; ?></td>
                                <td class="product-name"><?= $row['title'] ?></td>
                                <td class="product-img"><img src="img/<?php echo $row['thumbnail'] ?>" /></td>
                                <td class="product-price"><?= number_format($row['price'], 0, ",", ".") ?></td>
                                <td class="product-quantity"><input type="text" value="<?= $_SESSION["cart"][$row['id']] ?>" name="quantity[<?= $row['id'] ?>]" /></td>
                                <td class="total-money"><?= number_format($row['price'] * $_SESSION["cart"][$row['id']], 0, ",", ".") ?></td>
                                <td class="product-delete"><a href="cart.php?action=delete&id=<?= $row['id'] ?>">Xóa</a></td>
                            </tr>
                        <?php
                            $total += $row['price'] * $_SESSION["cart"][$row['id']];
                            
                        }
                        ?>
                        <tr id="row-total">
                            <td class="product-number">&nbsp;</td>
                            <td class="product-name">Tổng tiền</td>
                            <td class="product-img">&nbsp;</td>
                            <td class="product-price">&nbsp;</td>
                            <td class="product-quantity">&nbsp;</td>
                            <td class="total-money"><?= number_format($total, 0, ",", ".") ?></td>
                            <td class="product-delete">Xóa</td>
                        </tr>
                    <?php
                    }
                    ?>
                </table>
                <div id="form-button">
                    <input type="submit" name="update_click" value="Cập nhật" />
                </div>
                <hr>
                <div class="order">
                    <h1>Thông Tin Đặt Hàng</h1>
                    <div><label>Người nhận: </label><input type="text" value="" name="fullname" required /></div>
                    <div><label>Điện thoại: </label><input type="text" value="" name="phoneNumber" required /></div>
                    <div><label>Địa chỉ: </label><input type="text" value="" name="address" required /></div>
                    <div><label>Ghi chú: </label><textarea name="note" cols="50" rows="7"></textarea></div>
                    <input type="submit" name="order_click" value="Đặt hàng" />
                </div>
            </form>
        <?php } ?>
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