<link rel="stylesheet" type="text/css" href="../include/css/auswahlmenue.css">
            <div class="ueberschrift">
                <h1>Themen</h1>
			</div>
            <div class="main_content">
				<div><button class="menue_switch mobile" onclick="toggleBlock('auswahlmenue')">Menü ein-/ausblenden</button></div>
				<div id="auswahlmenue" style="grid-template-columns: 1fr 1fr;">
					<div class="spalte1">
						<div class="cat1">
							<select name="themen1" onchange="Themen_01(this)">
							<?php
								$cat1_1 = '<option value="';
								$cat1_2 = '.php" class="kategorie01">';
								echo '<option value="placeholder'.$cat1_2.'-Bitte Auswahl treffen-</option>'.PHP_EOL;
								echo $cat1_1.'Gott'.$cat1_2.'Gott</option>'.PHP_EOL;
								echo $cat1_1.'Jesus'.$cat1_2.'Jesus</option>'.PHP_EOL;
							?>
							</select>
						</div>
					</div>
					<div class="spalte2" id="spalte2"></div>
				</div>
				<div id="ausgabe" style="width: 90%;padding-left: 5%;"></div>
            </div>