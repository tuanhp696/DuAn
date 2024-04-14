<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thông tin khách hàng</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <?php
    include'connect.php';
    $query = "SELECT * FROM user";
    $result = mysqli_query($conn, $query);
  
    ?>
    <style>
        table,th,td{
            border: none;
        }
    
        #contact-infor{            
            width: 1000px;
            margin: 0 auto;
            padding: 25px;
            padding-top: 110px

        }
        #contact-infor table{
            margin: 10px auto 0 auto;
            text-align: center;
        }
        #contact-infor h1{
            text-align: center;
            padding-bottom: 20px;
        }
        #menu{
            margin-right: 300px;
        }
    </style>
    <div id="header">
            <a href="admin.html" class="logo">
                <img src="img/logo-xe-mercedes-benz (4).jpg" alt="">
            </a>
            <div id="menu">
                <div class="item">
                    <img src="logo/bx-home-alt-2.svg" alt="">
                    <a href="admin.html">Trang chủ</a>
                </div>
                <div class="item">
                    <a href="admin.php">Sản phẩm</a>
                </div>
                <div class="item">
                    <a href="contact-sql.php">Liên hệ</a>
                </div>
                <div class="item">
                    <a href="khachhang-sql.php">Khách hàng</a>
                </div>
                <div class="item">
                    <a href="Mercedes.html">Thế giới Mercedes-Benz</a>
                </div>
            </div>
            

        </div>
    <div id="contact-infor">
        <h1>Danh Sách Thông Tin Khách Hàng</h1>
        <table id="contact-listing" style ="width: 1000px;">
    <tr>
        <td>Tài Khoản</td>
        <td>Mật Khẩu</td>
        <td>Họ Tên</td>
        <td>Email</td>
        <td>Số Điện Thoại</td>
        <td>Giới Tính</td>
        <td>Địa Chỉ</td>
    </tr>
    <?php
      while ($row = mysqli_fetch_array($result)) {
        ?>
        <tr>
        <td><?=$row['username']?></td>
        <td><?=$row['password']?></td>
        <td><?=$row['fullname']?></td>
        <td><?=$row['email']?></td>
            <td><?=$row['phone']?></td>
            <td><?=$row['gender']?></td>
            <td><?=$row['address']?></td>
            
           
        </tr>
        <?php }?>
        <a class="btn btn-primary" href="admin.php">Quay Lại</a>
         </table>
    </div>
</body>
</html>