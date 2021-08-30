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

        .ty-sc h2 {
            color: #000;
        }

        .ty-p1 {
            width: 100%;
            height: 700px;
            background-image: url("img/close-up-woman-measuring-herself.jpg");
            background-size: cover;
            background-repeat: no-repeat;
        }

        .ty-p1 .row {
            padding-left: 15px;
        }

        .ty-p1 .row .nav-bd {
            display: flex;
        }

        .ty-p1 .row .nav-bd a {
            font-size: 20px;
            font-weight: 700;
            margin-right: 10px;
            margin-left: 10px;
            color: #000;
        }

        .ty-p1 .row .nav-bd p {
            color: #fff;
        }

        .ty-p1-ft h1 {
            font-size: 60px;
            font-weight: 700;
            letter-spacing: 20px;
            text-align: center;
            margin-top: 200px;
        }

        .ty-p1-ft h2 {
            font-size: 50px;
            font-weight: 700;
            letter-spacing: 10px;
            text-align: center;
        }

        .ty-p2-drop .know-alot {
            background-color: #000;
        }



        .ty-p2 .long-strip {
            width: 100%;
            height: 60px;
            background-color: brown;
            display: flex;
            justify-content: space-around;
            align-items: center;
        }

        .ty-p2 .long-strip a {
            font-size: 20px;
            font-weight: 600;
            letter-spacing: 5px;


        }

        .ty-p2-drop {
            display: none;
        }

        .ty-p2-left {
            margin-top: 100px;
        }

        .ty-p2-left h1 {
            font-weight: 700;

        }

        .ty-p2-left h2 {
            color: brown;
        }

        .ty-p2-left p {
            line-height: 2.5;
            letter-spacing: 1px;

        }


        .ty-p2-right img {
            width: 70%;
            /* position: absolute;
            top: 90px;
            left: 60px; */
            margin-top: -300px;
            margin-left: 70px;
        }

        .ty-p2-right .bg1 {
            width: 350px;
            height: 350px;
            background-color: brown;
            margin-top: 60px;
            margin-left: auto;
        }

        .ty-p2-left {

            width: fit-content;
            border-radius: 5px;
            border: none;
            letter-spacing: 3px;
            padding: 5px 20px;
        }

        .ty-p2-left .a-a {
            display: flex;

        }

        .ty-p2-left a {
            color: #fff;
            font-weight: 600;
            border: 1px solid #000;
            border-radius: 5px;
            width: fit-content;
            margin-right: 50px;
            padding: 5px 15px;
            background: #383D3B;

        }




        .ty-p3-ft {
            display: flex;
            justify-content: center;
        }

        .ty-p3-ft h1 {
            margin-top: 100px;
            font-weight: 700;
        }

        .ty-p3-bottom-card {
            display: flex;
            justify-content: space-between;
            margin-top: 50px;
        }

        .ty-p3-bottom img {
            width: 75%;
        }




        @media (max-width:375px) {
            .ty-p1 {
                width: 100%;
                height: 100%;
                margin-top: -70px;
                background-size: cover;


            }

            .ty-p1 .row .nav-bd a,
            .ty-p1 .row .nav-bd p {
                font-size: 15px;
                margin-top: 10px;
            }

            .ty-p1-ft {
                display: flex;
                flex-direction: column;
                transform: translateY(-120px);

            }

            .ty-p1-ft h1 {
                font-size: 30px;


            }

            .ty-p1-ft h2 {
                font-size: 20px;

            }


            .ty-p2 .long-strip a {
                display: none;
            }

            .ty-p2-drop {
                display: block;
                padding-bottom: ;
                background: #FFF;
            }

            .ty-p2-drop button {
                color: #000;
                margin: auto 0;
                font-weight: 700;

            }

            .ty-p2-drop .dropdown-menu a {
                display: block;
                color: #000;
            }

            .ty-p2-left h1 {
                text-align: center;
                margin-top: -50px;
            }

            .ty-p2-left h2 {
                text-align: center;
                margin-top: 10px;
            }

            .ty-p2-left p {
                line-height: 1.5;
                font-size: 15px;
                margin-top: 15px;
            }

            .ty-p2-left .a-a {
                display: flex;
                transform: translateX(20px);
            }

            .ty-p2-btn {
                padding: 5px 10px;
            }

            .ty-p2-right {
                margin-top: 30px;
            }

            .ty-p2-right .bg1 {
                margin-top: -2px;
                width: 200px;
                height: 200px;


            }

            .ty-p2-right img {
                width: 70%;
                transform: translate(-70px, 70px);




            }

            .ty-p3-ft h1 {
                margin-top: 90px;
                text-align: center;
            }
        }
    </style>
</head>

<body>

    <!-- section 1 -->
    <div class="ty-p1">
        <div class="row">
            <div class="nav-bd">
                <a href="#">首頁</a>
                <p>></p>
                <a href="#">商品介紹</a>

            </div>
            </nav>
        </div>
        <div class="ty-p1-ft">
            <h1>商品介紹</h1>
            <h2>PRODUCT DESCIPTION</h2>
        </div>
    </div>
    <?php require_once 'tpl/head.inc.php' ?>
    <!-- section 2 -->
    <div class="ty-p2">
        <div class="long-strip">
            <a href="men.php">男性服飾</a>
            <a href="ty-wmen.php">女性服飾</a>
            <a href="ty-yoyun.php">有氧商品</a>
            <a href="ty-yoga.php">瑜珈商品</a>
            <a href="ty-gg.php">增肌商品</a>
            <a href="ty-sup.php">補給商品</a>
            <a href="ty-pei.php">配件商品</a>
            <div class="ty-p2-drop dropdown">
                <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    系列選擇
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="ty-men.php">男性服飾</a>
                    <a class="dropdown-item" href="ty-wmen.php">女性服飾</a>
                    <a class="dropdown-item" href="ty-yoyun.php">有氧商品</a>
                    <a class="dropdown-item" href="ty-yoga.php">瑜珈商品</a>
                    <a class="dropdown-item" href="ty-gg.php">增肌商品</a>
                    <a class="dropdown-item" href="ty-sup.php">補給商品</a>
                    <a class="dropdown-item" href="ty-pei.php">配件商品</a>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row d-flex">
                <div class="ty-p2-left d-flex flex-column col-12 col-lg-6">

                    <h1>配件商品</h1>
                    <h2>Accessory goods</h2>
                    <p>在運動時，大多都是1-2個小時起跳，這時配件的功用性就非常的大了，<br>像是隨身有水壺，毛巾等等之類的，甚至是在運動健身時，想隨時隨地<br>看到時間或是再做一些激烈運動無法看到時間，運動手錶就在這時就非常需要，還有運動時必備的音樂，有些配件是能搭配你的手機去做媒合的，像是手機套或是耳機的連動，都是配件在運動時候必要性，即時的補充水分和在冷氣房內健身，無論是朋友交際把運動時的汗水即時擦拭，都是相當重要的，還有最後最重要的就是運動完，
                        立馬來一杯自己沖泡的高蛋白，即時的補充蛋白質，相當的立即且重要!!
                    </p>
                    <div class="a-a">
                        <a href="shopping_content.php">了解更多</a>
                        <a href="ty-shopping_list.php?cat_id=5&sub_cat_id=15">前往商品頁</a>
                    </div>

                </div>

                <div class="ty-p2-right col-12 col-lg-6">
                    <div class="bg1"></div>
                    <img src="./img/young-fit-woman-ready-workout.jpg" alt="">
                </div>


            </div>



        </div>

        <!-- section 3 -->
        <div class="ty-p3">
            <div class="container">
                <div class="ty-p3-ft row">
                    <h1>熱門配件商品</h1>
                </div>
                <div class="ty-sc row">
                    <figure class="snip1268 col-12 col-lg-4">
                        <div class="image">
                            <img src="商品圖/配件商品/peip0001.jpg" alt="sq-sample4" />
                            <div class="icons">
                                <a href="#"><i class="ion-star"></i></a>
                                <a href="#"> <i class="ion-share"></i></a>
                                <a href="#"> <i class="ion-search"></i></a>
                            </div>
                            <a href="#" class="add-to-cart">Add to Cart</a>
                        </div>

                        <figcaption>
                            <h2>微纖維超吸水S號游泳毛巾(42 x 55cm) NABAIJI Ultra-compact</h2>

                            <div class="price">$69 </div>
                        </figcaption>
                    </figure>

                    <figure class="snip1268 col-12 col-lg-4">
                        <div class="image">
                            <img src="商品圖/配件商品/peip0002.jpg" alt="sq-sample4" />
                            <div class="icons">
                                <a href="#"><i class="ion-star"></i></a>
                                <a href="#"> <i class="ion-share"></i></a>
                                <a href="#"> <i class="ion-search"></i></a>
                            </div>
                            <a href="#" class="add-to-cart">Add to Cart</a>
                        </div>

                        <figcaption>
                            <h2>微纖維超吸水M號游泳毛巾浴巾(65 x 90cm) NABAIJI Ultra-compact</h2>

                            <div class="price">$149</div>
                        </figcaption>


                    </figure>
                    <figure class="snip1268 col-12 col-lg-4">
                        <div class="image">
                            <img src="商品圖/配件商品/peip0003.jpg" alt="sq-sample4" />
                            <div class="icons">
                                <a href="#"><i class="ion-star"></i></a>
                                <a href="#"> <i class="ion-share"></i></a>
                                <a href="#"> <i class="ion-search"></i></a>
                            </div>
                            <a href="#" class="add-to-cart">Add to Cart</a>
                        </div>

                        <figcaption>
                            <h2>可調整訓練腰帶 DOMYOS</h2>

                            <div class="price">$399 </div>
                        </figcaption>


                    </figure>
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
        </script>


</body>

</html>