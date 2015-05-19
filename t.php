<?php

ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(-1);

require_once "Mail.php";
 
$from = "pingWHEN Web Query <system@pingwhenapp.com>";
$to = "pingWHEN <info@pingwhenapp.com>";
$subject = "Test email using PHP SMTP with SSL\r\n\r\n";
$body = "This is a test email message";
 
$host = "ssl://smtp.gmail.com";
$port = "465";
$username = "system@pingwhenapp.com";
$password = "IzF;YfC&QMjq3sG";

echo("hello");
 
$headers = array ('From' => $from,
  'To' => $to,
  'Subject' => $subject);
$smtp = Mail::factory('smtp',
  array ('host' => $host,
    'port' => $port,
    'auth' => true,
    'username' => $username,
    'password' => $password));

echo "hello2";
 
$mail = $smtp->send($to, $headers, $body);
 
echo "hello3";

if (PEAR::isError($mail)) {
  echo("<p>" . $mail->getMessage() . "</p>");
} else {
  echo("<p>Message successfully sent!</p>");
}
?>
