<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $date = $_POST["date"];
    $time = $_POST["time"];
    $email = $_POST["email"];

    $to = "your_email@example.com";
    $subject = "New contact form submission";
    $message = "Name: " . $name . "\n" .
               "Date: " . $date . "\n" .
               "Time: " . $time . "\n" .
               "Email: " . $email;

    // Use the built-in PHP function to send the email
    mail($to, $subject, $message);
}
?>