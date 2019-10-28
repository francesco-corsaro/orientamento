<?php session_start();

$_POST['points'];
$_SESSION['c'];
$occ2= array(
professionali => "<b class=\"color\">Attività professionali:</b>  La caratteristica principale che inquadra le attività svolte dai professionisti appartenenti a questo gruppo è l'abilità manipolativa come competenza di maggior valore per l'esecuzione di questi lavori, i mestieri. Occasionalmente sono utilizzati macchinari e strumenti specifici, ma l'abilità manipolativa è essenziale. Esempio barbiere, vetraio, sarta, tappezziere, fabbro, orologiaio, gioielliere,muratore, stuccatore, ecc",
agricoltura =>'<b class="color">Attività Bio-agricole:</b>Attività svolte in terreni, gestire il bestiame, pescare Es: Agricoltura, zootecnia, orticoltura, floricoltura, miniere, taglio della pietra, pesca,esperti in lavori agricoli, agenti forestali, ecc.',
trasporti => "<b class=\"color\">Trasporti:</b> Professioni relative al trasporto terrestre, marittimo o aereo di viaggiatori o merce. Es: autista di autobus, camionista, tassista, ferrovia,Autista della metropolitana, capitano della nave mercantile, ufficiale della nave da crociera, pilota civile,eccetera",
polizia=>"<b class=\"color\"> Servizi di protezione e sicurezza:</b>Professioni le cui funzioni primarie consistono nella difesa del territorio, il mantenimento dell'ordine pubblico, prevenzione e indagine sui comportamenti criminali e protezione di persone o cose. Es: ufficiale o sottufficiale delle forze armate, polizia locale, guardia della giuria,guardia del corpo, guardiano, ecc.",
segreteria=>"<b class=\"color\"> Supporto amministrativo e lavoro di ufficio:</b>È composto da professioni la cui prestazione principale è la gestione amministrativa: scrittura, lettura, trascrizione, selezione, elaborazione e archiviazione di documentazione relativa a un'entità, gruppo, organizzazione o società, può coinvolgere o meno l'attenzione diretta al pubblico. Es: Impiegato di banca, direttore amministrativo, segretario, operatore telefonico, funzionario postale, receptionist, ecc.",
commerciale=>"<b class=\"color\"> Commerciale: economia e finanza:</b>Professioni legate al mondo del commercio, vendite,Affari e vita aziendale. Ad esempio, economista, commerciante, venditore, agente di borsa e borsa valori, consulente per gli investimenti, agente assicurativo, gestione e amministrazione affari, marketing, pubbliche relazioni, servizi al consumatore , ecc.",
servsoc=>"<b class=\"color\"> Servizi sociali:</b>Questo gruppo è composto da professioni che segnalano un servizio per la popolazione in generale e per lo sviluppo della società in termini di uguaglianza, giustizia, in modo che la comunità acquisisca i diritti costituzionali, fornendo assistenza e benessere ai gruppi con una maggiore domanda e bisogni urgenti: attenzione ai gruppi a rischio, analisi di problemi quali emarginazione, attenzione e consulenza a famiglie con gravi situazioni socio-economiche, integrazione dei disabili ... Richiede abilità empatiche, abilità sociali e chiarezza orientamento / preoccupazione / consapevolezza sociale: Es: Geriatra, assistente sociale, educatore sociale, religioso ...",
educazione=>"<b class=\"color\"> Educazione e cultura:</b>Si tratta di attività legate alla formazione e all'istruzione, alla cultura e alla diffusione delle informazioni. Es: insegnante di scuola primaria o secondaria, insegnante di educazione speciale,consulente, insegnante, monitor del tempo libero, bibliotecario, traduzione e interpretazione, gestione museale.",
sciumane=>"<b class=\"color\"> Scienze umane e sociali:</b>Aree professionali legate allo studio delle scienze umane e Scienze sociali, come sociologia, giurisprudenza, filosofia, psicologia, filologia, storia,giornalismo, notiziari radiofonici, televisivi, ecc.",
salute=>"<b class=\"color\"> Scienze della salute:</b>Professioni legate alla prevenzione, diagnosi e cura della salute. Ad esempio, medicina, assistenza infermieristica, farmacia, veterinaria, assistente di clinica, fisioterapia,terapia occupazionale, ottica e optometria, protesi dentarie, ecc.",
matematica=>"<b class=\"color\"> Scienze della natura e matematiche:</b>Professioni legate alle scienze sperimentali o fisico-naturali e matematica. Es: professionisti specializzati in biologia, fisica, chimica, geologia,Scienze marine, matematica, statistica, ecc.",
informatica=>"<b class=\"color\"> Tecnologie ed Informatica:</b>Raggruppa le professioni relative a Meccanica, Tecnologia, Tecnologie dell'informazione e comunicazione (informatica, comunicazioni, telematica, come analista di sistemi, analista di applicazioni scientifiche, programmatore, esperto in reti di comunicazione e Internet, ecc.), ingegneria (agronomi industriali, silvicoltura,materiali, elettronica, telecomunicazioni, strade, ecc.); altre professioni in questo gruppo sono quelli legati all'architettura, così come specialisti tecnici in arti grafiche, automobilistico, elettricità, elettronica, tecnico del suono, gemmologia, ecc",
arte=>"<b class=\"color\">Arti:</b> Le professioni legate alle sette arti classiche sono: Letteratura,Pittura, scultura, architettura, musica, danza e cinema, oltre alle arti applicate e arte drammatica. Ad esempio musicista, romanziere, scultore, decoratore, restauratore di opere d'arte, sceneggiatura, attore, stilista, architetto, ballerino ecc.",
edfis=>"<b class=\"color\">Educazione fisica e sport:</b> Sportivo professionista, insegnante di educazione fisica, allenatore sportivo, maestro sci, insegnante di educazione fisica, ecc.",

);
/*Variabile globale delle categorie occupazionali. 
 * Restituisce il punteggio ottenuto su ogni categoria preferita
$risultati=$_POST[points];*/


?>
<html>
<head>
<title>orientamento</title>

<?php require 'style.php';?>

</head>
<body>
<div class="col-5">
	<h1>Categorie occupazionali</h1>
</div>
<div class="col-9 consegna">
Per ognuna delle 4 categorie indica il grado di interesse assegnando un punteggio da 0 a 100<br>
NB:Ognuna delle categorie deve avere punteggi diversi.<br><br />  

<br><br><br />
</div>
<div class="col-12 r">
    <form action="materie1.php" method="post"  >
        <?php 
        
            $occ1=($_SESSION['c']);
        
        foreach ($occ1 as $modo){
            echo '<div class="col-12 tenda">
                        '.$occ2[$modo].'<br><br />
                        <b class="color">0</b> 
                        <input type="range" name="points['.$modo.']" min="0" max="100" class="slider" id="myRange">
                        <b class="color">100</b>
                  </div>';
        }?>
       <div class="floatdx">
       	<input type="submit" value="Conferma">
       </div>	
    </form>
</div>

</body>
</html>