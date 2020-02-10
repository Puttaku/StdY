<?php
session_start();
include"config.php";
$str = "SELECT filename FROM sList WHERE roomname = '".$_GET['roomname']."'";
$obj = mysqli_query($objCon,$str);
$file = mysqli_fetch_array($obj);
$filename = $file['filename'];
$_SESSION['roomname'] = $_GET['roomname'];
?>
<html>

<head>
    <style>
        .ppt {
            height: 95%;
            width: 60%;
            float: left;
            overflow:hidden;
        }

        #live {
            float: right;
            height: 95%;
            width: 39%;
        }
    </style>
</head>

<body>
    <script type="text/javascript" src="//code.jquery.com/jquery-3.3.1.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            setInterval(function() {
                $("#live").load("livechat_receive.php?roomname=<?php echo $_GET['roomname']; ?>");
            }, 1000);
        });
    </script>
    <?php
        if($filename != ""){
       ?>
    <iframe class="ppt" name="show" src="https://view.officeapps.live.com/op/view.aspx?src=http://webtech2562.96.lt/s2g15/proj/teacher/file/<?php echo $filename;?>">
    </iframe>
    <?php
        }
    else{?>
        <object type="text/html" data="https://www.webwhiteboard.com/" class="ppt" style="overflow:auto;border:5px ridge blue">
        </object>
    <?php
        }
    ?>
    <div id="live"></div>
</body>

</html>