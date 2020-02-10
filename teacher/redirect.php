<?php
    if(isset($_POST["add"])){
        header("location:add_interface.php");
    }
    else if(isset($_POST["remove"])){
        header("location:remove_interface.php");
    }
    else if(isset($_POST["edit"])){
        header("location:edit_interface.php");
    }
    else{
        echo "error";
    }
?>