<?php require_once 'db.inc.php' ?>
<?php session_start() ?>
<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
<link rel="stylesheet" href="main.css">
<link rel="stylesheet" href="YD_main.css">
<link rel="stylesheet" href="./fontawesome-free-5.15.3-web/css/all.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<body>

    <?php require_once 'tpl/head.inc.php' ?>
    <div class="container mt-3">
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

        <!-- 影片部分 -->
        <div class='embed-container mt-2'><iframe src='https://www.youtube.com/embed//NfIe2WmQD5E' frameborder='0' allowfullscreen></iframe></div>

        <!--3個 icon -->
        <div class="p-3 mb-3 bg-danger">
            <div class="row">
                <div class="d-flex justify-content-sm-around" id="YD-threeicon">
                    <div class="YD-iconwrap">
                        &nbsp;<i class="fas fa-users">
                        </i>
                        <p class="font-weight-bold">106 位同學</p>

                    </div>

                    <div class="YD-iconwrap">
                        &nbsp;<i class="far fa-clock">
                        </i>
                        <p class="font-weight-bold">135 分鐘</p>
                    </div>

                    <div class="YD-iconwrap">
                        &nbsp;<i class="far fa-envelope">
                        </i>
                        <p class="font-weight-bold">客服信箱</p>

                    </div>
                </div>

            </div>
        </div>

        <!--帶下拉選單的分頁標籤-->
        <ul class="nav nav-tabs">

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle  text-danger font-weight-bold" style="border-color:#dc3545;" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">我的課程</a>
                <div class="dropdown-menu">
                    <a class="dropdown-item text-dark " href="#">新手能上手！居家健身，肌群練習一次到位</a>
                    <a class="dropdown-item text-dark " href="#">線上課程｜居家有氧動起來 Dance Play</a>
                    <a class="dropdown-item text-dark " href="#">Dance Aerobic舞動有氧</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item text-dark " href="#">Zumba 有氧</a>
                </div>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle  text-danger font-weight-bold" style="border-color:#dc3545;" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">課程章節</a>
                <div class="dropdown-menu">
                    <a class="dropdown-item text-dark " href="#">章節 1 - 改變身形第一步，了解基本身體組成</a>
                    <a class="dropdown-item text-dark " href="#">章節 2 - 瞭解肌肉成長的理論及解讀</a>
                    <a class="dropdown-item text-dark " href="#">章節 3 - 動態伸展及其重要性</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item text-dark " href="#">章節 4 - 胸肌的訓練方式</a>
                </div>
            </li>

            <!-- <li class="nav-item">
                <a class="nav-link disabled font-weight-bold text-danger" style="border-color:#dc3545;" href="#"
                    tabindex="-1" aria-disabled="true">問題討論</a>
            </li> -->


        </ul>


        <!--介紹區域-->
        <div class="pr-3 pl-3 mb-2" style="margin-top:-1px;">
            <div class="row">
                <div class="mb-5 d-lg-flex" id="YD-section-wrap">

                    <div class="mb-3" id="YD-section">
                        <br>

                        <div class="col col-sm-12 ">
                            <h2 class="mt-1 mb-3 text-dark">《新手能上手！居家健身，肌群練習一次到位》</h2>
                            <h3>【章節 1】 改變身形第一步，了解身體組成
                            </h3>
                            <h4>
                                「骨架、肌肉、脂肪」，是開始健身之前、認識自己身體的重要三元素。
                                在課程一開始，教練會詳細說明「什麼是可以透過努力改變的」以及「什麼是不能改變的」；
                                讓大家可以給自己訂下一個明確且可能達成的目標，而有了目標之後，
                                也可以知道需要透過什麼樣的訓練或飲食方式，才能達到預期的效果。
                            </h4>
                            <h4>
                                <br>
                                ★上課前的準備
                                <br><br>
                                彈力繩與彈力帶，初學者建議購買輕阻力的彈力繩與彈力帶（如：5 公斤的彈力繩 和 7 公斤的彈力帶）即可。
                                <br>
                                <br>

                                ★哪些人適合這堂課？
                                <br>
                                <br>
                                初學者到有健身經驗 1-2 年的朋友，想改變體態的人、沒時間上健身房的人、或是運動一段時間不見效果的朋友們，很適合這門課程。
                            </h4>
                        </div>
                    </div>

                    <div class="col-lg-6 col-sm-12">
                        <img id="YD-img" src="./img/photo-1617634188383-0c75b1b80f94.jpg">
                        </img>
                    </div>
                </div>
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
                        <img src="/png/outline_person_outline_white_24dp.png" alt="">
                    </a>
                </div>

                <div class="homeMobile">
                    <a href="#">
                        <img src="/png/outline_home_white_24dp.png" alt="">
                    </a>
                </div>

                <div class="shoppingcarMobile">
                    <a href="#">
                        <img src="/png/outline_shopping_cart_white_24dp.png" alt="">
                    </a>
                </div>

            </div>
        </div>
    </footer>
    <div class="box2 d-lg-none"></div>


    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

</body>

</html>