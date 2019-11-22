<?php //converrebbe trasformarlo in una classe in modo da non farlo vedere agli altri
$servername = "localhost";
$username = "psicorientamento";
$password ='' ;
$dbname = "my_psicorientamento";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connessione fallita: " . $conn->connect_error);
}
echo "Connected successfully";
?>
