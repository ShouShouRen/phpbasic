<?php
    require_once("conn.php");
    extract($_POST);
    $sql = "DELETE FROM students WHERE id = {$id}";
    mysqli_query($conn,$sql);
    header("location:index.php");
?>