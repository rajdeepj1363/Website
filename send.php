<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
require 'vendor/autoload.php';
$date = date('Y-m-d');

if ($_POST)
{

    $name = $_POST['Name'];
    $email = $_POST['Email'];
    $contact = $_POST['Contact'];
    $subject = "Message from RJ site!";
    $message = $_POST['Message'];
    $result = "";

    if ($_POST) $POST = 1;




    // Load Composer's autoloader


    // Instantiation and passing `true` enables exceptions
    $mail = new PHPMailer(true);



            //Server settings
            $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
            $mail->isSMTP(); // Send using SMTP
            $mail->Host = 'smtp.gmail.com'; // Set the SMTP server to send through
            $mail->SMTPAuth = true; // Enable SMTP authentication
            $mail->Username = 'rajdeepj1313@gmail.com'; // SMTP username
            $mail->Password = 'rspj22381!'; // SMTP password
            $mail->SMTPSecure = "tls"; // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
            $mail->Port = 587; // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
            //Recipients
            $mail->setFrom($email, $name);
            $mail->addAddress('rajdeepj1313@gmail.com', 'Rajdeep Jadhav'); // Add a recipient


            // Attachments


            // Content
            $mail->isHTML(true); // Set email format to HTML
            $mail->Subject = $subject;
            $mail->Body = '
      	<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
      	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
      	<html xmlns="http://www.w3.org/1999/xhtml">
      	<head></head>
      	<body>
      	<table>
          <tr><td>Name: </td><td>' . $name . '</td></tr>
          <tr><td>Email: </td><td>' . $email . '</td></tr>
      		<tr><td>Contact: </td><td>' . $contact . '</td></tr>
          <tr><td>Message: </td><td>' . $message . '</td></tr>

      	</table>
      	</body>
      	</html>';

        if($mail->send())
        {
          echo "Message has been sent";
          $name = '';
          $contact = '';
          $message = '';
          $email = '';
          header("Location: <a href='contact.php'></a>");
        }
        else {
          echo "Some error occured! Please retry";
          $name = '';
          $contact = '';
          $message = '';
          $email = '';
            header("Location: <a href='contact.php'></a>");
        }
            // $result = "Message has been sent";








}
