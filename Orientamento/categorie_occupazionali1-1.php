<?php session_start();?>
<?php 
$professionali=" La caratteristica principale che inquadra le attività svolte dai professionisti appartenenti a questo gruppo è l'abilità manipolativa come competenza di maggior valore per l'esecuzione di questi lavori, i mestieri. Occasionalmente sono utilizzati macchinari e strumenti specifici, ma l'abilità manipolativa è essenziale. Esempio barbiere, vetraio, sarta, tappezziere, fabbro, orologiaio, gioielliere,muratore, stuccatore, ecc";
$agricoltura= "Attività svolte in terreni, gestire il bestiame, pescare Es: Agricoltura, zootecnia, orticoltura, floricoltura, miniere, taglio della pietra, pesca,esperti in lavori agricoli, agenti forestali, ecc.";
$trasporti= "Professioni relative al trasporto terrestre, marittimo o aereo di viaggiatori o merce. Es: autista di autobus, camionista, tassista, ferrovia,Autista della metropolitana, capitano della nave mercantile, ufficiale della nave da crociera, pilota civile,eccetera";
$polizia="Professioni le cui funzioni primarie consistono nella difesa del territorio, il mantenimento dell'ordine pubblico, prevenzione e indagine sui comportamenti criminali e protezione di persone o cose. Es: ufficiale o sottufficiale delle forze armate, polizia locale, guardia della giuria,guardia del corpo, guardiano, ecc.";
$segreteria="È composto da professioni la cui prestazione principale è la gestione amministrativa: scrittura, lettura, trascrizione, selezione, elaborazione e archiviazione di documentazione relativa a un'entità, gruppo, organizzazione o società, può coinvolgere o meno l'attenzione diretta al pubblico. Es: Impiegato di banca, direttore amministrativo, segretario, operatore telefonico, funzionario postale, receptionist, ecc.";
$commerciale="Professioni legate al mondo del commercio, vendite,Affari e vita aziendale. Ad esempio, economista, commerciante, venditore, agente di borsa e borsa valori, consulente per gli investimenti, agente assicurativo, gestione e amministrazione affari, marketing, pubbliche relazioni, servizi al consumatore , ecc.";
$servsoc="Questo gruppo è composto da professioni che segnalano un servizio per la popolazione in generale e per lo sviluppo della società in termini di uguaglianza, giustizia, in modo che la comunità acquisisca i diritti costituzionali, fornendo assistenza e benessere ai gruppi con una maggiore domanda e bisogni urgenti: attenzione ai gruppi a rischio, analisi di problemi quali emarginazione, attenzione e consulenza a famiglie con gravi situazioni socio-economiche, integrazione dei disabili ... Richiede abilità empatiche, abilità sociali e chiarezza orientamento / preoccupazione / consapevolezza sociale: Es: Geriatra, assistente sociale, educatore sociale, religioso ...";
$educazione="Si tratta di attività legate alla formazione e all'istruzione, alla cultura e alla diffusione delle informazioni. Es: insegnante di scuola primaria o secondaria, insegnante di educazione speciale,consulente, insegnante, monitor del tempo libero, bibliotecario, traduzione e interpretazione, gestione museale.";
$sciumane="Aree professionali legate allo studio delle scienze umane e Scienze sociali, come sociologia, giurisprudenza, filosofia, psicologia, filologia, storia,giornalismo, notiziari radiofonici, televisivi, ecc.";
$salute="Professioni legate alla prevenzione, diagnosi e cura della salute. Ad esempio, medicina, assistenza infermieristica, farmacia, veterinaria, assistente di clinica, fisioterapia,terapia occupazionale, ottica e optometria, protesi dentarie, ecc.";
$matematica="Professioni legate alle scienze sperimentali o fisico-naturali e matematica. Es: professionisti specializzati in biologia, fisica, chimica, geologia,Scienze marine, matematica, statistica, ecc.";
$informatica="Raggruppa le professioni relative a Meccanica, Tecnologia, Tecnologie dell'informazione e comunicazione (informatica, comunicazioni, telematica, come analista di sistemi, analista di applicazioni scientifiche, programmatore, esperto in reti di comunicazione e Internet, ecc.), ingegneria (agronomi industriali, silvicoltura,materiali, elettronica, telecomunicazioni, strade, ecc.); altre professioni in questo gruppo sono quelli legati all'architettura, così come specialisti tecnici in arti grafiche, automobilistico, elettricità, elettronica, tecnico del suono, gemmologia, ecc";
$arte="Le professioni legate alle sette arti classiche sono: Letteratura,Pittura, scultura, architettura, musica, danza e cinema, oltre alle arti applicate e arte drammatica. Ad esempio musicista, romanziere, scultore, decoratore, restauratore di opere d'arte, sceneggiatura, attore, stilista, architetto, ballerino ecc.";
$edfis="Sportivo professionista, insegnante di educazione fisica, allenatore sportivo, maestro sci, insegnante di educazione fisica, ecc.";
?>

<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>orientamento</title>

<?php require 'style.php';?>
</head>
<body>
<h1>Categorie occupazionali</h1>
<div class="col-12">
    <p class="r">Una categoria professionale comprende una serie di occupazioni o professioni che hanno aspetti comuni. Le caratteristiche che definiscono i	l gruppo professionale sono brevemente descritte e, a titolo esemplificativo, sono incluse alcune delle professioni o professioni che il gruppo contempla.</p>
    <p class="r">1)Leggi attentamente ciascuna delle quattordici categorie professionali incluse,</p>
    <p class="r">2)Dopo un'attenta analisi,clicca sul quadrato in alto a sinistra e seleziona 4 categorie con le quali due ti senti più identificato.</p>
</div>																															
<div class="col-12">
<form action="/Orientamento/4categorieoccupazionali1.php" method="post"  >
 
    <div class="tenda">
    <label class="container">
    	<b class="color">Attività professionali: </b>
    	<input type="checkbox" name="c[]" value="professionali">
    	<span class="checkmark"></span>
    	<?php echo $professionali ?>
    </label>
    </div>
    
<div class="col-9 tenda">
    <label class="container">
    	<b class="color">Attività Bio-agricole:</b>
    	<input type="checkbox"  name="c[]" value="Agricoltura">
    	<span class="checkmark"></span>
    	<?php echo $agricoltura ?>
    </label>
</div>
<div class="col-9 tenda">
    <label class="container">
    	<b class="color">Trasporti</b>
    	<input type="checkbox" name="c[]" value="trasporti">
    	<span class="checkmark"></span>
    	
    	<?php echo $trasporti ?>
    </label>
</div>
<div class="col-9 tenda">
    <label class="container">
    	<b class="color">Servizi di protezione e sicurezza</b>
    	<input type="checkbox"  name="c[]" value="polizia">
    	<span class="checkmark"></span>
    	<?php echo $polizia ?>
    </label><br>
</div>  
 <div class="col-9 tenda">
    <label class="container">
    	<b class="color">Supporto amministrativo e lavoro di ufficio</b>
    	<input type="checkbox" name="c[]" value="segreteria">
    	<span class="checkmark"></span>
    	<?php echo $segreteria ?>
    </label>
</div>
<div class="col-9 tenda">
	<label class="container">
    	<b class="color">Commerciale: economia e finanza</b>
    	<input type="checkbox" name="c[]" value="commerciale">
    	<span class="checkmark"></span>
    	<?php echo $commerciale ?>
	</label>
</div>
<div class="col-9 tenda">
	<label class="container">
		<b class="color">Servizi sociali</b>
    	<input type="checkbox" name="c[]" value="servsoc">
    	<span class="checkmark"></span>
    	<?php echo $servsoc ?>
</label>
</div>
<div class="col-9 tenda">
    <label class="container">
    	<b class="color">Educazione e cultura</b>
    	<input type="checkbox" name="c[]" value="educazione">
    	<span class="checkmark"></span>
    	<?php echo $educazione ?>
    </label>
</div>
<div class="col-9 tenda">
    <label class="container">
  		<b class="color">Scienze umane e sociali</b>   	
    	<input type="checkbox" name="c[]" value="sciumane">
    	<span class="checkmark"></span>
    	<?php echo $sciumane ?>
    </label>
</div>
<div class="col-9 tenda">
    <label class="container">
    	<b class="color">Scienze della salute</b>
    	<input type="checkbox" name="c[]" value="salute">
    	<span class="checkmark"></span>
    	<?php echo $salute ?>
    </label>
</div>
<div class="col-9 tenda">
	<label class="container">
    	<b class="color">Scienze della natura e matematiche</b>
    	<input type="checkbox" name="c[]" value="matematica">
    	<span class="checkmark"></span>
    	<?php echo $matematica ?>
	</label>
</div>
<div class="col-9 tenda">
    <label class="container">
    	<b class="color">Tecnologie ed Informatica</b>
    	<input type="checkbox" name="c[]" value="informatica">
    	<span class="checkmark"></span>
    	<?php echo $informatica ?>
    </label>
</div>   
<div class="col-9 tenda">
<label class="container">
	<b class="color">Arti</b>
	<input type="checkbox" name="c[]" value="arte">
	<span class="checkmark"></span>
	<?php echo $arte ?>
</label>
</div>
<div class="col-9 tenda">
<label class="container">
	<b class="color">Educazione fisica e sport</b>
	<input type="checkbox" name="c[]" value="edfis">
	<span class="checkmark"></span>
	<?php echo $edfis ?>
</label>
</div>
<div class="floatdx">
	<input  type="submit" value="conferma"/>
</div>
</form>
</div>
</body>
</html>

