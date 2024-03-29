<?php
function showAllPosts()
{
    require("pdo.php");
    $sql = "SELECT posts.*,users.user,categories.title AS c_title FROM posts
    LEFT JOIN categories ON categories.id = posts.category_id
    LEFT JOIN users ON users.id = posts.user_id
    ORDER BY updated_at DESC";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $rows = array();
    while ($row = $stmt->fetch()) {
        $rows[] = $row;
    }
    return $rows;
}

function showPost($id)
{
    require("pdo.php");
    $sql = "SELECT * FROM posts WHERE id = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$id]);
    $row = $stmt->fetch();
    return $row;
}
function storePost($request)
{
    session_start();
    require("pdo.php");
    extract($request);
    $user_id = $_SESSION["AUTH"]["id"];
    $sql = "INSERT INTO posts(title,content,user_id,category_id,created_at,updated_at)VALUES(?,?,?,?,?,?)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$title, $content, $user_id, $category_id, $now, $now]);
}
function deletePost($id)
{
    require("pdo.php");
    $sql = "DELETE FROM posts WHERE id = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$id]);
}
function updatePost($request)
{
    require("pdo.php");
    extract($request);
    $category_id = 1;

    $sql = "UPDATE posts SET title=?,content=?,category_id=?,updated_at=? WHERE id = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$title, $content, $category_id, $now, $id]);
}

function showAllCategories()
{
    require("pdo.php");
    $sql = "SELECT * FROM categories";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $rows = array();
    while ($row = $stmt->fetch()) {
        $rows[] = $row;
    }
    return $rows;
}

function storeCategory($request)
{
    require("pdo.php");
    extract($request);

    $sql = "INSERT INTO categories(title,slug,created_at,updated_at)VALUES(?,?,?,?)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$title, $slug, $now, $now]);
}

function deleteCategory($id)
{
    require("pdo.php");
    $sql = "DELETE FROM categories WHERE id = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$id]);
}

function auth($request)
{
    session_start();
    try {
        require_once("pdo.php");
        extract($request);
        $sql = "SELECT * FROM users WHERE user = ?";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$user]);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        if (!$row) {
            echo "帳號密碼錯誤";
            return;
        }
        if ($row["pw"] == $pw) {
            $_SESSION["AUTH"] = $row;
            echo "登入成功";
        } else {
            echo "帳號密碼錯誤!!!";
        }
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}

function register($request)
{
    session_start();
    try {
        require_once("pdo.php");
        extract($request);

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
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}

function logout()
{
    session_start();
    session_destroy();
}

// function showAll($table)
// {
//     require_once("pdo.php");
//     $sql = "SELECT * FROM {$table}";
//     $stmt = $pdo->prepare($sql);
//     $stmt->execute();
//     $rows = array();
//     while ($row = $stmt->fetch()) {
//         $rows[] = $row;
//     }
//     return $rows;
// }
