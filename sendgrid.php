<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

$v_smtp = 'smtp.sendgrid.net';
$v_port = 587;
$v_SMTPSecure = "TLS";
$v_username = 'apikey';
$v_password = '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';

$v_sender_name = 'C_NAME';
$v_sender_authentication = 'pioffice@bhhk.com.vn';

$v_nguoi_nhan = 'lvoddat95@gmail.com';




//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);
// // $sendgrid = new \SendGrid\Mail\Mail();
// $email = new \SendGrid\Mail\Mail();
// $sg  = new \SendGrid($v_password);

// var_dump($sg->client);
// die;



try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      	//Enable verbose debug output
    $mail->isSMTP();                                            	//Send using SMTP
    $mail->Host       = $v_smtp;                     				//Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   	//Enable SMTP authentication
    $mail->Username   = $v_username;                     			//SMTP username
    $mail->Password   = $v_password;                               	//SMTP password
    $mail->SMTPSecure = $v_SMTPSecure;            					//Enable implicit TLS encryption
    $mail->Port       = $v_port;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
	$mail->From = $v_sender_authentication;
    $mail->FromName = $v_sender_name;
    // $mail->addAddress('datlv@bhhk.vn', 'bhhk');     		//Người nhận custom tên
    $mail->addAddress($v_nguoi_nhan);               		//Người nhận theo tên
    // $mail->addReplyTo('lvoddat95@gmail.com', 'gmail');		//Mail trả lời
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    // $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Here is the subject '.time();
    $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}