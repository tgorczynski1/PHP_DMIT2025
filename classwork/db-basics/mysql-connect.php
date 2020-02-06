<?php
    $con    =  mysqli_connect(
        "localhost",
        "USERNAME", //database user
        "PASSWORD", //database password
        "DBNAME" // username or database name
    );
    //check connection
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
      }

?>