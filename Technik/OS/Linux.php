<select name="linux">
						<?php
						$selected = '';
						if (isset($_POST['submit'])) {
							$selected = $_POST['linux'];
						}
						echo '<option value="" disabled selected></option>';
							add_option($selected,'lin001','Ubuntu Varianten');
							add_option($selected,'lin002','Debian Varianten');
						?>

					</select>
						<?php
				if (isset($_POST['linux'])) {
					switch ($_POST['linux']) {
						case 'lin001': include ("Linux/Ubuntu.php"); break;
						case 'lin002': include ("Linux/Debian.php"); break;
					}
				}
			?>