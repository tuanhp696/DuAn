<?php
require 'connect.php';

$id = $_GET['id'];
$sql_up = "SELECT * FROM product WHERE id = $id";
$query_up = $conn->query($sql_up);
$row_up = mysqli_fetch_assoc($query_up);

if (isset($_POST['sbm'])) {
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $thumbnail = $row_up['thumbnail']; // Giá trị mặc định

    if ($_FILES['thumbnail']['name'] !== '') {
        $thumbnail = $_FILES['thumbnail']['name'];
        $anh_san_pham_tmp = $_FILES['thumbnail']['tmp_name'];
        move_uploaded_file($anh_san_pham_tmp, 'img/' . $thumbnail);
    }
    $price = $_POST['price'];
    // $price = mysqli_real_escape_string($conn, $_POST['price']);
    $content = mysqli_real_escape_string($conn, $_POST['content']);

    $sql = "UPDATE product SET title = '$title', thumbnail = '$thumbnail', price = '$price', content = '$content' WHERE id = $id";
    $query = $conn->query($sql);

    if ($query) {
        header('location: admin.php?page_layout=admin-ds');
    } else {
        echo "Lỗi: " . $conn->error;
    }
}
?>
  
<style>
    body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
}

.container {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.conteiner-fluid{
    padding-top: 20px;
}

.card {
    width: 400px;
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1);
    padding: 20px;
    margin-top: 50px;
}

.card-header h2 {
    margin: 0;
    padding-bottom: 10px;
    border-bottom: 1px solid #ccc;
}

.card-body .form-group {
    margin-bottom: 15px;
}

.form-control {
    width: 100%;
    padding: 8px;
    border-radius: 4px;
    border: 1px solid #ccc;
}

.btn-custom {
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 10px 20px;
    text-align: center;
    text-decoration: none;
    display: block;
    width: 100%;
    font-size: 16px;
    margin-top: 15px;
    cursor: pointer;
    border-radius: 4px;
}

.btn-custom:hover {
    background-color: #45a049;
}



</style>



<div class="conteiner-fluid">
    <div class="card">
        <div class="card-header">
            <h2>Sửa sản phẩm</h2>
        </div>
        <div class="card-body">
            <form method="POST" enctype="multipart/form-data">
                <div class="form-group">
                  <label for="">Ảnh Sản Phẩm</label>
                  <input type="file" name="thumbnail"class="form-control" required value="../img/<?php echo $row_up['thumbnail']; ?>"> 
                </div>
                <div class="form-group">
                  <label for="">Tên Sản Phẩm</label>
                  <input type="text" name="title"class="form-control" required value="<?php echo $row_up['title']; ?>"> 
                </div>

                <div class="form-group">
                  <label for="">Giá</label>
                  <input type="number" name="price"class="form-control" required value="<?php echo $row_up['price']; ?>">                 
                </div>

                <div class="form-group">
                  <label for="">Chi Tiết</label>
                  <input type="text" name="content"class="form-control" required value="<?php echo $row_up['content']; ?>"> 
                </div>
                <button name="sbm" class="btn btn-success" type="submit">Sửa Sản Phẩm</button>  
            </form>
        </div>
    </div>
</div>