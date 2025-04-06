<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head><title>Add Student</title></head>
<body>
    <h2>Add Student</h2>
    <form method="POST">
        Name: <input type="text" name="name"><br><br>
        Email: <input type="email" name="email"><br><br>
        Course: <input type="text" name="course"><br><br>
        <input type="submit" name="submit" value="Add">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $course = $_POST['course'];

        $query = "INSERT INTO students (name, email, course) VALUES ('$name', '$email', '$course')";
        if (mysqli_query($conn, $query)) {
            echo "Student added successfully!";
            header("Location: index.php");
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    }
    ?>
</body>
</html>
