<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
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
  </head>
  <body>
    <div class="container-fluid app">
      <?php
      include("header.php")
      ?>

      <div class="content">
        <div class="banner">
          <div
            id="carouselExampleAutoplaying"
            class="carousel slide"
            data-bs-ride="carousel"
          >
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img
                  src="./img/banner/b1.webp"
                  class="d-block w-100"
                  alt="..."
                />
              </div>
              <div class="carousel-item">
                <img
                  src="./img/banner/b2.webp"
                  class="d-block w-100"
                  alt="..."
                />
              </div>
              <div class="carousel-item">
                <img
                  src="./img/banner/b3.webp"
                  class="d-block w-100"
                  alt="..."
                />
              </div>
            </div>
            <button
              class="carousel-control-prev"
              type="button"
              data-bs-target="#carouselExampleAutoplaying"
              data-bs-slide="prev"
            >
              <span
                class="carousel-control-prev-icon"
                aria-hidden="true"
              ></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button
              class="carousel-control-next"
              type="button"
              data-bs-target="#carouselExampleAutoplaying"
              data-bs-slide="next"
            >
              <span
                class="carousel-control-next-icon"
                aria-hidden="true"
              ></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>
        <div class="contain container">
          <p class="content__top">SẢN PHẨM MỚI</p>
          <swiper-container class="container"
            style="padding-top: 20px; z-index: 1">
            <swiper-slide class="slide">
              <?php
                  include("connect.php");
                  $sql2 = "SELECT * FROM products WHERE id_danhmuc =1 ORDER BY id_product DESC LIMIT 8";
                  $result2 = mysqli_query($conn,$sql2);
                  while($row = mysqli_fetch_assoc($result2)){
                  ?>
              <li
                class="card slide content__card col-sm-12 col-md-6 col-lg-4 col-xl-3"
              >
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
              <?php }?>
            </swiper-slide>
            <swiper-slide class="slide">
              <?php
                  include("connect.php");
                  $sql2 = "SELECT * FROM products WHERE id_danhmuc =2 ORDER BY id_product ASC LIMIT 8";
                  $result2 = mysqli_query($conn,$sql2);
                  while($row = mysqli_fetch_assoc($result2)){
                  ?>
              <li
                class="card slide content__card col-sm-12 col-md-6 col-lg-4 col-xl-3"
              >
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
              <?php }?>
            </swiper-slide>
            <swiper-slide class="slide">
              <?php
                  include("connect.php");
                  $sql2 = "SELECT * FROM products WHERE id_danhmuc =3 ORDER BY id_product ASC LIMIT 8";
                  $result2 = mysqli_query($conn,$sql2);
                  while($row = mysqli_fetch_assoc($result2)){
                  ?>
              <li
                class="card slide content__card col-sm-12 col-md-6 col-lg-4 col-xl-3"
              >
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
              <?php }?>
            </swiper-slide>
            <swiper-slide class="slide">
              <?php
                  include("connect.php");
                  $sql2 = "SELECT * FROM products WHERE id_danhmuc =4 ORDER BY id_product ASC LIMIT 8";
                  $result2 = mysqli_query($conn,$sql2);
                  while($row = mysqli_fetch_assoc($result2)){
                  ?>
              <li
                class="card slide content__card col-sm-12 col-md-6 col-lg-4 col-xl-3"
              >
                <div class="card__image">
                  <a href="./detailProduct.php?id_product=<?=$row["id_product"]?>">
                  <img src="./img/<?=$row["image"]?>" class="card-img-top"
                  alt="..." draggable="false"/></a>
                  <div class="card__btn">
                    <button class="btn__item"><a href="./detailProduct.php?id_product=<?=$row["id_product"]?>">MUA NGAY</a></button>
                    <button class="btn__item">
                    <a class="btn__item-link" href="./xuLiThemSP.php?id_product=<?=$row["id_product"]?>">THÊM VÀO GIỎ</a>
                    </button>
                  </div>
                </div>
                <div class="card-body">
                  <h5 class="card-content"><?=$row["name_product"]?></h5>
                  <p class="card-text"><?=number_format($row["price"],0,",",".")?>₫</p>
                </div>
              </li>
              <?php }?>
            </swiper-slide>
            <swiper-slide class="slide">
              <?php
                  include("connect.php");
                  $sql2 = "SELECT * FROM products WHERE id_danhmuc =5 ORDER BY id_product ASC LIMIT 8";
                  $result2 = mysqli_query($conn,$sql2);
                  while($row = mysqli_fetch_assoc($result2)){
                  ?>
              <li
                class="card slide content__card col-sm-12 col-md-6 col-lg-4 col-xl-3"
              >
                <div class="card__image">
                  <a href="./detailProduct.php?id_product=<?=$row["id_product"]?>">
                  <img src="./img/<?=$row["image"]?>" class="card-img-top"
                  alt="..." draggable="false"/></a>
                  <div class="card__btn">
                    <button class="btn__item"><a href="./detailProduct.php?id_product=<?=$row["id_product"]?>">MUA NGAY</a></button>
                    <button class="btn__item">
                    <a class="btn__item-link" href="./xuLiThemSP.php?id_product=<?=$row["id_product"]?>">THÊM VÀO GIỎ</a>
                    </button>
                  </div>
                </div>
                <div class="card-body">
                  <h5 class="card-content"><?=$row["name_product"]?></h5>
                  <p class="card-text"><?=number_format($row["price"],0,",",".")?>₫</p>
                </div>
              </li>
              <?php }?>
            </swiper-slide>        
          </swiper-container>
          <button class="btn btn__card"><a href="./Store.php">XEM THÊM</a></button>
        </div>
        <div class="content__footer">
          <div class="mt-4">
            <div class="row">
              <img
                src="./img/footerimage/ft1.jpg"
                alt=""
                class="image col-sm-12 col-md-4"
              />
              <img
                src="./img/footerimage/ft2.jpg"
                alt=""
                class="image col-sm-12 col-md-4"
              />
              <img
                src="./img/footerimage/ft3.jpg"
                alt=""
                class="image col-sm-12 col-md-4"
              />
            </div>
          </div>
        </div>
      </div>
      <?php
      include("footer.php");
      ?>
    </div>
  </body>
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>
  <script src="./js/header.js"></script>
  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"
  ></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="./js/simpleCarousel.js" defer></script>
</html>
