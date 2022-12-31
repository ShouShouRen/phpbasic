<?php
include("function.php");
deleteCategory($_POST["id"]);
header("Location: category_create.php");
