<?php include 'database.php'; ?>

<?php
$sql = "INSERT INTO student_tbl VALUES()";
if ($conn->query($sql) === TRUE) {
    echo "Table 'student_tbl' created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>
