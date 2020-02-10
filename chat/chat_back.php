<?php
include"config.php";
    if(isset($_POST['clear'])){
        $x = $_GET["roomname"];
        $str = "DELETE FROM livechat WHERE roomname = '".$_GET['roomname']."'";
        $objQuery = mysqli_query($objCon,$str);
        mysqli_close($objCon);
        header(urldecode("location:livechat_runtime.php?roomname=".$x));
    }
?>