<?php
    session_start();
    if(isset($_POST["login"])){
        include"config.php";
        mysqli_query($objCon,"SET NAMES UTF8");
        $str = "SELECT * FROM welcome_room WHERE roomname = '".$_POST["roomname"]."'";
        $obj = mysqli_query($objCon,$str);
        while($data = mysqli_fetch_array($obj)){
            if($_POST["roomname"] == $data["roomname"]){
                $_SESSION["roomname"] = $_POST["roomname"];
                $_SESSION["name"] = $_POST["name"];
                header("location:preview.php");
            }
        }
        echo "<script>alert('roomname is incorrect. please try again.');window.location = 'student_login.php';</script>";
    }
?>