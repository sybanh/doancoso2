<?php
include('connect.php');
if(isset($_GET['id_product'])){
    $id_this = $_GET['id_product'];
    $sql = "SELECT * FROM products WHERE id_product =$id_this";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
  }
 if(isset($_POST['btn'])){
        $id = $_POST['id'];
        $user = $_POST['name'];
        $img = basename($_FILES["image"]["name"]);
        $price = $_POST['gia'];
        $iddanhmuc = $_POST['iddanhmuc'];
        $sql1 = "UPDATE products SET id_product ='$id', name_product='$user',image='$img',price='$price',id_danhmuc='$iddanhmuc' WHERE id_product=$id";
        $result1 = mysqli_query($conn, $sql1);
        echo $result1;
        header('location:admin.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="./css/add.css" />
</head>
<body>
	<div class="body container">
    <form class="form" action="updateProduct.php" method="POST" enctype="multipart/form-data" >
    <span><a style = "color:blue"  onclick="quay_lai_trang_truoc()"><i class='bx bx-left-arrow-alt'></i> Quay lại.</a></span>
    <h2>Thông tin sản phẩm</h2>
      <div class="form-group">
            <label for="">ID sản phẩm</label>
            <input type="number" name="id" value="<?php echo $row['id_product'] ?>">
	  </div>
      <div class="form-group">
            <label for="">Tên sản phẩm</label>
            <input type="text" name="name" value="<?php echo $row['name_product']?>">
		</div>
      <div class="form-group phone">
        <label for="fullname">Hình ảnh</label>
        <img width="40" height="30" src="./img/<?php echo $row['image']?>" alt="">
        <input type="file" name="image" value="<?=$row['image']?>">
      </div>
      <div class="form-group">
            <label for="">Giá</label>
            <input type="number" name="gia" value="<?php echo $row['price']?>">
			</div> 
	  <div class="form-group">
            <label for="">Loại Danh mục</label>
            <select style="" name="iddanhmuc">
             <?php
             include ("connect.php");
             $sql="SELECT * FROM danhmuc";
             $kq=mysqli_query($conn,$sql);
             while($row1= mysqli_fetch_array($kq)){
             echo '<option value="'.$row1["id_danhmuc"].'">'.$row1["name_danhmuc"].'</option>';
             }
             ?>
            </select>
		</div>
      <div class="form-group address">
        <label for="">Mô tả</label>
        <textarea name="description" rows="4" cols="137"><?=$row['description']?></textarea>
      </div>
      <div class="form-group submit-btn">
        <input type="submit" name="btn" value="Sửa sản phẩm">
      </div>
    </form>
    <script>
      function quay_lai_trang_truoc(){
          history.back();
      }
  </script>
</body>
</html>