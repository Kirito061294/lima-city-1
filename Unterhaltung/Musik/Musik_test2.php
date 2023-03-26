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
			<div id="info">
				<p>Der Inhalt dieser eingebetteten Videos stammt nicht von mir und ich habe keinerlei Kontakt oder Verbindung zum Rechteinhaber.</p>
				<p>Sollten rechtliche Probleme auftreten werde ich die betreffenden Videos statt sie einzubetten lediglich verlinken.</p>
			</div>
			<button class="knopf" onclick="toggleBlock('info')">Rechtliches</button>
            <div class="medienzone01">
				<script src="https://mwiese.de/js/auswahlmenue.js"></script>
				<script src="https://mwiese.de/js/jquery.js"></script>
				<div>
					<button class="knopf hide1" onclick="toggleBlock('auswahlmenue')">Menü ein-/ausblenden</button>
					<button class="knopf hide2" onclick="toggleGrid('auswahlmenue')">Menü ein-/ausblenden</button>
				</div>
				<div id="auswahlmenue"><link rel="stylesheet" type="text/css" href="https://mwiese.de/include/css/auswahlmenue.css">
					<div class="spalte1">
						<div>
							<!--<select name="musik">-->
								<?php
									require_once ("../../include/data.php");
									//  Für Interpretenliste
									$selected = '';
									
									$connection = Connection::getInstance();
									$query = "SELECT * FROM Interpret ORDER BY InterpretName ASC";
			
									$statement = $connection->prepare($query, [PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY]);
									$statement->execute();
					
									echo ''.PHP_EOL;
									while ($row = $statement->fetch()) {
										echo '					<option onClick="selectInterpret(this)" value="' . $row['InterpretID'] . '"';
										echo 'class="interpret">' . $row['InterpretName'] . '</option>'.PHP_EOL;
									}
								?>
							<!--</select>-->
						</div>
					</div>
					<div class="spalte2"><div id="output" class="cat2"></div></div>
					<div class="spalte3"><div id="output2" class="cat3"></div></div>
				</div>
				<div id="player"></div>
            </div>
			<?php include ("../../include/footer1.php"); ?>
</html>