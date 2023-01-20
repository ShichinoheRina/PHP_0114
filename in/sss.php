<?php

session_start();

if (!isset($_SESSION['chk_ssid']) || $_SESSION['chk_ssid'] != session_id()) {
    // ログインがおかしい、偽物
    exit('LOGIN ERROR');
} else {
    // ログインok
    session_regenerate_id(true);
    $_SESSION['chk_ssid'] = session_id();
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    (*'▽')ログイン成功
    <button class="lobtn" onclick="location.href='./logout.php'">ログアウト</button>
</body>
</html>