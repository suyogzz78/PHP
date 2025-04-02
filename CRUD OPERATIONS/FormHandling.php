<?php include 'database.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Form Handling</title>
</head>
<body>
    <?php include 'menu.html'; ?>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Check if data is received
        if (empty($_POST["stname"]) || empty($_POST["stemail"]) || empty($_POST["stpass"])) {
            die("All required fields must be filled.");
        }

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

        // Use prepared statements to insert data
        $sql = "INSERT INTO student_tbl (name, email, address, password) VALUES (?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        
        if ($stmt) {
            $stmt->bind_param("ssss", $name, $email, $address, $hashedPass);
            if ($stmt->execute()) {
                echo "Data inserted successfully.";
            } else {
                echo "Error inserting data: " . $stmt->error;
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