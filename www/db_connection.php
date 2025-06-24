<?php
    /* Stop password leaks from MYSQL exceptions */
    $driver = new mysqli_driver();
    $driver->report_mode = MYSQLI_REPORT_ERROR;

  	// Connection variables
  	$host='localhost';
  	$username='dujour';
  	$pword='followthewhiterabbit';
  	$database='zion';

    // Create connection
    $mysqli = new mysqli($host, $username, $pword, $database);

    // Check connection
    if ($mysqli->connect_errno) {
    	die('<br>Check connection settings');
    }
?>
