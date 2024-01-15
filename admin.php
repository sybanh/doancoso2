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
    <link rel="stylesheet" href="./css/add.css">
    <link rel="stylesheet" href="./css/base.css" />
    <link rel="stylesheet" href="./css/home.css" />
    <link rel="stylesheet" href="./css/styles.css" />
    <link rel="stylesheet" href="./css/store.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
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
      .nav__column{
        border: solid black 1px;
        background: #333;
      }
      .nav__column button{
        border-radius: 0;
        outline: none;
      }
      .diagram{
        height: 100vh;
        margin: 0;
        padding: 0;
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: #333;
      }
      .chart{
        width: 1000px;
        height: 500px;
        display: block;
      }
      .numbers{
        color: #fff;
        margin: 0;
        padding: 0;
        width: 50px;
        height: 100%;
        display: inline-block;
        float: left;
      }
      .numbers li{
        list-style: none;
        height: 280px;
        position: relative;
        bottom: 240px;
      }
      .numbers span{
        font-size: 12px;
        font-weight: 600;
        position: absolute;
        bottom: 0;
        right: 10px;
      }
      .bars{
        color: #fff;
        font-size: 12px;
        font-weight: 600;
        background: #555;
        margin: 0;
        padding: 0;
        display: inline-block;
        width: 950px;
        height: 600px;
        box-shadow: 0 0 10px 0 #555;
        border-radius: 5px;
      }
      .bars li{
        display: table-cell;
        width: 76px;
        height: 600px;
        position: relative;
      }
      .bars span{
        width: 100%;
        position: absolute;
        bottom: -30px;
        text-align: center;
        left: 0;
      }
      .bars .bar{
        display: block;
        background-color: #17C0EB;
        width: 60px;
        position: absolute;
        bottom: 0;
        margin-left: 25px;
        text-align: center;
        box-shadow: 0 0 10px 0 rgba(23, 192, 235, 0.5);
        transition: 0.5s;
        transition-property: background, box-shadow;
      }
      .bars .bar:hover {
      background: #55EFC4;
      box-shadow: 0 0 10px 0 rgba(85, 239, 196, 0.5);
      cursor: pointer;
      }
      .bars .bar:before{
      color: #fff;
      content: attr(data-percentage) '%';
      position: relative;
      bottom: 20px;
      }
      .submit {
      width: 100%;
      background-color: black;
      color: #fff;
      padding: 14px 20px;
      margin: 8px 0;
      border: none;
      border-radius: 4px;
      font-size:20px;
      cursor: pointer;
      font-weight:600;
      }
      .submit:hover{
        background:#fff;
        color:black;
        border: solid 1px black;
      }
      .text{
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
      }
      .model__div{
        border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
      }
    </style>
</head>
<body>
<div class="app">
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
                  <div class="icon">
                    <i class="bx bx-search-alt-2"></i>
                  </div>
                </form>
              </div>
            </div>
          </nav>
        </div>
      </header>
    <div class="container content">
    <div class="row">
    <div class="d-flex align-items-start">
    <div class="nav flex-column nav-pills me-3 nav__column" id="v-pills-tab" role="tablist" aria-orientation="vertical">
    <button style="width: 162px;" class="btn btn-outline-light active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">Biểu Đồ Thu Nhập</button>
    <button class="btn btn-outline-light " id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">Quản Lí Sản Phẩm</button>
    <button class="btn btn-outline-light " id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">Thêm Sản Phẩm</button>
    <button style="color: blue;background-color: #fff;" class="btn btn-outline-dark"><a href="login.php"><i class='bx bx-log-out'></i>Logout</a></button>
  </div>
  <div class="tab-content" id="v-pills-tabContent">
  <div class="tab-pane fade show active diagram" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab" tabindex="0">
     <div class="chart">
      <ul class="numbers">
        <li><span>100%</span></li>
        <li><span>50%</span></li>
        <li><span>0%</span></li>
      </ul>
      <ul class="bars">
        <li><div class="bar" data-percentage="40"><span>Tháng 01</span></div></li>
        <li><div class="bar" data-percentage="80"><span>Tháng 02</span></div></li>
        <li><div class="bar" data-percentage="90"><span>Tháng 03</span></div></li>
        <li><div class="bar" data-percentage="10"><span>Tháng 04</span></div></li>
        <li><div class="bar" data-percentage="20"><span>Tháng 05</span></div></li>
        <li><div class="bar" data-percentage="60"><span>Tháng 06</span></div></li>
        <li><div class="bar" data-percentage="20"><span>Tháng 07</span></div></li>
        <li><div class="bar" data-percentage="50"><span>Tháng 08</span></div></li>
        <li><div class="bar" data-percentage="70"><span>Tháng 09</span></div></li>
        <li><div class="bar" data-percentage="80"><span>Tháng 10</span></div></li>
        <li><div class="bar" data-percentage="40"><span>Tháng 11</span></div></li>
        <li><div class="bar" data-percentage="60"><span>Tháng 12</span></div></li>
      </ul>
     </div>
    </div>
    <div class="tab-pane fade body" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab" tabindex="0">
     <div class="model__div">
      <h3>Thêm Sản Phẩm</h3>
      <form  action="./xuLiThemSP.php" method="post" enctype="multipart/form-data">
        <label for="fname">Tên Sản Phẩm</label>
        <input class="text" type="text" id="fname" name="tensp">
        <label for="lname">Hình Ảnh</label>
        <input class="text" type="file" id="lname" name="hinhanh">
        <label for="price">Giá Tiền</label>
        <input class="text" type="text" id="price" name="gia">
        <label for="country">Loại Danh Mục</label>
        <select class="text" style="" name="id">
        <?php
          include ("connect.php");
          $sql="SELECT * FROM danhmuc";
          $kq=mysqli_query($conn,$sql);
          while($row= mysqli_fetch_array($kq)){
          echo '<option value="'.$row["id_danhmuc"].'">'.$row["name_danhmuc"].'</option>';
          }
        ?>
        </select>
        <label for="mota">Mô Tả Sản Phẩm</label>
        <textarea class="text" id="mota" name="mota" rows="4" cols="50"></textarea>
        <input class="submit" type="submit" value="Thêm sản phẩm">
      </form>
     </div>
    </div>
    <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab" tabindex="0">
      <h3 class="container-fluid mt-3">Tất cả sản phẩm</h3>
       <div class="container-fluid card__store">
        <div class="row">
          <?php
          include("connect.php");
          $item_per_page =!empty($_GET['per_page']) ? $_GET['per_page']:16;
          $current_page = !empty($_GET['page']) ? $_GET['page']:1;
          $offset = ($current_page - 1) * $item_per_page;
          $sql = "SELECT * FROM products ORDER BY id_product ASC LIMIT ".$item_per_page." OFFSET ". $offset;
          $result = mysqli_query($conn,$sql);
          $totalrows = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM products"));
          $totalPage = ceil($totalrows/$item_per_page);
          $numpage=1;
          while($row = mysqli_fetch_assoc($result)){
          ?>
            <li class="card content__card col-sm-12 col-sm-6 col-xl-3">
            <div class="card__image">
            <a href="./detailAdmin.php?id_product=<?=$row["id_product"]?>">
            <img src="./img/<?=$row["image"]?>" class="card-img-top"
            alt="..." draggable="false"/></a>
             <div class="card__btn">
              <button class="btn__item"><a style="padding: 10px;" href="./updateProduct.php?id_product=<?=$row["id_product"]?>">Sửa</a></button>
              <button class="btn__item">
              <a style="padding: 10px;" class="btn__item-link" href="./deleteProduct.php?id_product=<?=$row["id_product"]?>">Xóa</a>
              </button>
             </div>
            </div>
              <div class="card-body">
                <h5 class="card-content"><?=$row["name_product"]?></h5>
                <p class="card-text"><?=number_format($row["price"],0,",",".")?>₫</p>
              </div>
            </li>
            <?php } ?>
        </div>
         <div class="container content__pagination">
          <ul class="pagination">
          <li class="page-item">
          <a class="page-link" href="?per_page=<?=$item_per_page?>&page=<?=$numpage--?>" aria-label="Previous">
          <span aria-hidden="true">&laquo;</span>
          </a>
          </li>
            <?php for($num =1; $num <= $totalPage;$num++){?>
            <?php if($num != $current_page) {?>
            <li class="page-item">
              <a class="page-link" href="?per_page=<?=$item_per_page?>&page=<?=$num?>"><?=$num?></a>
            </li>
            <?php }else{?>
            <li class="page-item active">
              <a class="page-link" href="?per_page=<?=$item_per_page?>&page=<?=$num?>"><?=$num?></a>
            </li>
            <?php }?>
            <?php } ?>
            <li class="page-item">
            <a class="page-link" href="?per_page=<?=$item_per_page?>&page=<?=($numpage=$numpage+1)?>" aria-label="Next">
            <span aria-hidden="true">&raquo;</span>
            </a>
            </li>
          </ul>
         </div>
       </div>
    </div>
  </div>
  </div>
  </div>
      </div>
      <?php
      include("footer.php");
      ?>
</div>
<script type="text/javascript">
       $(function(){
         $('.bars li .bar').each(function(key,bar){
          var percentage = $(this).data('percentage');
          $(this).animate({
            'height' :percentage +"%"
          },1000)
         })
       });

      </script>
      <script>
      function quay_lai_trang_truoc(){
          history.back();
      }
  </script>
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