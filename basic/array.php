<?php
$a = array();
$a[0] = "天竺鼠車車";
$a[1] = "天線寶寶";
$a[2] = "鬼滅之刃";
// echo $a[0];
// echo $a[1];
// echo $a[2];
// var_dump($a);

// $b = array("天竺鼠車車","天線寶寶","鬼滅之刃");
// var_dump($b);


$c = ["天竺鼠車車", "天線寶寶", "鬼滅之刃"];
// var_dump($c);
// echo $c[1];


$netflix = ["驅魔麵館", "亞森。羅頻", "進擊的巨人", "翠燦帝國", "末日激戰", "奔向愛情", "SweetHome", "未來媽媽", "鬼滅之刃"];

// echo $netflix[0];


// 陣列迭代->將陣列的值一個一個讀出來

// for($i = 0; $i<9;$i++){
//     echo $netflix[$i];
// }

// for($i = 0; $i<count($netflix);$i++){
//     echo $netflix[$i];
// }

// foreach ($netflix as $n) {
//     echo $n;
// }

// 關聯陣列
$users = [
    "name" => "Chen",
    "mail" => "peter@gmail.com",
    "phone" => "097654543",
    // key => value
];

// echo $users["name"];


// foreach ($users as $key => $value) {
//     echo $key . ":" . $value;
//     echo "<br>";
// }


// is_array();

// var_dump(is_array($c));

// in_array();
// var_dump(in_array("天竺鼠車車",$c));

// echo count($netflix);



// compact() 變數轉關聯陣列
$books = "金通php mysql";
$cartoon = "天竺鼠車車";
$test = compact("books","cartoon");
var_dump($test);



// extract() 關聯陣列轉變數
var_dump(extract($users));
echo $name;
echo $mail;
echo $phone;
// $name = $users["name"];
// $name = $users["mail"];
// $name = $users["phone"];


// implode() 陣列轉字串
$netflix_string = implode(",",$netflix);
echo $netflix_string;

// explode() 字串轉陣列

$str = "hello world";
$str_array = explode(" ",$str);
var_dump($str_array);

foreach($str_array as $item){
    echo $item;
}