<?php include 'database.php'; ?>
<?php
$sql = "SELECT * FROM student_tbl";
$result = $conn->query($sql);
?>

<?php
if ($result->num_rows > 0) {
    $i = 0; // Initialize $i
    ?>
    <table border=1px>
    <th>Sno.</th>
    <th>Name</th>
    <th>Address</th>
    <th>Email</th>
  
    <?php
    while ($row = $result->fetch_assoc()) { // Table data are fetched into an associative array, and $row contains single row data
        $i++;
    ?>   
    <tr>
        <td><?php echo $i; ?></td>
        <td><?php echo $row['name']; ?></td> <!-- Ensure column names match your database -->
        <td><?php echo $row['address']; ?></td>
        <td><?php echo $row['email']; ?></td>
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