<?php
/*
* This is our login.php file that contains
* important details necessary to connect to
* our MySQL database
*/

    //Step 1. connect to MySQL database
    $hostName = 'localhost'; //create a variable name for the web server
    $databaseName = 'kredoit_db'; //variable for the database name
    $username = 'root'; //variable for the username
    $password = ''; //variable for the password

    $conn = new mysqli($hostName, $databaseName, $username, $password);
    
    if ($conn -> connect_error) die($conn->connect_error);
    
    //step 2. Build and execute/perform the query string

    $query = "SELECT * FROM kredousers";
    $result = $conn->query($query);
    if(!$result) die($conn-error);

    //step 3. Fetch the result from the database
    $rows = $result->num_rows;
    for($i = 0; $i < $rows; ++$i){
        $result->data_seek($j);
        echo 'First Name: '. $result->fetch_assoc()['firstName'] . $result-fetch_assoc()['lastName'].'<br>';
        $result->data_seek($j);
        echo 'Mobile No: ' . $result-fetch_assoc()['mobileNo'] . '<br>';
        $result->data_seek($j);
        echo 'Email: ' . $result-fetch_assoc()['userEmail'] . '<br>';
        $result->data_seek($j);
        echo 'Country: ' . $result-fect_assoc()['Country'] . '<br>';
    }

    //step 4. Disconnect from MySQL
    $result->close();
    $conn->close();

?>