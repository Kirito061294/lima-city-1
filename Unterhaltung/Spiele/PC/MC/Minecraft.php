<select name="minecraft">
							<?php
						$selected = '';
						if (isset($_POST['submit'])) {
							$selected = $_POST['minecraft'];
						}
						echo '<option value="" disabled selected></option>';
							add_option($selected,'mc00c','Client Mods');
							add_option($selected,'mc00a','Launcher');
							add_option($selected,'mc00b','Server Plugins');
							//add_option($selected,'mc00d','Launcher');
							//add_option($selected,'mc00e','Launcher');
						?>

						</select>
							<?php
					if (isset($_POST['minecraft'])) {
						switch ($_POST['minecraft']) {
							case 'mc00a': include ("PC/MC/L.php"); break;
							case 'mc00b': include ("PC/MC/SP.php"); break;
							case 'mc00c': include ("PC/MC/CM.php"); break;
							//case 'mc00d': include ("PC/MC/L.php"); break;
							//case 'mc00e': include ("PC/MC/L.php"); break;
						}
					}
				?>