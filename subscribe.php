<?php
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["email"])) {
    $to = "your@email.com"; // ضع هنا بريدك الإلكتروني الذي تريد استقبال الرسائل عليه
    $subject = "New Subscription";
    $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
    $message = "New subscriber: " . $email;
    $headers = "From: noreply@yourdomain.com\r\n";

    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        if (mail($to, $subject, $message, $headers)) {
            echo "<p style='color:green;'>Thank you for subscribing!</p>";
        } else {
            echo "<p style='color:red;'>Failed to send. Please try again later.</p>";
        }
    } else {
        echo "<p style='color:red;'>Invalid email address.</p>";
    }
} else {
    header("Location: index.html");
    exit();
}
?>
