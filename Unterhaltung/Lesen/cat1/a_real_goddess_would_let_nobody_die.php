<div class="cat2">
							<select name="lesen2" onchange="Lesen_2_02(this)">
								<option value="../placeholder.php" class="kategorie02">-Bitte Auswahl treffen-</option>
								<?php
									$dir = '../cat2/a_real_goddess_would_let_nobody_die'; // Pfad zu deinem Verzeichnis
									if (is_dir($dir)) {
										$files = glob($dir . '/chapter_*.php'); // Sucht nach allen .txt-Dateien im Verzeichnis mit dem Muster 'chapter_*.txt'
										sort($files); // Sortiert die Dateien alphabetisch
										foreach ($files as $file) {
											$filename = basename($file); // Nur den Dateinamen ohne Pfad
											$chapterName = str_replace('.php', '', $filename); // Entfernt die .txt Erweiterung
											echo '<option value="' . $file . '" class="kategorie02">' . $chapterName . '</option>';
										}
									} else {
										echo '<option value="" class="kategorie02">Verzeichnis nicht gefunden!</option>';
									}
								?>
							</select>
						</div>
