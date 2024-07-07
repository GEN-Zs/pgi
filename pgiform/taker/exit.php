<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Verdana&display=swap">
    <link rel="stylesheet" href="styles.css">
    <script src="https://kit.fontawesome.com/27336307f5.js" crossorigin="anonymous"></script>
<style>
    .blur-background {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-image: url('background-image.jpg'); /* Add your background image URL */
  background-size: cover;
  background-color: black;
  backdrop-filter: blur(10px); /* Adjust blur strength as needed */
  display: flex;
  justify-content: center;
  align-items: center;
  text-align: center;
}

.animated-text {
  font-family: Arial, sans-serif;
  font-size: 24px;
  color: white;
  animation: fadeInOut 2s linear infinite alternate; /* Adjust animation duration as needed */
}

@keyframes fadeInOut {
  0% { opacity: 0; }
  100% { opacity: 1; }
}

</style>
</head>
<body>
    <div class="blur-background">
  <div class="animated-text">Thank you for your patience. We will contact you soon.<br>&#x1F64F;Premganga Institute&#x1F64F;</div>
</div>
<script>
        function redirectToFacebook() {
            setTimeout(function() {
                window.location.href = "https://www.facebook.com/pgibharatpur"; // Replace with your Facebook URL
            }, 3000); // 3000 milliseconds = 3 seconds
        }

        window.onload = redirectToFacebook;
    </script>
</body>
</html>

