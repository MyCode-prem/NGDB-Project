<?php
    
        $name = $_POST['name'];
        $rollno = $_POST['rollno'];
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Get the selected value from the dropdown
            $selectedOption = $_POST["dropdown"];
            echo "Selected Option :".$selectedOption;
        }
        $contact = $_POST['contact'];
        
        $sql = "insert into `student1` values('$name', '$rollno', '$selectedOption', '$contact')";
        $con = new mysqli('localhost', 'root', '', 'student1');
        $result = mysqli_query($con, $sql);
        if(!$con){
        die(mysqli_error($con));
        }
        else if($result){
            echo "Student registration completed ✅";
        } else {
            die(mysqli_error($con));
        }
    
?>
