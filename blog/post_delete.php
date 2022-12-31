<?php
include("function.php");
deletePost($_POST["id"]);
header("Location: index.php");
