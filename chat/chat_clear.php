<?php
    include"config.php";
    $str = "DELETE FROM livechat WHERE roomname = '".$_SESSION['roomname']."'";
    $objQuery = mysqli_query($objCon,$str);
    mysqli_close($objCon);
?>