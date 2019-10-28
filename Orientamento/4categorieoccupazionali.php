<?php 
$occ2= array(
professionali => "<p><h3>mestieri</h3> La caratteristica principale che inquadra le attività svolte dai professionisti appartenenti a questo gruppo è l'abilità manipolativa come competenza di maggior valore per l'esecuzione di questi lavori, i mestieri. Occasionalmente sono utilizzati macchinari e strumenti specifici, ma l'abilità manipolativa è essenziale. Esempio barbiere, vetraio, sarta, tappezziere, fabbro, orologiaio, gioielliere,muratore, stuccatore, ecc</p>",
agricoltura => "Attività svolte in terreni, gestire il bestiame, pescare Es: Agricoltura, zootecnia, orticoltura, floricoltura, miniere, taglio della pietra, pesca,esperti in lavori agricoli, agenti forestali, ecc.",
trasporti => "Professioni relative al trasporto terrestre, marittimo o aereo di viaggiatori o merce. Es: autista di autobus, camionista, tassista, ferrovia,Autista della metropolitana, capitano della nave mercantile, ufficiale della nave da crociera, pilota civile,eccetera",
polizia=>"Professioni le cui funzioni primarie consistono nella difesa del territorio, il mantenimento dell'ordine pubblico, prevenzione e indagine sui comportamenti criminali e protezione di persone o cose. Es: ufficiale o sottufficiale delle forze armate, polizia locale, guardia della giuria,guardia del corpo, guardiano, ecc.",
segreteria=>"È composto da professioni la cui prestazione principale è la gestione amministrativa: scrittura, lettura, trascrizione, selezione, elaborazione e archiviazione di documentazione relativa a un'entità, gruppo, organizzazione o società, può coinvolgere o meno l'attenzione diretta al pubblico. Es: Impiegato di banca, direttore amministrativo, segretario, operatore telefonico, funzionario postale, receptionist, ecc.",
commerciale=>"Professioni legate al mondo del commercio, vendite,Affari e vita aziendale. Ad esempio, economista, commerciante, venditore, agente di borsa e borsa valori, consulente per gli investimenti, agente assicurativo, gestione e amministrazione affari, marketing, pubbliche relazioni, servizi al consumatore , ecc.",
servsoc=>"Questo gruppo è composto da professioni che segnalano un servizio per la popolazione in generale e per lo sviluppo della società in termini di uguaglianza, giustizia, in modo che la comunità acquisisca i diritti costituzionali, fornendo assistenza e benessere ai gruppi con una maggiore domanda e bisogni urgenti: attenzione ai gruppi a rischio, analisi di problemi quali emarginazione, attenzione e consulenza a famiglie con gravi situazioni socio-economiche, integrazione dei disabili ... Richiede abilità empatiche, abilità sociali e chiarezza orientamento / preoccupazione / consapevolezza sociale: Es: Geriatra, assistente sociale, educatore sociale, religioso ...",
educazione=>"Si tratta di attività legate alla formazione e all'istruzione, alla cultura e alla diffusione delle informazioni. Es: insegnante di scuola primaria o secondaria, insegnante di educazione speciale,consulente, insegnante, monitor del tempo libero, bibliotecario, traduzione e interpretazione, gestione museale.",
sciumane=>"Aree professionali legate allo studio delle scienze umane e Scienze sociali, come sociologia, giurisprudenza, filosofia, psicologia, filologia, storia,giornalismo, notiziari radiofonici, televisivi, ecc.",
salute=>"Professioni legate alla prevenzione, diagnosi e cura della salute. Ad esempio, medicina, assistenza infermieristica, farmacia, veterinaria, assistente di clinica, fisioterapia,terapia occupazionale, ottica e optometria, protesi dentarie, ecc.",
matematica=>"Professioni legate alle scienze sperimentali o fisico-naturali e matematica. Es: professionisti specializzati in biologia, fisica, chimica, geologia,Scienze marine, matematica, statistica, ecc.",
informatica=>"Raggruppa le professioni relative a Meccanica, Tecnologia, Tecnologie dell'informazione e comunicazione (informatica, comunicazioni, telematica, come analista di sistemi, analista di applicazioni scientifiche, programmatore, esperto in reti di comunicazione e Internet, ecc.), ingegneria (agronomi industriali, silvicoltura,materiali, elettronica, telecomunicazioni, strade, ecc.); altre professioni in questo gruppo sono quelli legati all'architettura, così come specialisti tecnici in arti grafiche, automobilistico, elettricità, elettronica, tecnico del suono, gemmologia, ecc",
arte=>"Le professioni legate alle sette arti classiche sono: Letteratura,Pittura, scultura, architettura, musica, danza e cinema, oltre alle arti applicate e arte drammatica. Ad esempio musicista, romanziere, scultore, decoratore, restauratore di opere d'arte, sceneggiatura, attore, stilista, architetto, ballerino ecc.",
edfis=>"Sportivo professionista, insegnante di educazione fisica, allenatore sportivo, maestro sci, insegnante di educazione fisica, ecc.",

)
?>
<html>
<head>
<title></title>

</head>
<body>
<form action="/Orientamento/risultati.php" method="post"  >
<?php 
$occ1=$_POST ['c'];

foreach ($occ1 as $modo){
    echo $occ2[$modo].'<br><input type="range" name="points['.$modo.']" min="0" max="100" >';
}



?>
<br>
<p><input type="submit" value="Invia"/></p>
</form>
</body>
</html>