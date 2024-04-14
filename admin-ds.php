<?php
include'connect.php';
    $sql = "SELECT * FROM product "; 
    $query = $conn->query($sql);
?>
<style>
        img {
       max-width: 100%;
       height: auto;
        }

</style>

<div class="container-fluid">
    <div class="card-body">
        <div class="card">
            <div class="card-header">
                <h2>Danh Sách Sản Phẩm</h2>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th>id</th>
                            <th>Ảnh Sản Phẩm</th>
                            <th>Tên Sản Phẩm</th>
                            <th>Đơn Giá</th>
                            <th>Chi Tiết Sản Phẩm</th>
                            <th>Sửa</th>
                            <th>Xóa</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i=1;
                            while($row = mysqli_fetch_assoc($query)){ ?>
                                <tr>
                                <td><?php echo $i++; ?></td>
                                <td>
                                    <img src="img/<?php  echo $row['thumbnail'];?>">
                                    
                                </td>
                                <td><?php echo $row['title']; ?></td>
                                <td><?php echo number_format($row['price'], 0, ",", ".") ?></td>

                                <td><?php echo $row['content']; ?></td>

                                <td> 
                                  <a href="admin.php?page_layout=sua&id=<?php echo $row['id'] ?>">Sửa</a>
                                </td>
                                <td> 
                                   <a href="admin.php?page_layout=xoa&id=<?php echo $row['id'] ?>">Xóa</a>
                                </td>
                            
                               
                                </tr>
                            <?php } ?>           
                        
                    </tbody>
                </table>
                <a class="btn btn-primary" href="admin.php?page_layout=them">Thêm mới</a>
            </div>
            
        </div>
</div>
