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
    <link rel="stylesheet" href="./css/box.css" />
    <link rel="stylesheet" href="./css/btn.css" />
    <link rel="stylesheet" href="./css/base.css" />
    <link rel="stylesheet" href="./css/store.css" />
  </head>
  <body>
    <div class="container-fluid app">
    <?php
    include("header.php");
    ?>
      <div class="content container">
        <div class="content__header">
          <div class="container-fluid content__nav">
            <a href="./index.php">Trang chủ</a>
            <span>/</span>
            <a href="">Danh mục</a>
            <span>/</span>
            <a href="">Tất cả sản phẩm</a>
          </div>
        </div>
        <h3 class="container-fluid mt-3">Tất cả sản phẩm</h3>
        <form action="" method="get">
          <input style="width:400px;height:40px" type="text" name="contentSearch" placeholder="Tìm kiếm sản phẩm">
          <button class="btn btn-outline-dark">Tìm kiếm</button>
        </form>
        <div class="container-fluid card__store">
          <div class="row">
          <?php
          include("connect.php");
          $search = isset($_GET['contentSearch'])?$_GET['contentSearch']:"";
          $item_per_page =!empty($_GET['per_page']) ? $_GET['per_page']:15;
          $current_page = !empty($_GET['page']) ? $_GET['page']:1;
          $offset = ($current_page - 1) * $item_per_page;
          if($search){
          $sql = "SELECT * FROM products WHERE name_product LIKE '%$search%' ORDER BY id_product ASC LIMIT ".$item_per_page." OFFSET ". $offset;
          $totalrows = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM products WHERE 'name_product' LIKE '%".$search."%'"));
          }else{
          $sql = "SELECT * FROM products ORDER BY id_product ASC LIMIT ".$item_per_page." OFFSET ". $offset;
          $totalrows = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM products WHERE 'name_product' LIKE '%".$search."%'"));
          }
          $result = mysqli_query($conn,$sql);
          $totalPage = ceil($totalrows/$item_per_page);
          $numpage=1;
          while($row = mysqli_fetch_assoc($result)){
          ?>
            <li class="card content__card col-sm-12 col-md-6 col-xl-3">
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
