<?php
    define('DB_HOST',"localhost");
    define('DB_USER',"feedbackPhp");
    define('DB_PASSWD',"passwd");
    define('DB_NAME',"feedback_form");

    $conn = new mysqli(DB_HOST,DB_USER,DB_PASSWD,DB_NAME);

    if($conn->connect_error) {
        die('Connection Failed' . $conn->connect_error);
    }