<select name="uncommon">
									<?php
						$selected = '';
						if (isset($_POST['submit'])) {
							$selected = $_POST['uncommon'];
						}
						echo '<option value="" disabled selected></option>';
							//add_option($selected,'uncommon00a','');
						?>

								</select>
									<?php
					if (isset($_POST['uncommon'])) {
						switch ($_POST['uncommon']) {
							//case 'uncommon00a': include ("Roblox/TD/UTS/Tower/2uncommon/.php"); break;
						}
					}
				?>