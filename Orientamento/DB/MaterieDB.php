<?php
require 'configDB.php';
$id=$_SESSION['id'];
$materia1=$_SESSION['materie'][0];
$materia2=$_SESSION['materie'][1];
$sql = "INSERT INTO materie (Id,$materia1,$materia2)
        VALUES ( '$id','1', '2')";

if ($conn->query($sql) === TRUE) {
    $stato= " | Materie Caricate nel DB | ";
    return $stato ;
} else {
    $stato="Error: " . $sql . "<br>" . $conn->error;
    return $stato;
}



//$stmt->close();
$conn->close();
?>