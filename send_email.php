<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);
    
    // Recipient email
    $to = "devpan3134@gmail.com"; // Change this to your email address
    $subject = "New Contact Form Submission from $name";
    
    // Email body
    $body = "Name: $name\n";
    $body .= "Email: $email\n\n";
    $body .= "Message:\n$message\n";
    
    // Email headers
    $headers = "From: $name <$email>";
    
    // Send email
    if (mail($to, $subject, $body, $headers)) {
        // If email is sent successfully
        echo "success";
    } else {
        // If email fails to send
        echo "error";
    }
} else {
    // Redirect back if not a POST request
    header("Location: index1.html"); // Change to your homepage or error page
    exit;
}
?>
