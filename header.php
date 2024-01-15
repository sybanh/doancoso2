<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="./css/box.css" />
    <link rel="stylesheet" href="./css/btn.css" />
    <link rel="stylesheet" href="./css/base.css" />
    <link rel="stylesheet" href="./css/home.css" />
    <link rel="stylesheet" href="./css/styles.css" />
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
        font-size: 16px;
        margin-top: 20px;
      }
      .btn__card a {
        text-decoration: none;
        color: #fff;
      }
      .btn__card:hover a{
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
      .box__scroll{
        overflow-y: scroll;
        height: 180px;
      }
      .box__cart{
        margin-top: 5px;
      }
    </style>
</head>
<body>
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
</body>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>
  <script src="./js/header.js"></script>
  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"
  ></script>
  <script src="./js/box.js"></script>
  <script src="./js/simpleCarousel.js" defer></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</html>