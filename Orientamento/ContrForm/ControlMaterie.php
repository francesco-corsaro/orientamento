<?php
if (array_key_exists(2,$_POST['p'])) {
    $_SESSION['controllo1']=1;
    header ("location: /Orientamento/materie1.php");
}elseif (array_key_exists(1,$_POST['p']) !== true) {
    $_SESSION['controllo1']=2;
    header ("location: /Orientamento/materie1.php");
}else {
    $_SESSION['materie']=array();
    
    while(list($chiave,$materia)=each($_POST['p'])){
        array_push ($_SESSION['materie'],$materia) ;
        
        
    }
    }
?>