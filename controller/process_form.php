<?php
require('Database.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Form submitted, process data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Validate form data
    // Perform additional validation as needed

    // Process form data (e.g., send email)
    // Example:
    $to = "example@example.com";
    $subject = "New Contact Form Submission";
    $messageBody = "Name: $name\nEmail: $email\nMessage: $message";
    $headers = "From: $email";

    if (mail($to, $subject, $messageBody, $headers)) {
        echo "Your message has been sent successfully!";
    } else {
        echo "There was an error sending your message. Please try again later.";
    }
}
