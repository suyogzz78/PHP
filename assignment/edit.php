<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head><title>Edit Student</title></head>
<body>
    <h2>Edit Student</h2>
    <?php
    $id = $_GET['id'];
    $result = mysqli_query($conn, "SELECT * FROM students WHERE id=$id");
    $row = mysqli_fetch_assoc($result);
    ?>

    <form method="POST">
        Name: <input type="text" name="name" value="<?= $row['name'] ?>"><br><br>
        Email: <input type="email" name="email" value="<?= $row['email'] ?>"><br><br>
        Course: <input type="text" name="course" value="<?= $row['course'] ?>"><br><br>
        <input type="submit" name="update" value="Update">
    </form>

    <?php
    if (isset($_POST['update'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $course = $_POST['course'];

        $query = "UPDATE students SET name='$name', email='$email', course='$course' WHERE id=$id";
        if (mysqli_query($conn, $query)) {
            echo "Student updated!";
            header("Location: index.php");
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    }
    ?>
</body>
</html>

