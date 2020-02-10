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
            <img class="pic" src="img/undraw_authentication_fsn5.png">
            <p class="subDetail1">Forget Password? Don't Worry. 
You can reset it with  your email.</p>
        </div>
    </div>
    <div class="content">
        <form method="post" action="send_email.php">
        <p class="subhead1">Username</p>
        <input type="text" name="username" class="input_bar"><br>
        <p class="subhead1">email</p>
        <input type="email" name="email" class="input_bar"><br><br>
        <button type="submit" name="send" class="button_default">send</button>
    </form>
    </div>
</body>

</html>