<select name="uts">
							<?php
						$selected = '';
						if (isset($_POST['submit'])) {
							$selected = $_POST['uts'];
						}
						echo '<option value="" disabled selected></option>';
							add_option($selected,'uts00a','Türme');
						?>

						</select>
							<?php
					if (isset($_POST['uts'])) {
						switch ($_POST['uts']) {
							case 'uts00a': include ("PC/MC/L.php"); break;
						}
					}
				?>