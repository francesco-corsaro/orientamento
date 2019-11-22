<?php session_start();

$_POST['points'];
$_POST['c'];

if (array_key_exists("4",$_POST['c'])) {
    $_SESSION['controllo']=1;
    header("location: /Orientamento/categorie_occupazionali1.php");
}elseif (array_key_exists("3",$_POST['c'])){
    $_SESSION['c']=$_POST['c'];
    header("location: /Orientamento/4categorieoccupazionali1.php");
    
}else {
    $_SESSION['controllo']=2;
    header("location: /Orientamento/categorie_occupazionali1.php");
}
?>