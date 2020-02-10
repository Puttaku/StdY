<?php
    session_start();
    include"config.php";
    mysqli_query($objCon,"SET NAMES UTF8");
    $str = "SELECT * FROM welcome_room WHERE roomname = '".$_SESSION["roomname"]."'";
    $obj = mysqli_query($objCon,$str);
    $data = mysqli_fetch_array($obj);
?>
<html>

<head>
    <link rel="stylesheet" href="com_style.css">
    <link href="https://fonts.googleapis.com/css?family=Concert+One|Montserrat" rel="stylesheet">
    <meta http-equiv=Content-Type content="text/html; charset=utf-8">
    <style>
        .subhead_preview {
            font-family: "Montserrat";
            font-size: 4vw;
            font-weight: 600;
            margin: 10px;
            margin-left: 0px;
        }

        .content {
            width: 100%;
            height: 78%;
            overflow: hidden;
        }

        #content {
            width: 100%;
            height: 100%;
            padding-left: 10vw;
            padding-top: 6.5vh;
            float: left;
            overflow-y: scroll;
        }
    </style>
</head>

<body>
    <div class="header">
        <h1 class="head_text">STdY</h1>
    </div>
    <div class="content">
        <div id="content">
            <p class="subhead_preview">Subject/Topic : </p>
            <p class="subcontent"><?php echo $data["topic"]?></p><br>
            <p class="subhead_preview">Teacher : </p>
            <p class="subcontent"><?php echo $data["owner"]?></p><br>
            <p class="subhead_preview">Description</p>
            <p class="subcontent"><?php echo $data["description"]?></p>
            <form action="chat/livechat_send.php">
                <button type="submit" name="start" class="button_default">start</button>
            </form>
            <br><br>
        </div>
    </div>
</body>

</html>