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
            <div class="main_content">
				<script src="https://mwiese.de/js/jquery.js"></script>
				<div><button class="menue_switch mobile" onclick="toggleBlock('auswahlmenue')">Menü ein-/ausblenden</button></div>
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
										echo '					<option value="' . $row['InterpretID'] . '" ';
										echo 'class="kategorie01">' . $row['InterpretName'] . '</option>'.PHP_EOL;
									}
								?>
							</select>
							<!--
							-->
						</div>
					</div>
					<div class="spalte2"><div class="cat2"><select id="output" name="cat" onChange="selectCat(this)"></select></div></div>
					<div class="spalte3"><div class="cat3"><select id="output2" name="song" onChange="selectSong(this)"></select></div></div>
				</div>
				<div id="ausgabe"></div>
            </div>
			<?php include ("../../include/footer1.php"); ?>
</html>