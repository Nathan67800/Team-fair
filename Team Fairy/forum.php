<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $postContent = $_POST["postContent"];

    // Basic validation
    if (empty($username) || empty($postContent)) {
        echo "Please fill in all fields";
    } else {
        // Save post to the database (not implemented in this example)
        // You would typically use a database like MySQL to store posts and users

        // Respond with a success message
        echo "Post submitted successfully";
    }
} else {
    // Handle invalid request method
    echo "Invalid request method";
}
?>