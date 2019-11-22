<?php
session_start();
require 'configDB.php'; //Mi connetto al database
$arrh= array(); //Definisco gli array
$arr1= array();
$arrh= $_SESSION['dbCat']; // collego la variabile session con il nome delle categorie
$arr1=$_SESSION['dbPntCat'];// faccio lo stesso con i punteggi
$id=rand(1,999);  //creo una variabile per creare un identificativo in futuro sara associato ad un'anagrafica
$_SESSION['id']=$id; // Lo rendo magico
$Categoria1=array();
$Categoria2=array();   //Definisco gli array che conterano le variabili per il nome della categoria
$Categoria3=array();
$Categoria4=array();
$PntCat1=array();
$PntCat2=array();  //Definisco gli array che contegono il punteggio della categoria
$PntCat3=array();
$PntCat4=array();
$Categoria1=$arrh[0][0];
$Categoria2=$arrh[0][1];
$Categoria3=$arrh[0][2];
$Categoria4=$arrh[0][3];
$PntCat1=$arr1[0][$Categoria1];
$PntCat2=$arr1[0][$Categoria2];
$PntCat3=$arr1[0][$Categoria3];
$PntCat4=$arr1[0][$Categoria4];
//$stmt->execute();
$sql = "INSERT INTO Categorie (Id,$Categoria1,$Categoria2, $Categoria3, $Categoria4)
        VALUES ( '$id','$PntCat1', '$PntCat2', '$PntCat3','$PntCat4')";                     //Carico nel database

if ($conn->query($sql) === TRUE) {
    echo " |Categorie Caricate nel DB | ";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}



//$stmt->close();
$conn->close();
?>