<?php 
    $conn = new mysqli("localhost", "root", "","places");
    if ($conn -> connect_error) {
       die("Connection Failed!".$conn->connect_error);
    }
?>