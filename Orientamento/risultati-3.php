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
<p>Le materie che più ti piacciono sono:
<?php foreach ($_SESSION['materie'] as $materia){
    echo '|'.$materia.' |';
}
    
?>
<br><p>Competenze professionali</p>
<p>Le tue competenze professionali sono:<br>
<?php /*var_dump($_SESSION['competenzeprofessionali'])*/
arsort($_SESSION['competenzeprofessionali'][0]);
foreach ($_SESSION['competenzeprofessionali'][0] as $competenza=>$score){
    echo '<strong>'.$competenza.'</strong> punteggio= '.$score.'<br>';}?></p>
<br><p>Valori</p>
<p>I tuoui principali valori sono:<br>
<?php arsort($_SESSION['valori'][0]);
$valori=$_SESSION['valori'][0];
$l=1;
foreach ($valori as $valore=>$score1){
   if ($l==5) break;
   echo '<strong>'.$valore.'</strong> punteggio = '.$score1.'<br>';
   $l++;
   }
?></p>
<br><p>Interessi</p>

<br>
<br><?php 
/* Calcolo del punteggio per ogni dimensione RIASEC
 * 
 */
$r=(int)$_SESSION['interessi'][0][4]+(int)$_SESSION['interessi'][0][6]+(int)$_SESSION['interessi'][0][12]+(int)$_SESSION['interessi'][0][18]+(int)$_SESSION['interessi'][0][24];
$i=$_SESSION['interessi'][0][5]+$_SESSION['interessi'][0][7]+$_SESSION['interessi'][0][13]+$_SESSION['interessi'][0][19]+$_SESSION['interessi'][0][25];
$a=$_SESSION['interessi'][0][0]+$_SESSION['interessi'][0][8]+$_SESSION['interessi'][0][14]+$_SESSION['interessi'][0][20]+$_SESSION['interessi'][0][26];
$s=$_SESSION['interessi'][0][1]+$_SESSION['interessi'][0][9]+$_SESSION['interessi'][0][15]+$_SESSION['interessi'][0][21]+$_SESSION['interessi'][0][27];
$e=$_SESSION['interessi'][0][2]+$_SESSION['interessi'][0][10]+$_SESSION['interessi'][0][16]+$_SESSION['interessi'][0][22]+$_SESSION['interessi'][0][27];
$c=$_SESSION['interessi'][0][3]+$_SESSION['interessi'][0][11]+$_SESSION['interessi'][0][17]+$_SESSION['interessi'][0][23]+$_SESSION['interessi'][0][29];
/*
 *definisco un array contenente il testo di ogni dimensione RIASEC 
 *la chiave è una delle iniziali e il testo corrisponde al suo significato
 */
$riasectesto=array();
$riasectesto['r']='Realistico';
$riasectesto['i']= 'Investigativo';
$riasectesto['a']='Artistico';
$riasectesto['s']='Sociale';
$riasectesto['e']='Intraprendente'; 
$riasectesto['c']='Convenzionale';;
/*
 * Aggiungo un array contenente la chive il nome della dimensione 
 * e il valore è il punteggio totalizzato
 */
$riasec=array();
$riasec['realistico']=$r;
$riasec['investigativo']=$i;
$riasec['artistico']=$a;
$riasec['sociale']=$s;
$riasec['intraprendente']=$e;
$riasec['convenzionale']=$c;
/*Ordino l'array dal più grande al più piccolo
 */
arsort($riasec);
/*attribuisco una chiave fissa in modo che il primo elemento
 * ha chiave 0 e il suo array ha una chiave corrispondente 
 * alla dimensione $riasec  */
$riasecchunk=array_chunk($riasec, 1, true);

foreach ($riasecchunk as $chiave=>$interesse){
    
     if (array_key_exists("realistico",$riasecchunk[$chiave])) {
        $_SESSION['RIASEC'][$chiave]= $riasectesto['r'];
        array_push($riasectesto['r'],$interesse);
     } elseif (array_key_exists("investigativo",$riasecchunk[$chiave])){
         $_SESSION['RIASEC'][$chiave]= $riasectesto['i'];
         array_push($riasectesto['i'],$interesse);
     }elseif (array_key_exists("artistico",$riasecchunk[$chiave])){
         $_SESSION['RIASEC'][$chiave]=$riasectesto['a'];
         array_push($riasectesto['a'],$interesse);
     }elseif (array_key_exists("sociale",$riasecchunk[$chiave])){
         $_SESSION['RIASEC'][$chiave]= $riasectesto['s'];
         array_push($riasectesto['s'],$interesse);
     }elseif (array_key_exists("intraprendente",$riasecchunk[$chiave])){
         $_SESSION['RIASEC'][$chiave]= $riasectesto['e'];
         array_push($riasectesto['e'],$interesse);
     }elseif (array_key_exists("convenzionale",$riasecchunk[$chiave])){
         $_SESSION['RIASEC'][$chiave]= $riasectesto['c'];
         array_push($riasectesto['r'],$interesse);
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