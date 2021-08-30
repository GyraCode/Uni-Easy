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
    <?php require_once 'tpl/head.inc.php' ?>
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

    <!-- section 2 -->
    <div class="ty-p2">
        <div class="long-strip">
            <a href="ty-men.php">男性服飾</a>
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
                    <a class="dropdown-item" href="ty-.php">增肌商品</a>
                    <a class="dropdown-item" href="ty-sup.php">補給商品</a>
                    <a class="dropdown-item" href="ty-pei.php">配件商品</a>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row d-flex">
                <div class="ty-p2-left d-flex flex-column col-12 col-lg-6">

                    <h1>增肌商品</h1>
                    <h2>Retrained goods<< /h2>
                            <p>為什麼訓練的同時，外在那麼重要呢？我認為這對自己、對別人<br>
                                都是一種尊重，也像我在【健身房搭訕技巧與心態】不要讓內向<br>
                                限制了你這篇文章所說，最好是隨時準備好來個豔遇。<br>

                                目前在隨便上網爬文一下，就有太多太多的健身服裝品牌可以選擇<br>
                                ，有很多歐美代購、也有很多大型運動老品牌、甚至有琳瑯滿目的<br>
                                台灣小眾品牌。<br>

                                今天會以適合新手與小資族這兩個族群來切入分享，幫助你們快速<br>
                                找到適合自己的健身房穿搭風格。
                            </p>
                            <div class="a-a">
                                <a href="shopping_content.php">了解更多</a>
                                <a href="ty-shopping_list.php?cat_id=3&sub_cat_id=11">前往商品頁</a>
                            </div>

                </div>

                <div class="ty-p2-right col-12 col-lg-6">
                    <div class="bg1"></div>
                    <img src="./img/side-view-woman-doing-sports-home.jpg" alt="">
                </div>


            </div>



        </div>

        <!-- section 3 -->
        <div class="ty-p3">
            <div class="container">
                <div class="ty-p3-ft row">
                    <h1>熱門增肌商品</h1>
                </div>
                <div class="ty-sc row">
                    <figure class="snip1268 col-12 col-lg-4">
                        <div class="image">
                            <img src="商品圖/增肌商品/ggp0001.jpg" alt="sq-sample4" />
                            <div class="icons">
                                <a href="#"><i class="ion-star"></i></a>
                                <a href="#"> <i class="ion-share"></i></a>
                                <a href="#"> <i class="ion-search"></i></a>
                            </div>
                            <a href="#" class="add-to-cart">Add to Cart</a>
                        </div>

                        <figcaption>
                            <h2>可調式健身運動握力器</h2>

                            <div class="price">$199 </div>
                        </figcaption>
                    </figure>

                    <figure class="snip1268 col-12 col-lg-4">
                        <div class="image">
                            <img src="商品圖/增肌商品/ggp0002.jpg" alt="sq-sample4" />
                            <div class="icons">
                                <a href="#"><i class="ion-star"></i></a>
                                <a href="#"> <i class="ion-share"></i></a>
                                <a href="#"> <i class="ion-search"></i></a>
                            </div>
                            <a href="#" class="add-to-cart">Add to Cart</a>
                        </div>

                        <figcaption>
                            <h2>懸吊式訓練器</h2>

                            <div class="price">$599</div>
                        </figcaption>


                    </figure>
                    <figure class="snip1268 col-12 col-lg-4">
                        <div class="image">
                            <img src="商品圖/增肌商品/ggp0003.jpg" alt="sq-sample4" />
                            <div class="icons">
                                <a href="#"><i class="ion-star"></i></a>
                                <a href="#"> <i class="ion-share"></i></a>
                                <a href="#"> <i class="ion-search"></i></a>
                            </div>
                            <a href="#" class="add-to-cart">Add to Cart</a>
                        </div>

                        <figcaption>
                            <h2>4合1伏地挺身握把 CORENGTH</h2>

                            <div class="price">$649 </div>
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