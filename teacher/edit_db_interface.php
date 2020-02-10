<?php
    session_start();
    if($_SESSION["loginstatus"] == 1){
?>
<html>

<head>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Concert+One|Montserrat" rel="stylesheet">
</head>
<body>
   <script type="text/javascript" src="//code.jquery.com/jquery-3.3.1.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $("#main").load("edit_db.php?ID=<?php echo $_GET["ID"]?>");
        });
    </script>
    <div class="header">
    <h1>STdY - for Teacher</h1>
</div>
<div class="menu">
    <table border="1px" align="center" id="choice">
            <tr>
                <td><a href="edit_account.php" target="_blank" class="choice_text">Manage Account</a></td>
            </tr>
            <tr>
                <td><a href="instruction.html" target="_blank" class="choice_text">Instruction</a></td>
            </tr>
            <tr>
                <td><a href="logout.php" target="_self" class="choice_text">Logout</a></td>
            </tr>
        </table>
</div>
<div id="main"></div>
</body>
<?php
    }
    else{
        echo "<script>alert('Please login');window.location='http://webtech2562.96.lt/s2g15/proj';</script>";
    }
?>

</html>