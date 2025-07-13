<?php
function send_mail($email,$message,$subject)
{
  require_once('class.phpmailer.php');
  $mail = new PHPMailer();
    $mail->IsSMTP();
    $mail->SMTPDebug  = 0;
    $mail->SMTPAuth   = true;
    $mail->SMTPSecure = "tls";
    $mail->Host       = "smtp.live.com";
    $mail->Port       = 587;
    $mail->AddAddress($email);
    $mail->Username="ademkx@hotmail.com";
    $mail->Password="Science1";
    $mail->SetFrom('ademkx@hotmail.com','JRRS (LASU)');
    $mail->AddReplyTo("ademkx@hotmail.com","JRRS (LASU)");
    $mail->Subject    = $subject;
    $mail->MsgHTML($message);
    $mail->Send();
}
?>
