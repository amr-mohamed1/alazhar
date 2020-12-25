<?php
    session_start();
    $page_name = "تعديل بيانات عضو";
    $style = "dash.css";
    require_once "init.php";
    if(isset($_SESSION['userName'])){
        if (isset($_GET['id']) && is_numeric($_GET['id'])){
            $member_id = $_GET['id'];
if($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST["username"]) && !empty($_POST["email"]))
{
    $username = $_POST["username"];
    $department = $_POST["department"];
    $degree = $_POST["degree"];
    $email = $_POST["email"];
    $nick = $_POST["nick"];
    if ($department == "العلاقات العامه و الاعلان"){
        $main_department = "0";
    }else{
        $main_department = "1";
    }
    update_member($member_id, $username, $department, $degree, $email, $main_department, $nick);   
}
    $result= getData_with_id("board",$member_id);
?>


<div class="container mb-3">
    <p class="text-center mt-5"><i class="fal adduser_icon fa-file-plus"></i></p>
<h3 class="text-center mt-2 mb-3">اهلا بك في لوحة التحكم</h3>
<p class="text-center">من خلال هذة الصفحة يمكنك اضافة عضو جديد</p>
<form method="POST" action="<?php $_SERVER['PHP_SELF'] ?>">



  <div class="form-row">
        <div class="form-group col-md-12">
            <label>الاسم</label>
            <input style="direction: ltr;" value="<?php echo $result["name"]; ?>" name="username" type="text" class="form-control">
        </div>
        <div class="form-group col-md-12">
            <label for="department">اختر القسم</label>
            <select class="custom-select"  name="department" id="department" required>
                <option selected disabled value="">Choose...</option>
                <option value="العلاقات العامه و الاعلان">هيئة التدريس في قسم العلاقات العامه و الاعلام</option>
                <option value=" العلاقات العامه">الهيئة المعاونة بقسم علاقات عامة</option>
            </select>
        </div>
        <div class="form-group col-md-12">
            <label>الدرجة</label>
            <input style="direction: ltr;" value="<?php echo $result["degree"]; ?>" name="degree" type="text" class="form-control">
        </div>
        <div class="form-group col-md-12">
            <label>الايميل</label>
            <input style="direction: ltr;" value="<?php echo $result["email"]; ?>" name="email" type="email" class="form-control">
        </div>
        <div class="form-group col-md-12">
            <label for="nick">الوظيفة</label>
            <select class="custom-select"  name="nick" id="nick" required>
                <option selected disabled value="">Choose...</option>
                <option value="1">دكتور</option>
                <option value="0">معيد</option>
            </select>
        </div>
  </div>
  <button type="submit" class="btn btn-primary mb-5 mt-2">تعديل العضو</button>
  <a class="btn btn-secondary pr-4 pl-4 ml-3 mb-5 mt-2" href="dash.php">رجوع</a>
</form>
</div>

<?php
}}
else{
            header("location:siggin.php");
}