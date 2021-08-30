<?php require_once 'db.inc.php' ?>
<?php session_start() ?>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="./ken.css">
    <title>yoyun</title>
    <link href="https://fonts.googleapis.com/css?family=Cardo" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">




<?php require_once 'tpl/head.inc.php' ?>
    <!-- 有氧特別企劃 -->

    <div class="container my-2">
        <div class="row">
            <div class="col-md-12 jumbotron-fluid">
                <div class="jumbotron bg-cover " style="background-image: url(./images/five-reasons-to-try-hiit-960x540.jpg);">
                    <h1 class="display-4 text-white">特別企劃!</h1>
                    <h2 class="display-4 text-white">高強度間歇有氧</h2>


                    <hr class="my-5 text-white">
                    <p class="display-4 text-white">熱銷中</p>
                    <a class="btn btn-danger btn-lg" href="#" role="button">Learn more</a>
                </div>
            </div>

        </div>
    </div>

    <!-- 有氧熱銷-->
    <div class="sectction">
        <div class="container">
            <div class="row bg-danger">
                <div class="col-md-12 d-flex yogahot">
                    <div class="col-md-5">
                        <h1 class="display-5 mt-3 text-white text-center mt-5">熱銷主打</h1>
                        <h2 class="display-5 text-white text-center">MV舞蹈</h2>
                        <button type="button" class="btn btn-outline-light ">立即加入</button>
                    </div>
                    <div class="col-md-7 pt-4 yogahotsale">
                        <div class="jumbotron jumbotron-fluid " style="background-image: url(./images/HIIT1CR-fixed.jpg);"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </section>


    
</div>
<!-- 運動頁熱銷商品推薦 -->

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


<div class="container hover">
    <!-- 放商品一覽和分頁連結的區塊 -->
    <div class="col-12">
        <!-- 商品一覽 -->

        <?php if (isset($_GET['sub_cat_id'])) { ?>
            <div class="row py-5 gap">
                <?php
                $sql = "SELECT `id`, `prod_name`, `prod_thumbnail`, `prod_price` 
                        FROM `products` 
                        WHERE `cat_id` = {$_GET['sub_cat_id']} 
                        LIMIT {$offset}, {$numPerPage}";
                $arr = $pdo->query($sql)->fetchAll();
                foreach ($arr as $obj) {
                ?>

                    <div class="col snip1268 ">
                        <div class="card" style="width: 18rem;">
                            <a href="detail.php?cat_id=<?= $_GET['cat_id'] ?>&sub_cat_id=<?= $_GET['sub_cat_id'] ?>&prod_id=<?= $obj['id'] ?>">
                                <img src="images/<?= $obj['prod_thumbnail'] ?>" class="card-img-top" alt="...">
                            </a>
                            <div class="card-body">
                                <h3 class="card-title"><?= $obj['prod_name'] ?></h5>
                                    <p class="card-text price">$ <?= $obj['prod_price'] ?></p>
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



<?php require_once 'tpl/foot.inc.php' ?>
</html>