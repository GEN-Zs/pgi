<?php
// Retrieve POST data
$postData = json_decode(file_get_contents('php://input'), true);

if (isset($postData['action'])) {
    $action = $postData['action'];
    $district = isset($postData['district']) ? $postData['district'] : '';
    $country = isset($postData['country']) ? $postData['country'] : '';

    // Example: Sending email (you should implement your email sending logic here)
    $to = 'thapasamratnep@gmail.com';
    $subject = 'Action: ' . $action;
    $message = 'Action: ' . $action . "\n";
    $message .= 'District: ' . $district . "\n";
    $message .= 'Country: ' . $country . "\n";

    // Example: Using mail() function to send email
    $headers = 'From: info@pgibharatpur.com' . "\r\n" .
        'Reply-To: info@pgibharatpur.com' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

    if (mail($to, $subject, $message, $headers)) {
        http_response_code(200);
        echo json_encode(array('message' => 'Email sent successfully.'));
    } else {
        http_response_code(500);
        echo json_encode(array('message' => 'Failed to send email.'));
    }
} else {
    http_response_code(400);
    echo json_encode(array('message' => 'Invalid request.'));
}
?>
