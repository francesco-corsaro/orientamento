<?php session_start();
$_POST['punntiit'];
$_SESSION['interessi']=array();
array_push ($_SESSION['interessi'],$_POST['punntint']) ;

$_SESSION['materie'];
$_SESSION['categorie'];
$cat=array(professionali,Agricoltura,trasporti,polizia,segreteria,commerciale,servsoc,educazione,sciumane,salute,matematica,informatica,arte,edfis);

?>
<html><head>

<title></title>

</head>
<body>
<?php 


var_dump($_SESSION[categorie]);
if (key_exists($cat[0], $_SESSION['categorie'][0])) {
     echo 'Stampa il modulo della categoria';
}else {
    echo 'non è presente';
}
?>
<br><p>Materie</p>
<?php var_dump($_SESSION['materie']);?>
<br><p>Competenze professionali</p>
<?php var_dump($_SESSION['competenzeprofessionali']);?>
<br><p>Valori</p>
<?php var_dump($_SESSION['valori']);?>
<br><p>Interessi</p>
<?php 
$interessi=$_SESSION['interessi'];
$r=($interessi[4]+$interessi[6]+$interessi[12]+$interessi[18]+$interessi[24]);

var_dump($interessi);
var_dump( $r);
?>
<br>
<a href="categorie_occupazionali1.php">categorie</a>
</body>
</html>