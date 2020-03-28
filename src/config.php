<?php
    session_set_cookie_params(0);
    session_start();
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbName = "green_landscaping";

    $conn = mysqli_connect($servername, $username, $password, $dbName);

    if (!$conn)
    {
        die("Connection failed: " . mysqli_connect_error());
    }
