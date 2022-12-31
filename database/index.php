<?php
require_once('./conn.php');
$sql = "SELECT * FROM students";

// 執行sql語法先連線在接sql語法
$result = mysqli_query($conn, $sql);

// var_dump($result);


// 取出一比資料row出來是關聯陣列assoc
// $row = mysqli_fetch_assoc($result);


// 一般陣列
// $row = mysqli_fetch_array($result);


// 綜合陣列有關聯有一般array
// $row = mysqli_fetch_row($result);
// var_dump($row);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        table,
        td,
        th {
            border-collapse: collapse;
            border: 1px solid #000;
        }

        td,
        th {
            padding: 15px;
        }
    </style>
</head>

<body>

    <nav>
        <a href="create.php">建立學員資料</a>
    </nav>

    <table>
        <tr>
            <th>#</th>
            <th>姓名</th>
            <th>電話</th>
            <th>Mail</th>
            <th>性別</th>
            <th>學歷</th>
            <th>興趣</th>
            <th>備注</th>
            <th>動作</th>
        </tr>


        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
            <tr>
                <td><?php echo $row["id"] ?></td>
                <td><?php echo $row["name"] ?></td>
                <td><?php echo $row["phone"] ?></td>
                <td><?php echo $row["mail"] ?></td>
                <td><?php echo $row["gender"] ?></td>
                <td><?php echo $row["edu"] ?></td>
                <td><?php echo $row["interest"] ?></td>
                <td><?php echo $row["content"] ?></td>
                <td>
                    <form action="delete.php" method="POST">
                        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                        <input type="submit" value="刪除">
                    </form>
                    <a href="edit.php?id=<?php echo $row['id']; ?>">編輯</a>
                </td>
            </tr>
        <?php } ?>



        <?php
        // while ($row = mysqli_fetch_assoc($result)) {
        //     echo "<tr>";
        //     echo "<td>{$row['id']}</td>";
        //     echo "<td>" . $row['name'] . "</td>";
        //     echo "<td>" . $row['phone'] . "</td>";
        //     echo "<td>" . $row['mail'] . "</td>";
        //     echo "<td>" . $row['gender'] . "</td>";
        //     echo "<td>" . $row['edu'] . "</td>";
        //     echo "<td>" . $row['interest'] . "</td>";
        //     echo "<td>" . $row['content'] . "</td>";
        //     echo "</tr>";}
        ?>
    </table>
</body>

</html>