<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>DATABASE - Jan Schneider</title>
<link rel="shortcut icon" href="../img/logo.png">
<link rel="icon" type="imgage/png" href="../img/logo.svg">
<link rel="image_src" href="../img/logo.svg" />
<link rel="apple-touch-icon" href="../img/logo.png" />
<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700" rel="stylesheet">
<meta name="description" content="The CV of Jan Schneider, currently IoT student at HfG Schwäbisch Gmünd"> 
<meta name="keywords" content="Jan Schneider, HfG, IoT, Internet der Dinge, Student, Hochschule für Gestaltung, Schwäbisch Gmünd, Gmünd, Internet of Things, Bachelor of Arts, Kikife, Kulturbüro, FSJ, Jan-Patrick, Jan, Schneider">

<a href="https://www.jan-patrick.de/test">to TEST page</a>
<?php
require_once "data.php";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT osm_id, ort, plz FROM .ort";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br> id: ". $row["osm_id"]. " - Name: ". $row["ort"]. " " . $row["plz"] . "<br>";
    }
} else {
    echo "0 results";
}

$conn->close();
?>