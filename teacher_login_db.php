<?php
    session_start();
    include"config.php";
    if(isset($_POST['login'])){
        $permission = 0;
        $match = 0;
        $message = "";
        $str = "SELECT * FROM t_user";
        $obj = mysqli_query($objCon,$str);
        while($data = mysqli_fetch_array($obj)){
            if($_POST['username'] == ""){
                    $permission = 0;
                    $message = "Please enter your username.";
                $match = 1;
                    break;
            }
            else if($_POST['passwords'] == ""){
                    $permission = 0;
                    $message = "Please enter your password.";
                $match = 1;
                    break;
                }
            else if($_POST['username'] == $data['username']){
                if($_POST['passwords'] == $data['password']){
                    $permission = 1;
                    $match = 1;
                    $_SESSION["t_name"] = $data['name'];
                    break;
                    }
                }
        }
        if($permission == 0){
                if ($match == 0){
                    $message = "Your username or password is incorrect!";
                }
                    $_SESSION["loginstatus"] = 0;
                    mysqli_close();
                    echo "<script>alert('$message');window.location='teacher_login.php';</script>";
                }
                else{
                    $_SESSION["loginstatus"] = 1;
                    header("location:teacher/main.php");
                }
    }
?>