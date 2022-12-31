<?php
    include("function.php");
    storePost($_REQUEST);
    header("Location: index.php");