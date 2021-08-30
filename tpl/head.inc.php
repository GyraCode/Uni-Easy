<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="css/card.css" type="text/css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/index.css">
    <title>Document</title>

</head>


<body>

    <!-- 電腦版Header -->

    <div class="headerTop d-none d-md-block">
        <div class="navbg ">

            <img src="./png/navbar_bg_01.png" alt="">

        </div>
        <div class="container navbar-adjust">
            <div class=" row d-flex justify-content-between">
                <div class="logo">
                    <a href="index.php">
                        <img src="./png/logo_35.png" alt="">
                    </a>
                </div>

                <div class="btn">
                    <div class="text-end">
                        <a class="btn btn btn-danger me-2" href="#" data-bs-toggle="modal" data-bs-target="#exampleModalLogin">Login 登入</a>
                        <a class="btn btn-danger" href="register.php" data-bs-toggle="modal" data-bs-target="#exampleModal">免費體驗 Free</a>
                        |
                        <?php if (isset($_SESSION['name'])) { ?>
                            <?= $_SESSION['name'] ?> | <a href="#" id="logout" class="btn btn-danger" style="border-right:#fff;">登出</a>
                        <?php } ?>
                        |
                        <a href="products_confirm.php" class="btn btn-danger">
                            <span id="count_products">
                                <?php
                                if (isset($_SESSION['cart']))
                                    echo count($_SESSION['cart']);
                                else
                                    echo '0';
                                ?>
                            </span>個商品

                        </a>

                    </div>
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
                            <img src="./png/outline_menu_black_24dp.png" alt="">
                        </a>
                    </div>
                    <div class="logoMobile">
                        <a href="">
                            <img src="./png/logo_text.gif" alt="">
                        </a>
                    </div>
                    <div class="srarchMobile">
                        <a href="">
                            <img src="./png/outline_search_black_24dp.png" alt="">
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</body>