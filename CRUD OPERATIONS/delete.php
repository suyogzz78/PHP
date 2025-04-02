<?php include 'database.php'; ?>

<body>
    <?php include 'menu.html'; ?>   
    <?php
    $id = $_GET['id'];
    $sql = "DELETE FROM student_tbl WHERE id = $id";
    $result = $conn->query($sql);
    echo "Student of is {$id} deleted successfully";
   
    ?>  
</body>