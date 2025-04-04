<?php include ("unterhaltung_extras.php");
echo $musik_css; ?>
            <div class="ueberschrift">
                <h1>Musik3</h1>
			</div>
			<div style="display: grid;grid-template-columns: 1fr 1fr;">
				<div class="spalte1" style="border: 0;">
					<button class="knopf" style="width: 100%;" onclick="toggleBlock('info')">Info</button>
				</div>
				<div class="spalte2" style="border: 0;">
					<button class="knopf" style="width: 100%;" onclick="">Temp</button>
				</div>
			</div>
			<div id="info" style="display: none;">
				<p>Der Inhalt dieser eingebetteten Videos stammt nicht von mir und ich habe keinerlei Kontakt oder Verbindung zum Rechteinhaber.</p>
			</div>
            <?php echo $unterhaltung_main_content; ?>
							<select name="musik" onChange="Musik_2_01(this)">
							<?php
								$cat1_1 = '<option value="';
								$cat1_2 = '.php" class="kategorie01">';
								echo '<option value="placeholder'.$cat1_2.'-Bitte Auswahl treffen-</option>'.PHP_EOL;
								echo $cat1_1.'Anime'.$cat1_2.'Anime</option>'.PHP_EOL;
								echo $cat1_1.'Nightcore'.$cat1_2.'Nightcore</option>'.PHP_EOL;
								echo $cat1_1.'Spiele'.$cat1_2.'Spiele</option>'.PHP_EOL;
							?>
							</select>
						<?php echo $unterhaltung_main_content_ende_2; ?>