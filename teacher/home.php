<?php
session_start();
?>
      <html>
       <head>
       <meta http-equiv=Content-Type content="text/html; charset=utf-8">
       </head>
       <body>
          <p class="subhead1">welcome <?php echo $_SESSION['t_name'] ?></p>
           <form action="redirect.php" method="post">
            <button type="submit" name="add" class="button_green">+ ADD</button>
            <button type="submit" name="remove" class="button_red">- Remove</button>
            <button type="submit" name="edit" class="button_default">Edit</button>
        </form>
        <table border="3px" class="sub_list">
            <tr>
                <th><p>Date</p></th>
                <th><p>roomname</p></th>
                <th><p>subject/topic</p></th>
                <th><p>Start session</p></th>
            </tr>
                <?php
                include "config.php";
                mysqli_query($objCon,"SET NAMES UTF8");
                $data = "SELECT * FROM sList WHERE owner = '".$_SESSION['t_name']."' ORDER BY ID";
                $obj = mysqli_query($objCon,$data);
                
                while($output = mysqli_fetch_array($obj)){
                ?>
                    <tr>
                        <td class="date"><?php echo $output['date'] ?></td>
                        <td class="roomname"><?php echo $output['roomname'] ?></td>
                        <td><?php echo $output['topic'] ?></td>
                        <td class="enter"><a href="http://webtech2562.96.lt/s2g15/proj/chat/livechat_runtime.php?roomname=<?php echo $output['roomname'] ?>" target="_blank">Enter</a></td>
                    </tr>
                <?php
                }
                    mysqli_close($objCon);
                ?>
        </table>
       </body>
</html>