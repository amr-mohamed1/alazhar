<?php   
session_start();
session_unset();
session_destroy();
echo "you will back to sign in";
header("Refresh: 1; url=siggin.php");
exit();