<?php
    include"config.php";
    if(isset($_POST['register'])){
        $str = "SELECT * FROM t_user";
        $obj = mysqli_query($objCon,$str);
        $permission = 1;
        $message = "";
        while($data = mysqli_fetch_array($obj)){
            if($_POST['name'] == ""){
                $permission = 0;
                $message = "Please enter your name.";
                break;
            }
            else if($_POST['username'] == ""){
                $permission = 0;
                $message = "Please enter your Username.";
                break;
            }
            else if($_POST['email'] == ""){
                $permission = 0;
                $message = "Please enter your email.";
                break;
            }
            else if($_POST['passwords'] == ""){
                $permission = 0;
                $message = "Please enter your password.";
                break;
            }
            else if(!preg_match("/(?=.*[a-zA-Z])[a-zA-Z]+/",$_POST['username'])){
                $permission = 0;
                $message = "Please enter your username in english.";
                break;
            }
            else if(!preg_match("/(?=.*[0-9a-zA-Z\_\.])(?=.*[@])[0-9a-zA-Z\_\.]+[@][a-zA-Z]+(.com|.co.th)$/",$_POST['email'])){
                $permission = 0;
                $message = "Your email is incorrect! Please enter you correct email.";
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
            else if($_POST['name'] == $data['name']){
                $permission = 0;
                $message = "This name is already exist! Please change your name again.";
                break;
            }
            else if($_POST['username'] == $data['username']){
                $permission = 0;
                $message = "This username is already exist! Please change your username again.";
                break;
            }
        }
        if($permission == 0){
            mysqli_close($objCon);
            echo "<script>alert('$message');window.location='teacher_reg.php';</script>";
        }
        else{
            $str = "INSERT INTO t_user (name,username,password,email) VALUES ('".$_POST['name']."','".$_POST['username']."','".$_POST['passwords']."','".$_POST['email']."')";
            $obj = mysqli_query($objCon,$str);
            mysqli_close($objCon);
            header("location:teacher_register_complete.php");
        }
    }
?>