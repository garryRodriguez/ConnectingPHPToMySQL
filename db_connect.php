<?php
    //Step 1. connect to MySQL database
    
    $username = 'root'; //variable for the username
    $pass = ''; //variable for the password
    $databaseName = 'kredo_test_db';

    $conn = new mysqli('localhost', $username, $pass, $databaseName);
    
    if ($conn -> connect_error) die($conn->connect_error);
?>