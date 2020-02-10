<?php
    include "config.php";
    mysqli_query($objCon,"SET NAMES UTF8");
    $strs = "SELECT * FROM livechat WHERE roomname = '".$_GET['roomname']."' ORDER BY ID DESC LIMIT 20";
    $query = mysqli_query($objCon,$strs);
?>
<html>

<head>
    <style>
        .chat{
            width: 90%;
            height: 83%;
            border: 2px solid black;
            padding: 5%;
        }
        #name{
            color: darkblue;
        }
    </style>
</head>

<body>
    <div class="header">
        <p id="header">Chat Box</p>
    </div>
    <div class="chat">
        <?php
            while($result = mysqli_fetch_array($query)){
        ?>
        <div class="textbox">
            <?php 
                echo "<p id='name' style='display:inline'>".$result['name']." : </p>";
                echo "<p style='display:inline'>".$result['message']." </p>";
                echo "<br>";
            ?>
        </div>
        <?php
            }
        ?>
    </div>
    <div class="footer">
        <form method="post" action="chat_back.php?roomname=<?php echo $_GET["roomname"]?>">
            <button type="submit" name="clear">Clear chat</button>
        </form>
    </div>
</body>

</html>