<?php require_once 'db.inc.php' ?>
<?php session_start() ?>
<?php require_once 'tpl/head.inc.php' ?>
<link rel="stylesheet" href="./TY_main.css">

  <!-- section1 -->
  <div class="container">
    <div class="ty-p1-h row d-flex">
      <h1>服飾
      </h1>
      <h3>15件商品</h3>
    </div>
    <div class="ty-p1-btn row d-flex">
      <div class="dropdown">
        <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">
          系列選擇
        </button>
        
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
          <a class="dropdown-item" href="#">男性服飾</a>
          <a class="dropdown-item" href="#">女性服飾</a>
          <a class="dropdown-item" href="#">有氧商品</a>
          <a class="dropdown-item" href="#">瑜珈商品</a>
          <a class="dropdown-item" href="#">增肌商品</a>
          <a class="dropdown-item" href="#">補給商品</a>
          <a class="dropdown-item" href="#">配件商品</a>
               
        </div>
        
      </div>
   
      <div class="dropdown2">
        <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">
          價格
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
          <a class="dropdown-item" href="#">低 - 高</a>
          <a class="dropdown-item" href="#">高 - 低</a>

        </div>
      </div>

      <div class="dropdown2">
        <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">
          排序
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
          <a class="dropdown-item" href="#">最新</a>
          <a class="dropdown-item" href="#">銷售量</a>

        </div>
      </div>
    </div>


<?php
//整合特定商品類別分頁的 SQL 字串
$where = "";
if( isset($_GET['sub_cat_id']) ){
    $where = "WHERE `cat_id` = {$_GET['sub_cat_id']}";
}

//取得 products 資料表總筆數
$sqlTotal = "SELECT count(1) AS `count` FROM `products` {$where}";
$totalRows = $pdo->query($sqlTotal)->fetch()['count'];

//每頁幾筆
$numPerPage = 12;

// 總頁數，ceil()為無條件進位
$totalPages = ceil($totalRows/$numPerPage);

//目前第幾頁
$page = (isset($_GET['page']) && $_GET['page'] > 0) ? (int)$_GET['page'] : 1;

//計算分頁偏移量
$offset = ($page - 1) * $numPerPage;
?>


<div class="row shopcards">
    <!-- 放次要類別的區塊 -->

    
    <!-- 放商品一覽和分頁連結的區塊 -->
    <div class="col-10">
        <!-- 商品一覽 -->
        <div class="row">
            <div class="">
            <?php if(isset($_GET['sub_cat_id'])) { ?>
            <div class="row row-cols-1 row-cols-lg-4 align-items-stretch  g-4 py-2">
            <?php
                $sql = "SELECT `id`, `prod_name`, `prod_thumbnail`, `prod_price` 
                        FROM `products` 
                        WHERE `cat_id` = {$_GET['sub_cat_id']} 
                        LIMIT {$offset}, {$numPerPage}";
                $arr = $pdo->query($sql)->fetchAll();
                foreach($arr as $obj){
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
        <?php if( isset($_GET['cat_id']) && isset($_GET['sub_cat_id']) ){ ?>
        <div class="row">
            
            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    <!-- 第一頁 -->
                    <li class="page-item <?php if($page == 1) echo 'disabled'; ?>">
                        <a class="page-link" href="index.php?cat_id=<?= $_GET['cat_id'] ?>&sub_cat_id=<?= $_GET['sub_cat_id'] ?>&page=1" tabindex="-1" aria-disabled="true">
                            <i class="fas fa-backward"></i>
                        </a>
                    </li>

                    <!-- 上一頁 -->
                    <li class="page-item <?php if($page == 1) echo 'disabled'; ?>">
                        <a class="page-link" href="?cat_id=<?= $_GET['cat_id'] ?>&sub_cat_id=<?= $_GET['sub_cat_id'] ?>&page=<?= ($page - 1) ?>" tabindex="-1" aria-disabled="true">
                            <i class="fas fa-chevron-left"></i>
                        </a>
                    </li>

                    <?php
                    //列出所有分頁連結
                    for($i = 1; $i <= $totalPages; $i++){ 

                        //當「目前第幾頁」($page)等於準備顯示在網頁上的分頁號碼($i)，以加上 class
                        $strClass = '';
                        if($page === $i) $strClass = 'active';

                        //$i 列出的數字範圍，會大於「目前第幾頁」($page) 減 5，以及小於「目前第幾頁」($page) 加 5
                        if ( $i > $page - 5 && $i < $page + 5 ) {
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
                    <li class="page-item <?php if($page == $totalPages) echo 'disabled'; ?>">
                        <a class="page-link" href="?cat_id=<?= $_GET['cat_id'] ?>&sub_cat_id=<?= $_GET['sub_cat_id'] ?>&page=<?= ($page + 1) ?>" tabindex="-1" aria-disabled="true">
                            <i class="fas fa-chevron-right"></i>
                        </a>
                    </li>

                    <!-- 最後一頁 -->
                    <li class="page-item <?php if($page == $totalPages) echo 'disabled'; ?>">
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
  
  

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"
    integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"
    integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k"
    crossorigin="anonymous"></script>

  <script>
    /* Demo purposes only */
    $(".hover").mouseleave(
      function () {
        $(this).removeClass("hover");
      }
    );
  </script>


  </body>


</html>