<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    // Collect the form data
    $name = htmlspecialchars($_GET['name']);
    $surname = htmlspecialchars($_GET['surname']);
    $email = htmlspecialchars($_GET['email']);
    $subject = htmlspecialchars($_GET['konu']);
    $message = htmlspecialchars($_GET['description']);

    // Set the recipient email address
    $to = "bilgi@cetinlergeridonusum.com";

    // Set the email subject
    $email_subject = "Yeni bilgi formu isteği: $subject";

    // Create the email body
    $email_body = "Name: $name\n";
    $email_body .= "Surname: $surname\n";
    $email_body .= "Email: $email\n";
    $email_body .= "Subject: $subject\n";
    $email_body .= "Message: $message\n";

    // Set the headers
    $headers = "From: $email\n";
    $headers .= "Reply-To: $email\n";

    // Send the email
    if (mail($to, $email_subject, $email_body, $headers)) {
        echo "Email sent successfully!";
    } else {
        echo "Failed to send email.";
    }
}
?>
