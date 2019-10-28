<?php 
session_start();
$_POST['points'];
$_POST['c'];
$_SESSION[categorie]=array();
$materie=array(
    matematica=>'algebra, geometria, calcolo, statistica, matematica applicata a economia, ecc.',
    scienze=>'Fisica, Chimica, Scienze naturali, Biologia, Geologia, Scienze della Terra e ambiente, ecc.',
    italiano=>'lingua italiana, letteratura, commenti testuali, composizione Scritta, ecc.',
    lingue=>'inglese, francese, tedesco, latino, greco, ecc.',
    scienzesociali=>' filosofia, storia, geografia, sociologia, psicologia,Educazione civica, ecc.',
    arte=>'Storia dell\'arte, Disegno artistico, Pittura, Scultura, Design, Ceramica,Smalto, volume, tecniche di espressione grafico-plastica, ecc.',
    musica=>'Solfeggio, canto, composizione, interpretazione strumentale, ecc.',
    teatro=>'espressione orale, espressione corporea, interpretazione, regia teatrale o del cinema, scenografia, ecc.',
    immaginesuono=>'fotografia, cinema, video, ecc.',
    economia=>'vendite, rapporti di lavoro, diritto Commerciale e fiscale, gestione del personale, legislazione del lavoro, ecc.',
    tecnologia=>'disegno tecnico, interpretazione di piani, esperimenti di Laboratorio, elettronica, tecnologia, industriale, ingegneria elettrica, ecc',
    sport>'ginnastica, atletica, pallacanestro, Nuoto, ecc',
    igiene=>'dietetica, prevenzione degli infortuni, prevenzione AIDS, prevenzione uso di droghe, prime cure, ecc.',
    informatica=>'gestione computer, lingue e programmazione, Web design , manutenzione e riparazione delle apparecchiature, gestione della rete, ecc.',
    
);
$cat=array(professionali,Agricoltura,trasporti,polizia,segreteria,commerciale,servsoc,educazione,sciumane,salute,matematica,informatica,arte,edfis);
?>
<html><head>

<title></title>

</head>
<body>
<h1>prova</h1>
<?php  
$arr1=$_POST['points'];
/*var_dump($arr1);*/
arsort($arr1);
for ($i=1;$i<3;$i ++){
    array_pop($arr1);
}
/*if (array_key_exists($cat[0],$arr1)) {
    array_push ($_SESSION[categorie],$cat[0]) ;
}*/
array_push ($_SESSION[categorie],$arr1) ;

var_dump($arr1);

?>
<a href="risultati.php">Risultati</a>

</body>
</html>