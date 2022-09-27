<select name="mythical">
									<?php
						$selected = '';
						if (isset($_POST['submit'])) {
							$selected = $_POST['mythical'];
						}
						echo '<option value="" disabled selected></option>';
							//add_option($selected,'mythical00a','');
						?>

								</select>
									<?php
					if (isset($_POST['mythical'])) {
						switch ($_POST['mythical']) {
							//case 'mythical00a': include ("Roblox/TD/UTS/Tower/6mythical/.php"); break;
						}
					}
				?>