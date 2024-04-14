<?php
if (isset($_POST['btn-login'])) {
    // Thực hiện kết nối đến cơ sở dữ liệu MySQL
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "qloto";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Kiểm tra kết nối
    if ($conn->connect_error) {
        die("Kết nối đến MySQL thất bại: " . $conn->connect_error);
    }

    // Lấy giá trị từ form đăng nhập
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Chuẩn bị câu truy vấn SQL
    $sql = "SELECT * FROM admin WHERE username = '$username' AND password = '$password'";

    // Thực thi câu truy vấn
    $result = $conn->query($sql);

    // Kiểm tra và xử lý kết quả
    if ($result->num_rows == 1) {
        // Đăng nhập thành công
        echo "Đăng nhập thành công!";
        header("Location: admin.html");
    } else {
        // Đăng nhập thất bại
        $error = "Tên đăng nhập hoặc mật khẩu không đúng!";
    
    }

    // Đóng kết nối
    $conn->close();
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng Nhập</title> 
    <link rel="icon" href="logo/bxs-car.svg" alt="">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">

</head>

<body>
    <div id="wrapper">
        <form action="" method="post" id="form-login">Quản Trị Viên</h1>
            <div class="form-group">
                <i class="far fa-user"></i>
                <input type="text" id="username" name="username" class="form-input" placeholder="Tên đăng nhập">
            </div>
            <div class="form-group">
                <i class="fas fa-key"></i>
                <input type="password" id="password" name="password" class="form-input" placeholder="Mật khẩu">
                <div id="eye">
                    <i class="far fa-eye"></i>
                </div>
            </div>

            <button type="submit" name="btn-login" class="button login">
                <span class="button-text">
                    Đăng nhập
                </span>
            </button>           
            <?php if (!empty($error)) { ?>
                <p><?php echo $error; ?></p>
            <?php } ?>
        </form>
    </div>

</body>

</html>