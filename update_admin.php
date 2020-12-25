
<?php
    session_start();
    $page_name = "تعديل بيانات مسئول";
    $style = "dash.css";
    require_once "init.php";
    if(isset($_SESSION['userName'])){
        if($_SESSION['regstatues'] == "1"){
?>

<?php $allData = getAllData("users");?>

<div class="container">
    <a class="btn btn-secondary pr-4 pl-4 mt-5 ml-2" href="dash.php">Back</a>
    <div class="row text-center mt-5">
        <?php foreach ($allData as $allAdmins){ ?>
            <div class="col-lg-6 col-md-12 col-sm-12 mix Web_design Programming">
                <div class="item">
                <h4 class="mt-4 mb-4"><?php echo $allAdmins["username"]?></h4>
                <h4 class="mt-4 mb-4"><?php echo $allAdmins["email"]?></h4>
                <button class="download mt-2 mr-3"><a href="update_user.php?id=<?php echo $allAdmins["id"]?>&edit_admin_from=true">update</a></button>
                <button class="online ml-2"><a href="delete_admin.php?id=<?php echo $allAdmins["id"]?>">delete </a></button>                    </div>
            </div>
        <?php } ?>
    </div>
</div>
            
<?php }else{
    header("location:dash.php");
}
}else{
    header("location:siggin.php");
}