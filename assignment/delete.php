<?php
include 'db.php';

// Check if 'id' is set in the URL
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = intval($_GET['id']); // Sanitize the 'id' to ensure it's an integer

    // Prepare the DELETE query
    $query = "DELETE FROM students WHERE id=$id";
    if (mysqli_query($conn, $query)) {
        header("Location: index.php"); // Redirect to the index page after deletion
        exit();
    } else {
        echo "Error: " . mysqli_error($conn);
    }
} else {
    echo "Invalid or missing ID.";
}

$conn->close();
?>