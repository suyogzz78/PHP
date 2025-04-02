<?php include 'database.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Modify Student</title>
</head>
<body>
    <?php include 'menu.html'; ?>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Check if data is received
        if (empty($_POST["id"]) || empty($_POST["stname"]) || empty($_POST["stemail"]) || empty($_POST["stpass"])) {
            die("All required fields must be filled.");
        }

        $id = intval($_POST["id"]); // Ensure $id is an integer
        $name = $_POST["stname"];
        $email = $_POST["stemail"];
        $address = $_POST["staddress"];
        $pass = $_POST["stpass"];
        $conpass = $_POST["stconpass"];

        // Check if passwords match
        if ($pass !== $conpass) {
            die("Passwords do not match.");
        }

        // Hash the password
        $hashedPass = password_hash($pass, PASSWORD_DEFAULT);

        // Use prepared statements to update data
        $sql = "UPDATE student_tbl SET name = ?, email = ?, address = ?, password = ? WHERE id = ?";
        $stmt = $conn->prepare($sql);
        
        if ($stmt) {
            $stmt->bind_param("ssssi", $name, $email, $address, $hashedPass, $id);
            if ($stmt->execute()) {
                echo "Data updated successfully.";
            } else {
                echo "Error updating data: " . $stmt->error;
            }
            $stmt->close();
        } else {
            echo "Error preparing statement: " . $conn->error;
        }

        $conn->close();
    } else {
        echo "No data submitted.";
    }
    ?>
</body>
</html>