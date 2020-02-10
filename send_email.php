<?php
    session_start();
    include"config.php";
    date_default_timezone_set('Asia/Bangkok');
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require 'PHPMailer/src/Exception.php';
    require 'PHPMailer/src/PHPMailer.php';
    require 'PHPMailer/src/SMTP.php';
    $mail = new PHPMailer;
    $mail->isSMTP();
    $mail->SMTPDebug = 0;
    $mail->Debugoutput = 'html';
    $mail->Host = "smtp.gmail.com";
    $mail->Port = 587;
    $mail->SMTPSecure = 'tls';
    $mail->SMTPAuth = true;
    $_SESSION['vertify_code'] = rand();
    $email = "";
    $subject = "vertify for password";
    $header = "STdY : Resetting your email";
    $body = "";
    $str = "SELECT * FROM t_user";
    $message = "";
    $permission = 0;
    $match = 0;
    $obj = mysqli_query($objCon,$str);
    while($data = mysqli_fetch_array($obj)){
            if($_POST['username'] == ""){
                $permission = 0;
                $message = "Please enter your Username.";
                break;
            }
            else if($_POST['email'] == ""){
                $permission = 0;
                $message = "Please enter your email.";
                break;
            }
            else if($_POST['username'] == $data['username']){
                $_SESSION["username"] = $_POST['username'];
                if($_POST['email'] == $data['email']){
                    $permission = 1;
                    $match = 1;
                    $email = $_POST['email'];
                    break;
                    }
            }
    }
    if($permission == 0){
                if ($match == 0){
                    $message = "Your username or email is incorrect!";
                }
        echo "<script>alert('$message');window.location='teacher_login.php';</script>";
    }
    else{
        $body = "This is a mail from STdY for reset your password \nclick this link to reset your password: \nhttps://webserv.kmitl.ac.th/ite60010742/proj/new_pass.php?code=".$_SESSION['vertify_code'];
        $mail->Username = "STdY.Corp@gmail.com";
        $mail->Password = "STdY2562";
        $mail->setFrom('STdY.Corp@gmail.com', 'STdY Corp.');
        $mail->addAddress($email, $_SESSION["username"]);
        $mail->Subject = $subject;
        $mail->msgHTML($body);
        if (!$mail->send()) {
            echo "Mailer Error: " . $mail->ErrorInfo;
        } else {
            header("location:email_send_complete.php");
        }
    }
?>