<?php
    session_start();
    require_once "init.php";
    if(isset($_SESSION['userName'])){
    if (isset($_GET['id']) && is_numeric($_GET['id'])){
        $admin_id = $_GET['id'];
        $stmt = $con->prepare("DELETE FROM users WHERE id = :admin_id");
        $stmt->bindParam(":admin_id" , $admin_id);
        $stmt->execute();
        echo "<h3 class='alert alert-danger'>admin has deleted successfuly ... you will return to previous page in 5s</h3>";
        header("refresh:2;url=dash.php");
    }
        else{
            header("location:dash.php");
        }


        /*delete member*/
    if (isset($_GET['id']) && is_numeric($_GET['id'])){
        $member_id = $_GET['id'];
        $stmt = $con->prepare("DELETE FROM board WHERE id = :member_id");
        $stmt->bindParam(":member_id" , $member_id);
        $stmt->execute();
        header("refresh:2;url=dash.php");
    }
        else{
            header("location:dash.php");
        }
    
    }