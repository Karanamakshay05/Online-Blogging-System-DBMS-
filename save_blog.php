<?php
// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $blogContent = $_POST["blogContent"];

    // Connect to your database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "blog";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare SQL statement to insert the data into your database
    $stmt = $conn->prepare("INSERT INTO bloged (blog_content) VALUES (?)");
    $stmt->bind_param("s", $blogContent);

    // Execute the statement
    if ($stmt->execute() === TRUE) {
        echo "Blog posted successfully!";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the prepared statement and the database connection
    $stmt->close();
    $conn->close();
}
?>
