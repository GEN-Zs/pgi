<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form fields and remove whitespace
    $name = strip_tags(trim($_POST["name"]));
    $name = str_replace(array("\r","\n"),array(" "," "),$name);
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $subject = trim($_POST["subject"]);
    $message = trim($_POST["message"]);

    // Check if all fields are filled
    if (empty($name) || empty($email) || empty($subject) || empty($message)) {
        http_response_code(400);
        echo "Please fill out all fields.";
        exit;
    }

    // Set the recipient email address
    $to = "pgibharatpur2@gmail.com"; // Change this to your own email address

    // Set the email subject
    $email_subject = "New contact form submission: $subject";

    // Build the email content
    $email_content = "Name: $name\n";
    $email_content .= "Email: $email\n\n";
    $email_content .= "Message:\n$message\n";

    // Build the email headers
    $email_headers = "From: $name <$email>";

    // Send the email
    if (mail($to, $email_subject, $email_content, $email_headers)) {
        http_response_code(200);
        echo "<script>
                document.addEventListener('DOMContentLoaded', function() {
                   document.body.style.backgroundColor = 'lightgreen';
                    alert('Your message has been sent successfully!');
                 
                    window.location.href = 'https://pgibharatpur.com';
                });
             </script>";
    } else {
        http_response_code(500);
        echo "Oops! Something went wrong and we couldn't send your message.";
    }

} else {
    // If it's not a POST request, display an error message
    http_response_code(403);
    echo "There was a problem with your submission, please try again.";
}
?>
