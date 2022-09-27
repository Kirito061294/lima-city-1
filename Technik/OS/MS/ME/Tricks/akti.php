<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
      "http://www.w3.org/TR/html4/loose.dtd">

<html>
    <head>
        <title>Windows ME Tricks</title>
        <?php include ("../../../../../include/head1.php"); ?>
            <div class="ueberschrift">
                <h1>Windows ME Tricks</h1>
			</div>
            <div class="linkzone01">
                <p>Wenn man Windows installieren will, aber seinen CD Key verlegt hat geht man so vor:</p>
				<p>Zuerst lässt man die Installation so durchlaufen,bis der erste Neustart kommt,
				dann hält man die Shift Taste gedrückt und bootet in den abgesicherten Modus,
				alle Fehlermeldungen kann man ignorieren und einfach auf OK klicken.</p>
				<p>Dann auf Start, Ausführen und Regedit eingeben.</p>
				<p>Oben links Registrierung, Registrierung exportieren und dann mit rechts auf die exportierte Datei klicken und "Bearbeiten" wählen.</p>
				<p>Nun bei "RegisteredOwner"="" einfach zwischen den "" den gewünschten Namen eigeben.</p>
				<p>Danach bei "ProductId"="" einfach 25 Buchstaben zwischen den "" eingeben mit jeweils einem Bindestrich dazwischen. (z.B: aaaaa-aaaaa-aaaaa-aaaaa-aaaaa)</p>
				<p>Dann abspeichern und die Registrierung durch doppelklick und Klick auf "Ja" einfügen.</p>
				<p>Nun geht es nach einem Neustart sofort mit der Treibereinrichtung im Setup weiter.</p>
				<p>Dieser Trick funktioniert bei Windows 98, 95, und ME. (bei anderen wäre es mir nicht bekannt)</p>
            </div>
                <?php include ("../../../../../include/footer1.php"); ?>
</html>