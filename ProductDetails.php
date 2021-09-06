<link rel="stylesheet" href=".YD_main.css">
<link rel="stylesheet" href="fontawesome-free-5.15.4-web/css/all.css">
<?php require_once 'tpl/head.inc.php' ?>
<?php require_once 'db.inc.php' ?>
<?php session_start() ?>


    <div class="container mt-3">
        <!-- 麵包屑 -->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-danger">
                <li class="breadcrumb-item"><a href="#">首頁</a></li>
                <li class="breadcrumb-item"><a href="#">乳清蛋白</a></li>
                <li class="breadcrumb-item active text-dark font-weight-bold col" aria-current="page">[英國 Myprotein]
                    濃縮乳清蛋白(2.5kg/包) 奶茶
                </li>
            </ol>
        </nav>



        <!-- 放商品詳細資訊的區塊 -->
        <div class="col mt-3">
            <div class="row">
                <!--商品圖-->
                <div class="col-lg-6 pt-3">
                    <div class="YD-item">
                    </div>
                    <div class="YD-itemImg">
                    </div>
                </div>

                <!--品名-->
                <div class="col mb-5 ml-0">
                    <div class="row p-3 border-bottom">
                        <div class="col-7">
                            <h3 class="font-weight-bold">[英國 Myprotein]
                                濃縮乳清蛋白(2.5kg/包)</h3>
                        </div>
                        <div class="col-5 ">
                            <h2 class="font-weight-bold text-danger">NT: 1888</h2>
                        </div>
                    </div>

                    <!--規格-->
                    <div class="dropdown row p-3 border-bottom col">
                        <button class="btn dropdown-toggle btn-danger" type="button" id="dropdownMenu2"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            商品規格/種類
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                            <button class="dropdown-item" type="button">藍莓起司蛋糕口味</button>
                            <button class="dropdown-item" type="button">巧克力布朗尼口味</button>
                            <button class="dropdown-item" type="button">奶茶口味</button>
                        </div>
                    </div>

                    <div class="row p-3 border-bottom">

                        <div class="input-group mb-2 mt-3">
                            <!--按鈕群 -->
                            <ul class="counter">
                                <li id="minus"><input type="button" value="-" /></li>
                                <li id="countnum">0</li>
                                <li id="plus"><input type="button" value="+" /></li>
                            </ul>

                            <button type="button" class="btn btn-danger mb-3 ml-5 mr-3 mt-0" id="btn_set_cart"
                                data-prod-id="640" data-prod-name="可口可樂印花T恤-01-男"
                                data-prod-thumbnail="https://s3.lativ.com.tw/i/52891/52891_M_01_0_n.jpg"
                                data-prod-price="199">直接購買</button>

                            <button type="button" class="mt-1 col-lg-3 col-sm-10 btn btn-danger mb-3 ml-4 mr-3 mt-0"
                                id="btn_follow" data-prod-id="640">加入購物車</button>
                        </div>
                    </div>
                    <!--按鈕群 -->
                    <div class="row p-3 border-bottom">
                        <p>
                            Myprotein 乳清蛋白粉選用最優質的牛奶乳清原料，採用全天候青草餵養方式，每份含有蛋白質高達 21
                            克，其中含有所有人體必需氨基酸，本產品極易溶解和混合，可以被人體更好的消化和吸收，此外每份僅含 1.9 克脂肪和 1克碳水化合物。<br>
                            此款優質乳清蛋白粉口感營養俱佳，如果您在尋找高品質的膳食補充劑，Myprotein 乳清蛋白粉是您理想的選擇。</p>
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
            <img src="./img/getImage (1).jpg">
        </div>

        <div class="mItem">
            <img src="./img/getImage (2).jpg">
        </div>

        <div class="mItem">
            <img src="./img/getImage (3).jpg">
        </div>

        <div class="mItem">
            <img src="./img/getImage (4).jpg">
        </div>

        <div class="mItem">
            <img src="./img/getImage (5).jpg">
        </div>
        <div class="mItem">
            <img src="./img/getImage (6).jpg">
        </div>

    </div>

    <?php require_once 'tpl/foot.inc.php' ?>