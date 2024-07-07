<?php
// Database credentials
$servername = "localhost:3306";
$username = "pgibhara_pgibharatpur";
$password = "NurseNCLEX24@2081";
$dbname = "pgibhara_authorizeduser";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connected successfully<br>";
}

// Check if URL contains 'user' parameter
if(isset($_GET['user'])) {
    $user = $_GET['user'];
    echo "User: " . $user . "<br>";

    // Query the database for username and profile picture
    $sql = "SELECT Name, ProfilePictures FROM listinguser WHERE Name = '$user'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Output data of each row
        while($row = $result->fetch_assoc()) {
            echo "Name found in database: " . $row["Name"] . "<br>";
            
            // Check if profile picture is available
            if(!empty($row["ProfilePictures"])) {
                echo "Profile Picture available<br>";
                // Redirect user after 5 seconds
                echo "<div id='countdown'>Redirecting in 5 seconds...</div>";
                echo "<script>
                        var count = 5;
                        var countdown = document.getElementById('countdown');
                        var redirectInterval = setInterval(function() {
                            countdown.innerHTML = 'Redirecting in ' + count + ' seconds...';
                            count--;
                            if(count === 0) {
                                clearInterval(redirectInterval);
                                window.location.href = 'loggedpage.php?user=$user';
                            }
                        }, 1000);
                      </script>";
            } else {
                echo "No image available<br>";
                // Display upload form
                echo '<form action="" method="post" enctype="multipart/form-data">';
                echo '<input type="file" name="fileToUpload" id="fileToUpload">';
                echo '<input type="submit" value="Upload Image" name="submit">';
                echo '</form>';
                
                // Handle image upload
                if(isset($_POST["submit"])) {
                    $target_dir = "profile/img/";
                    $new_filename = $row["Name"] . ".jpg"; // New filename based on username
                    $target_file = $target_dir . $new_filename;
                    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded to profile/img.<br>";
                        // Update ProfilePictures column in the database
                        $update_sql = "UPDATE listinguser SET ProfilePictures = '$new_filename' WHERE Name = '$user'";
                        if ($conn->query($update_sql) === TRUE) {
                            echo "Profile picture updated in the database.<br>";
                        } else {
                            echo "Error updating record: " . $conn->error . "<br>";
                        }
                        // Also upload to inner-page/logged/Notes/profile/img
                        $inner_dir = "inner-page/logged/Notes/profile/img/";
                        $inner_target_file = $inner_dir . $new_filename;
                        if (copy($target_file, $inner_target_file)) {
                            echo "The file has been uploaded to inner-page/logged/Notes/profile/img.<br>";
                        } else {
                            echo "Failed to copy to inner-page/logged/Notes/profile/img.<br>";
                        }
                        echo "New image name: $new_filename<br>";
                        // Redirect user after 5 seconds
                        echo "<div id='countdown'>Redirecting in 5 seconds...</div>";
                        echo "<script>
                                var count = 5;
                                var countdown = document.getElementById('countdown');
                                var redirectInterval = setInterval(function() {
                                    countdown.innerHTML = 'Redirecting in ' + count + ' seconds...';
                                    count--;
                                    if(count === 0) {
                                        clearInterval(redirectInterval);
                                        window.location.href = 'loggedpage.php?user=$user';
                                    }
                                }, 1000);
                              </script>";
                    } else {
                        echo "Sorry, there was an error uploading your file.";
                    }
                }
            }
        }
    } else {
        echo "Name not found in database";
    }
}

// Close connection
$conn->close();
?>
