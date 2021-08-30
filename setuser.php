<?php
session_start();

$obj['success'] = false;
$obj['info'] = '填入會員資訊失敗';

if (
    isset($_POST['email']) && isset($_POST['name']) &&
    isset($_POST['address']) && isset($_POST['phone'])
) {

    //假如先前沒有建立，就直接初始化 (建立)
    if (!isset($_SESSION['data_user'])) $_SESSION['data_user'] = [];


    // $obj = ["name" => "Alex", "age" => 17];

    //放置主要資料

    $_SESSION['data_user'][] = [
        "email" => $_POST['email'],
        "name" => $_POST['name'],
        "address" => $_POST['address'],
        "phone" => $_POST['phone']
    ];


    //設定訊息
    $obj['success'] = true;
    $obj['info'] = "填入會員資料成功";
}
foreach ($_SESSION['data_user'] as $key => $obj);

//告訴前端，回傳格式為 JSON (前端接到，會是物件型態)
header('Content-Type: application/json');

//輸出 JSON 格式，供 ajax 取得 response
echo json_encode($obj, JSON_UNESCAPED_UNICODE);
