<select name="rare">
									<?php
						$selected = '';
						if (isset($_POST['submit'])) {
							$selected = $_POST['rare'];
						}
						echo '<option value="" disabled selected></option>';
							//add_option($selected,'rare00a','');
						?>

								</select>
									<?php
					if (isset($_POST['rare'])) {
						switch ($_POST['rare']) {
							//case 'rare00a': include ("Roblox/TD/UTS/Tower/3rare/.php"); break;
						}
					}
				?>