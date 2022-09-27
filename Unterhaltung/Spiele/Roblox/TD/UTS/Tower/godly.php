<select name="godly">
									<?php
						$selected = '';
						if (isset($_POST['submit'])) {
							$selected = $_POST['godly'];
						}
						echo '<option value="" disabled selected></option>';
							//add_option($selected,'godly00a','Blackbeard');
						?>

								</select>
									<?php
					if (isset($_POST['godly'])) {
						switch ($_POST['godly']) {
							//case 'godly00a': include ("Roblox/TD/UTS/Tower/7godly/.php"); break;
						}
					}
				?>