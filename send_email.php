<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to_email = "abelbocboc12345@gmail.com"; // Replace with your email address
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $from_email = $_POST['email'];

    // Create email headers
    $headers = "From: $from_email\r\n" .
               "Reply-To: $from_email\r\n" .
               "X-Mailer: PHP/" . phpversion();

    // Sending email
    if (mail($to_email, $subject, $message, $headers)) {
        echo "Email sent successfully.";
    } else {
        echo "Email sending failed.";
    }
} else {
    echo "Error: Invalid request.";
}
?>
