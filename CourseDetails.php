<link rel="stylesheet" href="./css/YD_main.css">
<?php require_once 'tpl/head.inc.php' ?>
<?php require_once 'db.inc.php' ?>
<?php session_start() ?>


<body>

    <div class="container">
        <!-- 麵包屑 -->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-danger">
                <li class="breadcrumb-item"><a href="#">會員專區</a></li>
                <li class="breadcrumb-item"><a href="#">有氧課程</a></li>
                <li class="breadcrumb-item active text-dark font-weight-bolder col" aria-current="page">
                    新手能上手！居家健身，肌群練習一次到位
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
                    <div class="YD-CourseImg">
                    </div>
                </div>

                <!--品名-->
                <div class="col mb-5 ml-0">
                    <div class="row p-3 border-bottom">
                        <div class="col-7">
                            <h3 class="font-weight-bold">新手能上手！居家健身，肌群練習一次到位</h3>
                        </div>
                        <div class="col-5 ">
                            <h2 class="font-weight-bold text-danger">NT: 1800</h2>
                        </div>
                    </div>

                    <!--規格-->
                    <div class="input-group mb-2 mt-3 border-bottom">
                        <!--按鈕 -->

                        <button type="button" class="btn btn-danger mb-3 mr-3 mt-0" id="btn_set_cart" data-prod-id="640"
                            data-prod-name="可口可樂印花T恤-01-男"
                            data-prod-thumbnail="https://s3.lativ.com.tw/i/52891/52891_M_01_0_n.jpg"
                            data-prod-price="199">直接購買</button>

                        <button type="button" class="btn btn-danger mb-3 ml-4 mr-3 mt-0" id="btn_follow"
                            data-prod-id="640">加入購物車</button>
                    </div>

                    <!--按鈕群 -->
                    <div class="row p-3 border-bottom">
                        <p>
                            你將可以學到 : <br><br>
                            ★了解肌肉的控制，在相對安全的情況有效的達到肌肉訓練的效果。<br><br>
                            ★了解如何在家健身，也能達到預期的肌肉訓練效果。<br><br>
                            ★了解如何徒手和運用工具（彈力繩、彈力帶）來進行不同強度的健身。</p>
                    </div>
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

    <script src="./js/cstom.js"></script>
<script src="app.js"></script>
<script>
    const gap = 16;

    const carousel = document.getElementById("carousel"),
        content = document.getElementById("content"),
        next = document.getElementById("next"),
        prev = document.getElementById("prev");

    next.addEventListener("click", e => {
        carousel.scrollBy(width + gap, 0);
        if (carousel.scrollWidth !== 0) {
            prev.style.display = "flex";
        }
        if (content.scrollWidth - width - gap <= carousel.scrollLeft + width) {
            next.style.display = "none";
        }
    });
    prev.addEventListener("click", e => {
        carousel.scrollBy(-(width + gap), 0);
        if (carousel.scrollLeft - width - gap <= 0) {
            prev.style.display = "none";
        }
        if (!content.scrollWidth - width - gap <= carousel.scrollLeft + width) {
            next.style.display = "flex";
        }
    });

    let width = carousel.offsetWidth;
    window.addEventListener("resize", e => (width = carousel.offsetWidth));

    $(".hover").mouseleave(
        function() {
            $(this).removeClass("hover");
        }
    );
</script>