<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liên hệ của khách hàng</title>
    <link rel="stylesheet" href="style.css">
</head>
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
<body>
    <?php
    include'connect.php';
    $query = "SELECT * FROM contact";
    $result = mysqli_query($conn, $query);
  
    ?>
    
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
                    <a href="">Liên hệ</a>
                </div>
                <div class="item">
                    <a href="khachhang-sql.php">Khách Hàng</a>
                </div>
            </div>
            
        </div>
    <div id="contact-infor">
        <h1>Danh Sách Góp Ý Của Khách Hàng</h1>
        <table id="contact-listing" style ="width: 1000px;">
    <tr>
        <td>Họ Tên</td>
        <td>Email</td>
        <td>Nội dung góp ý</td>
        <td>Ngày gửi</td>
    </tr>
    <?php
      while ($row = mysqli_fetch_array($result)) {
        ?>
        <tr>
            <td><?=$row['fullname']?></td>
            <td><?=$row['email']?></td>
            <td><?=$row['content']?></td>
            <td><?= date('d/m/Y H:i',$row['created_time']) ?></td>
        </tr>
        <?php }?>
         </table>
    </div>
</body>
</html>