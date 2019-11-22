<?php session_start();
/*
$_POST['punntiit'];
$_SESSION['interessi']=array();
array_push ($_SESSION['interessi'],$_POST['punntint']) ;
*/
$_SESSION['materie'];
$_SESSION['categorie'];
$cat=array(professionali,Agricoltura,trasporti,polizia,segreteria,commerciale,servsoc,educazione,sciumane,salute,matematica,informatica,arte,edfis);

?>
<html><head>

<title></title>
<?php require 'style.php';?>
</head>
<body>
<h1>Risultati test orientamento</h1>
<div class="col-12 tenda">
    <h2>Gruppi occupazionali</h2>
    <?php 
    for ($m = 0; $m < 15; $m++) {
        
    
    if (key_exists($cat[$m], $_SESSION['categorie'][0])) {
         echo '<p class="r">Il tuo gruppo occupazionale è <b class="color">'.$cat[$m].'</b></p>';
    }}
    ?>
</div>
<div class="col-12 tenda">
    <h2>Materie</h2>
    <p>Le materie che più ti piacciono sono:
    <?php 
    /*var_dump($_SESSION['materie']);*/
    foreach ($_SESSION['materie'] as $materia){
        echo '|'.$materia.' |';
    }
        
    ?></p>
</div>
<div class="col-12 tenda">
    <h2>Competenze professionali</h2>
    <p>Le tue competenze professionali sono:<br>
    <?php /*var_dump($_SESSION['competenzeprofessionali'])*/
    arsort($_SESSION['competenzeprofessionali'][0]);
    foreach ($_SESSION['competenzeprofessionali'][0] as $competenza=>$score){
        echo '<strong>'.$competenza.'</strong> punteggio= '.$score.'<br>';}?></p>
</div>
<div class="col-12 tenda">
    <h2>Valori</h2>
    <p>I tuoi principali valori sono:<br>
    <?php arsort($_SESSION['valori'][0]);
    $valori=$_SESSION['valori'][0];
    $l=1;
    foreach ($valori as $valore=>$score1){
       if ($l==5) break;
       echo '<strong>'.$valore.'</strong> punteggio = '.$score1.'<br>';
       $l++;
       }
    ?></p>
 </div>  
 <div class="col-12 tenda">
  <?php var_dump($_SESSION['materie'][0]) ?>
  </div> 
<div class="col-12 tenda">
    <h2>Dimensioni RIASEC</h2>
    
    
    <?php 
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
            $_SESSION['RIASEC'][]= $riasectesto['r'];
            
         } elseif (array_key_exists("investigativo",$riasecchunk[$chiave])){
             $_SESSION['RIASEC'][]= $riasectesto['i'];
            
         }elseif (array_key_exists("artistico",$riasecchunk[$chiave])){
             $_SESSION['RIASEC'][]=$riasectesto['a'];
            
         }elseif (array_key_exists("sociale",$riasecchunk[$chiave])){
             $_SESSION['RIASEC'][]= $riasectesto['s'];
             array_push($riasectesto['s'],$interesse);
         }elseif (array_key_exists("intraprendente",$riasecchunk[$chiave])){
             $_SESSION['RIASEC'][]= $riasectesto['e'];
             
         }elseif (array_key_exists("convenzionale",$riasecchunk[$chiave])){
             $_SESSION['RIASEC'][]= $riasectesto['c'];
             
         }
         $dimensione[$chiave]=$interesse;
    }
       ?> 
        <p class="r">Le dimensioni sono<strong> <?php echo $_SESSION['RIASEC']['0']?> - <?php echo $_SESSION['RIASEC'][1]?></strong></p>
        <p class="r">Possibili alternative sono:<br>
        <br><b class="color"> <?php echo $_SESSION['RIASEC']['0']?> - <?php echo $_SESSION['RIASEC']['2']?>
        <br><?php echo $_SESSION['RIASEC']['1']?> - <?php echo $_SESSION['RIASEC']['2']?>
        <br><?php echo $_SESSION['RIASEC']['2']?> - <?php echo $_SESSION['RIASEC']['3']?></b>
        </p>
         
</div>
<a href="categorie_occupazionali1.php">categorie</a>

         
</body>
</html>