<style>
    @media (max-width:375px) {
        .ul1{
            display: block;
            
        }
    }
</style>
<div class="col-12">
<?php if(isset($_GET['cat_id'])) { ?>
    <ul class="ul1 nav">
        <?php
            $sql = "SELECT `id`, `cat_name` FROM `categories` WHERE `parent_id` = {$_GET['cat_id']}";
            $arr1 = $pdo->query($sql)->fetchAll();
            foreach($arr1 as $obj1){
        ?>
        <li class="nav-item">
            <!--
                有超連結的第一階類別
                <a class="nav-link" href="index.php?cat_id=<?= $_GET['cat_id'] ?>&sub_cat_id=<?= $obj1['id'] ?>"><?= $obj1['cat_name'] ?></a>
            -->
            <a class="nav- text-dark pr-3" style="font-weight:700;" href="?cat_id=<?= $_GET['cat_id'] ?>&sub_cat_id=<?= $obj1['id'] ?>"><?= $obj1['cat_name'] ?></a>
            <!-- <?= $obj1['cat_name'] ?> -->
            <ul class="nav">
            <?php
                $sql = "SELECT `id`, `cat_name` FROM `categories` WHERE `parent_id` = {$obj1['id']}";
                $arr2 = $pdo->query($sql)->fetchAll();
                foreach($arr2 as $obj2){
            ?>
                <a class="nav-link" href="?cat_id=<?= $_GET['cat_id'] ?>&sub_cat_id=<?= $obj2['id'] ?>"><?= $obj2['cat_name'] ?></a>
            <?php 
                }
            ?>
            </ul>
        </li>
        <?php 
            }
        ?>
    </ul>
<?php } ?>
</div>

