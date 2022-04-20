<?php
    require_once 'include/db_connect.php';
/*
* This is our login.php file that contains
* important details necessary to connect to
* our MySQL database
*/

    //step 2. Build the query string
    //Step 3 Execute the query.

    $query = "SELECT * FROM kredousers";
    $result = $conn->query($query);
    if(!$result) die($conn->error);

    echo "<h1>Data From MySQL Database</h1>";

    //step 4. Fetch the result from the database
    $rows = $result->num_rows;
    for($i = 0; $i < $rows; ++$i){
        $result->data_seek($i);
        echo 'First Name: '. $result->fetch_assoc()['firstName'] .'<br>';
        $result->data_seek($i);
        echo 'Last Name: '. $result->fetch_assoc()['lastName'] .'<br>';
        $result->data_seek($i);
        echo 'Mobile No: ' . $result->fetch_assoc()['mobileNo'] . '<br>';
        $result->data_seek($i);
        echo 'Email: ' . $result->fetch_assoc()['userEmail'] . '<br>';
        $result->data_seek($i);
        echo 'Country: ' . $result->fetch_assoc()['country'] . '<br>';
        echo '<br>';
    }

    //Step 5. Close the database connection
    $result->close();
    //step 6. Disconnect from MySQL
    $conn->close();

?>