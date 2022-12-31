<?php
session_start();

extract($_POST);

$_SESSION["AUTH"] = $_POST;

// echo $_SESSION["AUTH"]["user"];
// echo $_SESSION["AUTH"]["mail"];

header("Location: index.php");
