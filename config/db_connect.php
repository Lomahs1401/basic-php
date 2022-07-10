<?php

    $servername = "localhost";
    $username = "shaun";
    $password = "123456";
    $databaseName = "ninja_pizza";

    // Example MySQLi Object-oriented

    // // Create connection
    // $connection = new mysqli($servername, $username, $password, $databaseName);
    // // Check connection
    // if ($connection->connect_error) {
    //     echo 'Connection failed: ' . $connection->connect_error;
    // }

    // Example MySQLi Procedural
    // Create connection
	$conn = mysqli_connect($servername, $username, $password, $databaseName);
	// check connection
	if (!$conn) {
		echo 'Connection error: ' . mysqli_connect_error();
	}

    // Example PDO
    // try {
    //     $conn = new PDO("mysql:host=$servername", $username, $password);
    //     // set the PDO error mode to exception
    //     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // }

?>