<?php
	// Function to connect to the database
	function Connection(){
		$server="localhost";
		$user="103551m79436_1";
		$pass="677TDy9kbxJnWwitftghMAcytaeuqS5sKt4253p82q6tA8q5q6";
		$db="103551m79436_1";
	   	
	   	// Connect to the database
		$connection = mysqli_connect($server, $user, $pass, $db);

		// If there is a problem you will get an error
		if (!$connection) {
	    	die('MySQL ERROR: ' . mysqli_error());
		}

		// Select the database
		mysqli_select_db($connection, $db) or die( 'MySQL ERROR: '. mysqli_error() );
		
		// Return of the DB-Connection-Object
		return $connection;
	}
?>
