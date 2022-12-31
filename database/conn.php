<?php
    $db_host = "localhost";
    $db_user = "peter";
    $db_pw = "12345678";
    $db_name = "lccnet";
    $conn = mysqli_connect($db_host,$db_user,$db_pw,$db_name) or die('mysql error!!!');

    // 執行sql語法先連線在接sql語法
    mysqli_query($conn,"SET NAMES UTF8MB4");
?>