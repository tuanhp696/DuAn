<?php
require'connect.php';
  $id = $_GET['id'];
  $sql = "DELETE FROM product WHERE id = $id  ";
  $query = $conn->query($sql);
  header('location: admin.php?page_layout=admin-ds.');
  
?>