<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require_once 'phpmailer/Exception.php';
require_once 'phpmailer/PHPMailer.php';
require_once 'phpmailer/SMTP.php';

$mail = new PHPMailer(true);
$mail->CharSet = 'UTF-8';

$alert = '';

if(isset($_POST['submit-en'])){
  $name = $_POST['user_name-eng'];
  $email = $_POST['user_email-eng'];
  $message = $_POST['user_message-eng'];
  
    try{
      $mail->isSMTP();
      $mail->Host = 'smtp.gmail.com';
      $mail->SMTPAuth = true;
      $mail->Username = 'volnaart1@gmail.com'; 
      $mail->Password = 'volnaris1988'; 
      $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
      $mail->Port = '587';
  
      $mail->setFrom('volnaart1@gmail.com'); 
      $mail->addAddress('volnaart1@gmail.com'); 
  
      $mail->isHTML(true);
      $mail->Subject = 'New Message from Volna|Art';
      $mail->Body = "<h3>Name: <i style='font-weight:normal'>$name</i><br>Email: <i style='font-weight:normal'>$email</i><br>Message:<br><i style='font-weight:normal'>$message</i></h3>";
  
      $mail->send();
      $alert = '<div class="alert-success">
                   <div>Message Sent! <br>Thank you for contacting me (:
                      <span class="alert-success__close">&#10005;</span>
                   </div>
                   
                </div>';
    } catch (Exception $e){
      $alert = '<div class="alert-error">
                  <div>'.$e->getMessage().'
                    <span class="alert-error__close">&#10005;</span>
                  </div>
                </div>';
    }
  };

if(isset($_POST['submit-rus'])){
  $nameRus = $_POST['user_name-rus'];
  $emailRus = $_POST['user_email-rus'];
  $messageRus = $_POST['user_message-rus'];
  
    try{
      $mail->isSMTP();
      $mail->Host = 'smtp.gmail.com';
      $mail->SMTPAuth = true;
      $mail->Username = 'volnaart1@gmail.com'; 
      $mail->Password = 'volnaris1988'; 
      $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
      $mail->Port = '587';
  
      $mail->setFrom('volnaart1@gmail.com'); 
      $mail->addAddress('volnaart1@gmail.com'); 
  
      $mail->isHTML(true);
      $mail->Subject = 'Новое сообщение от Волна|Арт';
      $mail->Body = "<h3>Имя: <i style='font-weight:normal'>$nameRus</i><br>Электронная почта: <i style='font-weight:normal'>$emailRus</i><br>Сообщение:<br><i style='font-weight:normal'>$messageRus</i></h3>";
  
      $mail->send();
      $alert = '<div class="alert-success">
                   <div>Сообщение отправлено! <br>Спасибо, что связались со мной (:
                      <span class="alert-success__close">&#10005;</span>
                   </div>
                   
                </div>';
    } catch (Exception $e){
      $alert = '<div class="alert-error">
                  <div>'.$e->getMessage().'
                    <span class="alert-error__close">&#10005;</span>
                  </div>
                </div>';
    }
  }
?>