<?php
    include"config.php";
    $str = "SELECT filename FROM sList WHERE ID = '".$_GET['ID']."' ";
    $obj = mysqli_query($objCon,$str);
    $data = mysqli_fetch_array($obj);
    $filefolder = "file/";
    $filePath = $filefolder.$data['filename'];
    if($data['filename'] != ""){
        unlink($filePath);
    }
    $str = "SELECT roomname FROM sList WHERE ID = '".$_GET['ID']."' ";
    $obj = mysqli_query($objCon,$str);
    $data = mysqli_fetch_array($obj);
    $str = "DELETE FROM welcome_room WHERE roomname ='".$data['roomname']."' ";
    $obj = mysqli_query($objCon,$str);
    $str = "DELETE FROM sList WHERE ID ='".$_GET['ID']."' ";
    $obj = mysqli_query($objCon,$str);
    mysqli_close($objCon);
    header("location:remove_interface.php");
?>