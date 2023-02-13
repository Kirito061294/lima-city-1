<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
       "http://www.w3.org/TR/html4/loose.dtd">


<html>
    <head>
        <title>Musik</title>
        <?php include ("../../include/head1.php"); ?>
            <div class="ueberschrift">
                <h1>Musik</h1>
			</div>
			<div class="rechte">
				<p>Der Inhalt dieser eingebetteten Videos stammt nicht von mir und ich habe keinerlei Kontakt oder Verbindung zum Rechteinhaber.</p>
				<p>Sollten rechtliche Probleme auftreten werde ich die betreffenden Videos statt sie einzubetten lediglich verlinken.</p>
			</div>
			<div id="output">
				
			</div>
            <div class="medienzone01">
				<link rel="stylesheet" type="text/css" href="https://mwiese.de/include/style-test.css">
				<div class="musikauswahl">
					<script src="include/ajax.js"></script>
					<script src="../../include/jquery.js"></script>
					<?php require_once ("../../include/data.php");
					//  Für Interpretenliste
					$connection = Connection::getInstance();
					//$InterpretID = filter_input(INPUT_GET, 'InterpretID', FILTER_VALIDATE_INT);
					//		if ($InterpretID === false) {
					//	echo "Ungültiger InterpretID-Wert".PHP_EOL;
					//	exit;
					//}
					$query = "SELECT * FROM Interpret";
					//$query = "SELECT * From Song WHERE InterpretID";

					$statement = $connection->prepare($query);
					//$statement->bindValue(1, $InterpretID, PDO::PARAM_INT);
					$statement->execute();
					
						echo ''.PHP_EOL;
						while ($row = $statement->fetch()) {
						echo '                	<option onClick="selectInterpret(this)" value="' . $row['InterpretID'] . '" class="interpret">' . $row['InterpretName'] . '</option>'.PHP_EOL;
						// ausgabe dieses echo: <option value="1" class="interpret">InterpretName</option>
			
						// and so on for each column in the table...
						}
						//  Für Songtitel
						
						//
					?>
				</div>
            </div>
			<?php include ("../../include/footer1.php"); ?>
</html>