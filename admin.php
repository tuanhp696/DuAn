<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang Quản Trị </title>
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="css/style.css">
<link rel="icon" href="logo/bxs-car.svg" alt="">

</head>
<style>
    #header{
        margin-top: -20px;
    }
    .container-fluid, .container-lg, .container-md, .container-sm, .container-xl{
        margin-top: 50px;    
    }
    #menu {
        margin-right: 300px;
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
                    <a href="admin.html">Trang chủ</a>
                </div>
                <div class="item">
                    <a href="admin.php">Sản phẩm</a>
                </div>
                <div class="item">
                    <a href="contact-sql.php">Liên hệ</a>
                </div>
                <div class="item">
                    <a href="khachang-sql.php">Khách Hàng</a>
                </div>
                <div class="item">
                    <a href="Mercedes.html">Thế giới Mercedes-Benz</a>
                </div>
            </div>
            

        </div>
        <hr width="100%" size="5px" align="center" color="black" />
   
     <?php
     require'connect.php';
        if(isset($_GET['page_layout'])) {
            switch ($_GET['page_layout']) {
                case 'admin-ds':
                    require_once 'admin-ds.php';
                    break;
                case 'them':
                    require_once 'admin-them.php';
                    break;
                    case 'lienhe':
                        require_once 'contact-sql.php';
                        break;
                case 'sua':
                    require_once 'admin-sua.php';
                    break;
                case 'xoa':
                    require_once 'admin-xoa.php';
                    break;    
                default:    
                    require_once 'admin-ds.php';
                    break;
            }    
            } else{
                require_once 'admin-ds.php';
            }
        
           
    ?>    
   
</body>
</html>