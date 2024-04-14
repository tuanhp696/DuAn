<?php

require'connect.php';
if(isset($_POST['btn-send'])){
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $content = $_POST['content'];
    if(!empty($fullname)&&!empty($email)&&!empty($content)){
        
        print_r($_POST);

        $sql ="INSERT INTO `contact` (`fullname`,`email`,`content`) VALUES('$fullname','$email','$content')";
    if($conn->query($sql)===TRUE){
       
        header("Location: index.html");
        exit();


    }else {
        echo "Lỗi{$sql}".$conn->error;
    }
    }else{
        echo" Bạn cần nhập đầy đủ thông tin";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liên hệ</title>
    <link rel="icon" href="logo/bxs-car.svg" alt="">
    <link rel="stylesheet" href="contact.css">
</head>
<style>
    @font-face {
    font-family: 'MBcorpo';
    src: url(Corporate\ A\ Light.ttf);
}
*{
    padding:0;
    margin:0px;
    box-sizing: border-box;
    cursor: pointer;
}

#wrapper {
    /* Kích thước màn hình là 1280 x 720 */
    width: 100%;
    height: 700px;
    margin: 0 auto;
}
#header {
    object-fit: contain;
    width: 100%;
    height: 80px;      
    padding:0px 30px;
    margin-top:3px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    background-position: center center;
    background-color: rgb(250, 250, 250);
}

#header a.logo img{
    height:85px
   }

#menu {
    list-style:none;
    display: flex;
    justify-content: center;
}

#menu .item {
    margin:15px 30px;
    justify-content: flex-start;
    font-size: medium;
    display: flex;
}

#menu .item a {
    color:#626A67;
    text-decoration: none;
}


#actions {
    display: flex;
}

.item {
    margin-left:-200px;
}
#action.item a{
    margin-bottom: 10px;

}
#search{
    background: #161a21;
    padding-left:10px
 
}
#actions #search{
    border-radius:7px;
    border:none;
    outline: none;
    background: none;
    background-color:#c4c4c4;
}

#search-btn {
    border-radius:5px
   }

h2{
    text-align: center;
}
.footer-top{
    display: grid;
    grid-template-columns: 1fr 1fr 1fr;
    padding-top:100px;
    margin: auto;
    margin-left: 200px;
}

.footer-top h4{
    font-size:19px
   }

.footer-top h5{
    font-size:25px;
    
}

.footer-top h6{
    font-size: 19px;
    
}

.footer-infor p{
width: 100px;
}

.register-form{
    display: flex;
    align-items: flex-end;
    width: 100%;
    margin-bottom: 12px;
    overflow: hidden;
    justify-content: space-between;
}

.register-name input{
    background: #f8f7f4;
    width:90%;
    font-size: .7rem;
    line-height: .7rem;
    letter-spacing: .2em;
    color: #161a21;
    padding: .7rem;
    border: 1px solid #d6d6d4;
    margin-right:255px;
    margin-top: 15px;

}
.register-email input{
    background: #f8f7f4;
    width:100%;
    font-size: .7rem;
    line-height: .7rem;
    letter-spacing: .2em;
    color: #161a21;
    padding: .7rem;
    border: 1px solid #d6d6d4;
    margin-right:255px;
}
.register-content input{
    background: #f8f7f4;
    width: 100%;
    font-size: .7rem;
    line-height: .7rem;
    letter-spacing: 1px;
    color: #161a21;
    padding: 14px;
    
    border: 1px solid #d6d6d4;
}
.register-btn button{
    cursor: pointer;
    width: 100%;
    background: #080808;
    border: none;
    padding: 0.9rem 0;
    margin: 5px 0 0;
    transition: .3s ease-out;
    color: #fff;
}

.register-btn button:hover{
    background:rgb(130, 129, 127);
       font-size: 18px;
}
.footer-contact,
.footer-address{
    margin-left: 200px;
    width: 1000px;
}
 h6{
    text-align: center;
    font-size: 50px;
    margin-top: 10px;
 }
 #footer span{
    text-align: center;
    margin-left: 500px;
 }

 #banner img{
    padding-top: 30px;
    height: 10%;
    width: 100%;
 }
 
</style>
<body>
<div id="wrapper">
        <div id="header">
            <a href="" class="logo">
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
            <div id="actions">

                <input type="text" id="searchInput" placeholder="Tìm kiếm sản phẩm" >
                <button id="search-btn" onclick="searchProducts()"><img src="logo/bx-search.svg"></button>

            </div>
            <div class="item">
                <a href="Login.php"><img src="logo/bxs-shopping-bag-alt.svg"></a>
            </div>

            <div class="item">
                <a href="Login.php"><img src="logo/bxs-user.svg"></a>
            </div>

        </div>  
        <hr width="100%" size="2px" align="center" color="gray" />
        <div id="footer">
            <h6>Liên hệ với Mercedes-Benz</h6>
                    <span> Hãy liên hệ góp ý với chúng tôi để nâng tầm trải nghiệm dịch vụ.</span>
            <div class="footer-top w-70">
                <div class="register">
                    <form  method="post" action="">
                        <div class="register-form">
                            <div class="register-name w-80">
                                <input type="text" name="fullname" id="fullname" placeholder="Họ Tên">
                            </div>
                            <div class="register-email w-80">
                                <input type="text" name="email" id="email" placeholder="Email">
                            </div>
                        </div>
                        <div class="register-content">
                            <input class="" type="text" name="content" id="content" placeholder="Nội dung góp ý....">
                        </div>
                        <div class="register-btn" >
                            <button type="submit" name="btn-send">Gửi</button>
                        </div>
                    </form>
                </div>
                <div class="footer-contact">
                    <div class="footer-info">
                        <h4>LIÊN HỆ</h4>
                        <p>Nguyễn Trung Kiên 
                            (17/3/2002)
                        </p>
                        <p>Mai Thành Đạt
                            (11/11/2002)
                        </p>
                        <p>Nguyễn Đình Quốc Tuấn
                            (18/01/2002)
                        </p>
                        <p>Hotline:0868686868</p>
                        <div class="footer-soial-netword">
                            <a href="https://www.facebook.com/trang.bell.1512"><img
                                    src="logo/bxl-facebook-circle.svg"></a>
                            <a href="https://www.instagram.com/kien_trung22/"><img src="logo/bxl-instagram.svg"></a>
                            <a href="https://www.youtube.com/@MercedesBenz"><img src="logo/bxl-youtube.svg"></a>
                            <a href="https://www.google.com/maps/search/Mercedes"><img src="logo/bx-map.svg"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="banner">
            <img src="img/1_KWLS.png">
        </div>
    </body>
</html>