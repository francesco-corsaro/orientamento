<?php
// mi connetto
require 'DB/configDB.php';
/*creo un array da inviare al database
*/
$arr1=array();
$arr1=$_POST['punti'];

/* creo delle variabili conteneti il punteggio di ogni competenza
 */
$Artistica=$arr1['Artistica'];
$Numerica=$arr1['Numerica'];
$Leadership=$arr1['Leadership'];
$Musica=$arr1['Musica'];
$Sport_fisici=$arr1['Sport_fisici'];
$Manuale=$arr1['Manuale'];
$Linguistica=$arr1['Linguistica'];
$Insegnamento=$arr1['Insegnamento'];
$Concentrazione=$arr1['Concentrazione'];
$Meccanica=$arr1['Meccanica'];
$Persuasione=$arr1['Persuasione'];
$Matematica=$arr1['Matematica'];
$Scientifica=$arr1['Scientifica'];
$Spaziale=$arr1['Spaziale'];
$Sociale=$arr1['Sociale'];
$id=$_SESSION['id'];

/*inserisco i punteggi nella tab competenze del data base*/
$sql1 = "INSERT INTO competenze (Id,Artistica,Numerica,Leadership,Musica, Sport_fisici,Manuale,Linguistica,
                                    Insegnamento,Concentrazione,Meccanica, Persuasione,
                                  Matematica,Scientifica,Spaziale,Sociale )
        VALUES ( '$id','$Artistica','$Numerica','$Leadership','$Musica','$Sport_fisici','$Manuale','$Linguistica','$Insegnamento','$Concentrazione',
                '$Meccanica','$Persuasione','$Matematica','$Scientifica','$Spaziale','$Sociale')";
        //controllo se viene inserito
if ($conn->query($sql1) === TRUE) {
    global $stato;
    $stato= " | Competenze Caricate nel DB | ";
    return $stato ;
} else {
    global $stato;
    $stato="Error: " . $sql1 . "<br>" . $conn->error;
    return $stato;
}
$conn->close();

/*creo un array da inviare al database
 
$arr1=array();
$arr1=$_POST['punti'];

/*creo un ciclo foreach in modo da aggiornare la 
 * tab competenza per ogni punteggio

foreach ($arr1 as $competenza =>$punteggio) {
require 'DB/configDB.php';

    $sql = "UPDATE competenze SET $competenza='$punteggio' WHERE Id=$id";

if ($conn->query($sql) === TRUE) {
    $stato1 = "competenze aggiornate con successo!";
    return $stato1;
} else {
    $stato1 =  "Error updating record: " . $conn->error;
    return $stato1;
}

$conn->close();
}
/*
$arr1=$_POST['punti']; //creo un array 
arsort($arr1);
$arrh= array_keys($arr1);//creo un array contenente i nomi delle competenze
*/?>
