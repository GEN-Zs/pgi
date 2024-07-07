<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Verdana&display=swap">
    <link rel="stylesheet" href="styles.css">
    <script src="https://kit.fontawesome.com/27336307f5.js" crossorigin="anonymous"></script>

</head>
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

<body>
    <div class="blur-background">
  <div class="animated-text"><h1>Welcome To Premganga Institute</h1>
  <h5>Please fill the form with valid details&#x1F64F;</h5>
<p>click the button to continue</p>
<a href="../../premgangaforms/index/index.php" class="btn"><button class="styled-button" >continue</button></a>
</div>
</div>
</body>
</html>
