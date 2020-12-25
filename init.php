<?php 

    $cssPath        = "layout/css/";
    $jsPath         = "layout/js/";
    $tempPath       = "includes/template/";
    $funPath       = "includes/functions/";

    include "connect_db.php";
    
    include $tempPath . "header.php";
    include $tempPath . "footer.php";
    include $funPath . "function.php";
    