<?php include 'database.php'; ?>

<body>
    <?php include 'menu.html'; ?>   
    <?php
    $id = $_GET['id'];
    $sql = "SELECT name, address FROM student_tbl WHERE id = $id";
    $result = $conn->query($sql);
    if($result->num_rows > 0) {
        echo "<h2>My information is :</h2>";
        echo"<ol>";
      while ($row = $result->fetch_assoc()) { // Fetch the row data into an associative array){
        echo "<li><b>Name:</b> " . $row['name'] .  "</li>";
        echo "<li><b>Address:</b> " . $row['address'] . "</li>";
      }
      echo "</ol>";
    } else {
        echo "<h2>No data found</h2>";
    }
    ?>  
</body>