<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
       "http://www.w3.org/TR/html4/loose.dtd">


<html>
    <head>
        <title>Musik</title>
        <?php include ("../../include/head1.php"); ?>
			<link rel="stylesheet" type="text/css" href="include/musik.css">
            <div class="ueberschrift">
                <h1>Musik</h1>
			</div>
			<button class="knopf" onclick="toggleBlock('info')">Rechtliches</button>
			<div id="info">
				<p>Der Inhalt dieser eingebetteten Videos stammt nicht von mir und ich habe keinerlei Kontakt oder Verbindung zum Rechteinhaber.</p>
			</div>
            <div class="medienzone01">
				<script src="https://mwiese.de/js/jquery.js"></script>
				<div>
					<button class="menue_switch" onclick="switch_button('auswahlmenue')">Menü ein-/ausblenden</button>
				</div>
				<div id="auswahlmenue">
					<link rel="stylesheet" type="text/css" href="https://mwiese.de/include/css/auswahlmenue.css">
					<script src="https://mwiese.de/js/auswahlmenue.js"></script>
					<div class="spalte1">
						<div>
							<select name="musik" onChange="selectInterpret(this)">
								<?php
									require_once ("../../include/data.php");
									//  Für Interpretenliste
									$selected = '';
									
									$connection = Connection::getInstance();
									$query = "SELECT * FROM Interpret";
			
									$statement = $connection->prepare($query, [PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY]);
									$statement->execute();
					
									echo ''.PHP_EOL;
									while ($row = $statement->fetch()) {
										echo '					<option onClick="selectInterpret(this)" value="' . $row['InterpretID'] . '"';
										echo 'class="kategorie01">' . $row['InterpretName'] . '</option>'.PHP_EOL;
									}
								?>
							</select>
						</div>
					</div>
					<div class="spalte2"><div id="output" class="cat2"></div></div>
					<div class="spalte3"><div id="output2" class="cat3"></div></div>
				</div>
				<div id="ausgabe"></div>
            </div>
			<?php include ("../../include/footer1.php"); ?>
</html>