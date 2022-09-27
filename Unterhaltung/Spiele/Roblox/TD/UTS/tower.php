<select name="tower">
								<?php
						$selected = '';
						if (isset($_POST['submit'])) {
							$selected = $_POST['tower'];
						}
						echo '<option value="" disabled selected></option>';
							add_option($selected,'tower00a','Blackbeard');
						?>

							</select>
								<?php
					if (isset($_POST['tower'])) {
						switch ($_POST['tower']) {
							case 'tower00a': include ("Roblox/TD/UTS/Tower/wb.php"); break;
						}
					}
				?>