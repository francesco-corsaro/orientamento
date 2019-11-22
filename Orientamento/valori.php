<?php session_start();
$_POST['punti'];
$_SESSION['competenzeprofessionali']=array();

array_push ($_SESSION['competenzeprofessionali'],$_POST['punti']) ;
/*creo un array da inviare al database
*/
$arr1=array();
$arr1=$_POST['punti'];
require 'DB/InsertCompetenze.php';
$valori=array(
    Disponibilita_di_tempo_libero=>" <strong>Disponibililtà di tempo libero</strong> |avere un'occupazione che consente un orario flessibile, per poterlo combinare con altre attività.",
    Indipendenza=>" essere in grado di completare autonomamente le attività professionali, consentendo il raggiungimento delle proprie idee, convinzioni; sviluppando prospettive o protocolli d'azione per raggiungere gli obiettivi o i risultati richiesti.",
    Prestigio=>' ottenere riconoscimento, reputazione, popolarità per successi sul lavoro. Distinguersi tra le persone che esercitano la stessa professione.',
    Altruismo=>' essere in grado di aiutare gli altri e facilitare il loro benessere. Solidarietà con i problemi e difficoltà sociali.',
    Lavoro_guidato_supervisionato=>' agire sotto la direzione o gli ordini di altri, senza che sia necessario assumersi responsabilità.',
    Creatività=>" avere un'occupazione in cui le cose possono essere concepite, con immaginazione. Sviluppare pensieri, realizzare proposte e pianificare possibilità nate della nostra capacità di creare attraverso un processo fantasioso.",
    Relazione_sociale=>" lavorare a diretto contatto con le persone. Comunicazione,scambi sociali. Avere la possibilità di incontrare persone, approfondire relazioni sociali.",
    Potere_responsabilità=>" esser il dirigente o il capo del gruppo di lavoro, avere la capacità di prendere decisioni, essere il leader che guida ed è responsabile delle azioni degli altri. Coordinare, supervisionare, motivare,guidare e consigliare",
    Lavoro_stabile=>" in cui la probabilità di diventare disoccupati è minima, che l'occupazione garantisce il lavoro (e quindi la remunerazione a cui è associato)v. La percezione della sicurezza e stabilità del lavoro come primato",
    Retribuzione=>" ricevere un buon stipendio per il lavoro svolto.",
    Attività_routine=>" eseguire un lavoro con poca complessità, molto organizzato in un sistema chiuso, dove lo sviluppo dell'attività quotidiana è molto simile giorno per giorno, non è soggetto a troppi cambiamenti e facilmente si acquisiscono competenze nell'esecuzione dei compiti, che di solito saranno ripetitivi e molto simili tra loro.",
    Varietà_Diversità=>" avere l'opportunità di realizzare differenti lavori, viaggi, intraprendere nuovi compiti, che possono comportare una certa avventura,sistemi di lavoro aperti, in cui lo sviluppo non è sempre noto, e si possono ottenere i risultati attraverso differenti percorsi.",
);
?>
<html><head>
<title></title>
<?php require 'style.php';?>
</head>
<body>
<h1>Valori professionali</h1>
<div class="col-9 consegna">
	In questa sezione del questionario, si continua analizzando in maniera multidimensionale i nostri talenti e vocazioni, al fine di progettare con la massima concretezza possibile la tipologia di lavoro per la quale siamo più proattivi. Questo è un concetto di vitale importanza che è stato preso in considerazione nell'elaborazione di questo programma di orientamento, perché dà significato al processo stesso e implica il percorso verso processo decisionale.
La proattività è un atteggiamento in cui il soggetto assume il pieno controllo del suo comportamento in modo attivo, il che implica prendere iniziative nello sviluppo di azioni creative ed audaci per generare miglioramenti, facendo prevalere la libertà di scelta sulle circostanze della vita.<br>
Di seguito è riportato un elenco di valori professionali (quelli che sono considerati di grande importanza nel campo del lavorativo/professionale e che forniscono soddisfazione nell'esercizio di una determinata professione).
Leggi la lista presentata e stabilisci un punteggio da 0 a 100. Il punteggio 100  indica quelle che vorresti di più avere in un ambiente di lavoro "ideale", in una futura attività professionale. 

</div>
<form action="interessi.php" method="post"  >
<?php 


 foreach ($valori as $valore=>$testo){
    echo  '<div class="col-12 tenda">
            <b class="color">'.$valore.'</b>:
          <p class="r">'.$testo.'</p><br><br><br />
          <b class="color">0</b>
          <input type="range" name="punti1['.$valore.']" min="0" max="100" class="slider" id="myRange>
          <b class="color"> 100 </b>
           </div><br><br>';
          
 }
?>
<div class="col-12 tenda">
<?php echo $stato ;?>
</div>
<br>
<p><input type="submit" value="Invia"/></p>
</form>


<br>
<a href="risultati.php">Risultati</a>
</body>
</html>