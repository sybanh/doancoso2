<?php
include("connect.php");
session_start();
if(!isset($_SESSION['userName'])){
  echo 'Bạn chưa có tài khoản. Vui lòng đăng nhập <a href="login.php">tại đây!</a>';
}else{
  $nameUser = $_SESSION['userName'];
  $result = mysqli_query($conn,"SELECT * FROM user WHERE name_user='$nameUser'");
  while($row=mysqli_fetch_array($result)){
    $id_user = $row['id_user'];
  }
  $code = rand(0,999);
  $sql = " INSERT INTO cart (id_user,code_cart,cart_status) VALUES($id_user,$code,1)";
  $result = mysqli_query($conn,$sql);
    if($result){
      foreach($_SESSION['cart'] as $key => $value){
          $id_product = $key;
          $soluong = $_SESSION['cart'][$key];
          $sql = " INSERT INTO cart_detail (code_cart,id_product,soluong) VALUES($code,$id_product,$soluong)";
          mysqli_query($conn,$sql);
      }
    }
    unset($_SESSION['cart']);
    header('Location:thankyou.php');
  }
?>