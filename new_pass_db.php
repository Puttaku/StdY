<?php
    session_start();
    include"config.php";
    $message = "";
    $permission = 1;
    $x = $_GET["code"];
    if($_POST['passwords'] == ""){
                $permission = 0;
                $message = "Please enter your password.";
                break;
            }
    else if($_POST['confirm_password'] == ""){
                $permission = 0;
                $message = "Please comfirm your password.";
                break;
            }
    else if($_POST['passwords'] != $_POST['confirm_password']){
                $permission = 0;
                $message = "Your password doesn't match.";
                break;
    }
    if($permission == 0){
        echo "<script>alert('$message');window.location='new_pass.php?code=$x';</script>";
    }
    else{
        $str = "UPDATE t_user SET password = '".$_POST['passwords']."' WHERE username = '".$_SESSION['username']."'";
        $obj = mysqli_query($objCon,$str);
        session_unset();
        session_destroy();
        header("location:teacher_login.php");
    }
?>