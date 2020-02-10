<html>

<head>
    <link rel="stylesheet" href="com_style.css">
    <link href="https://fonts.googleapis.com/css?family=Concert+One|Montserrat" rel="stylesheet">
    <meta http-equiv=Content-Type content="text/html; charset=utf-8">
    <style>
        textarea[name=texting] {
            resize: none;
            width: 90%;
            height: 20%;
            display: block;
            margin-left: auto;
            margin-right: auto;
            font-size: 2vw;
        }

        .type {
            font-size: 5vw;
            text-align: center;
            font-family: "Montserrat";
            margin: 2vh;
        }

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
    <form action="livechat.php" method="post">
        <p class="type">type here</p>
        <textarea name="texting"></textarea><br><br>
        <center><input type="submit" name="submit" class="button_default"></center><br>
    </form>
</body>

</html>