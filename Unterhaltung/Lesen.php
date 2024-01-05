<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
       "http://www.w3.org/TR/html4/loose.dtd">


<html>
    <head>
        <title>Manga</title>
        <?php include ("../include/head1.php"); ?>
			<link rel="stylesheet" type="text/css" href="Lesen/Lesen.css">
            <div class="ueberschrift">
                <h1>Manga</h1>
			</div>
			<button class="knopf" onclick="toggleBlock('info')">Info</button>
			<div id="info">
				<p>Die hier verfügbaren Inhalte wurden vom Betreiber dieser Seite mit dem Google Übersetzer übersetzt, Fehler sind hierbei möglich.</p>
			</div>
            <div class="main_content">
				<script src="https://mwiese.de/js/jquery.js"></script>
				<div><button class="menue_switch mobile" onclick="toggleBlock('auswahlmenue')">Menü ein-/ausblenden</button></div>
				<div id="auswahlmenue">
					<link rel="stylesheet" type="text/css" href="https://mwiese.de/include/css/auswahlmenue.css">
					<script src="Lesen/auswahlmenue.js"></script>
					<div class="spalte1">
						<div>
							<select name="Lesen" onChange="Lesen_01(this)">
								<?php
									$Spalte1_Tabelle = 'Tabelle_Lesen_01';
									$Spalte1_ID = 'Lesen_01_ID';
									$Spalte1_Bezeichnung = 'Lesen_01_Name';
	
									require_once ("../include/data.php");
									//  Für Interpretenliste
									$selected = '';
									
									$connection = Connection::getInstance();
									$query = "SELECT * FROM $Spalte1_Tabelle WHERE visible = '1'";
			
									$statement = $connection->prepare($query, [PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY]);
									$statement->execute();
					
									echo ''.PHP_EOL;
									while ($row = $statement->fetch()) {
										echo '					<option value="' . $row[$Spalte1_ID] . '" ';
										echo 'class="kategorie01">' . $row[$Spalte1_Bezeichnung] . '</option>'.PHP_EOL;
									}
								?>
							</select>
						</div>
					</div>
					<div class="spalte2"><div class="cat2"><select id="output" name="variant" onChange="Lesen_02(this)"></select></div></div>
					<div class="spalte3"><div class="cat3"><select id="output2" name="chapter" onChange="Lesen_03(this)"></select></div></div>
				</div>
				<div id="ausgabe"></div>
            </div>
			<?php include ("../include/footer1.php"); ?>
</html>