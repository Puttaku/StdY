<html>

<head>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Concert+One|Montserrat" rel="stylesheet">
</head>

<body>
    <div class="header">
        <h1 class="head_text">STdY - for Teacher</h1>
    </div>
    <div class="logo">
        <div class="box">
            <img class="pic" src="img/undraw_teaching_f1cm.png">
            <p class="subDetail1">Teach, Chat and presentation Online.</p>
        </div>
    </div>
    <div class="content">
        <form method="post" action="teacher_login_db.php">
            <p class="subhead1">Username</p>
            <input type="text" name="username" class="input_bar"><br>
            <p class="subhead1">Password</p>
            <input type="password" name="passwords" class="input_bar"><br><br>
            <button type="submit" name="login" class="button_default">login</button><br><br>
            <a href="teacher_reg.php" class="subDetail1">Don't register yet?</a><br><br>
            <a href="forget.php"class="subDetail1">Forget your password?</a>
        </form>
    </div>
</body>

</html>