<?php require_once 'db.inc.php' ?>
<?php session_start() ?>
<title>Document</title>
<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
<link rel="stylesheet" href="main.css">
<link rel="stylesheet" href="YD_main.css">
<link rel="stylesheet" href="./fontawesome-free-5.15.3-web/css/all.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<?php require_once 'tpl/head.inc.php' ?>



<!-- 放商品詳細資訊的區塊 -->
<div class="container">
    <div class="col-10 ">
        <div class="row">
            <div class="col-5 pt-3 dpk">
                <div class="text-center">
                <?php
                if (isset($_GET['prod_id'])) {
                    $sql = "SELECT * FROM `products` WHERE `id` = {$_GET['prod_id']}";
                    $obj = $pdo->query($sql)->fetch();
                ?>
                    <img src="images/<?= $obj['prod_image'] ?>" class="rounded" alt="<?= $obj['prod_name'] ?>" title="<?= $obj['prod_name'] ?>">
                    <?php
                }
                ?>
                   
                </div>
                <?php
                if (isset($_GET['prod_id'])) {
                    $sql = "SELECT * FROM `products` WHERE `id` = {$_GET['prod_id']}";
                    $obj = $pdo->query($sql)->fetch();
                ?>
                <div class="text-center">

                    <a data-lightbox="roadtrip" href="<?= $objImg['filename'] ?>" style="display: none;">
                        <img src="images/<?= $objImg['filename'] ?>" class=" figure-img img-fluid rounded float-start m-1" style="width: 100%;" alt="...">
                    </a>
                <?php
                }
                ?>
                </div>
            </div>
        </div>
        <div class="col-7 dpk">
            <div class=" p-3 border-bottom">
                <div class="col-6">
                    <h4><?= $obj['prod_name'] ?></h4>
                </div>
                <div class="col-6">
                    <p class="fs-1">NT: <?= $obj['prod_price'] ?></p>
                </div>
            </div>
            <div class="row p-3 border-bottom">
                <div class="col-6">
                    <div class="input-group mb-3">
                        <button class="btn btn-outline-secondary" type="button" id="btn_minus"><i class="fas fa-minus"></i></button>
                        <input type="text" class="form-control" placeholder="" id="qty" value="1">
                        <button class="btn btn-outline-secondary" type="button" id="btn_plus"><i class="fas fa-plus"></i></button>
                    </div>
                </div>
                <div class="col-6">
                    <button type="button" class="btn btn-danger" id="btn_set_cart" data-prod-id="<?= $obj['id'] ?>" data-prod-name="<?= $obj['prod_name'] ?>" data-prod-thumbnail="<?= $obj['prod_thumbnail'] ?>" data-prod-price="<?= $obj['prod_price'] ?>">加入購物車</button>

                </div>
            </div>
        </div>
    </div>
</div>
<!--輪播牆 -->
<div class="container p-3 mb-2 bg-danger mt-3">
    <div class="row">
        <div class="d-flex" id="YD-Carousel">
            <div id="wrapper">
                <div id="carousel">
                    <div id="content">
                        <img class="item" src="./img/getImage (1).jpg">
                        <img class="item" src="./img/getImage (2).jpg">
                        <img class="item" src="./img/getImage (3).jpg">
                        <img class="item" src="./img/getImage (4).jpg">
                        <img class="item" src="./img/getImage (5).jpg">
                        <img class="item" src="./img/getImage (6).jpg">
                        <img class="item" src="./img/getImage (7).jpg">
                        <img class="item" src="./img/getImage (8).jpg">
                        <img class="item" src="./img/getImage (9).jpg">
                        <img class="item" src="./img/getImage (10).jpg">

                    </div>
                </div>
                <button id="prev">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path fill="none" d="M0 0h24v24H0V0z" />
                        <path d="M15.61 7.41L14.2 6l-6 6 6 6 1.41-1.41L11.03 12l4.58-4.59z" />
                    </svg>
                </button>
                <button id="next">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path fill="none" d="M0 0h24v24H0V0z" />
                        <path d="M10.02 6L8.61 7.41 13.19 12l-4.58 4.59L10.02 18l6-6-6-6z" />
                    </svg>
                </button>
            </div>

        </div>

    </div>
</div>


<!--masonry -->


<div class="masonry container mt-5">
    <div class="mItem">
        <img src="./img/class02.jpg">
    </div>

    <div class="mItem">
        <img src="./img/class03.jpg">
    </div>

    <div class="mItem">
        <img src="./img/class04.jpg">
    </div>

    <div class="mItem">
        <img src="./img/class05.jpg">
    </div>

    <div class="mItem">
        <img src="./img/class06.jpg">
    </div>
    <div class="mItem">
        <img src="./img/class07.jpg">
    </div>

</div>
<?php require_once 'tpl/foot.inc.php' ?>
