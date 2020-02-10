<?php
    session_start();
    include "config.php";
    mysqli_query($objCon,"SET NAMES UTF8");
    if(isset($_POST['submit'])){
        $x = $_POST["texting"];
        if($x != ""){
            $str = "INSERT INTO livechat (name,message,roomname) VALUES ('".$_SESSION["name"]."','".$_POST["texting"]."','".$_SESSION["roomname"]."')";
            $objQuery = mysqli_query($objCon,$str);
            mysqli_close($objCon);
            header("location:livechat_send.php");
    }
    else{
        mysqli_close($objCon);
        header("location:livechat_send.php");
    }
    }
?>