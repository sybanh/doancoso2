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
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="./css/box.css" />
    <link rel="stylesheet" href="./css/btn.css" />
    <link rel="stylesheet" href="./css/base.css" />
    <link rel="stylesheet" href="./css/store.css" />
    <link rel="stylesheet" href="./css/home.css" />
    <script src="./js/box.js"></script>
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
        z-index: 1;
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
      .model {
        z-index: 3;
      }
      .current {
        border-bottom: solid 3px black;
      }
      .content__card {
        margin: 20px 0;
      }
      .content__card {
        width: 275px;
        margin-top: 10px;
        margin: 25px;
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
    <div class="container-fluid app">
      <div class="header__top"><p class="header__text">Sản phẩm được bảo hành</p></div>
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
                <form class="header__icon d-flex">
                 <div style="display: flex;align-items: center;" class="icon">
                   <?php
                    if(isset($_SESSION["userName"])){
                    ?>
                  <h5 style="padding-right: 10px;"><?=$_SESSION["userName"]?></h5>
                    <h3 style="margin-top: 10px;">
                      <a style="color: black;text-decoration: none;" href="./login.php?submit=out"><i class='bx bxs-log-out'></i></a>
                    </h3>
                  <?php
                  }else{
                    ?>
                  <a style="color: black;text-decoration: none;" href="./login.php">
                  <i class="bx bxs-user-circle"></i>
                  </a>
                  <?php
                  } 
                  ?> 
                  </div>
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
          <div class="container-fluid content__nav">
            <a href="./index.php">Trang chủ</a>
            <span>/</span>
            <a href="">Danh mục</a>
            <span>/</span>
            <?php
                  include("connect.php");
                  if(isset($_GET["id_danhmuc"])){
                  $id = $_GET["id_danhmuc"];
                  $sql = "SELECT * FROM danhmuc WHERE id_danhmuc = $id";
                  $result = mysqli_query($conn,$sql);
                  while($row = mysqli_fetch_assoc($result)){
                  ?>
            <a href=""><?=$row["name_danhmuc"]?></a>
            <?php }
          }?>
          </div>
        </div>
        <div class="container-fluid mt-3">
        <?php
                  include("connect.php");
                  if(isset($_GET["id_danhmuc"])){
                  $id = $_GET["id_danhmuc"];
                  $sql = "SELECT * FROM danhmuc WHERE id_danhmuc = $id";
                  $result = mysqli_query($conn,$sql);
                  while($row = mysqli_fetch_assoc($result)){
                  ?>
            <h3><?=$row["name_danhmuc"]?></h3>
            <?php }
          }?>
        </div>
        <div class="container card__store">
          <div class="row">
          <?php
          include("connect.php");
          if(isset($_GET["id_danhmuc"])){
          $id = $_GET["id_danhmuc"];
          $item_per_page =!empty($_GET['per_page']) ? $_GET['per_page']:8;
          $current_page = !empty($_GET['page']) ? $_GET['page']:1;
          $offset = ($current_page - 1) * $item_per_page;
          $sql = "SELECT * FROM products WHERE id_danhmuc=$id ORDER BY id_product ASC LIMIT ".$item_per_page." OFFSET ". $offset;
          $result = mysqli_query($conn,$sql);
          $totalrows = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM products WHERE id_danhmuc=$id"));
          $totalPage = ceil($totalrows/$item_per_page);
          $numpage=1;
          while($row = mysqli_fetch_assoc($result)){
          ?>
            <li class="card content__card col-sm-12 col-sm-6 col-xl-3">
            <div class="card__image">
                  <a href="./detailProduct.php?id_product=<?=$row["id_product"]?>">
                  <img src="./img/<?=$row["image"]?>" class="card-img-top"
                  alt="..." draggable="false"/></a>
                  <form action="cart.php?action=add" method = "post">
                  <div class="card__btn">
                    <button class="btn__item"><a href="./detailProduct.php?id_product=<?=$row["id_product"]?>">MUA NGAY</a></button>
                      <input type="hidden" name="quantity[<?=$row["id_product"]?>]" value="1" />
                      <input class="btn__item" type="submit" value="THÊM VÀO GIỎ">
                </div>
              </form>
                </div>
              <div class="card-body">
                <h5 class="card-content"><?=$row["name_product"]?></h5>
                <p class="card-text"><?=number_format($row["price"],0,",",".")?>₫</p>
              </div>
            </li>
            <?php }
           ?>
          
          </div>
          <div class="container content__pagination">
          <ul class="pagination">
          <li class="page-item">
          <a class="page-link" href="?id_danhmuc=<?=$id?>&per_page=<?=$item_per_page?>&page=<?=$numpage--?>" aria-label="Previous">
          <span aria-hidden="true">&laquo;</span>
          </a>
          </li>
            <?php for($num =1; $num <= $totalPage;$num++){?>
            <?php if($num != $current_page) {?>
            <li class="page-item">
              <a class="page-link" href="?id_danhmuc=<?=$id?>&per_page=<?=$item_per_page?>&page=<?=$num?>"><?=$num?></a>
            </li>
            <?php }else{?>
            <li class="page-item active">
              <a class="page-link" href="?id_danhmuc=<?=$id?>&per_page=<?=$item_per_page?>&page=<?=$num?>"><?=$num?></a>
            </li>
            <?php }?>
            <?php } ?>
            <li class="page-item">
            <a class="page-link" href="?id_danhmuc=<?=$id?>&per_page=<?=$item_per_page?>&page=<?=($numpage=$numpage+1)?>" aria-label="Next">
            <span aria-hidden="true">&raquo;</span>
            </a>
            </li>
          </ul>
        </div>
        <?php }?>
        </div>
        <div class="mt-4">
          <div class="row">
            <img
              src="./img/footerimage/ft4.jpg"
              alt=""
              class="content__footer-img col-sm-4 col-md-2 mt-2"
            />
            <img
              src="./img/footerimage/ft5.jpg"
              alt=""
              class="content__footer-img col-sm-4 col-md-2 mt-2"
            />
            <img
              src="./img/footerimage/ft6.jpg"
              alt=""
              class="content__footer-img col-sm-4 col-md-2 mt-2"
            />
            <img
              src="./img/footerimage/ft7.jpg"
              alt=""
              class="content__footer-img col-sm-4 col-md-2 mt-2"
            />
            <img
              src="./img/footerimage/ft8.jpg"
              alt=""
              class="content__footer-img col-sm-4 col-md-2 mt-2"
            />
            <img
              src="./img/footerimage/ft9.jpg"
              alt=""
              class="content__footer-img col-sm-4 col-md-2 mt-2"
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
              <div class="icon">
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
  <script src="./js/box.js"></script>
  <script src="./js/header.js"></script>
  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"
  ></script>
</html>
