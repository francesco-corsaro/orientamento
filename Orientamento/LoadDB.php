<?php
session_start();
// richiamo i dati dell'ultimo form e li carico in una variabile session
$_POST['punntiit'];
$_SESSION['interessi']=array();
array_push ($_SESSION['interessi'],$_POST['punntint']) ;

require 'configDB.php'; //Mi connetto al database
$arrh= array();
$arr1= array();
$arrh= $_SESSION['dbCat'];
$arr1=$_SESSION['dbPntCat'];
/*$Categoria1=array();
$PntCat1=array();
$Categoria1=$arrh[0][0];
$PntCat1=$arr1[0][$Categoria1];*/
//var_dump($Categoria1);
//var_dump($PntCat1);
require 'InsertCategorie.php';
// header("location: /Orientamento/Risultati.php");
?>