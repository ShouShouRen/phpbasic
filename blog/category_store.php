<?php
include("function.php");
storeCategory($_POST);
header("Location: category_create.php");
