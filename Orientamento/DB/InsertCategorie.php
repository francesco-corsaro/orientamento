<?php
require 'configDB.php';
$id=rand(1,999);  //creo un id  e lo rende magico per essere riutilizzato in altre tabelle
$_SESSION['id']=$id;

$Categoria1=$arrh[0];
$Categoria2=$arrh[1];
$Categoria3=$arrh[2];
$Categoria4=$arrh[3];
$PntCat1=$arr1[$Categoria1];
$PntCat2=$arr1[$Categoria2];
$PntCat3=$arr1[$Categoria3];
$PntCat4=$arr1[$Categoria4];

$sql = "INSERT INTO Categorie (Id,$Categoria1,$Categoria2, $Categoria3, $Categoria4)
        VALUES ( '$id','$PntCat1', '$PntCat2', '$PntCat3','$PntCat4')";

if ($conn->query($sql) === TRUE) {
    $ok= " |Categorie Caricate nel DB | ";
    return $ok;
} else {
    $er="Error: " . $sql . "<br>" . $conn->error;
    return $er;
}



//$stmt->close();
$conn->close();
?>