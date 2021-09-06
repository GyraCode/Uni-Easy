<?php require_once 'db.inc.php' ?>
<?php session_start() ?>
<?php require_once 'tpl/head.inc.php' ?>

<link rel="stylesheet" href="fontawesome-free-5.15.4-web/css/all.css">
<style>
    .check>img {
        width: 25%;
    }

    .checkmobile>img {
        width: 70%;
    }

    .ss {
        margin-top: 10px;

    }

    .btn {

        margin: 10px 5px 0px 5px;
    }

    table tr td,
    table tr th {
        border: 1px solid transparent;
        padding: 5px;
    }

    table {
        border-collapse: collapse;
    }

    @media only screen and (max-width: 992px) {
        table.responsive-table {
            width: 100%;
            border-collapse: collapse;
            border-spacing: 0;
            display: block;
            position: relative;
            /* sort out borders */
        }

        table.responsive-table th,
        table.responsive-table td {
            margin: 0;
            vertical-align: top;
        }

        table.responsive-table th {
            text-align: left;
        }

        table.responsive-table thead {
            display: block;
            float: left;
        }

        table.responsive-table thead tr {
            display: block;
            padding: 0 10px 0 0;
        }



        table.responsive-table tbody {
            display: block;
            width: auto;
            position: relative;
            overflow-x: auto;
            white-space: nowrap;
        }

        table.responsive-table tbody tr {
            display: inline-block;
            vertical-align: top;
        }

        table.responsive-table th {
            display: block;
            text-align: right;
        }

        table.responsive-table td {
            display: block;
            min-height: 1.25em;
            text-align: left;
        }

        table.responsive-table tr {
            border-bottom: none;
            padding: 0 10px;
        }

        table.responsive-table thead {
            border: 0;
            border-right: 1px solid #1d1e22;
        }
    }
</style>
<div class="container">
    <div class="text-center py-5 checkmobile d-lg-none">
        <img src="./png/step-1.png" alt="">
    </div>

    <div class="text-center py-5 check d-none d-md-block">
        <img src="./png/step-1.png" alt="">
    </div>
</div>
<form name="myForm" method="post" action="fillout.php">
    <div class="container">
        <div class="row" class="">
            <table class="table responsive-table">

                <tbody>
                    <?php
                    //購物車商品數量、小計、總計
                    $count = 0;
                    $total = 0;

                    //判斷購物車是否存在，若存在，同時確認裡頭的商品數量
                    if (isset($_SESSION['cart']) && count($_SESSION['cart']) > 0) {
                        //更新商品數量
                        $count = count($_SESSION['cart']);

                        foreach ($_SESSION['cart'] as $key => $obj) {
                            //計算小計
                            $total += $obj['prod_price'] * $obj['prod_qty'];
                    ?>
                            <tr>
                                <td class="">
                                    <div class="row" style="margin: auto;">
                                        <div class=" col-lg-6 ">
                                            <img src="images/<?= $obj['prod_thumbnail'] ?>" class="img-thumbnail" alt="...">
                                        </div>
                                        <div class=" col-lg-6 text-center">
                                            <div class="row "><?= $obj['prod_name'] ?></div>

                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="input-group mb-3   col-lg-12">
                                        <!-- 將購物車中的商品索引透過 form 帶到下一頁去 -->
                                        <input type="hidden" name="index[]" value="<?= $key ?>">

                                        <button class="btn btn-outline-secondary btn_minus" type="button" data-index="<?= $key ?>" data-prod-price="<?= $obj['prod_price'] ?>"><i class="fas fa-minus"></i></button>
                                        <input type="text" name="qty[]" class="form-control qty ss" placeholder="" data-index="<?= $key ?>" data-prod-price="<?= $obj['prod_price'] ?>" value="<?= $obj['prod_qty'] ?>">
                                        <button class="btn btn-outline-secondary btn_plus" type="button" data-index="<?= $key ?>" data-prod-price="<?= $obj['prod_price'] ?>"><i class="fas fa-plus"></i></button>
                                    </div>
                                </td>
                                <td class="text-center">
                                    $ : <span data-index="<?= $key ?>"><?= $obj['prod_price'] * $obj['prod_qty'] ?></span>
                                </td>

                            </tr>
                    <?php
                        }
                    }
                    ?>
                </tbody>
                <tfoot>
                    <tr>
                        <td class="text-center">共 <span class="count_products"><?= $count ?></span> 件商品</td>
                        <td colspan="2">
                            <label>小計：NT. </label><span id="total"><?= $total ?></span>
                        </td>
                    </tr>
                </tfoot>
            </table>
        </div>



        <div class="col-xs-12 text-right">
            <button type="submit" class="btn btn-danger  ">下一步</button>
        </div>


    </div>
</form>

<?php require_once 'tpl/foot.inc.php' ?>