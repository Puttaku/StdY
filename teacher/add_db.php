<?php
    session_start();
    include "config.php";
    mysqli_query($objCon,"SET NAMES UTF8");
    if(isset($_POST["confirm"])){
        $x = trim($_POST["roomname"]);
        $numx = strlen($x);
        if($x == ""){
            header("location:add.php");
        }
        else if($numx<4 || $numx>12){
            header("location:add.php");
        }
        else if(trim($_POST["topic"] =="")){
            header("location:add.php");
        }
        else{
            $target_dir = "file/";
            $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
            $file_name = basename($_FILES["fileToUpload"]["name"]);
            $uploadOk = 1;
            $fileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
            // Check if file already exists
            if($file_name != ""){
                if (file_exists($target_file)) {
                $uploadOk = 0;
                echo "<SCRIPT type='text/javascript'> //not showing me this
                        alert('Sorry, This file already exist');
                        history.back(-1);
                        </SCRIPT>";
                exit();
                }
                else{
                if($fileType !='ppt' && $fileType !='pptx') {
                    $uploadOk = 0;
                    echo "<SCRIPT type='text/javascript'> //not showing me this
                            alert('Sorry, powerpoint (.ppt or .pptx) files are allowed. your file type = ".$fileType."');
                            history.back(-1);
                            </SCRIPT>";
                    mysqli_close($objCon);
                    exit();
                }
                if(!preg_match("/[A-Z][a-z]/",$file_name)){
                    $uploadOk = 0;
                    echo "<SCRIPT type='text/javascript'> //not showing me this
                            alert('Sorry, Only english name file supported');
                            history.back(-1);
                            </SCRIPT>";
                exit();
                }
                if ($uploadOk == 0) {
                } else {
                    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"],$target_file)) {
                    } else {
                            echo "<SCRIPT type='text/javascript'> //not showing me this
                            alert('Sorry, there was an error uploading your file.');
                            history.back(-1);
                            </SCRIPT>";
                        }
                    }
                }
                $str = "INSERT INTO sList (roomname,topic,owner,filename) VALUES ('".$_POST['roomname']."','".$_POST['topic']."','".$_SESSION['t_name']."','$file_name')";
                $obj = mysqli_query($objCon,$str);
                $str = "SELECT ID FROM sList WHERE roomname = '".$_POST['roomname']."'";
                $obj = mysqli_query($objCon,$str);
                $temp = mysqli_fetch_array($obj);
                
            }
            else{
                $str = "INSERT INTO sList (roomname,topic,owner) VALUES ('".$_POST['roomname']."','".$_POST['topic']."','".$_SESSION['t_name']."')";
                $obj = mysqli_query($objCon,$str);
                $str = "SELECT ID FROM sList WHERE roomname = '".$_POST['roomname']."'";
                $obj = mysqli_query($objCon,$str);
                $temp = mysqli_fetch_array($obj);
            }
            $str = "INSERT INTO welcome_room (roomname,topic,description,owner,ID) VALUES ('".$_POST['roomname']."','".$_POST['topic']."','".$_POST['description']."','".$_SESSION['t_name']."','".$temp['ID']."')";
            $obj = mysqli_query($objCon,$str);
            $str = "UPDATE sList SET date = ADDTIME(date,'7:00:0.0') ORDER BY ID DESC LIMIT 1";
            $obj = mysqli_query($objCon,$str);
            header("location:complete.html");
            mysqli_close($objCon);
        }
    }
    else if(isset($_POST["back"])){
        header("location:main.php");
    }
?>