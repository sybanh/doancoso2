<?php
include('connect.php');
if(isset($_GET['id_product'])){
    $id = $_GET['id_product'];
    $sql = "DELETE FROM products WHERE id_product = $id";
    $result = mysqli_query($conn,$sql);
    header('location:admin.php');
}
?>