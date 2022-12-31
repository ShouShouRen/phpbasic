<?php
// $user = $_REQUEST['user'];
// echo $user."你好";
// var_dump($_POST);
// post是一個關聯陣列所以下面要接的是關聯陣列的key輸入的內容為值
// echo $_POST['user'];
// echo "<br>";
// echo $_POST['mail'];

extract($_POST);

echo $user;
echo "<br>";
echo $mail;
echo "<br>";
echo $phone;
echo "<br>";
echo $gender;
echo "<br>";
echo $edu;
echo "<br>";
echo $content;
echo "<br>";
// var_dump($interest);
echo implode(",",$interest);