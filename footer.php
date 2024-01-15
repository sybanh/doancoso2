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
</html>