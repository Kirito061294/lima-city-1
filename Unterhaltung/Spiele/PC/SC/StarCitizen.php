<select name="starcitizen">
							<?php
						$selected = '';
						if (isset($_POST['submit'])) {
							$selected = $_POST['starcitizen'];
						}
						echo '<option value="" disabled selected></option>';
							add_option($selected,'sc00a','Spiel');
							add_option($selected,'sc00b','Externe Tools');
							add_option($selected,'sc00c','Infos');
						?>

						</select>
							<?php
					if (isset($_POST['starcitizen'])) {
						switch ($_POST['starcitizen']) {
							case 'sc00a': include ("PC/SC/game.php"); break;
							case 'sc00b': include ("PC/SC/zusatz.php"); break;
							case 'sc00c': include ("PC/SC/infos.php"); break;
						}
					}
				?>