<select name="pc">
						<?php
					$selected = '';
					if (isset($_POST['submit'])) {
						$selected = $_POST['pc'];
					}
					echo '<option value="" disabled selected></option>';
						add_option($selected,'pc00a','Minecraft');
						add_option($selected,'pc00b','Star Citizen');
					?>

					</select>
						<?php
					if (isset($_POST['pc'])) {
						switch ($_POST['pc']) {
							case 'pc00a': include ("PC/MC/Minecraft.php"); break;
							case 'pc00b': include ("PC/SC/StarCitizen.php"); break;
						}
					}
				?>