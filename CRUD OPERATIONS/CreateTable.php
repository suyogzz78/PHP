<?php include 'Database.php'; ?>

<?php
$sql = "CREATE TABLE student_tbl (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(200),
    address VARCHAR(50),
    email VARCHAR(100),
    contact VARCHAR(50),
    password VARCHAR(50)
);";

if ($conn->query($sql) === TRUE) {
    echo "Table 'student_tbl' created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>
