<?php
	$Spalte1_Tabelle = 'Tabelle_BasisBibel_Buch';
	$Spalte1_ID = 'Buch_ID';
	$Spalte2_Tabelle = 'Tabelle_BasisBibel_Kapitel';
	$Spalte2_ID = 'Kapitel_ID';
	$Ausgabe_1 = 'Kapitel_File';
	
	require_once ("../../../include/data.php");
	$connection = Connection::getInstance();
	
	$kapiteldarstellung = '<div class="kapiteldarstellung">'.PHP_EOL;
	$verse = '									<div class ="verse">'.PHP_EOL.'										<div class="zitat1"><p>';
	$vers_ende = '</p></div>'.PHP_EOL;
	$kommentar = '										<div class="kommentare" style="display: none;"><p>';
	$kommentar_visible = '										<div class="kommentare"><p>';
	$verse_ende = '</p></div>'.PHP_EOL.'									</div>'.PHP_EOL;
	$verse_ende_o_k = '									</div>'.PHP_EOL;
	$jesus_christus = 'Jesus Christus: Der Name ist zugleich ein Bekenntnis. Wer Jesus als Christus anerkennt, glaubt an ihn als Retter und Erlöser der Welt.';
	$amen = 'Amen: Das hebräische Wort bedeutet »So ist es! / So soll es sein!«';
	$tag_des_herrn = 'Tag des Herrn: Gemeint ist der Sonntag, an dem sich die Gemeinde zum Gottesdienst versammelte.';
	$menschensohn = 'Menschensohn: Im Neuen Testament ein Titel für Jesus, der von Gott zum Herrscher und Retter der Welt bestimmt wurde. Die folgende Beschreibung erinnert an Daniel 7,9-14.';
	$engel = 'Engel: Boten Gottes, die in seinem Auftrag unterwegs sind und seine Botschaft überbringen.';
	$himmel = 'Himmel: Im übertragenen Sinn beschreibt »Himmel« den Bereich, in dem Gott wohnt.';
	$halleluja = 'Halleluja: Hebräisch für »Lobt den HERRN«. Im Gottesdienst wird die Gemeinde damit zum Gotteslob aufgefordert.';
	$weiß = 'weiß: Die Farbe steht für die Zugehörigkeit zur himmlischen Welt.';
	$ehre = 'Ehre, ehren: Einen Menschen oder Gott ehren heißt, ihn so zu behandeln, wie es seiner Stellung entspricht.';
	$hurerei = 'Hurerei: Bild sowohl für sexuelle Ausschweifungen als auch für die Anbetung fremder Götter.';
	$diener_gottes = 'Diener Gottes: Bezeichnung für eine Person, die Gott als ihren Herrn anerkennt. Sie handelt in seinem Namen, ist aber auch abhängig von ihm.';
	$ehrfurcht = 'Ehrfurcht: Eine Haltung größter Hochachtung gegenüber Gott, die sowohl Bewunderung als auch Erschrecken zum Ausdruck bringt.';
	$herr = 'Herr: Bezeichnung für Gott. Das griechische Alte Testament verwendet das Wort »Herr« an den Stellen, an denen im hebräischen Text der Gottesname steht.';
	$der_allmaechtige = 'der Allmächtige: Titel für Gott, in dem seine überlegene Macht zum Ausdruck kommt.';
	$lamm_gottes = 'Lamm Gottes: Bild, das Christus mit einem Opfertier vergleicht. Es nimmt die Sünde weg, die trennend zwischen Gott und Mensch steht.';
	$rein = 'rein: Bezeichnet Menschen, Tiere und Dinge, die dafür vorbereitet sind, in der Nähe Gottes zu sein. In der Bibel sind dabei bestimmte religiöse Vorschriften zu beachten.';
	$heilige = 'Heilige: Bezeichnung für die Anhänger von Jesus Christus.';
	$bruder_schwester = 'Bruder, Schwester: Wörtlich »Bruder«. Das griechische Wort bezeichnet männliche UND weibliche Mitglieder der Gemeinde.';
	$zeuge_jesus = 'Zeugen für Jesus: Menschen, die bereit sind, für ihren Glauben an Jesus zu sterben.';
	$geist_gottes = 'Geist Gottes: Kraft, durch die Gott in der Welt wirkt.';
	$propheten = 'Prophet: Verkündet, was Gott in einer bestimmten Situation zu sagen hat.';
	$wort_gottes = 'Wort Gottes: Gottes Versprechen, dass die Menschen durch Tod und Auferstehung von Christus mit Gott versöhnt sind.';
	$sklave = 'Sklaven: Sie gehörten zum Eigentum anderer Menschen, bekamen keinen Lohn für ihre Arbeit und konnten nicht frei über ihr Leben entscheiden.';
	$siegeskranz = 'Siegeskranz: Ein meist aus grünen Zweigen geflochtener Kranz. Er wurde dem Sieger nach einer Schlacht oder einem sportlichen Wettkampf wie eine Krone aufgesetzt.';
	$sieben_geister = 'sieben Geister: Sieben Engel, die vor dem Thron Gottes im Himmel stehen.';
	$vier_lebewesen = 'vier Lebewesen: Der Text nimmt ein Bild aus den Visionen des Propheten Ezechiel auf, der die Herrlichkeit Gottes inmitten von vier Lebewesen sieht; vgl. Ezechiel 1,4-14.';
	$siegel = 'Siegel: Ein persönlicher Stempel, durch dessen Abdruck ein Brief, eine Urkunde oder ein Vertrag beglaubigt wird.';
	$raeucherwerk = 'Räucherwerk: Mischung aus duftenden Harzen wie Weihrauch, die im Tempel als Räucheropfer dargebracht werden.';
	$blut = 'dein Blut: Anspielung auf den Tod von Jesus Christus am Kreuz. Es steht für Gottes Zuwendung zu den Menschen, für die Jesus sein Leben am Kreuz opferte, um die Sünden der Menschen wegzunehmen.';
	$herrlichkeit = 'Herrlichkeit: Bezeichnet das, was einer Person Ansehen und Macht verleiht. Gottes Herrlichkeit stellt man sich auch als strahlenden Lichtglanz vor.';
	$frieden = 'Frieden: Umfassender Zustand von Glück und Wohlergehen des Einzelnen und der Gemeinschaft, der aus der Beziehung mit Gott hervorgeht.';
	$olivenbaum = 'Olivenbaum: Im östlichen Mittelmeerraum weitverbreiteter Baum, aus dessen Früchten Öl hergestellt wird. Es gehörte in der Antike zu den Grundnahrungsmitteln.';
	$wein = 'Wein: Ein im Mittelmeerraum übliches Nahrungs- und Genussmittel. Wein ist zugleich Sinnbild für Lebensfreude und Wohlstand.';
	$altar = 'Wein: Ein im Mittelmeerraum übliches Nahrungs- und Genussmittel. Wein ist zugleich Sinnbild für Lebensfreude und Wohlstand.';
	$schriftrolle = 'Schriftrolle/Buchrolle: Vorläufer des Buchs. Sie besteht aus aneinandergenähten Lederstücken, auf die der Text in Spalten nebeneinandergeschrieben wurde.';
	$a144000 = '144.000: Zahl, die für göttliche Vollendung steht. Sie setzt sich zusammen aus der Zahl 12, die für die 12 Stämme Israels und auch für die 12 Jünger von Jesus steht, und aus der Zahl 1000, die gewaltige Größe und Ewigkeit bedeutet: 12 × 12 × 1000.';
	$israel = 'Israel: Nachkommen der zwölf Söhne Jakobs. Gott hat mit Israel einen Bund geschlossen.';
	$palmzweige = 'Palmzweige: Könige und Feldherren wurden beim Einzug in eine Stadt mit Palmzweigen und Jubel begrüßt.';
	$hirte = 'Hirte: Verantwortlich für den Schutz und Bestand der Herde. In der Antike steht das Hirtenbild oft für den König oder für Gott.';
	$ewiges_leben = 'ewiges Leben: Leben im Reich Gottes und in unmittelbarer Gemeinschaft mit Gott nach der Auferstehung vom Tod.';
	$satan_teufel = 'Satan, Teufel: Gegenspieler Gottes. Er versucht, die Menschen zu einem Verhalten zu bewegen, das Gottes Willen widerspricht.';
	$seele = 'Seele: Steht für das, was auch über den Tod hinaus das Ganze der Person ausmacht.';
	$auferstehung = 'Auferstehung: Meint die Auferweckung vom Tod und das ewige Leben im Reich Gottes.';
	$heilig = 'heilig: Menschen oder Dinge, die zu Gott gehören und mit ihm in Verbindung stehen.';
	$priester = 'Priester: Bringt Opfer im Heiligtum dar und deutet den Willen Gottes.';
	$gog_magog = 'Gog, Magog: In Ezechiel 38–39 tritt ein rätselhafter Anführer mit Namen »Gog« auf, der aus dem Land Magog kommt. Er wird als letzter Feind gegen Israel auftreten und kämpfen.';
	$falscher_prophet = 'falscher Prophet: Gibt vor, im Auftrag Gottes zu reden, und verführt seine Mitmenschen so zu falschem Tun.';
	$buch_des_lebens = 'Buch des Lebens: Eine Art Bürgerliste, in der die Bewohner des Reiches Gottes verzeichnet sind.';
	$staemme_israels = 'Stämme Israels: Israel versteht sich als Verband von zwölf Stämmen, die auf die Nachkommen der Söhne Jakobs zurückgehen.';
	$neues_jerusalem = 'neues Jerusalem: Bild für die neue Welt, in der alle Bereiche des Lebens durch die Gegenwart Gottes grundlegend verwandelt sind.';
	$goetze = 'Götze: Abfällige Bezeichnung für eine fremde Gottheit oder ihr Standbild.';
	$leuchter = 'Leuchter: Ständer, auf dem Öllampen oder Kerzen für die Beleuchtung eines Raums abgestellt werden.';
	$fluch = 'Fluch: Ein Unheil bringendes Wort, durch das die Lebenskraft oder das Wohlergehen des Verfluchten gemindert werden soll.';
	$diener_christus = 'Diener von Christus: Bezeichnung für eine Person, die Christus als ihren Herrn anerkennt. In seinem Auftrag und mit seiner Vollmacht verkündet sie das Wort Gottes.';
	$der_zeitpunkt = 'der Zeitpunkt: Zeitpunkt, an dem Christus wiederkommt. Dann bricht mit dem Gericht Gottes über die Welt endgültig das Reich Gottes an. Die Zeit davor ist von Angst und Schrecken geprägt.';
	$wurzel_davids = '';
	$gnade = 'Gnade: Liebevolle Zuwendung Gottes, die er den Menschen ohne Vorbedingung schenkt.';
	$braut_christus = 'Braut: Bild für die Gemeinschaft aller, die an Christus glauben und im Himmel sind. Sie stehen der Gemeinschaft der Menschen bei, die an Christus glauben und noch auf der Erde sind.';
	$baum_des_lebens = 'Baum des Lebens: Steht im Paradies. Wer von seinen Früchten isst, wird niemals sterben.';
	$baeume_des_lebens = 'Bäume des Lebens: Hier werden Bilder aus der Schöpfungserzählung in 1. Mose/Genesis 2,9 und aus der Vision des Propheten Ezechiel vom neuen Tempel Gottes in Ezechiel 47,12 miteinander verbunden. Der neue Tempel soll im neuen Jerusalem stehen, das bei Ezechiel den Namen »Hier ist der Herr« trägt.';
	$unrein = 'unrein: Bezeichnet Menschen, Tiere und Dinge, die aus unterschiedlichen Gründen nicht dafür vorbereitet sind, in der Nähe Gottes zu sein.';
	$die_stadt = 'die Stadt: Meint das himmlische Jerusalem als Bild für die neue Welt, in der alle Bereiche des Lebens durch die Gegenwart Gottes grundlegend verwandelt sind.';
	$apostel = 'Apostel: Wörtlich »Ausgesandte«. Menschen, die dazu berufen sind, die Gute Nachricht von Jesus Christus zu verkünden. Im engeren Sinn die zwölf Jünger von Jesus, die ihn während seines Lebens begleiteten.';
	$erbe = 'Erbe: Ursprünglich der Anteil der Israeliten an dem Land, das Gott ihnen gibt. Im Neuen Testament bedeutet es ein Leben im Reich Gottes, in unmittelbarer Gemeinschaft mit ihm.';
	$alpha_omega = 'Alpha, Omega: Der erste und der letzte Buchstabe des griechischen Alphabets. In der Bezeichnung kommt zum Ausdruck, dass Gott nicht nur der Schöpfer der Welt ist, sondern dass am Ende der Zeit auch sein Reich anbricht.';

	// Bei Klick auf Interpreten:
	$query = "SELECT * FROM $Spalte2_Tabelle WHERE $Spalte2_ID =:kapitel";

	$statement = $connection->prepare($query, [PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY]);
	$statement->execute([":kapitel"=>$_POST["$Spalte2_Tabelle"]]);
	$data=$statement->fetchAll();
	$array=[];
	foreach($data as $row) {
		$array[]=[$row["$Ausgabe_1"],$row["$Spalte1_ID"]];
		echo '                	<p>';
		include ('kapitel/'.$row[$Spalte1_ID].'/'.$row[$Ausgabe_1].'.txt');
		echo '</p>'.PHP_EOL;
	}
?>