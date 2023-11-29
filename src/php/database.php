<?php 
    define($DB_HOST, "sql113.infinityfree.com");
    define($DB_USER, "if0_35369670");
    define($DB_PASS, "slLNfC9tOg");
    define($DB_NAME, "if0_35369670_dishes");
    
    // Connect to new instance of DB
    $conn = new mysqli($DB_HOST, $DB_NAME, $DB_PASS, $DB_NAME);

    //Exit upon connection error
    if ($conn->connect_error) {
        die("Connection Error". $conn->connect_error);
    } 

