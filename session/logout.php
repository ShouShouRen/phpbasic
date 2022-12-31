<?php
session_start();
// session_destroy();
unset($_SESSION["AUTH"]);
header("Location: index.php");
