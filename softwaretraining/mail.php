<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Replace with your email address
    $to = "futurenowtnj@gmail.com"; 

    // Get form fields
    $name = htmlspecialchars($_POST['name']);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $phone = htmlspecialchars($_POST['phone']);

    // Email subject and message
    $subject = "New Enquiry from Future Now Ahead";
    $message = "You have received a new enquiry:\n\n"
             . "Name: $name\n"
             . "Email: $email\n"
             . "Phone: $phone\n";

    // Headers
    $headers = "From: noreply@futurenowahead.in\r\n";
    $headers .= "Reply-To: $email\r\n";

    // Send email
    if (mail($to, $subject, $message, $headers)) {
        echo "<script>alert('Thank you! Your enquiry has been sent.'); window.history.back();</script>";
    } else {
        echo "<script>alert('Sorry! Something went wrong.'); window.history.back();</script>";
    }
}
?>
