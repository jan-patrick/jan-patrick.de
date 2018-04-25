<?php
require_once "../data.php";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = 'SELECT * 
		FROM test ';
		
$query = mysqli_query($conn, $sql);
if (!$query) {
	die ('SQL Error: ' . mysqli_error($conn));
}
?>

<html>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>DATABASE - Jan Schneider</title>
<link rel="shortcut icon" href="../../img/logo.png">
<link rel="icon" type="imgage/png" href="../../img/logo.svg">
<link rel="image_src" href="../../img/logo.svg" />
<link rel="apple-touch-icon" href="../../img/logo.png" />
<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700" rel="stylesheet">
<meta name="description" content="The CV of Jan Schneider, currently IoT student at HfG Schwäbisch Gmünd"> 
<meta name="keywords" content="Jan Schneider, HfG, IoT, Internet der Dinge, Student, Hochschule für Gestaltung, Schwäbisch Gmünd, Gmünd, Internet of Things, Bachelor of Arts, Kikife, Kulturbüro, FSJ, Jan-Patrick, Jan, Schneider">
<link href="styledatabase.css" rel="stylesheet">
<head>
</head>
<body>
<p><a href="https://www.jan-patrick.de/chess">to CHESS page</a></p>
<h1>test database</h1>
	<table class="data-table">
		<caption class="title">inserted by ESP32</caption>
		<thead>
			<tr>
				<th>NO</th>
				<th>id</th>
				<th>player</th>
				<th>turn</th>
				<th>insert date</th>
			</tr>
		</thead>
		<tbody>
		<?php
		$no 	= 1;
		$total 	= 20;
		while ($row = mysqli_fetch_array($query) )
		{
			$amount  = $row['amount'] == 0 ? '' : number_format($row['amount']);
			echo '<tr>
					<td>'.$no.'</td>
					<td>'.$row['id'].'</td>
					<td>'.$row['player'].'</td>
					<td>'.$row['turn'].'</td>
					<td>'.$row['insertdate'].'</td>
				</tr>';
			$no++;
		}?>
		</tbody>
	</table>
    </body>
</html>