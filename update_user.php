<?php
    $page_name = "تعديل بيانات مسئول";
    require_once "init.php";
    session_start();
    if(isset($_SESSION['userName'])){

        /*if admin want to edit another admin data*/
        if (isset($_GET['edit_admin_from']) && $_GET['edit_admin_from'] == "true"){
            

            if (isset($_GET['id']) && is_numeric($_GET['id'])){
                $adminID = $_GET['id'];
                    if($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST["b_name"]) && !empty($_POST["view_link"]) )
                    {
                        $username = $_POST["u_name"];
                        $email = $_POST["email"];
                        $pass = $_POST["n_pass"];
                        updateUser($adminID ,$username ,$email ,$pass);
                    }
                   $result= getData_with_id("users",$adminID);
        ?>
        
        <div class="container"> 
        <p class="text-center mt-5"><i class="fal adduser_icon fa-file-edit"></i></p>
        <h3 class="text-center mt-2 mb-3">welcome to dashboard</h3>
        <p class="text-center">Here you can add new Course</p>
        <form method="POST" action="<?php $_SERVER['PHP_SELF'] ?>">
        <div class="form-row mt-5 pt-5">
            <div class="form-group col-md-12">
                <label>New User NAME</label>
                <input style="direction: ltr;" name="u_name" value="<?php echo $result['username'] ?>" type="text" class="form-control">
            </div>
            <div class="form-group col-md-12">
                <label>New Email</label>
                <input style="direction: ltr;" name="email" value="<?php echo $result['email'] ?>" type="email" class="form-control">
            </div>
            <div class="form-group col-md-12">
                <label>New password</label>
                <input style="direction: ltr;" name="n_pass" type="password" class="form-control" autocomplete="off">
            </div>
        </div>
          <button type="submit" class="btn btn-primary mb-5 mt-2">update admin</button>
          <a class="btn btn-secondary pr-4 pl-4 ml-3 mb-5 mt-2" href="dash.php">Back</a>
        </form>
        </div>
        
        
        
        <?php     }
        else{
            header("location:dash.php");
        } ?>

<?php
        }
        /*if admin want to edit his own data*/
        else{
    if($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST["n_pass"]))
    {
        $user_name = $_POST["u_name"];
        $email = $_POST["email"];
        $password = $_POST["n_pass"];
        $hased = sha1($password);
        updateUser($_SESSION['userId'] , $user_name , $email  , $hased );
    };
?>

<div class="container">
    <form method="POST" action="<?php $_SERVER['PHP_SELF'] ?>">
        <div class="form-row mt-5 pt-5">
            <div class="form-group col-md-12">
                <label>New User NAME</label>
                <input style="direction: ltr;" name="u_name" value="<?php echo $_SESSION['userName'] ?>" type="text" class="form-control">
            </div>
            <div class="form-group col-md-12">
                <label>New Email</label>
                <input style="direction: ltr;" name="email" value="<?php echo $_SESSION['userEmail'] ?>" type="email" class="form-control">
            </div>
            <div class="form-group col-md-12">
                <label>New password</label>
                <input style="direction: ltr;" name="n_pass" type="password" class="form-control" autocomplete="off">
            </div>
        </div>
        <button type="submit" class="btn btn-primary mb-5 mt-2">Add Item</button>
        <a class="btn btn-secondary pr-4 pl-4 ml-3 mb-5 mt-2" href="dash.php">Back</a>
    </form>
</div>
<?php } }else{
    header("location:siggin.php");
}