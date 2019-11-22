<?php

// prepare and bind
//$stmt = $conn->prepare("INSERT INTO Identificativo (Categoria1, Categoria2, Categoria3, Categoria4, PntCat1, PntCat2, PntCat3,PntCat4)
//                        VALUES (?, ?, ?, ?,?,?, ?, ? )");
//$stmt->bind_param("ssssiiii", $Categoria1, $Categoria2, $Categoria3, $Categoria4, $PntCat1, $PntCat2, $PntCat3,$PntCat4);

// set parameters and execute
$id=rand(1,999);
$_SESSION['id']=$id;
$Categoria1=array();
$Categoria2=array();
$Categoria3=array();
$Categoria4=array();
$PntCat1=array();
$PntCat2=array();
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
        VALUES ( '$id','$PntCat1', '$PntCat2', '$PntCat3','$PntCat4')";

if ($conn->query($sql) === TRUE) {
    echo " |Categorie Caricate nel DB | ";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}



//$stmt->close();
$conn->close();
?>