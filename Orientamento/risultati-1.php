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
<p><strong>Gruppi occupazionali</strong></p>
<?php 
for ($m = 0; $m < 15; $m++) {
    

if (key_exists($cat[$m], $_SESSION['categorie'][0])) {
     echo '<p>Il tuo gruppo occupazionale è<strong>'.$cat[$m].'</strong></p>';
}}
?>
<br><p><strong>Materie</strong></p>
<p>Le amterie che più ti piacciono sono
<?php foreach ($_SESSION['materie'] as $materia){
    echo '|'.$materia.' |';
}
    
?>
<br><p>Competenze professionali</p>
<?php var_dump($_SESSION['competenzeprofessionali']);?>
<br><p>Valori</p>
<?php var_dump($_SESSION['valori']);?>
<br><p>Interessi</p>
<?php /*var_dump( $_SESSION['interessi']);*/
$risp=array();

/*converto l'array da string a int*/
/*foreach ( $_SESSION['interessi'][0]as $chiave=>$valore){
  
    if (array_search($needle, $haystack)) {
       array_push($isp,0);
    }elseif ($valore=='1'){
        array_push($isp,1) ;
    
    }elseif ($valore=='2'){
        array_push($isp,2) ;
        
    }elseif ($valore=='3'){
        array_push($isp,3) ;
    }
}


var_dump( $risp);
*/?>
<br>
<br><?php 

$r=(int)$_SESSION['interessi'][0][4]+(int)$_SESSION['interessi'][0][6]+(int)$_SESSION['interessi'][0][12]+(int)$_SESSION['interessi'][0][18]+(int)$_SESSION['interessi'][0][24];
$i=$_SESSION['interessi'][0][5]+$_SESSION['interessi'][0][7]+$_SESSION['interessi'][0][13]+$_SESSION['interessi'][0][19]+$_SESSION['interessi'][0][25];
$a=$_SESSION['interessi'][0][0]+$_SESSION['interessi'][0][8]+$_SESSION['interessi'][0][14]+$_SESSION['interessi'][0][20]+$_SESSION['interessi'][0][26];
$s=$_SESSION['interessi'][0][1]+$_SESSION['interessi'][0][9]+$_SESSION['interessi'][0][15]+$_SESSION['interessi'][0][21]+$_SESSION['interessi'][0][27];
$e=$_SESSION['interessi'][0][2]+$_SESSION['interessi'][0][10]+$_SESSION['interessi'][0][16]+$_SESSION['interessi'][0][22]+$_SESSION['interessi'][0][27];
$c=$_SESSION['interessi'][0][3]+$_SESSION['interessi'][0][11]+$_SESSION['interessi'][0][17]+$_SESSION['interessi'][0][23]+$_SESSION['interessi'][0][29];
$riasectesto=array();
$riasectesto['r']='Realistico';
$riasectesto['i']= 'Investigativo';
$riasectesto['a']='Artistico';
$riasectesto['s']='Sociale';
$riasectesto['e']='Intraprendente'; 
$riasectesto['c']='Convenzionale';;
/*trovare un modo per far stamprare la descrizione coerente 
 * alle risposte date
 */
$riasec=array();
$riasec['realistico']=$r;
$riasec['investigativo']=$i;
$riasec['artistico']=$a;
$riasec['sociale']=$s;
$riasec['intraprendente']=$e;
$riasec['convenzionale']=$c;
arsort($riasec);

$riasecchunk=array_chunk($riasec, 1, true);

foreach ($riasecchunk as $chiave=>$interesse){
     if (array_key_exists("realistico",$riasecchunk[$chiave])) {
        echo $riasectesto['r'];
     } elseif (array_key_exists("investigativo",$riasecchunk[$chiave])){
         echo $riasectesto['i'];
     }elseif (array_key_exists("artistico",$riasecchunk[$chiave])){
         echo $riasectesto['a'];
     }elseif (array_key_exists("sociale",$riasecchunk[$chiave])){
         echo $riasectesto['s'];
     }elseif (array_key_exists("intraprendente",$riasecchunk[$chiave])){
         echo $riasectesto['e'];
     }elseif (array_key_exists("convenzionale",$riasecchunk[$chiave])){
         echo $riasectesto['c'];
     }
     
    }
    
    

array_key_exists($chiave,$array);

echo'<br><br>';
var_dump($riasecchunk);
echo'<br><br>';

echo $r.'<br>'.$i.'<br>'.$a.'<br>'.$s.'<br>'.$e.'<br>'.$c; 
?>
<br>
<a href="categorie_occupazionali1.php">categorie</a>

         <p><?php echo $_SESSION['competenzeprofessionali'][0][Artistica]; ?></p>
</body>
</html>