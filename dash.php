<?php
    session_start();
    $page_name = "لوحة التحكم";
    $style = "dash.css";
    require_once "init.php";
    if(isset($_SESSION['userName'])){

?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
    <?php if($_SESSION['regstatues'] == "1"){ ?>
        <li class="nav-item dropdown mr-3">
            <a class="nav-link dropdown-toggle" href="#" id="Books" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            المسئولين
            </a>
            <div class="dropdown-menu" aria-labelledby="Books">
            <a class="dropdown-item" href="add_admin.php">اضافة مسئول</a>
            <a class="dropdown-item" href="update_admin.php">تعديل او حذف بيانات مسئول</a>
            </div>
        </li> <?php }?>
      <li class="nav-item dropdown mr-3">
        <a class="nav-link dropdown-toggle" href="#" id="material" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          اعضاء الهيئه
        </a>
        <div class="dropdown-menu" aria-labelledby="material">
          <a class="dropdown-item" href="add_member.php">اضافة عضو</a>
          <a class="dropdown-item" href="update_member.php">تعديل او حزف بيانات عضو</a>
        </div>
      </li>
      <li class="nav-item dropdown mr-3">
        <a class="nav-link dropdown-toggle" href="#" id="courses" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          مشاريع التخرج
        </a>
        <div class="dropdown-menu" aria-labelledby="courses">
          <a class="dropdown-item" href="add_project.php">اضافة مشروع</a>
          <a class="dropdown-item" href="update_courses.php?action=update_courses&from=dashboardamealduc">تعديل او حذف مشروع</a>
        </div>
      </li>
      
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="Books" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Books
        </a>
        <div class="dropdown-menu" aria-labelledby="Books">
          <a class="dropdown-item" href="add_book.php?action=add_book&from=dashboardamealdab">Add Books</a>
          <a class="dropdown-item" href="update_books.php?action=update_books&from=dashboardamealdub">Update & Delete Books</a>
        </div>
      </li>
    </ul>
    <ul class="navbar-nav ml-auto mr-5">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <?php echo "MR/ " . $_SESSION['userName']; ?>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="update_user.php">update user information</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="logout.php">logout</a>
                </div>
            </li>
            </ul>
  </div>
</div>
</nav>
     <div class="dashboard pt-5 mb-5 pb-5">
      <div class="container">
      <p class="text-center mt-3"><i class="adduser_icon fal fa-file-plus"></i>
</p>
      <h3 class="text-center head mt-3 mb-5 pb-3">اهلا بك في لوحة التحكم الخاصة بالموقع</h3>
      <div class="row text-center">
        <div class="col-md-3"><div style ="background-color: #9b59b6;" class="header_item">
            <p>عدد المسئولين</p>
            <span><?php echo count_users("username","users"); ?></span>
        </div></div>
        <div class="col-md-3"><div style ="background-color: #e74c3c;" class="header_item">
            <p>عدد اعضاء الهيئه</p>
            <span><?php echo count_users("name","board"); ?></span>
        </div></div>
        <div class="col-md-3"><div style ="background-color: #e67e22;" class="header_item">
            <p>عدد مشاريع التخرج</p>
            <span><?php echo count_users("p_name","projects"); ?></span>
        </div></div>
        <div class="col-md-3"><a class="sta" href="#"><div style ="background-color: #3498db;" class="header_item">
            <p>Total Books</p>
            <span><?php echo count_users("book_name","books"); ?></span>
        </div></div>
      </div>
      <div class="row">
        <div class="col-md-6">
            <div class="panel">
              <div class="panel_header">
              <i class="fal fa-users"></i> <span>اخر المسؤلين المضافين</span>
              </div>
              <div class="panel_body pt-3">
                <?php $last_users = get_latest("*","users","id","3");
                  foreach ($last_users as $get_last_users){ ?>
                      <table class="table table-striped">
                    <tbody>
                      <tr>
                        <td><?php echo $get_last_users['username'] . " " . "<i class=\"fal fa-arrows-alt-h\"></i>" . " " . $get_last_users['email'];?></td>
                      </td>
                      </tr>
                    </tbody>
                  </table>
                  <?php } ?>

              </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="panel">
              <div class="panel_header">
              <i class="fal fa-tags"></i> <span>اخر الاعضاء المضافة</span>
              </div>
              <div class="panel_body pt-3">
              <?php $last_members = get_latest("*","board","id","3");
                  foreach ($last_members as $get_last_members){ ?>
                      <table class="table table-striped">
                    <tbody>
                      <tr>
                        <td><?php echo $get_last_members['name'] . " " . "<i class=\"fal fa-arrows-alt-h\"></i>" . " " . $get_last_members['department']?></td>
                      </td>
                      </tr>
                    </tbody>
                  </table>
                  <?php } ?>
              </div>
            </div>
        </div>
        <div class="col-md-6">
        <div class="panel">
              <div class="panel_header">
              <i class="fal fa-tags"></i> <span>اخر مشاريع التخرج المضافة</span>
              </div>
              <div class="panel_body pt-3">
              <?php $last_project = get_latest("*","projects","id","3");
                  foreach ($last_project as $get_last_projects){ ?>
                      <table class="table table-striped">
                    <tbody>
                      <tr>
                        <td><?php echo $get_last_projects['p_name'] . " " . "<i class=\"fal fa-arrows-alt-h\"></i>" . " " . $get_last_projects['description']?></td>
                      </td>
                      </tr>
                    </tbody>
                  </table>
                  <?php } ?>
              </div>
            </div>
        </div>
        <div class="col-md-6">
        <div class="panel">
              <div class="panel_header">
              <i class="fal fa-tags"></i> <span>Last added Books</span>
              </div>
              <div class="panel_body pt-3">
              <?php $last_books = get_latest("*","books","id","3");
                  foreach ($last_books as $get_last_books){ ?>
                      <table class="table table-striped">
                    <tbody>
                      <tr>
                        <td><?php echo $get_last_books['book_name'] . " " . "<i class=\"fal fa-arrows-alt-h\"></i>" . " " . $get_last_books['pages_number'] . " pages"?></td>
                      </td>
                      </tr>
                    </tbody>
                  </table>
                  <?php } ?>
              </div>
            </div>
        </div>
      </div>
  </div>
</div>
<a href="https://info.flagcounter.com/8RvF"><img src="https://s04.flagcounter.com/countxl/8RvF/bg_FFFFFF/txt_000000/border_CCCCCC/columns_2/maxflags_10/viewers_0/labels_0/pageviews_1/flags_0/percent_0/" alt="Flag Counter" border="0"></a>


<?php }else{
            header("location:siggin.php");
}