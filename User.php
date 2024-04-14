<?php

require'connect.php';
if(isset($_POST['btn-reg'])){
    $username = $_POST['username'];
    $fullname = $_POST['fullname'];
    $password = $_POST['password'];
    $repassword = $_POST['repassword'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];
    if(!empty($username)&&!empty($fullname)&&!empty($password)&&!empty($repassword)&&!empty($email)&&!empty($phone)&&!empty($gender)&&!empty($address)){
        echo "Đã đăng ký thành công";
        print_r($_POST);

        $sql ="INSERT INTO `user` (`fullname`,`username`,`password`,`repassword`,`email`,`phone`,`gender`,`address`) VALUES('$fullname','$username','$password','$repassword','$email','$phone','$gender','$address')";
    if($conn->query($sql)===TRUE){
        header("Location: login.php");
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <title>Đăng Ký</title>
    <link rel="icon" href="logo/bxs-car.svg" alt="">
</head>
<style>

    body{
    background: url('./img/461652.jpg');
    background-size: cover;
    background-position:center;
    font-size: 16px;
    }

    form {       
        border: 2px solid #ccc;
        border-radius: 10px;
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.3);
        line-height: 2px;

       
    }
    
    .offset-md-3{
        margin-left: -9%;
        
    }

    #p-4{
        padding-bottom: 1.5rem;
        padding: inherit;
    }

    h2{
        color: aliceblue;
    }

    label{
        color: aliceblue;
    }
</style>

<body>
    <div class="container">
        <div class="row">
            <div class="col-6 offset-md-3">
                <form id="form_reg" class="bg-black p-4 my-3" method="post" action="">
                    <h2 class="py-3 text-center text-uppercase ">Đăng ký tài khoản</h2>

                    <div class="form-group">
                        <label for="fullname">Họ và tên:</label>
                        <input type="text" id="fullname" name="fullname" class="form-control " requirer><br><br>
                    </div>
                    <div class="form-group">
                        <label for="username">Tài khoản:</label>
                        <input type="text" id="username" name="username" class="form-control" required><br><br>
                    </div>
                    <div class="form-group">
                        <label for="password">Mật khẩu:</label>
                        <input type="password" id="password" name="password" class="form-control" required><br><br>
                    </div>
                    <div class="form-group">
                        <label for="repassword">Nhập lại mật khẩu:</label>
                        <input type="password" id="repassword" name="repassword" class="form-control" required><br><br>
                        <br><span id="message"></span><br><br>
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" id="email" name="email" class="form-control" pattern="[a-zA-Z0-9._%+-]+@gmail\.com" title="Vui lòng nhập địa chỉ email Gmail hợp lệ" required><br><br>
                    </div>
                    <div class="form-group">
                        <label for="phone">Số điện thoại:</label>
                        <input type="tel" id="phone" name="phone" class="form-control" pattern="0[0-9]{9}" title="Vui lòng nhập số điện thoại bắt đầu bằng 0 và có đúng 10 chữ số" required><br><br>
                        </div>

                    <div class="form-group">
                        <label for="gender">Giới tính:</label>
                        <select id="gender" name="gender" required>
                            <option value="">Chọn giới tính</option>
                            <option value="male">Nam</option>
                            <option value="female">Nữ</option>
                            <option value="other">Khác</option>
                        </select><br><br>
                    </div>
                    <div class="form-group">
                        <label for="address">Địa chỉ:</label>
                        <textarea id="address" name="address" class="form-control" required></textarea><br><br>
                    </div>
                    <input type="submit" class="btn btn-primary btn-block mt-4" name="btn-reg" value="Đăng ký" onclick="return validateForm()">
                </form>
            </div>
        </div>
    </div>
    <script src="js/dangky.js"></script>
</body>

</html>