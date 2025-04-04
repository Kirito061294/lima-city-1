<link rel="stylesheet" type="text/css" href="https://mwiese.de/include/css/auswahlmenue.css">
			<div class="ueberschrift">
                <h1>Betriebssysteme</h1>
			</div>
			<div class="main_content">
				<div><button class="menue_switch mobile" onclick="toggleBlock('auswahlmenue')">Menü ein-/ausblenden</button></div>
				<div id="auswahlmenue">
					<div class="spalte1">
						<div>
							<select name="OS" onChange="OS_01(this)">
								<?php
									$Spalte1_Tabelle = 'Tabelle_OS_01';
									$Spalte1_ID = 'OS_01_ID';
									$Spalte1_Bezeichnung = 'OS_01_Name';
	
									require_once ("../include/data.php");
									//  Für Interpretenliste
									$selected = '';
									
									$connection = Connection::getInstance();
									$query = "SELECT * FROM $Spalte1_Tabelle";
			
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
					<div class="spalte2"><div class="cat2"><select id="output" onChange="OS_02(this)"></select></div></div>
					<div class="spalte3"><div class="cat3"><select id="output2" onChange="OS_03(this)"></select></div></div>
				</div>
				<div id="ausgabe"></div>
            </div>