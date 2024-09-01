<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $to = "sbusiso.ndlovuu101@gmail.com"; // Replace with your email address
    $subject = "New Message from Contact Form";
    $message = "Name: $name\nEmail: $email\nSubject: $subject\n\n$message";

    $headers = "From: $email";

    if (mail($to, $subject, $message, $headers)) {
        echo "OK";
    } else {
        http_response_code(500);
        echo "Something went wrong. Please try again.";
    }
} else {
    http_response_code(403);
    echo "Access denied.";
}
?>