<?php
    if(isset($_POST['teacher_login'])){
        header("location:teacher_login.php");
    }
    else if(isset($_POST['teacher_reg'])){
        header("location:teacher_reg.php");
    }
    else if(isset($_POST['student_login'])){
        header("location:student_login.php");
    }
    else if(isset($_POST['student_reg'])){
        header("location:student_reg.php");
    }
    else if(isset($_POST['login'])){
        header("location:index.php");
    }
?>