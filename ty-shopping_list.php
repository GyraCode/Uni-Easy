<?php require_once 'db.inc.php' ?>
<?php session_start() ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

  <style>
    /* Icon set - http://ionicons.com */
    @import url(https://fonts.googleapis.com/css?family=Raleway:400,500,700);
    @import url(https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css);

    .snip1268 {
      font-family: 'Raleway', Arial, sans-serif;
      position: relative;
      overflow: hidden;
      margin: 10px;
      min-width: 220px;
      max-width: 310px;
      width: 100%;
      color: #333333;
      text-align: center;
      background-color: #ffffff;
      line-height: 1.6em;
    }

    .snip1268 * {
      -webkit-box-sizing: border-box;
      box-sizing: border-box;
      -webkit-transition: all 0.6s ease;
      transition: all 0.6s ease;
    }

    .snip1268 .image {
      position: relative;
    }

    .snip1268 img {
      max-width: 100%;
      vertical-align: top;
      -webkit-transition: opacity 0.35s;
      transition: opacity 0.35s;
    }

    .snip1268 .icons,
    .snip1268 .add-to-cart {
      position: absolute;
      left: 20px;
      right: 20px;
      opacity: 0;
    }

    .snip1268 .icons {
      -webkit-transform: translateY(-100%);
      transform: translateY(-100%);
      top: 20px;
      display: flex;
      justify-content: space-between;
    }

    .snip1268 .icons a {
      width: 32.5%;
      background: #ffffff;
    }

    .snip1268 .icons a:hover {
      background: #000000;
    }

    .snip1268 .icons a:hover i {
      color: #ffffff;
      opacity: 1;
    }

    .snip1268 .icons i {
      line-height: 46px;
      font-size: 20px;
      color: #000000;
      text-align: center;
      opacity: 0.7;
      margin: 0;
    }

    .snip1268 .add-to-cart {
      position: absolute;
      bottom: 20px;
      -webkit-transform: translateY(100%);
      transform: translateY(100%);
      font-size: 0.8em;
      color: #000000;
      line-height: 46px;
      letter-spacing: 1.5px;
      background-color: #ffffff;
      font-weight: 700;
      text-decoration: none;
      text-transform: uppercase;
    }

    .snip1268 .add-to-cart:hover {
      background: #000000;
      color: #ffffff;
    }

    .snip1268 figcaption {
      padding: 20px 20px 30px;
    }

    .snip1268 h2,
    .snip1268 p {
      margin: 0;
      text-align: left;
    }

    .snip1268 h2 {
      margin-bottom: 10px;
      font-weight: 700;
      font-size: 20px;
    }

    .snip1268 p {
      margin-bottom: 15px;
      font-size: 1em;
      font-weight: 500;
    }

    .snip1268 .price {
      font-size: 1.3em;
      opacity: 0.5;
      font-weight: 700;
      text-align: right;
    }

    .snip1268:hover img,
    .snip1268.hover img {
      opacity: 0.8;
    }

    .snip1268:hover .icons,
    .snip1268.hover .icons,
    .snip1268:hover .add-to-cart,
    .snip1268.hover .add-to-cart {
      -webkit-transform: translateY(0);
      transform: translateY(0);
      opacity: 1;
    }

    .ty-sc {
      justify-content: space-around;
    }

    .dropdown {
      margin-right: 30px;
    }

    .dropdown-menu a {
      color: #000;
    }

    .ty-p1-h h1 {
      font-size: 30px;
      font-weight: 700;

    }

    .ty-p1-h h3 {
      font-size: 15px;
      margin-left: 50px;
      margin-top: 15px;
    }

    .ty-p1-btn .btn {
      background-color: #fff;
    }

    .ty-p1-btn button {
      color: #000;
      font-weight: 700;
    }

    .container .sidebar {
      margin-top: 70px;
      transform: translateX(-140px);

    }

    a:link,
    a:visited,
    a:hover {
      color: #8a8989;
    }



    .container .shopcards {
      display: flex;
      justify-content: space-around;
    }

    .container .shopcards .card {
      margin-bottom: 50px;
      margin-right: 10px;

    }

    .yt-p1-a {
      margin-left: 900px;
      transform: translateY(-70px);
      width: fit-content;
      border: 1px solid #000;
      padding: 5px 20px;
      border-radius: 15px;


    }



    @media (max-width:375px) {
      .ty-p1-h {
        display: flex;
        flex-direction: row;
        justify-content: space-around;
        margin-top: -80px;
      }

      .ty-p1-h h1 {
        padding-top: 100px;

      }

      .ty-p1-h h3 {
        padding-top: 100px;
      }

      .ty-p1-btn {
        display: flex;
        flex-direction: row;
        justify-content: space-around;
        margin-left: 4px;
      }

      .ty-p1-btn .dropdown1 {
        position: absolute;

      }

      .yt-p1-a {
        color: #000;
        position: absolute;
        width: fit-content;
        border: 1px solid #000;
        padding: 5px 20px;
        border-radius: 15px;
        margin-left: 0;
        top: 300px;
        left: 200px;
      }

      .container .shopcards {
        margin-left: 1px;
      }


    }
  </style>

</head>

<body>
  <?php require_once 'tpl/head.inc.php' ?>

  <!-- section1 -->
  <div class="container">
    <div class="ty-p1-h row d-flex">
      <h1>服飾
      </h1>
      <h3>15件商品</h3>
    </div>
    <div class="ty-p1-btn row d-flex">
      <div class="dropdown">
        <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          系列選擇
        </button>

        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
          <!-- <a class="dropdown-item" href="#">男性服飾</a>
          <a class="dropdown-item" href="#">女性服飾</a>
          <a class="dropdown-item" href="#">有氧商品</a>
          <a class="dropdown-item" href="#">瑜珈商品</a>
          <a class="dropdown-item" href="#">增肌商品</a>
          <a class="dropdown-item" href="#">補給商品</a>
          <a class="dropdown-item" href="#">配件商品</a> -->

        </div>

      </div>
      <div class="sidebar">
        <?php require_once 'tpl/ty-sidebar.php' ?>
      </div>

      <div class="dropdown1">
        <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          價格
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
          <a class="order_by_price dropdown-item" href="#" data-order="ASC">低 - 高</a>
          <a class="order_by_price dropdown-item" href="#" data-order="DESC">高 - 低</a>

        </div>
      </div>

      <div class="dropdown2">
        <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          排序
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
          <a class="order_by_time dropdown-item" href="#" data-order="ASC">最舊</a>
          <a class="order_by_time dropdown-item" href="#" data-order="DESC">最新</a>

        </div>
      </div>


    </div>
    <div class="yt-p1-a">
      <a href="">聯絡我們</a>
    </div>


    <?php
    //整合特定商品類別分頁的 SQL 字串
    $where = "";
    if (isset($_GET['sub_cat_id'])) {
      $where = "WHERE `cat_id` = {$_GET['sub_cat_id']}";
    }

    //取得 products 資料表總筆數
    $sqlTotal = "SELECT count(1) AS `count` FROM `products` {$where}";
    $totalRows = $pdo->query($sqlTotal)->fetch()['count'];

    //每頁幾筆
    $numPerPage = 12;

    // 總頁數，ceil()為無條件進位
    $totalPages = ceil($totalRows / $numPerPage);

    //目前第幾頁
    $page = (isset($_GET['page']) && $_GET['page'] > 0) ? (int)$_GET['page'] : 1;

    //計算分頁偏移量
    $offset = ($page - 1) * $numPerPage;
    ?>


    <div class="container shopcards">
      <!-- 放次要類別的區塊 -->
      <?php require_once 'tpl/ty-sidebar.php' ?>

      <!-- 放商品一覽和分頁連結的區塊 -->
      <div class="col-10">
        <!-- 商品一覽 -->
        <div class="row">
          <div class="">
            <?php if (isset($_GET['sub_cat_id'])) { ?>
              <div class="row row-cols-1 row-cols-lg-4 align-items-stretch  g-4 py-2">
                <?php
                $sql = "SELECT `id`, `prod_name`, `prod_thumbnail`, `prod_price` 
                        FROM `products` 
                        WHERE `cat_id` = {$_GET['sub_cat_id']} ";
                if (isset($_GET['order_by_price'])) {
                  $sql .= "ORDER BY `prod_price` {$_GET['order_by_price']} ";
                } else if (isset($_GET['order_by_time'])) {
                  $sql .= "ORDER BY `created_at` {$_GET['order_by_time']} ";
                }
                $sql .= " LIMIT {$offset}, {$numPerPage}";
                $arr = $pdo->query($sql)->fetchAll();
                foreach ($arr as $obj) {
                ?>

                  <div class="col-12 col-md-4">
                    <div class="card" style="width: 18rem;">
                      <a href="detail.php?cat_id=<?= $_GET['cat_id'] ?>&sub_cat_id=<?= $_GET['sub_cat_id'] ?>&prod_id=<?= $obj['id'] ?>">
                        <img src="images/<?= $obj['prod_thumbnail'] ?>" class="card-img-top" alt="...">
                      </a>
                      <div class="card-body">
                        <h5 class="card-title"><?= $obj['prod_name'] ?></h5>
                        <p class="card-text">價格: <?= $obj['prod_price'] ?></p>
                        <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                      </div>
                    </div>
                  </div>
              <?php
                }
              }
              ?>
              </div>
          </div>
        </div>

        <!-- 分頁 -->
        <?php if (isset($_GET['cat_id']) && isset($_GET['sub_cat_id'])) { ?>
          <div class="row">

            <nav aria-label="Page navigation example">
              <ul class="pagination">
                <!-- 第一頁 -->
                <li class="page-item <?php if ($page == 1) echo 'disabled'; ?>">
                  <a class="page-link" href="index.php?cat_id=<?= $_GET['cat_id'] ?>&sub_cat_id=<?= $_GET['sub_cat_id'] ?>&page=1" tabindex="-1" aria-disabled="true">
                    <i class="fas fa-backward"></i>
                  </a>
                </li>

                <!-- 上一頁 -->
                <li class="page-item <?php if ($page == 1) echo 'disabled'; ?>">
                  <a class="page-link" href="?cat_id=<?= $_GET['cat_id'] ?>&sub_cat_id=<?= $_GET['sub_cat_id'] ?>&page=<?= ($page - 1) ?>" tabindex="-1" aria-disabled="true">
                    <i class="fas fa-chevron-left"></i>
                  </a>
                </li>

                <?php
                //列出所有分頁連結
                for ($i = 1; $i <= $totalPages; $i++) {

                  //當「目前第幾頁」($page)等於準備顯示在網頁上的分頁號碼($i)，以加上 class
                  $strClass = '';
                  if ($page === $i) $strClass = 'active';

                  //$i 列出的數字範圍，會大於「目前第幾頁」($page) 減 5，以及小於「目前第幾頁」($page) 加 5
                  if ($i > $page - 5 && $i < $page + 5) {
                ?>
                    <li class="page-item <?= $strClass; ?>">
                      <a class="page-link" href="?cat_id=<?= $_GET['cat_id'] ?>&sub_cat_id=<?= $_GET['sub_cat_id'] ?>&page=<?= $i ?>">
                        <?= $i ?>
                      </a>
                    </li>
                <?php
                  }
                }
                ?>

                <!-- 下一頁 -->
                <li class="page-item <?php if ($page == $totalPages) echo 'disabled'; ?>">
                  <a class="page-link" href="?cat_id=<?= $_GET['cat_id'] ?>&sub_cat_id=<?= $_GET['sub_cat_id'] ?>&page=<?= ($page + 1) ?>" tabindex="-1" aria-disabled="true">
                    <i class="fas fa-chevron-right"></i>
                  </a>
                </li>

                <!-- 最後一頁 -->
                <li class="page-item <?php if ($page == $totalPages) echo 'disabled'; ?>">
                  <a class="page-link" href="?cat_id=<?= $_GET['cat_id'] ?>&sub_cat_id=<?= $_GET['sub_cat_id'] ?>&page=<?= $totalPages ?>" tabindex="-1" aria-disabled="true">
                    <i class="fas fa-forward"></i>
                  </a>
                </li>
              </ul>
            </nav>

          </div>
        <?php } ?>

      </div>
    </div>
  </div>
  <?php require_once 'tpl/foot.inc.php' ?>


  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

  <script>
    /* Demo purposes only */
    $(".hover").mouseleave(
      function() {
        $(this).removeClass("hover");
      }
    );

    $('a.order_by_price').click(function(event) {
      // preventDefault取消該做的事情
      event.preventDefault();
      let a = $(this);
      // alert(a.attr('data-order'));
      // alert(location.search);
      const urlParams = new URLSearchParams(window.location.search);
      // alert(urlParams.get('cat_id'));
      // alert(urlParams.get('sub_cat_id'));
      location.href = `?cat_id=${urlParams.get('cat_id')}&sub_cat_id=${urlParams.get('sub_cat_id')}&order_by_price=${a.attr('data-order')}`
    });

    $('a.order_by_time').click(function(event) {
      // preventDefault取消該做的事情
      event.preventDefault();
      let a = $(this);
      // alert(a.attr('data-order'));
      // alert(location.search);
      const urlParams = new URLSearchParams(window.location.search);
      // alert(urlParams.get('cat_id'));
      // alert(urlParams.get('sub_cat_id'));
      location.href = `?cat_id=${urlParams.get('cat_id')}&sub_cat_id=${urlParams.get('sub_cat_id')}&order_by_time=${a.attr('data-order')}`
    });
  </script>


</body>


</html>