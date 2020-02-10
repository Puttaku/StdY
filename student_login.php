<html>

<head>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Concert+One|Montserrat" rel="stylesheet">
    <style>
        .pic{
            width: 60%;
        }
    </style>
</head>

<body>
    <div class="header">
        <h1 class="head_text">STdY</h1>
    </div>
    <div class="logo">
        <div class="box">
            <img class="pic" src="img/undraw_mathematics_4otb.png">
            <p class="subDetail1">Let's start your "Fantastic"
                class.</p>
        </div>
    </div>
    <div class="content">
        <form method="post" action="student_login_db.php">
            <p class="subhead1">Roomname</p>
            <input type="text" name="roomname" class="input_bar"><br>
            <p class="subhead1">Name</p>
            <input type="text" name="name" class="input_bar"><br><br>
            <button type="submit" name="login" class="button_default">login</button>
        </form>
    </div>
</body>

</html>