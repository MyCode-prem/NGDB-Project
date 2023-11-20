<?php

    $con = new mysqli('localhost', 'root', '', 'student1');
    if(!$con){
        die(mysqli_error($con));
    }
?>
