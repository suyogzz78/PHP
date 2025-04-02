<!DOCTYPE html>
<html lang="en">
<head>
    <title>Update Student</title>
</head>
<?php include 'database.php'; ?>
<?php
    $id = $_GET['id'];
    $sql = "SELECT * FROM student_tbl WHERE id=$id";
    $result = $conn->query($sql);
?>

<body>
    <?php include 'menu.html'; ?>
    <?php if ($result->num_rows > 0) {
        $row = $result->fetch_assoc(); // Fetch the single row data
    ?>
    <h2>Update Student</h2>
    <form action="ModifyStudent.php" method="post" onsubmit="return checkPass()">
        <table>
            <tr>
                <td>Name</td>
                <td><input type="text" name="stname" value="<?php echo $row['name']; ?>" required></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="email" name="stemail" value="<?php echo $row['email']; ?>" required></td>
            </tr>
            <tr>
                <td>Address</td>
                <td><input type="text" name="staddress" value="<?php echo $row['address']; ?>"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="stpass" id="passid" required></td>
            </tr>
            <tr>
                <td>Confirm Password</td>
                <td>
                    <input type="password" name="stconpass" id="compassid" onkeyup="checkPass()" required>
                    <span id="errpassid" style="color:red;"></span>
                </td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Update" name="submitbtn"></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value="<?php echo $row['id']; ?>"></td>
            </tr>
        </table>
    </form>
    <?php
    } else {
        echo "No student found with the given ID.";
    }
    ?>

    <script>
        function checkPass() {
            var pass = document.getElementById("passid").value;
            var confirmPass = document.getElementById("compassid").value;
            var errorMsg = document.getElementById("errpassid");

            if (pass !== confirmPass) {
                errorMsg.innerHTML = "Passwords do not match";
                return false;
            } else {
                errorMsg.innerHTML = "";
                return true;
            }
        }
    </script>
</body>
</html>