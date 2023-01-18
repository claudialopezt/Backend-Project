<?php
$servername = "mysql-natalia.alwaysdata.net";
$username = "natalia";
$password = "Holaquetal123";
$dbname = "natalia_cv";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}


$sql = "SELECT nom, cognoms, email, user, psswd, direccio, movil, fecha, pais, estat_civil, carnet FROM usuari";
$result = $conn->query($sql);



/*$sql = "INSERT INTO usuari (nom, cognoms, email, user, password)
VALUES ('nata', 'hidalho', 'nata@example.com', 'nata1', '12345')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

*/

$conn->close();
?>
