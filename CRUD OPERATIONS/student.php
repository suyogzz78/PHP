<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration</title>
</head>
<body>
    <?php include 'menu.html'; ?>
    <h2>Student Registration</h2>
    <form action="FormHandling.php" method="post" onsubmit="return checkPass()">
        <table>
            <tr>
                <td>Name</td>
                <td><input type="text" name="stname" required></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="email" name="stemail" required></td>
            </tr>
            <tr>
                <td>Address</td>
                <td><input type="text" name="staddress"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="stpass" id="passid" required></td>
            </tr>
            <tr>
                <td>Confirm Password</td>
                <td>
                    <input type="password" name="stconpass" id="compassid" required onkeyup="checkPass()">
                    <span id="errpassid" style="color:red;"></span>
                </td>
            </tr>
            <tr>
                <td>Insert</td>
                <td><input type="submit" value="Save" name="submitbtn"></td>
            </tr>
        </table>
    </form>

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
