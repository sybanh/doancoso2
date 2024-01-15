<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="./css/cart.css" />
    <link rel="stylesheet" href="./css/box.css" />
    <link rel="stylesheet" href="./css/home.css" />
    <link rel="stylesheet" href="./css/base.css" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
    <style>
      .header__icon {
        display: flex;
        align-items: center;
      }
      .icon {
        margin: 10px;
        font-size: 35px;
      }
      header {
        position: -webkit-sticky;
        position: sticky;
        top: 0;
        z-index: 2;
      }
      .header__top p {
        margin: 0;
        padding: 2px 0;
      }
      .icon:hover {
        cursor: pointer;
        opacity: 0.7;
      }
      .image:hover {
        transform: scale(0.7);
        cursor: pointer;
      }
      .image {
        transition: 1s;
      }
      .content__footer-img {
        transition: 1s;
      }
      .content__footer-img:hover {
        cursor: pointer;
        transform: scale(-1, 1);
      }
      .box__js {
        animation: showBox 0.1s linear;
        height: auto;
      }
      @keyframes showBox {
        from {
          top: -200px;
          opacity: 0;
        }
        to {
          top: 0;
          opacity: 1;
        }
      }
      .current {
        border-bottom: solid 3px black;
      }
      .content__card {
        width: 245px;
        margin: 5px;
        margin-top: 10px;
      }
      .card__image {
        width: 100%;
      }
      .btn__card {
        padding: 10px 20px;
        border-radius: 0;
        background-color: black;
        color: #fff;
        margin-top: 10px;
      }
      .btn__card a {
        font-size: 14px;
        font-weight: 600;
        text-decoration: none;
        color: #fff;
      }
      .btn__card:hover a {
        color: black;
      }
      .btn__card:hover {
        animation: btn 0.3s linear;
        border: solid 1px black;
      }
      @keyframes btn {
        from {
          background-color: black;
          color: #fff;
        }
        to {
          background-color: #fff;
          color: black;
        }
      }
      .model {
        z-index: 3;
      }
      .footer__icon {
        padding: 5px;
        font-size: 30px;
        padding-left: 0;
      }
      .content__top {
        font-size: 25px;
        font-weight: 600;
      }
      .card__btn .btn__item a {
        text-decoration: none;
        color: white;
      }
      .btn__item:hover a {
        background-color: black;
        cursor: pointer;
        color: aqua;
      }
      
      .cart__main {
        padding: 10px;
        background-color: #f0efef;
        border: 5px solid #fff;
      }
      .cart__box {
        border: solid 1px black;
        padding: 10px;
        margin-top: 10px;
        height: 210px;
      }
      .sum {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 5px;
        border-bottom: solid black 1px;
        font-size: 14px;
        font-weight: 700;
      }
      .delete__icon:hover {
        color: red;
        cursor: pointer;
      }
      .box__scroll{
        overflow-y: scroll;
        height: 180px;
      }
      .box__cart{
        margin-top: 5px;
      }
      .nav-item:hover{
        display: block;
        background-color: rgba(0,0,0,0.05);
        font-size: 18px;
        font-weight: 600;
      }
      .nav-item a{
        text-decoration: none;
        color: black;
        margin-right: 10px;
      }
    </style>
  </head>
  <body>
    <div class="app">
      <div class="header__top">
        <p class="header__text">Sản phẩm được bảo hành</p>
      </div>
      <header>
        <div class="header">
          <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
              <button
                class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarTogglerDemo03"
                aria-controls="navbarTogglerDemo03"
                aria-expanded="false"
                aria-label="Toggle navigation"
              >
                <span class="navbar-toggler-icon"></span>
              </button>
              <a class="navbar-brand" href="#"
                ><img src="./img/logo.jpg" alt=""
              /></a>
              <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <?php
                  include("connect.php");
                  $sql = "SELECT * FROM danhmuc";
                  $result = mysqli_query($conn,$sql);
                  while($row = mysqli_fetch_assoc($result)){
                  ?>
                  <li class="nav-item">
                    <a class="nav-link" href="./Detail.php?id_danhmuc=<?=$row["id_danhmuc"]?>"><?=$row["name_danhmuc"]?></a>
                  </li>
                  <?php }?>
                  <li class="nav-item">
                    <a class="nav-link" href="./Store.php">ALL</a>
                  </li>
                </ul>
                <form class="header__icon d-flex" role="search">
                <div class="icon"><a style="color: black;text-decoration: none;display: flex;align-items: center;" href="./login.php"><?php
                  if(isset($_SESSION["userName"])){?>
                  <h5 style="padding-right: 10px;"><?=$_SESSION["userName"]?></h5>
                  <h3 style="padding-top: 10px;"><i class='bx bx-log-out'></i></h3>
                  <?php
                  }
                  ?><i class="bx bxs-user-circle"></i></a></div>
                  <div class="icon">
                    <a href="./cart.php">
                    <i style="color: black;text-decoration: none;" id="bag__btn" style="position: relative;" class="bx bx-shopping-bag">
                    <span style="position: absolute;left:14px; font-size:16px;top: 36%;font-weight: 600;">
                    </span></i>
                    </a>
                  </div>
                </form>
              </div>
            </div>
          </nav>
        </div>
      </header>
      <div class="content">
        <div class="content__header">
          <div class="container content__nav">
            <a href="./index.php">Trang chủ</a>
            <span>/</span>
            <a href="">Giỏ hàng</a>
          </div>
        </div>
        <div class="container content__cart">
          <div class="row">
            <div class="cart col-md-12 col-lg-9">
              <h4 class="cart__title">GIỎ HÀNG CỦA BẠN</h4>
              <?php 
          include('connect.php');

          if(!isset($_SESSION["cart"])){
          $_SESSION["cart"] = [];
          }
          if(isset($_GET['action'])){
            function update_cart($add = false){
              foreach ($_POST['quantity'] as $id => $quantity) {
                if($quantity == 0){
                  unset($_SESSION['cart'][$id]);
                }else{
                  if($add){
                    $_SESSION['cart'][$id] += $quantity;
                  }else{
                    $_SESSION['cart'][$id] = $quantity;
                  }
                }
              }
            }
            switch ($_GET['action']){
            case 'add':
                update_cart(true);
                echo "<script>window.location.href='cart.php';</script>";
                break;
            case 'delete':
                if(isset($_GET['id'])){
                    unset($_SESSION["cart"][$_GET["id"]]);
                  }
                echo "<script>window.location.href='cart.php';</script>";
                break;   
            case 'submit':
              if(isset($_POST['update__click'])){
                update_cart(false);
              } 
              echo "<script>window.location.href='cart.php';</script>";
              break;
            }
          }
         if(!empty($_SESSION["cart"])){
         $result1 = mysqli_query($conn, "SELECT * FROM products WHERE id_product IN (".implode(",", array_keys($_SESSION["cart"])).")");
         ?>
              <?php
              $total = 0;
              while($row = mysqli_fetch_array($result1)){
              ?>
              <form action="cart.php?action=submit" method="POST">
              <div class="cart__main">
                <img src="./img/<?=$row["image"]?>" alt="" class="cart__img" />
                <div class="cart__text">
                  <p style="width:200px" class="cart__name"><?=$row["name_product"]?></p>
                  <p class="cart__size">XL/Đen</p>
                </div>
                <input
                  type="number"
                  name="quantity[<?php echo $row['id_product']?>]" value="<?=$_SESSION["cart"][$row['id_product']]?>"
                  class="cart__quantity"
                />
                <p class="cart__price"><?=number_format($row["price"],0,",",".")?>₫</p>
                <div class="cart__total">
                  <p class="total-title">Thành tiền</p>
                  <p class="total-money"><?=number_format(($row['price']*$_SESSION["cart"][$row['id_product']]),0,",",".")?>₫</p>
                  <a style="text-decoration: none;color:black" href="cart.php?action=delete&id=<?=$row["id_product"]?>"><i class="delete__icon bx bxs-trash"></i></a>
                </div>
              </div>
              <?php
              $total += $row['price'] * $_SESSION["cart"][$row['id_product']];
              }
            }else{
              ?>
              <h5>Giỏ hàng trống <i class='bx bx-right-arrow-alt' ></i><a style="color:blue" href="Store.php"> Mua hàng</a></h5>
              <?php
            }
              ?>
            </div>
            <div class="cart__box col-md-12 col-lg-3">
              <h5
                style="padding: 5px; border-bottom: 1px solid black"
                class="box__title"
              >
                Thông tin đơn hàng
              </h5>
              <div class="sum">
                <span>Tổng tiền: </span>
                <span>
                <?php
                if(isset($total)){
                  echo number_format($total,0,",",".");
                }else{
                  echo 0;
                }
                ?>
                ₫</span>
              </div>
              <div
                style="
                  display: flex;
                  flex-direction: column;
                  justify-content: space-between;
                "
                class="box__btn"
              >
                <p style="margin: 0; padding-top: 10px">
                  Bạn có thể nhập mã giảm giá ở trang thanh toán
                </p>
                <button type="submit" name="btn_pay" class="btn btn__card"><a href="pay.php">THANH TOÁN</a></button>
              </div>
            </div>
          </div>
              <div style="text-align:center">
              <input class='btn btn__card' type="submit" name="update__click" value="Cập Nhật Giỏ Hàng">
              </div>
            </form>
        </div>
        <div class="mt-4">
          <div class="row">
            <img
              src="./img/footerimage/ft4.jpg"
              alt=""
              class="content__footer-img col-sm-4 col-md-2"
            />
            <img
              src="./img/footerimage/ft5.jpg"
              alt=""
              class="content__footer-img col-sm-4 col-md-2"
            />
            <img
              src="./img/footerimage/ft6.jpg"
              alt=""
              class="content__footer-img col-sm-4 col-md-2"
            />
            <img
              src="./img/footerimage/ft7.jpg"
              alt=""
              class="content__footer-img col-sm-4 col-md-2"
            />
            <img
              src="./img/footerimage/ft8.jpg"
              alt=""
              class="content__footer-img col-sm-4 col-md-2"
            />
            <img
              src="./img/footerimage/ft9.jpg"
              alt=""
              class="content__footer-img col-sm-4 col-md-2"
            />
          </div>
        </div>
      </div>
      <footer style="background-color: rgb(237, 230, 230)">
        <div class="footer container">
          <div sty class="row mt-4">
            <div class="footer__row col-md-3 col-sm-6 mt-4">
              <h4>KENTA VN</h4>
              <p>- Giới Thiệu</p>
              <p>- Kiểm tra đơn hàng</p>
              <p>- Cách chọn size</p>
              <p>- Thông tin liên hệ</p>
              <p>- Câu hỏi thường gặp</p>
              <p>- Hướng dẫn bảo quản</p>
            </div>
            <div class="footer__row col-md-3 col-sm-6 mt-4">
              <h4>CHÍNH SÁCH</h4>
              <p>- Hướng dẫn mua hàng</p>
              <p>- Khách hàng thân thiết</p>
              <p>- Chính sách đổi hàng</p>
              <p>- Chính sách bảo mật</p>
              <p>- Đối tác sản xuất</p>
              <p>- Bán hàng liên kết (Affiliate)</p>
            </div>
            <div class="footer__row col-md-3 col-sm-6 mt-4">
              <h4>KẾT NỐI VỚI KENTA</h4>
              <div class="footer__icon">
                <i style="margin: 10px" class="bx bxl-facebook-circle"></i>
                <i style="margin: 10px" class="bx bxl-google"></i>
                <i style="margin: 10px" class="bx bxl-instagram-alt"></i>
                <i style="margin: 10px" class="bx bxl-twitter"></i>
              </div>
              <img
                style="width: 150px"
                src="./img/logo-bct_5a0bbf4fb2d34c3e88c04df41ad38dc9.png"
                alt=""
              />
            </div>
            <div class="footer__row col-md-3 col-sm-6 mt-4">
              <h4>THÔNG TIN CỬA HÀNG</h4>
              <p>
                <i class="bx bxs-home-smile"></i>20 Cửu Long, P15, Q.10, HCM
              </p>
              <p>
                <i class="bx bxs-home-smile"></i>168 Nguyễn Trọng Tuyển, P8, Phú
                Nhuận
              </p>
              <p><i class="bx bxs-phone"></i>Hotline: (028) 7300 6200</p>
              <p><i class="bx bxs-envelope"></i>Mail: kentasale@gmail.com</p>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </body>
  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"
  ></script>
  <script src="./js/box.js"></script>
  <script src="./js/header.js"></script>
</html>
