<?php
if(isset($_POST['submit'])) {
    // Collect the form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Set the recipient email address
    $to = 'iamayush8840@gmail.com';

    // Set the email subject
    $subject = 'New Message from ' . $name;

    // Set the email body
    $body = "Name: $name\n\nEmail: $email\n\nMessage:\n$message";

    // Set the email headers
    $headers = "From: $name <$email>\r\n";
    $headers .= "Reply-To: $email\r\n";

    // Send the email
    if(mail($to, $subject, $body, $headers)) {
        echo 'Message sent successfully.';
    } else {
        echo 'Error: Unable to send message.';
    }
}
?>
