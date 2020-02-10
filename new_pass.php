<?php
    session_start();
?>
<html>

<head>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Concert+One|Montserrat" rel="stylesheet">
</head>
<?php
    if($_SESSION["vertify_code"] == $_GET["code"] && isset($_SESSION["vertify_code"])){
?>
<body>
    <div class="header">
        <h1 class="head_text">STdY - for Teacher</h1>
    </div>
    <div class="logo">
        <div class="box">
            <img class="pic" src="img/undraw_teaching_f1cm.png">
            <p class="subDetail1">Forget Password? Don't Worry.
                You can reset it with your email.</p>
        </div>
    </div>
    <div class="content">
        <form action="new_pass_db.php?code=<?php echo $_GET["code"]?>" method="post">
            <p class="subhead1"><?php echo $_SESSION["username"]?></p>
            <p class="subhead1">Password</p>
            <input type="password" name="passwords" class="input_bar"><br>
            <p class="subhead1">Confirm Password</p>
            <input type="password" name="confirm_password" class="input_bar"><br><br>
            <button type="submit" name="confirm" class="button_default">Confirm</button><br>
        </form>
    </div>
</body>
<?php
    }
    else{
        echo "<script>alert('The code is incorrect! send email again');window.location='forget.php';</script>";
    }
    ?>
</html>