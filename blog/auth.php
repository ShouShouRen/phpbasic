<?php
    include("function.php");
    auth($_REQUEST);

    header("Refresh:2;url=index.php");
?>