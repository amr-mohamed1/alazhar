
<?php
    session_start();
    $page_name = "تعديل بيانات عضو";
    $style = "dash.css";
    require_once "init.php";
    if(isset($_SESSION['userName'])){
?>

<?php $allData = getAllData("board");?>

<div class="container">
    <a class="btn btn-secondary pr-4 pl-4 mt-5 ml-2" href="dash.php">Back</a>
    <div class="row text-center mt-5">
        <?php foreach ($allData as $all_member){ ?>
            <div class="col-lg-6 col-md-12 col-sm-12 mix Web_design Programming">
                <div class="item">
                <h4 class="mt-4 mb-4"><?php echo $all_member["name"]?></h4>
                <h4 class="mt-4 mb-4"><?php echo $all_member["department"]?></h4>
                <h4 class="mt-4 mb-4"><?php echo $all_member["email"]?></h4>
                <button class="download mt-2 mr-3"><a href="update_member_form.php?id=<?php echo $all_member["id"]?>">تعديل</a></button>
                <button class="online ml-2"><a href="delete_admin.php?id=<?php echo $all_member["id"]?>">حذف </a></button>                    </div>
            </div>
        <?php } ?>
    </div>
</div>
            
<?php
}else{
    header("location:siggin.php");
}