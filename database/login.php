

<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Collect form data
    $username = $_POST["name"];
    $email = $_POST["email"];
    $age = $_POST["phone"];
    $Appointment = $_POST["phone"];

    // Validate and sanitize input (you should customize this based on your needs)
    $username = htmlspecialchars(strip_tags($username));
    $email = filter_var($email, FILTER_VALIDATE_EMAIL);
    $age = filter_var($age, FILTER_VALIDATE_INT);

    // Check if validation passed
    if ($username && $email && $age !== false) {
        // Database connection parameters (replace with your database credentials)
        $host = "your_host";
        $username_db = "your_username";
        $password_db = "your_password";
        $database = "your_database";

        // Create a database connection
        $conn = new mysqli($host, $username_db, $password_db, $database);

        // Check the connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Insert data into the database (replace 'your_table' with your actual table name)
        $sql = "INSERT INTO your_table (username, email, age) VALUES ('$username', '$email', $age)";

        if ($conn->query($sql) === TRUE) {
            echo "Record added successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        // Close the database connection
        $conn->close();
    } else {
        echo "Invalid input data";
    }
}
?>
