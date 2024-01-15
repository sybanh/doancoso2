<?php
include("connect.php");
    $name = $_POST['tensp'];
    $hinh = $_FILES['hinhanh']['name'];
    $price = $_POST['gia'];
    $id_danhmuc = $_POST['id'];
    $description = $_POST['mota'];
    $sql = "INSERT INTO products (name_product,image,price,id_danhmuc,description)
    VALUES ('$name','$hinh',$price,$id_danhmuc,'$description')";
    $result = mysqli_query($conn,$sql);
    header("location: admin.php");
?>