<?php
session_start();
?>
    <html>
       <header>
       <meta http-equiv=Content-Type content="text/html; charset=utf-8">
       </header>
       <body>
       <p class="subhead1">Remove</p>
        <table border="3px" class="sub_list">
            <tr>
                <th><p>Date</p></th>
                <th><p>roomname</p></th>
                <th><p>subject/topic</p></th>
                <th><p>Delete</p></th>
            </tr>
                <?php
                include "config.php";
                mysqli_query($objCon,"SET NAMES UTF8");
                $data = "SELECT * FROM sList WHERE owner = '".$_SESSION['t_name']."' ORDER BY ID";
                $obj = mysqli_query($objCon,$data);
                
                while($output = mysqli_fetch_array($obj)){
                ?>
                    <tr>
                        <td><?php echo $output['date'] ?></td>
                        <td><?php echo $output['roomname'] ?></td>
                        <td><?php echo $output['topic'] ?></td>
                        <td><a href="delete_db.php?ID=<?php echo $output["ID"]; ?>">Delete</a></td>
                    </tr>
                <?php
                }
                    mysqli_close($objCon);
                ?>
        </table><br>
        <button onclick="location.href='main.php';" class="button_grey">Back</button><br>
       </body>
</html>