</div>

<!-- 浮動視窗 -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">註冊帳號</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="row g-3" id="myForm">
                    <div class="col-md-6">
                        <label for="inputEmail4" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="請填寫 E-mail">
                    </div>
                    <div class="col-md-6">
                        <label for="inputPassword4" class="form-label">密碼</label>
                        <input type="password" class="form-control" id="pwd" placeholder="請輸入密碼">
                    </div>
                    <div class="col-md-6">
                        <label for="inputEmail4" class="form-label">姓名</label>
                        <input type="text" class="form-control" id="name" placeholder="請輸入姓名">
                    </div>
                    <div class="col-md-6">
                        <label for="inputPassword4" class="form-label">生日</label>
                        <input type="text" class="form-control" id="birthdate" placeholder="請填寫生日">
                    </div>
                    <div class="col-12">
                        <label for="inputAddress" class="form-label">地址</label>
                        <input type="text" class="form-control" id="address" placeholder="請填寫地址">
                    </div>
                    <div class="col-12">
                        <label for="inputAddress" class="form-label">電話</label>
                        <input type="text" class="form-control" id="phone" placeholder="請填寫電話">
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary" id="btn_register">註冊</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- 登入視窗 -->
<div class="modal fade" id="exampleModalLogin" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">登入</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="row g-3" id="myForm_login">
                    <div class="col-md-12">
                        <label for="inputEmail4" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email_login" placeholder="請填寫 E-mail">
                    </div>
                    <div class="col-md-12">
                        <label for="inputPassword4" class="form-label">密碼</label>
                        <input type="password" class="form-control" id="pwd_login" placeholder="請輸入密碼">
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary" id="btn_login">送出</button>
                    </div>
                </form>
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
                    <img src="png/outline_person_outline_white_24dp.png" alt="">
                </a>
            </div>

            <div class="homeMobile">
                <a href="index.php">
                    <img src="png/outline_home_white_24dp.png" alt="">
                </a>
            </div>

            <div class="shoppingcarMobile">
                <a href="products_confirm.php">
                    <img src="png/outline_shopping_cart_white_24dp.png" alt="">
                    <?php
                                if (isset($_SESSION['cart']))
                                    echo count($_SESSION['cart']);
                                else
                                    echo '0';
                                ?>
                </a>
            </div>

        </div>
    </div>

</footer>
<div class="box2 d-lg-none"></div>

<!-- jQuery CDN -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- jQuery UI -->
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<!-- awesome js -->
<script src="js/awesome.all.min.js"></script>

<!-- lightbox: https://lokeshdhakar.com/projects/lightbox2/ -->
<script src="js/lightbox.min.js"></script>

<!-- 自訂 js -->
<script src="js/custom.js"></script>

<!-- php hw 輪播牆 --------------------------------------------->
<!-- owl.carousel -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
</link>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
</link>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

<!-- owl.carousel 連結檔-->
<link rel="stylesheet" href="js/owl.carousel/owl.carousel.css">
<script src="./js/owl.carousel/owl.carousel.js"></script>
<script src="./js/owl.carousel/theme.js"></script>

</body>

</html>