<select name="uts">
							<?php
						$selected = '';
						if (isset($_POST['submit'])) {
							$selected = $_POST['uts'];
						}
						echo '<option value="" disabled selected></option>';
							add_option($selected,'uts00c','Client Mods');
							add_option($selected,'uts00a','Launcher');
							add_option($selected,'uts00b','Server Plugins');
							//add_option($selected,'uts00d','Launcher');
							//add_option($selected,'uts00e','Launcher');
						?>

						</select>
							<?php
					if (isset($_POST['uts'])) {
						switch ($_POST['uts']) {
							case 'uts00a': include ("PC/MC/L.php"); break;
							case 'uts00b': include ("PC/MC/SP.php"); break;
							case 'uts00c': include ("PC/MC/CM.php"); break;
							//case 'uts00d': include ("PC/MC/L.php"); break;
							//case 'uts00e': include ("PC/MC/L.php"); break;
						}
					}
				?>