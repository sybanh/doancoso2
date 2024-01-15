<?php
include("connect.php");
$id_product = $_POST["idsp"];
$user = $_POST["user"];
$content = $_POST["noidung"];
$sql = "INSERT INTO comment (content,id_product,user_name)
        VALUES ('$content',$id_product,'$user')";
$result= mysqli_query($conn,$sql);

?>