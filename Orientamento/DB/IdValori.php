<?php
// mi connetto
require 'DB/configDB.php';
$id=$_SESSION['id'];

/*inserisco i punteggi nella tab competenze del data base*/
$sql = "INSERT INTO valori (Id)
        VALUES ( '$id')";

if ($conn->query($sql) === TRUE) {
    global $stato;
    $stato= " | Id caricato| ";
    return $stato ;
} else {
    global $stato;
    $stato="Error: " . $sql . "<br>" . $conn->error;
    return $stato;
}
$conn->close();
?>