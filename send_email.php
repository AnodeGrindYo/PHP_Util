<?php
function send_email($to, $subject, $message, $from)
{
	// Pour envoyer un mail HTML, l'en-tête Content-type doit être défini
	$headers  = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset="utf-8"'. " ";
	$headers .= 'Content-Transfer-Encoding: 8bit\r\n';

     // En-têtes additionnels
	$headers .= 'To: <'.$to.'>';
	$headers .= 'From: apformation <'.$from.'>' . "\r\n";
	/*$headers .= 'Cc: machin@example.com' . "\r\n";
	$headers .= 'Bcc: bidule@example.com' . "\r\n";*/
	// Envoi
    mail($to, $subject, $message, $headers);
}