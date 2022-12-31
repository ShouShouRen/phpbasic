<?php
include("function.php");
$cates = showAllCategories();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="post_store.php" method="POST">
        <div>
            <label for="">文章標題</label>
            <input type="text" name="title">
        </div>
        <div>
            <label for="">文章分類</label>
            <select name="category_id" id="">
                <?php foreach ($cates as $cate) { ?>
                    <option value="<?php echo $cate["id"]; ?>"><?php echo $cate["title"]; ?></option>
                <?php } ?>
            </select>
        </div>
        <div>
            <label for="">文章內容</label>
            <textarea name="content"></textarea>
        </div>
        <input type="submit" value="送出">
    </form>
</body>

</html>