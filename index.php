<?php
    $page_name = "كلية الدراسات الاسلامية و العربية (بنات)

    قسم العلاقات العامه و الاعلام";
    $style = "index_style.css";
    $script="main.js";
    require_once "init.php";
?>

<!--start header section-->
<div class="header text-center">
    <!-- first part in header (intro)-->
    <div class="intro">
       <div class="row">
            <div class="col-md-4 col-6">  
                <img src="img/al-azhar_logo.png" alt="logo">
            </div>
            <div class="col-md-4 faculty_info">
                <h3>جامعة الازهر</h3>
                <p>كلية الدراسات الاسلامية و العربية (بنات)</p>
                <h5>قسم العلاقات العامه و الاعلام</h5>
            </div>
            <div class="col-md-4 col-6">
                <img src="img/logo.jpeg" alt="logo">
            </div>
       </div>
    </div>
    <!--second part in header (navbar)-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
        <a style="color:#fff" class="navbar-brand" href="index.php">قسم العلاقات العامه و الاعلام </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto mr-auto">
                <li class="nav-item">
                    <a class="nav-link active" href="#">الرئيسيه</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="d1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    عن القسم
                    </a>
                    <div class="dropdown-menu" aria-labelledby="d1">
                    <a class="dropdown-item" href="#">تاريخه</a>
                    <a class="dropdown-item" href="#">نشأته</a>
                    <a class="dropdown-item" href="#">تطوره</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="d2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    اعضاء القسم
                    </a>
                    <div class="dropdown-menu" aria-labelledby="d2">
                    <a class="dropdown-item" href="#">رئيس القسم</a>
                    <a class="dropdown-item" href="board.php">اعضاء التدريس</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="d2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    اخبار القسم
                    </a>
                    <div class="dropdown-menu" aria-labelledby="d2">
                    <a class="dropdown-item" href="#">اخبار دورية</a>
                    <a class="dropdown-item" href="#">السيمنار</a>
                    <a class="dropdown-item" href="#">التدريبات العملية</a>
                    <a class="dropdown-item" href="#">ورش العمل</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="d2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    انجازات القسم
                    </a>
                    <div class="dropdown-menu" aria-labelledby="d2">
                    <a class="dropdown-item" href="#">مشاريع التخرج</a>
                    <a class="dropdown-item" href="#">انجازات اعضاء القسم</a>
                    </div>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#">استفسارات</a>
                </li>
                </ul>
            </div>
        </div>
    </nav>

</div>
<!--end nav bar-->