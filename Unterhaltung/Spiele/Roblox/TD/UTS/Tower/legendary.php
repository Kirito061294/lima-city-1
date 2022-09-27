<select name="legendary">
									<?php
						$selected = '';
						if (isset($_POST['submit'])) {
							$selected = $_POST['legendary'];
						}
						echo '<option value="" disabled selected></option>';
							//add_option($selected,'legendary00a','');
						?>

								</select>
									<?php
					if (isset($_POST['legendary'])) {
						switch ($_POST['legendary']) {
							//case 'legendary00a': include ("Roblox/TD/UTS/Tower/5legendary/.php"); break;
						}
					}
				?>