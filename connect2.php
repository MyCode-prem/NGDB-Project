<?php
    

    $con = new mysqli('localhost', 'root', '', 'student1');
    if ($con->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Select statement to fetch data from a table
    $sql = "SELECT sports FROM student2";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Output data from each row
        while ($row = $result->fetch_assoc()) {
            echo "<p>" . $row["sports"] . " - " . $row["phno"] .$row["name"] "</p>";
        }
    } else {
        echo "0 results";
    }

    // Close the database connection
    $conn->close();
?>