<?php require_once 'db.inc.php' ?>
<?php session_start() ?>
<?php require_once 'tpl/head.inc.php' ?>

<div class="row">
    <!-- 放次要類別的區塊 -->


    <!-- 放商品詳細資訊的區塊 -->
    <div class="col-10">
        <?php
        if (isset($_GET['prod_id'])) {
            $sql = "SELECT * FROM `products` WHERE `id` = {$_GET['prod_id']}";
            $obj = $pdo->query($sql)->fetch();
        ?>
            <div class="row">

                <div class="col-5 pt-3">

                    <div class="text-center">
                        <img src="images/<?= $obj['prod_image'] ?>" class="rounded" alt="<?= $obj['prod_name'] ?>" title="<?= $obj['prod_name'] ?>">
                        <button id="zoom"><i class="fas fa-search-plus"></i></button>
                    </div>

                    <div class="text-center">
                        <?php
                        $sql = "SELECT * FROM `products_img` WHERE `func` = 'zoom' AND `prod_id` = {$_GET['prod_id']}";
                        $arr = $pdo->query($sql)->fetchAll();
                        foreach ($arr as $objImg) {
                        ?>
                            <a data-lightbox="roadtrip" href="<?= $objImg['filename'] ?>" style="display: none;">
                                <img src="images/<?= $objImg['filename'] ?>" class="img-thumbnail figure-img img-fluid rounded float-start m-1" style="width: 100px;" alt="...">
                            </a>
                        <?php
                        }
                        ?>
                    </div>
                </div>

                <div class="col-7">

                    <div class="row p-3 border-bottom">
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

            <div class="row">
                <!-- 如果還有商品其它描述或展示資訊，可以放在這裡 -->
            </div>

            <div class="owl-carousel owl-theme">
                <?php if (isset($_GET['sub_cat_id'])) {
                    $sql = "SELECT `id`, `prod_name`, `prod_thumbnail`, `prod_price` 
                                FROM `products` 
                                WHERE `cat_id` = {$_GET['sub_cat_id']} ";
                    // LIMIT {$offset}, {$numPerPage}";

                    $arr = $pdo->query($sql)->fetchAll();
                    foreach ($arr as $obj) {
                ?>
                        <div class="item">
                            <!-- img link -->
                            <a href="detail.php?cat_id=<?= $_GET['cat_id'] ?>&sub_cat_id=<?= $_GET['sub_cat_id'] ?>&prod_id=<?= $obj['id'] ?>">
                                <img src="images/<?= $obj['prod_thumbnail'] ?>" class="card-img-top" alt="">
                            </a>
                            <!-- 品名+價格 -->
                            <div class="card-body">
                                <h5 class="card-title"><?= $obj['prod_name'] ?></h5>
                                <p class="card-text">價格: <?= $obj['prod_price'] ?></p>
                            </div>
                        </div>
                <?php

                    }
                }
                ?>
            </div>


        <?php
        }
        ?>
    </div>
</div>

<?php require_once 'tpl/foot.inc.php' ?>