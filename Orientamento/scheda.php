<?php session_start();
$_POST['punti1'];
$_SESSION['valori']=array();
array_push ($_SESSION['valori'],$_POST['punti1']) ;
$interessi=array(
    
    "Quando realizzo un lavoro o un compito me piace farlo in maniera originale, in una forma differente rispetto alla maggior parte delle persone",
    "Sono una persona sempre  disposta a cooperare con gli altri e a partecipare ad attività sociali ",
    "sono capace di spiegare le cose agli altri con chiarezza ed entusiasmo, riuscendo a convincerli o persuaderli delle mie idee e punti di vista",
    "Mi piace accettare suggerimenti che mi fanno i compagni di lavoro  e compiere con responsabilità le istruzioni ricevute dai miei superiori",
    "Mi considero una persona pratica, mi piace occuparmi di lavori utili nei quali posso vedere subito i risultati",
    "Mi divertono i giochi che richiedo 'pensiero analitico': Scacchi, risolvere problemi matematici, applicare strategie",
    "Mi piace manipolare strumenti o macchine ed essere capace di usufruire di tutte le loro funzioni",
    "So controllare le mie emozioni e i miei sentimenti; penso prima di agire e analizzo le conseguenze delle mie azioni",
    "Vorrei essere indipendente, agire senza far caso alle usanze o alle norme stabilite dalla società",
    "Mi considero capace di comprendere le persone tristi o annoiate e riesco risvegliare un certo ottimismo",
    "Normalmente mi piace essere il leader del gruppo e che gli altri riconoscano le mie qualità",
    "Cerco di tenere le mie cose ben ordinate e realizzare lavori con molta cura",
    "Preferisco dedicarmi a lavori di tipo manuale rispetto ad altri compiti che si basano su l'uso di idee o parole",
    "Quando apprendo un nuovo argomento me entusiasma approfondire e non lo mollo fino a quando non riesco a comprenderlo ed interpretarlo bene",
    "Mi piace fare lavori che si possono fare in tutta libertà, senza condizioni e imposizioni",
    "Una delle mie caratteristiche è essere una persona generosa e servizievole per aiutare gli atri affinché risolvono i loro problemi o difficoltà",
    "Spesso riesco a rendere coscienti gli altri degli aspetti positivi e piacevoli degli eventi",
    "Mi sento efficace e ho un senso pratico nei compiti di organizzazione, sto attento e mi preoccupo dei dettagli",
    "Mi attraggono le attività che richiedono sforzo fisico",
    "Dedico molto tempo alla lettura di libri e riviste di tipo scientifico",
    "Mi considero una persona con molta immaginazione, inspirazione, capace di trovare soluzioni nuove ai problemi che si presentano",
    "Mi piace riflettere sulla realtà sociale e mi preoccupano le ingiustizie che a volte soffrono alcune persone",
    "Sono ambizioso, mi piacerebbe arrivare ad alti livelli di responsabilità, essere una persona importante",
    "Spesso pianifico quello che devo fare in maniera realistica, metodica e dettagliata. Mi piace prevedere le situazioni e non agire di impulsività",
    "Preferisco le attività che prevedono il contatto con gli strumenti (manipolare oggetti, utilizzare macchine)",
    "Sinceramente, sto meglio quando posso lavorare o studiare solo/a e posso concentrarmi in quello che faccio",
    "Non mi piace la mancanza di estetica nei cartelli, nella pubblicità, nelle vetrine.. ",
    "Mi viene facile iniziare conversazioni con persone che conosco da poco e mi interesso alle loro preferenze o attività",
    "Penso che l'economia (commercio, affari, finanza, ecc) è uno degli aspetti più importanti per lo sviluppo dell'individuo e della società",
    "Preferisco un lavoro con un ritmo di lavoro costante rispetto a uno che continuamente cambia",
    
    );
?>
<html><head>
<title></title>

</head>
<body>
<form action="risultati.php" method="post"  >
<?php 

$chiave='1';
 foreach ($interessi as $chiave=>$testo){
   
     echo  
        '<br><div><p>'.$testo.'</p>
        <br><label for="usr['.$chiave.']"><strong>Assolutamente in disaccordo</strong></label> <input checked="checked" id="usr['.$chiave.']" name="punntint['.$chiave.']" type="radio" value="0"/>
        <br><label for="usr['.$chiave.']"><strong>Leggermente in disaccordo</strong></label> <input checked="checked" id="usr['.$chiave.']" name="punntint['.$chiave.']" type="radio" value="1"/>
        <br><label for="usr['.$chiave.']"><strong>D\'accordo</strong></label> <input checked="checked" id="usr['.$chiave.']" name="punntint['.$chiave.']" type="radio" value="2"/>
        <br><label for="usr['.$chiave.']"><strong>Completamente d\'accordo</strong></label> <input checked="checked" id="usr['.$chiave.']" name="punntint['.$chiave.']" type="radio" value="3"/></div>';
    
 }
?>


<br>
<p><input type="submit" value="Invia"/></p>
</form>


<br>
<a href="risultati.php">Risultati</a>
</body>
</html>