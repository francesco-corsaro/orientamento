<?php session_start();
$_POST['p'];
$_SESSION['materie']=array();
while(list($chiave,$materia)=each($_POST['p'])){
    array_push ($_SESSION['materie'],$materia) ;
    
}
$comp_prof=array(
    Artistica=>' attitudine per disegno, pittura, decorazione, scultura, design, ecc.Percezione estetica e apprezzamento della bellezza. Creatività, immaginazione',
    Numerica=>' velocità e precisione lavorando con i numeri, facendo operazioni di aritmetica, raccolta di dati o misurazioni, analisi di statistiche, ecc.',
    Leadership=>' capacità di gestire le attività di gruppo, saper prendere decisioni, fare richieste ad altri per eseguire un\'azione o eseguire un\'idea o un progetto, ecc',
    Musica=>' saper suonare uno strumento, cantare in un coro, comporre musica, ecc.',
    Sport_fisici=>' capacità di coordinare il corpo in movimento,resistenza, muscoli, forza, flessibilità. agilità, ecc.',
    Manuale=>' Saper lavorare con le mani, sia nello sforzo fisico che nelle attività di precisione.',
    Linguistica=>' padronanza dell\'espressione verbale, sia orale che scritta. Uso del linguaggio corretto.',
    Insegnamento=>' sapere come aiutare gli altri ad apprendere, saper insegnare.',
    Concentrazione=>" capacità di mantenere l'attenzione costante su un compito o per un bel po' di tempo. Attenzione ai dettagli. Resistenza alla monotonia",
    Meccanica=>' capacità di lavorare con macchine o strumenti. Sapere come riparare apparati, facilità di comprensione del funzionamento dei meccanismi e sistemi di processo meccanico.',
    Persuasione=>" capacità di influenzare altre persone. Sapere come convincere.Saper vendere un prodotto o servizio, presentando un'idea convincente. Fluidità verbale, capacità comunicative, competenza linguistica. Negoziazione.",
    Matematica=>' risoluzione di problemi matematici, comprensione delle relazioni numeriche e logica matematica.',
    Scientifica=>" curiosità e capacità di comprendere i principi scientifici; predisposizione all'osservazione e alla sperimentazione scientifica; entusiasmo di trovare spiegazioni a fatti, situazioni o eventi; etc",
    Spaziale=>' facilità per la rappresentazione mentale di figure o oggetti di due otre dimensioni, la  differenziazione chiara di forme e volumi, il posizionamento nello spazio.',
    Sociale=>' abilità nel lavorare con le persone, empatia, gentilezza, rispetto, capacità di affrontare situazioni di conflitto,stress, tensione. Prevenire e risolvere i conflitti.',
    );
?>
<html><head>
<title></title>
<?php require 'style.php';?>
</head>
<body>
<h1>Competenze professionali</h1>
<div class="col-9 consegna">
	Di seguito è riportato un elenco di competenze e abilità.
Leggili attentamente, e rifletti su quanto possiedi ogni abilità. Per ognuna stabilisci un punteggio da 0 a 100. Il punteggio 100 rappresenta una competenza che possiedi pienamente.
</div>
<form action="valori.php" method="post"  >
<?php 


 foreach ($comp_prof as $competenza=>$testo){
    echo '<div class="col-12 tenda">
            <b class="color">'.$competenza.'</b>:
            <p class="r">' . $testo.'</p><br><br><br />
            <b class="color">0</b>
            <input type="range" name="punti['.$competenza.']" min="0" max="100"  class="slider" id="myRange><br><br>
            <b class="color">100</b>
           </div>';
 }
?>


<br>
<p><input type="submit" value="Invia"/></p>
</form>


<br>
<a href="risultati.php">Risultati</a>
</body>
</html>