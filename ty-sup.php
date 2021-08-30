<?php require_once 'db.inc.php' ?>
<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
        integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
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

        .ty-p2-left .a-a{
            display: flex;

        }

        .ty-p2-left a{
            color:#fff;
            font-weight:600;
            border:1px solid #000;
            border-radius:5px;
            width:fit-content;
            margin-right:50px;
            padding: 5px 15px;
            background:#383D3B;

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
                background:#FFF;
            }

            .ty-p2-drop button {
                color: #000;
                margin:auto 0;
                font-weight:700;

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

            .ty-p2-left .a-a{
                display: flex;
                transform:translateX(20px);
            }

            .ty-p2-btn {
                padding: 5px 10px;
            }

            .ty-p2-right{
                margin-top:30px;
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
    <!-- 電腦版Header -->

    <div class="headerTop d-none d-md-block">
        <div class="navbg ">
            <img src="png/navbar_bg_01.png" alt="">
        </div>
        <div class="container navbar-adjust">
            <div class=" row d-flex justify-content-between">
                <div class="logo">
                    <a href="#">
                        <img src="png/logo_35.png" alt="">
                    </a>
                </div>
                <div class="btn">
                    <button class="btn btn-danger">免費體驗 Free</button>
                    <button class="btn btn-danger">Login 登入</button>
                </div>

            </div>
        </div>
    </div>

    <!-- 手機板Header -->
    <div class="headerMobile d-lg-none">

        <div class="PJmobile">
            <div class="boxMobile">&nbsp</div>
            <div class="container">

                <div class="navMobile row justify-content-around">

                    <div class="iconMobile">
                        <a href="">
                            <img src="png/outline_menu_black_24dp.png" alt="">
                        </a>
                    </div>
                    <div class="logoMobile">
                        <a href="">
                            <img src="png/logo_text.gif" alt="">
                        </a>
                    </div>
                    <div class="srarchMobile">
                        <a href="">
                            <img src="png/outline_search_black_24dp.png" alt="">
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>
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
                <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
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

                    <h1>補給商品</h1>
                    <h2>Supply goods</h2>
                    <p>高蛋白粉跟高蛋白質食物各有好處，就主要營養素來講兩者是沒什麼差的，像是一塊雞肉、一份豬肝、一份瘦的牛肉，跟一份高蛋白粉大概都是20-30克蛋白質。

差別就在於說真正的食物中有許多的微量營養素(維生素、礦物質)，而高蛋白粉就是加工食品，裡面除了高蛋白質以外沒什麼其他的微量營養素。就算有些高蛋白粉會加一些有的沒的微量元素，要比營養的話一定是真正的食物會贏。

但高蛋白粉的優勢是，很方便、很便宜、很快吸收、很升胰島素。<br>

特定的蛋白粉，像是濃縮乳清蛋白粉還有分離式蛋白粉，讓身體吸收很快、分泌較多胰島素，可以更快的把養分送進細胞中。

高蛋白粉的缺點剛剛也說過了，就是缺少了真的食物含有的營養價值，較沒有飽足感。
                    </p>
                    <div class="a-a">
                    <a href="shopping_content.php">了解更多</a>
                    <a href="shopping_list.php?cat_id=2&sub_cat_id=9">前往商品頁</a>
                    </div>

                </div>

                <div class="ty-p2-right col-12 col-lg-6">
                    <div class="bg1"></div>
                    <img src="./img/sport-equipment.jpg" alt="">
                </div>


            </div>



        </div>

        <!-- section 3 -->
        <div class="ty-p3">
            <div class="container">
                <div class="ty-p3-ft row">
                    <h1>熱門補給商品</h1>
                </div>
                <div class="ty-sc row">
                    <figure class="snip1268 col-12 col-lg-4">
                        <div class="image">
                            <img src="商品圖/補給商品/supp0001.jpg" alt="sq-sample4" />
                            <div class="icons">
                                <a href="#"><i class="ion-star"></i></a>
                                <a href="#"> <i class="ion-share"></i></a>
                                <a href="#"> <i class="ion-search"></i></a>
                            </div>
                            <a href="#" class="add-to-cart">Add to Cart</a>
                        </div>

                        <figcaption>
                            <h2>[英國 Myprotein] 濃縮乳清蛋白(2.5kg/包) 奶茶</h2>
                            
                            <div class="price">$1450 </div>
                        </figcaption>
                    </figure>

                    <figure class="snip1268 col-12 col-lg-4">
                        <div class="image">
                            <img src="商品圖/補給商品/supp0002.jpg" alt="sq-sample4" />
                            <div class="icons">
                                <a href="#"><i class="ion-star"></i></a>
                                <a href="#"> <i class="ion-share"></i></a>
                                <a href="#"> <i class="ion-search"></i></a>
                            </div>
                            <a href="#" class="add-to-cart">Add to Cart</a>
                        </div>

                        <figcaption>
                            <h2>[英國 Myprotein] 濃縮乳清蛋白(2.5kg/包) 藍莓起司蛋糕</h2>
                            
                            <div class="price">$1450</div>
                        </figcaption>


                    </figure>
                    <figure class="snip1268 col-12 col-lg-4">
                        <div class="image">
                            <img src="商品圖/補給商品/supp0003.jpg" alt="sq-sample4" />
                            <div class="icons">
                                <a href="#"><i class="ion-star"></i></a>
                                <a href="#"> <i class="ion-share"></i></a>
                                <a href="#"> <i class="ion-search"></i></a>
                            </div>
                            <a href="#" class="add-to-cart">Add to Cart</a>
                        </div>

                        <figcaption>
                            <h2>[英國 Myprotein] 濃縮乳清蛋白(2.5kg/包) 巧克力布朗尼</h2>
                            
                            <div class="price">$1450 </div>
                        </figcaption>


                    </figure>
                </div>
            </div>
        </div>

        <!-- 電腦版Footer -->
        <footer class="footer d-none d-md-block">
            <div class="container">
                <div class="row gap justify-content-between">

                    <!-- 廢話 -->
                    <div class="footercon1">
                        <div class="about">
                            <p>
                                大疫情時代衝擊著社會，除了健身更需要建心。我們必須學著與
                                困難共存，找出全新的辦法去鍛鍊，讓自己更快，更高，更強!
                            </p>
                        </div>

                    </div>
                    <div class="footercon">
                        <!-- 第一段footer -->
                        <div class="footercon1 dpk ">
                            <div class="footerconh2 ">
                                <h2 class="footerh2">UNI-EASY</h2>
                            </div>

                            <div class="footercon">
                                <a href="#">
                                    <p>
                                        會員專區
                                    </p>
                                </a>
                                <a href="#">
                                    <p>
                                        購物車
                                    </p>
                                </a>
                                <a href="#">
                                    <p>
                                        商品
                                    </p>
                                </a>
                                <a href="#">
                                    <p>
                                        課程
                                    </p>
                                </a>
                            </div>
                        </div>

                        <!-- 第二段footer -->
                        <div class="footercon2 dpk">
                            <div class="footerconh2">
                                <h2 class="footerh2">
                                    關於課程
                                </h2>
                            </div>

                            <div class="footercon">
                                <a href="#">
                                    <p>
                                        瑜珈課程
                                    </p>
                                </a>
                                <a href="#">
                                    <p>
                                        有氧運動
                                    </p>
                                </a>
                                <a href="#">
                                    <p>
                                        增肌減重
                                    </p>
                                </a>
                                <a href="#">
                                    <p>
                                        其他資訊

                                    </p>
                                </a>

                            </div>
                        </div>

                    </div>



                </div>


                <div class="copyright">
                    <p class="copyrightText">
                        <a href="">
                            Copyright 2003-2021, Decathlon Group or its Affiliates.  隱私權政策
                        </a>
                    </p>
                </div>


        </footer>

        <!-- 手機板Footer -->
        <footer class="footerMobile  d-lg-none">
            <div class="container">
                <div class="footerconMobile row justify-content-around">
                    <div class="personMobile">
                        <a href="#">
                            <img src="png/outline_person_outline_white_24dp.png" alt="">
                        </a>
                    </div>

                    <div class="homeMobile">
                        <a href="#">
                            <img src="png/outline_home_white_24dp.png" alt="">
                        </a>
                    </div>

                    <div class="shoppingcarMobile">
                        <a href="#">
                            <img src="png/outline_shopping_cart_white_24dp.png" alt="">
                        </a>
                    </div>

                </div>
            </div>

        </footer>
        <div class="box2 d-lg-none"></div>

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
