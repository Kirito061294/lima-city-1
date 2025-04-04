<div class="ueberschrift">
                <h1>BasisBibel</h1>
			</div>
			<link rel="stylesheet" type="text/css" href="../../include/css/auswahlmenue.css">
			<div class="schalter 2-grids"><div>
				<button class="knopf" onclick="toggleBlock('info')">Quellenangaben ein-/ausblenden</button>
				<button class="knopf" onclick="toggleBlocks('kommentare')">Kommentare ein/ausblenden</button>
			</div></div>
			<div id="info" style="display: none;">
				<p><a href="https://www.die-bibel.de/bibeln/unsere-uebersetzungen/basisbibel/basisbibel-uebersetzung/uebersetzungs-und-redaktionsteam/">Copyright Verweis</a></p>
				<p>Sämtliche auf dieser Seite befindlichen Texte stammen von <a href="https://www.die-bibel.de/bibeln/unsere-uebersetzungen/basisbibel/">hier</a></p>
			</div>
            <div class="main_content">
				<div>
					<div><button class="menue_switch mobile" onclick="toggleBlock('auswahlmenue')">Menü ein-/ausblenden</button></div>
				</div>
				<div id="auswahlmenue" style="grid-template-columns: 1fr 1fr;">
					<div class="spalte1">
						<div>
							<select name="buch" onChange="Bibel_01(this)">
								<?php
									$Spalte1_Tabelle = 'Tabelle_BasisBibel_Buch';
									$Spalte1_ID = 'Buch_ID';
									$Spalte1_Bezeichnung = 'Buch_Name';
									
									require_once ("../../include/data.php");
									//  Für Interpretenliste
									$selected = '';
									$connection = Connection::getInstance();
									$query = "SELECT * FROM $Spalte1_Tabelle WHERE visible = '1'";
									$statement = $connection->prepare($query, [PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY]);
									$statement->execute();
									echo ''.PHP_EOL;
									while ($row = $statement->fetch()) {
										echo '								<option value="' . $row[$Spalte1_ID] . '" ';
										echo 'class="kategorie01">' . $row[$Spalte1_Bezeichnung] . '</option>'.PHP_EOL;
									}
								?>
							</select>
						</div>
					</div>
					<div class="spalte2"><div class="cat2"><select id="output" name="kapitel" onChange="Bibel_02(this)"></select></div></div>
				</div>
				<div id="ausgabe" class="ausgabe"></div>
            </div>