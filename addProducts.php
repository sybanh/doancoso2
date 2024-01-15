<?php
include("connect.php");
if(isset($_POST['btn_submit'])){
    $name = $_POST["name"];
    $image = $_POST["image"];
    $price = $_POST["price"];
    $id_danhmuc = $_POST["id_danhmuc"];
    $description = $_POST["description"];
    $sql = "INSERT INTO products (name_product,image,price,id_danhmuc,description)
    VALUES ('$name','$image',$price,$id_danhmuc,'$description')";
    $result = mysqli_query($conn,$sql);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Thêm sản phẩm</title>
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
    <link rel="stylesheet" href="./css/pay.css">
</head>
<body>
    <form action="thank-you.html">
      <span><a style = "color:blue" href="" onclick="quay_lai_trang_truoc()"><i class='bx bx-left-arrow-alt'></i> Quay lại.</a></span>
      <h2>Thanh Toán</h2>
      <div class="form-group fullname">
        <label for="fullname">Họ Và Tên</label>
        <input type="text" id="fullname" name = "name" placeholder="Nhập tên của bạn">
      </div>
      <div class="form-group phone">
        <label for="fullname">Số điện thoại</label>
        <input type="text" id="phone" name="phone" placeholder="Nhập số điện thoại">
      </div>
      <div class="form-group address">
        <label for="address">Địa chỉ</label>
        <input type="text" id="address" name="address" placeholder="Nhập địa chỉ">
      </div>
      <div class="form-group pay">
        <label for="address">Phương thức thanh toán</label>
        <select name="pay" id="pay" form="carform">
        <option value="1">Thanh toán khi nhận hàng</option>
        <option value="2">Thanh toán bằng hình thức chuyển khoản</option>
      </select>
      </div>
      <div class="form-group note">
        <label for="note">Ghi chú</label>
        <textarea name="note" id="" cols="60" rows="5"></textarea>
      </div>
      <div class="form-group submit-btn">
        <input type="submit" value="Đặt Hàng">
      </div>
    </form>
    <script>
      function quay_lai_trang_truoc(){
          history.back();
      }
  </script>
</body>
</html>