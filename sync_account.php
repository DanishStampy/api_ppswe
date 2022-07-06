<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

require 'vendor/autoload.php';

if (isset($_POST['uid'], $_POST['email'])) {

  $uid = $_POST['uid'];
  $email = $_POST['email'];

  // return from string to json object
  echo json_encode([
    'status' => 200,
    'uid' => $uid,
    'email' => $email
  ]);

  // sending email using PHPMailer
  sendEmail($uid, $email);
}


function sendEmail($uid, $email)
{
  $mail = new PHPMailer(true);
  
  //Server settings
  //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
  $mail->isSMTP();                                            //Send using SMTP
  $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
  $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
  $mail->Username   = 'a175139@siswa.ukm.edu.my';                     //SMTP username
  $mail->Password   = 'ukmseisa175139';                               //SMTP password
  $mail->SMTPSecure = "ssl";            //Enable implicit TLS encryption
  $mail->Port       = 465;

  //Recipients
  $mail->setFrom('a175139@siswa.ukm.edu.my', 'PPSWE Mobile Application');
  $mail->addAddress($email);     //Add a recipient

  //Attachments
  //  $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
  //  $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

  //Content
  $mail->isHTML(true);                                  //Set email format to HTML
  $mail->Subject = 'CHANGE CAREGIVER REQUEST';
  $mail->Body    = 'Click the link below to get an access from <b>patient data:</b>
  <br /><br /><a href="http://192.168.43.128/api_ppswe/verified_account.php?uid='.$uid.'&email='.$email.'">Verify here!</a>';

  $mail->send();
}

?>