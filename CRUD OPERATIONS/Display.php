<?php include 'database.php'; ?>
<body>
    <?php include 'menu.html'; ?>
<?php
$sql = "SELECT * FROM student_tbl";
$result = $conn->query($sql);
?>

<?php
if ($result->num_rows > 0) {
    $i = 0; // Initialize $i
    ?>
    <table border=1px style="width:100%; border-collapse:collapse; text-align:center;">
    <th>Sno.</th>
    <th>Name</th>
    <th>Address</th>
    <th>Email</th>
    <th colspan="3">Action</th> <!-- Added colspan for Action header -->
  
    <?php
    while ($row = $result->fetch_assoc()) { // Table data are fetched into an associative array, and $row contains single row data
        $i++;
    ?>   
    <tr>
        <td><?php echo $i; ?></td>
        <td><?php echo $row['name']; ?></td> <!-- Ensure column names match your database -->
        <td><?php echo $row['address']; ?></td>
        <td><?php echo $row['email']; ?></td>
        <td>>
            <td>
            <form action = "Edit.php" method = "get">
                <input type = "hidden" name = "id" value = "<?= $row['id']; ?>">
                <input type = "submit" value = "Edit" >
                </form>
            </td>
            <td>
            <form action = "delete.php" method = "get">
                <input type = "hidden" name = "id" value = "<?= $row['id']; ?>">
                <input type = "submit" value = "Delete" >
            </form>
            </td>
            <td>
            <form action = "details.php" method = "get">
                <input type = "hidden" name = "id" value = "<?= $row['id']; ?>">
                <input type = "submit" value = "Details" >
    </form>
    </tr>
    <?php 
    }
    ?>
    </table>
<?php
} else {
    echo "No data found";
}
?>
</body>