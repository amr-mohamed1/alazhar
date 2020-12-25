<?php 
require_once "init.php";
/*
==========================  
  insert new user
==========================
*/

function insert_user ($user , $email , $pass){
    global $con;
    $stmt = $con->prepare("INSERT INTO users(username,email,password) Value(:username,:email,:password )");
    $stmt->execute(
    array(
        ":username"     => $user,
        ":email"    => $email,
        ":password" => $pass,
    ));
    echo "
        <div class=\"container\"><div class=\"alert alert-success\" role=\"alert\">
        thanks for signup un our page
        </div></div>";
    header("Refresh:2; url=dash.php");
}

/*
==========================  
    update user table
==========================
*/


function updateUser($id , $user_name , $email , $password ){
    global $con;
    $stmt = $con->prepare("UPDATE users SET username=? , email=? , password=? WHERE id = ?");
    $stmt->execute(array(
        $user_name,
        $email,
        $password,
        $id
    ));    
    echo "
        <div class='container'>
            <p class='alert alert-success'>Success your data has been updated you will return after 3s</p>
        </div>";
        header("Refresh:2; url=dash.php");
}

/*
==========================  
  check if user exist
==========================
*/

function check_user ( $email , $pass){
    global $con;
    $stmt = $con->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->execute(array($email));
    $rows = $stmt->fetch(PDO::FETCH_ASSOC);
    $count = $stmt->rowCount();
    if ($count){
        if( $rows['password'] == $pass ){
            session_start();
            $_SESSION['userId']    = $rows['id'];
            $_SESSION['userName']  = $rows['username'];
            $_SESSION['userEmail'] = $rows['email'];
            $_SESSION['regstatues'] = $rows['RegStatues'];
            
            echo "
                <div class=\"container\"><div class=\"alert alert-success\" role=\"alert\">
                    welcome Back Mr/ "  . $_SESSION['userName'] . "
                </div></div>";
            header("Refresh:2; url=dash.php");
        }
        else{
            echo "
                <div class=\"container\"><div class=\"alert alert-danger\" role=\"alert\">
                Sorry The Email or Password is incorrect......!
                </div></div>";
        }   
    }
    else{
            echo "
                <div class=\"container\"><div class=\"alert alert-danger\" role=\"alert\">
                Sorry The Email or Password is incorrect......!
                </div></div>";
        }
}


/*
==========================  
  count admins
==========================
*/

function count_users($colume,$databname){
    global $con;
    $stmt = $con->prepare("SELECT COUNT($colume) From $databname");
    $stmt->execute();
    $rows = $stmt->fetchColumn();
    return $rows;
}

/*
==========================  
  get lastest operations
==========================
*/

function get_latest($select , $table , $order , $limit = 3){
    global $con;
    $stmt = $con->prepare("SELECT $select From $table ORDER BY $order DESC LIMIT $limit ");
    $stmt->execute();
    $rows = $stmt->fetchAll();
    return $rows;
}

/*
==========================  
  get all admin
==========================
*/

function getAllData($table){
    global $con;
    $stmt = $con->prepare("SELECT * FROM $table");
    $stmt->execute();
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}

/*
==========================  
  get all admin data with id
==========================
*/

function getData_with_id($table,$id){
    global $con;
    $stmt = $con->prepare("SELECT * FROM $table WHERE id = ?");
    $stmt->execute(array($id));
    $rows = $stmt->fetch(PDO::FETCH_ASSOC);
    return $rows;
}

/*
==========================  
  get all data
==========================
*/

function getData($table,$depart){
    global $con;
    $stmt = $con->prepare("SELECT * FROM $table WHERE main_department=?");
    $stmt->execute(array($depart));
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}

/*
==========================  
  insert new member
==========================
*/

function insert_member ($username ,$department ,$degree, $email, $main_department, $nick){
    global $con;
    $stmt = $con->prepare("INSERT INTO board(name,department,degree,email,main_department,nick) Value(:username,:department,:degree,:email,:main_department,:nick )");
    $stmt->execute(
    array(
        ":username"     => $username,
        ":department"     => $department,
        ":degree"     => $degree,
        ":email"     => $email,
        ":main_department"    => $main_department,
        ":nick" => $nick,
    ));
    echo "
        <div class=\"container\"><div class=\"alert alert-success\" role=\"alert\">
        تم اضافة العضو بنجاح
        </div></div>";
    header("Refresh:2; url=dash.php");

}
    
/*
==========================  
    update members table
==========================
*/


function update_member($id ,$name ,$department ,$degree ,$email ,$main_department, $nick){
    global $con;
    $stmt = $con->prepare("UPDATE board SET name=? , department=?, degree=?, email=?, main_department=? , nick=? WHERE id = ?");
    $stmt->execute(array(
        $name,
        $department,
        $degree,
        $email,
        $main_department,
        $nick,
        $id
    ));    
    echo "
        <div class='container'>
            <p class='alert alert-success'>تم تعديل البيانات بنجاح</p>
        </div>";
        header("Refresh:2; url=dash.php");
}


/*
==========================  
  insert new project
==========================
*/

function insert_project ($p_name,$date,$desc,$img,$link){
    global $con;
    $stmt = $con->prepare("INSERT INTO projects(p_name,date,description,img,link) Value(:p_name,:date,:desc,:img,:link)");
    $stmt->execute(
    array(
        ":p_name"     => $p_name,
        ":date"     => $date,
        ":desc"     => $desc,
        ":img"     => $img,
        ":link"     => $link
    ));
    echo "
        <div class=\"container\"><div class=\"alert alert-success\" role=\"alert\">
        تم اضافة العضو بنجاح
        </div></div>";
    header("Refresh:2; url=dash.php");

}