<?php
// mi connetto

/*creo un array da inviare al database
 */
$arr1=array();
$arrK=array();
$arr1=$_POST['punti1'];
$arrK=array_keys($arr1);//creo un array contenente i nomi dei valori
/*
$id=$_SESSION['id'];

/*inserisco i punteggi nella tab competenze del data base*/
/*$sql = "INSERT INTO valori (Id)
        VALUES ( '$id')";
*/
for ($i = 0; $i < 13; $i++) {
    require 'DB/configDB.php';
    $flag=$arr1[$arrK[$i]];
    $flag1=$arrK[$i];
//$conn->close();
//require 'DB/configDB.php';
$sql= "UPDATE valori SET $flag1='$flag' WHERE Id=$id";
    
   /* if ($conn->query($sql) === TRUE) {
        $stato1 = "Valori aggiornati con successo!";
        return $stato1;
    } else {
        $stato1 =  "Error updating record: " . $conn->error;
        return $stato1;
    }*/


$conn->close();
}
?>
