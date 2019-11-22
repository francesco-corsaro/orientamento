<?php
session_start();
$_POST['points'];
$_POST['c'];
$_SESSION[categorie]=array();


$arr1=$_POST['points']; //creo un variabile contenente points per caricarlo nel DB
var_dump($arr1);
arsort($arr1);
$arrh= array_keys($arr1);//creo un array contenente i nomi delle categorie
var_dump($arrh);
require 'configDB.php';
require 'InsertCategorie.php';
?>