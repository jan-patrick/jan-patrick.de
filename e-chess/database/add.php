<?php	
	// Include the MySQL-Connector
	include("../connect.php");
   	
	// Connect to the local MySQL-Database
	$link=Connection();

	// Read the HTTP-Request / HTTP-Post
	// JSON-String has to decode into a JSON-Object / variable
	$data = json_decode(file_get_contents('php://input'), true);

	// String for the MySQL-Query: Here we insert the values of the JSON-Variable
	$query = "INSERT INTO `test` (`player`, `turn`) 
		VALUES ('" . $data['sensor'] . "', '" . $data['value'] . "')"; 

   	// Execute the MySQL-Query: Insert the values into the table "test"
	mysqli_query($link,$query);

	// Close the DB-Connection
	mysqli_close($link);

?>
