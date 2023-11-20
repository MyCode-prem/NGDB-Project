<?php
    include "connect.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Details</title>
    <link rel="stylesheet" 
    href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <button class="btn btn-primary my-5">
            <a href="connect1.php" class="text-light">+ Register</a>
        </button>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Roll No.</th>
                    <th scope="col">Sports</th>
                    <th scope="col">Contact</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $sql = "SELECT * FROM Students1";
                    $result = mysqli_query($con, $sql);
                    if($result){
                        while($row = mysqli_fetch_assoc($result)){
                            $name = $row['Namw'];
                            $rollno = $row['ROLLNO'];
                            $sports = $row['Sports'];
                            $contact = $row['contact'];
                            echo "<tr>
                                    <th scope='row'>".$regid."</th>
                                    <td>".$name."</td>
                                    <td>".$rollno."</td>
                                    <td>".$sports."</td>
                                    <td>".$contact."</td>
                                </tr>";
                        }
                    }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>