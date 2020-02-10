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
            <img class="pic" src="img/undraw_content_creator_xeju.png">
            <p class="subDetail1">Reach your student feedback instantly..</p>
        </div>
    </div>
    <div id="content_scroll">
        <div class="content_scroll">
            <p class="subhead1" id="register">Register</p>
            <form action="teacher_reg_db.php" method="post" class="reg_form">
                <p class="subhead2">Name</p>
                <input type="text" name="name" class="input_bar"><br>
                <p class="subhead2">Username</p>
                <input type="text" name="username" class="input_bar"><br>
                <p class="subhead2">Email</p>
                <input type="email" name="email" class="input_bar"><br>
                <p class="subhead2">Password</p>
                <input type="password" name="passwords" class="input_bar"><br>
                <p class="subhead2">Confirm Password</p>
                <input type="password" name="confirm_password" class="input_bar"><br><br>
                <button type="submit" name="register" class="button_default">Register</button><br><br>
                <a href="teacher_login.php" class="subDetail1">Already Registered?</a><br><br><br>
            </form>
        </div>
    </div>

</body>

</html>