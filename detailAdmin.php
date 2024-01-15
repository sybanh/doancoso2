<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="./css/base.css" />
    <link rel="stylesheet" href="./css/detail.css" />
    <link
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="./css/base.css" />
    <link rel="stylesheet" href="./css/home.css" />
    <link rel="stylesheet" href="./css/box.css" />
    <link rel="stylesheet" href="./css/btn.css">
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
    <script src="/js/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

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
        width: 250px;
        margin: 10px;
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
      .nav-item:hover {
        color: aqua;
      }
      .nav-link:hover {
        color: aqua;
      }
      .comment__list {
        list-style: none;
        padding-left: 0;
      }
      .comment__list li {
        font-size: 16px;
        font-weight: 400;
        padding: 10px;
        background: #fff;
      }
      .comment__list h5{
        font-weight: 700;
        margin-top: 10px;
      }
      .comments {
        background-color: rgb(236, 234, 234);
        padding: 0 20px 20px 20px;
      }
      .btn__send {
        background-color: rgb(88, 88, 247);
        font-size: 16px;
        padding: 5px 10px;
        color: #fff;
        border: none;
        width: 100%;
      }
      .btn__send:hover {
        background-color: #fff;
        color: rgb(88, 88, 247);
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
      .model {
        z-index: 3;
      }
      .box__scroll{
        overflow-y: scroll;
        height: 180px;
      }
      .box__cart{
        margin-top: 5px;
      }
      .submit{
        background: #333;
        color:#fff;
      }
      .submit:hover{
        background: #fff;
        color: #333;
        cursor: pointer;
      }
    </style>
  </head>
  <body>
    <div class="container-fluid app">
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
                  
                </ul>
                <form class="header__icon d-flex" role="search">
                  <div class="icon"><a style="color: black;text-decoration:none;display: flex;align-items: center;" href="./login.php">
                  <span style="color: black;padding: 10px;font-size: 20px;">Admin</span><i class="bx bxs-user-circle"></i></a>
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
            <a href="./admin.php">Trang chủ</a>
            <span>/</span>
          <?php
                  include("connect.php");
                  if(isset($_GET["id_product"])){
                  $id = $_GET["id_product"];
                  $sql = "SELECT * FROM products WHERE id_product = $id";
                  $result = mysqli_query($conn,$sql);
                  while($row = mysqli_fetch_assoc($result)){
                  ?>
            <a href=""><?=$row["name_product"]?></a>
            <?php }
          }?>
          </div>
        </div>
        <div class="container card__detail mt-3">
            <div class="row">
            <?php 
            include('connect.php');
            if (isset($_GET['id_product'])) {
            $id = $_GET['id_product'];
            $sql = "SELECT * FROM products WHERE id_product = $id";
            $result = mysqli_query($conn, $sql); 
             while($row = mysqli_fetch_array($result)){ ?>
            <div class="col-sm-12 col-md-6 card__img">
              <div class="img">
                <img style="width: 100%" src="./img/<?=$row["image"]?>" alt="" />
                <img style="width: 100%" src="./img/aokhoac/ak2.webp" alt="" />
                <img style="width: 100%" src="./img/size.jpg" alt="" />
              </div>
            </div>
            <div class="col-sm-12 col-md-6 card__content">
              <h4 class="name"><?=$row["name_product"]?></h4>
              <h5 class="price"><?=number_format($row["price"],0,",",".")?>₫</h5>
              <div class="size">
                <p class="size__item">S</p>
                <p class="size__item">M</p>
                <p class="size__item">L</p>
              </div>
              <form action="cart.php?action=add" method="POST">
              <input type="number" name="quantity[<?=$row["id_product"]?>]" id="" value="1" style="width: 40px" />
              </form>  
              <div class="description">
                <a href=""><p>Mô tả</p></a>
                <p>
                  <?=$row["description"]?>
                </p>
              </div>
            </div>
            <?php
            }
        }?>
        </div>
        <div class="comments">
                <h5
                  style="
                    text-align: center;
                    border-bottom: solid black 1px;
                    padding: 10px;
                  "
                >
                  Đánh Giá Sản Phẩm
                </h5>
                <ul class="comment__list">
                  <?php
                  include("connect.php");
                  if(isset($_GET["id_product"])){
                  $id = $_GET["id_product"];
                  $sql = "SELECT * FROM comment WHERE id_product =$id";
                  $result = mysqli_query($conn,$sql);
                  while($row = mysqli_fetch_array($result)){
                  ?>
                  <h5><?=$row["user_name"]?></h5>
                  <li><?=$row["content"]?></li>
                  <?php } 
                  }?>
                </ul>
                <input type="hidden" value="<?php echo $_GET['id_product'];?>" id="idsp">
                <?php
                if(isset($_SESSION["userName"])){
                ?>
                <input type="hidden" value="<?php echo $_SESSION['userName'];?>" id="user">
                <?php
                }
                ?>
                
          </div>
                      <script>
                         $("#btnGui").click(function(){
                         $.ajax({
                         method:"post",
                         url:'./xuLiComment.php',
                         data:{idsp: $('#idsp').val(), user:$('#user').val(),noidung: $('#noidung').val()}
                         })
                         .done(function(data) {
                          $('.comment__list').append('<h5>'+ $('#user').val()+'</h5>'+'<li>'+ $('#noidung').val()+'</li>');
                          $('#noidung').val('');
                           })
                         .fail(function(data){
                             });
                        });
                    </script>
        </div>
      </div>
      <?php
      include("footer.php");
      ?>
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
