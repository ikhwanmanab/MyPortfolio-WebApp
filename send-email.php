<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $message = htmlspecialchars(trim($_POST['message']));

    $to = "ikhwan@picorp.com.my";
    $subject = "New Contact Message from $name";
    $body = "Name: $name\nEmail: $email\n\nMessage:\n$message";

    $headers = "From: $email\r\nReply-To: $email\r\n";

    if (mail($to, $subject, $body, $headers)) {
        echo "Thank you for contacting me! I will get back to you soon.";
    } else {
        echo "Sorry, something went wrong. Please try again.";
    }
} else {
    echo "Invalid request method.";
}
?>
