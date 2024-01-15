<?php
$local = "localhost";
$user = "root";
$pass = "";
$data = "shopcuahang";
$conn = mysqli_connect($local,$user,$pass,$data);
if(mysqli_connect_errno()){
    echo "Lỗi kết nối!";
}
?>