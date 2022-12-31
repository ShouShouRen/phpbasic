<?php
session_start();
try {
    require_once("pdo.php");
    extract($_POST);

    $sql_check = "SELECT * FROM users WHERE user = ?";
    $stmt_check =  $pdo->prepare($sql_check);
    $stmt_check->execute([$user]);
    if ($stmt_check->rowCount() > 0) {
        echo "帳號已存在，請重新申請";
        header("Refresh:1;url=register.php");
        return;
    }

    $sql = "INSERT INTO users(user,pw,created_at)VALUES(?,?,?)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$user, $pw, $now]);
    echo "會員註冊成功可登入";
    header("Refresh:1;url=index.php");
} catch (PDOException $e) {
    echo $e->getMessage();
}
