<select name="divine">
									<?php
						$selected = '';
						if (isset($_POST['submit'])) {
							$selected = $_POST['divine'];
						}
						echo '<option value="" disabled selected></option>';
							add_option($selected,'divine00a','Blackbeard');
							?>
	
								</select>
									<?php
					if (isset($_POST['divine'])) {
						switch ($_POST['divine']) {
							case 'divine00a': include ("Roblox/TD/UTS/Tower/8divine/bb.php"); break;
						}
					}
				?>