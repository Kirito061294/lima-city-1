<?php include ("unterhaltung_extras.php");
echo $lesen_css; ?>
            <div class="ueberschrift">
                <h1>Lesen (hidden)</h1>
			</div>
			<div style="display: grid;grid-template-columns: 1fr 1fr;">
				<div class="spalte1" style="border: 0;">
					<button class="knopf" onclick="toggleBlock('info')">Info</button>
				</div>
				<div class="spalte2" style="border: 0;">
					<button class="knopf" onclick="toggleBlocks('chapter_images'); toggleBlocks('chapter_images_alternative');">Bilder aus/einblenden</button>
				</div>
			</div>
			<div id="info">
				<p>Die hier verfügbaren Manga wurden vom Betreiber dieser Seite mit dem Google Übersetzer übersetzt, Fehler sind hierbei möglich.</p>
			</div>
            <?php echo $unterhaltung_main_content; ?>
							<select name="lesen1" onchange="Lesen_2_01(this)">
							<?php
								$cat1_1 = '<option value="';
								$cat1_2 = '.php" class="kategorie01">';
								echo '<option value="placeholder'.$cat1_2.'-Bitte Auswahl treffen-</option>'.PHP_EOL;
								echo $cat1_1.'a_real_goddess_would_let_nobody_die'.$cat1_2.'A real Goddess would let nobody die</option>'.PHP_EOL;
								echo $cat1_1.'ascendence_of_a_bookworm_manga'.$cat1_2.'Ascendence of a Bookworm - Manga</option>'.PHP_EOL;
								echo $cat1_1.'ascension_of_the_sylvan_cosmos'.$cat1_2.'Ascension of the Sylvan Cosmos</option>'.PHP_EOL;
								echo $cat1_1.'Boosted_restart'.$cat1_2.'Boosted restart</option>'.PHP_EOL;
								echo $cat1_1.'Boosted_continuation'.$cat1_2.'Boosted Continuation</option>'.PHP_EOL;
								echo $cat1_1.'Heaven_Earth_Me'.$cat1_2.'Heaven. Earth. Me.</option>'.PHP_EOL;
								echo $cat1_1.'I_was_betrayed_then_reincarnated_as_a_Kitsune'.$cat1_2.'I was betrayed then reincarnated as a Kitsune</option>'.PHP_EOL;
								echo $cat1_1.'Reborn_from_the_Cosmos'.$cat1_2.'Reborn from the Cosmos</option>'.PHP_EOL;
								echo $cat1_1.'The_red_Hand'.$cat1_2.'The red Hand</option>'.PHP_EOL;
							?>
							</select>
						<?php echo $unterhaltung_main_content_ende; ?>