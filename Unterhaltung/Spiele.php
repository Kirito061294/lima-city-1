<?php include ("unterhaltung_extras.php");
echo $spiele_css; ?>
            <div class="ueberschrift">
                <h1>Spiele</h1>
			</div>
			<button class="knopf" onclick="toggleBlock('info')">Info</button>
			<div id="info">
                <p>Die meisten Dateilinks stammen nicht von mir und ich habe keinen Kontakt zum Uploader.</p>
                <p>Ich übernehme keine verantwortung für eventuell auftretende Schwierigkeiten</p>
            </div>
            <?php echo $unterhaltung_main_content_2; ?>
							<select name="Spiele" onChange="Spiele_01(this)">
								<?php
									$Spalte1_Tabelle = 'Tabelle_Spiele_01';
									$Spalte1_ID = 'Spiele_01_ID';
									$Spalte1_Bezeichnung = 'Spiele_01_Name';
	
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
					<div class="spalte2"><div class="cat2"><select id="output" onChange="Spiele_02(this)"></select></div></div>
					<div class="spalte3"><div class="cat3"><select id="output2" onChange="Spiele_03(this)"></select></div></div>
				</div>
				<div id="ausgabe"></div>
            </div>