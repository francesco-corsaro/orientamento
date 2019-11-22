<?php 
session_start();
$_POST['points'];
$_POST['c'];

$_SESSION['dbCat']=array();
$_SESSION['dbPntCat']=array();
$_SESSION[categorie]=array();
$materie=array(
    Matematica=>'Algebra, Geometria, Calcolo, Statistica, Matematica applicata a economia, ecc.',
    Scienze=>'Fisica, Chimica, Scienze naturali, Biologia, Geologia, Scienze della Terra e ambiente, ecc.',
    Italiano=>'Lingua italiana, letteratura, commenti testuali, composizione scritta, ecc.',
    Lingue=>'Inglese, Francese, Tedesco, Latino, Greco, ecc.',
    Sc_Sociali=>' Filosofia, Storia, Geografia, Sociologia, Psicologia,Educazione civica, ecc.',
    Arte=>'Storia dell\'arte, Disegno artistico, Pittura, Scultura, Design, Ceramica,Smalto, volume, Tecniche di espressione grafico-plastica, ecc.',
    Musica=>'Solfeggio, Canto, Composizione, Interpretazione strumentale, ecc.',
    Teatro=>'Espressione orale, Espressione corporea, Interpretazione, Regia teatrale o del cinema, scenografia, ecc.',
    Immagine=>'Fotografia, Cinema, Video, ecc.',
    Economia=>'Vendite, Rapporti di lavoro, Diritto Commerciale e fiscale, Gestione del personale, Legislazione del lavoro, ecc.',
    Tecnologia=>'Disegno tecnico, Interpretazione di piani, Esperimenti di Laboratorio, Elettronica, Tecnologia industriale,Ingegneria elettrica, ecc',
    Sport=>'Ginnastica, Atletica, Pallacanestro, Nuoto, ecc',
    Igiene=>'Dietetica, Prevenzione degli infortuni,Prevenzione AIDS, Prevenzione uso di droghe, Prime cure, ecc.',
    Informatica=>'Gestione computer, Lingue e programmazione, Web design , Manutenzione e riparazione delle apparecchiature, Gestione della rete, ecc.',
    
);
$cat=array(professionali,Agricoltura,trasporti,polizia,segreteria,commerciale,servsoc,educazione,sciumane,salute,matematica,informatica,arte,edfis);

$arr1=$_POST['points']; //creo un variabile contenente points per caricarlo nel DB 
//var_dump($arr1);
arsort($arr1);
$arrh= array_keys($arr1);//creo un array contenente i nomi delle categorie
// var_dump($arrh);
require 'DB/InsertCategorie.php';
array_push ($_SESSION['dbCat'],$arrh) ; //Quest'array mi serve per caricare il nome dell categorie
array_push ($_SESSION['dbPntCat'],$arr1) ; //quest'array mi serve per caricare il punteggio
for ($i=1;$i<3;$i ++){
    array_pop($arr1);
}
/*if (array_key_exists($cat[0],$arr1)) {
 array_push ($_SESSION[categorie],$cat[0]) ;
 }*/
array_push ($_SESSION['categorie'],$arr1) ;?>
<html><head>

<title>orientamento</title>

<?php require 'style_materie1.php';?>


</head>
<body>
<h1>Materie preferite</h1>
<div class="col-9 consegna">
Seleziona le 2 materie che più ti piacciono
</div>
<?php // riceve un valore dal file di controllo per informare dell'errore da parte dell'utente
    if ($_SESSION['controllo1']==1) {
    
        echo '<div class="col-12 errore"> Hai inserito più di 2 categorie.Seleziona <b class="errore"> solo 2</b> categorie</div>';
        }elseif ($_SESSION['controllo1']==2) {
            echo '<div class="col-12 errore"> Hai inserito meno di 2 categorie.Seleziona <b class="errore"> solo 2</b> categorie</div>';
    }?>

<div class="col-12 ">
    <form action="competenze.php" method="post"  >
    <?php while(list($chiave,$materia)=each($materie)){
        echo '<div class="col-6 tenda">
                    <label class="container" ><br>
                       <b class="bianco"> '.$chiave.'</b>
                        <input type="checkbox" name="p[]" value="'.$chiave.' ">
                        <span class="checkmark"></span>
                    </label>
               </div>';
                     
    }?>
    <br>
    <p><input type="submit" value="Invia"/></p>
    </form>
  
</div>
<div class="col-12 tenda">
<?php if ($ok) {
    echo $ok;
}else {
    echo $er;
}?>
<a href="risultati.php">Risultati</a>
<a href="LoadDB.php">Caricadb</a>
</div>
</body>
</html>