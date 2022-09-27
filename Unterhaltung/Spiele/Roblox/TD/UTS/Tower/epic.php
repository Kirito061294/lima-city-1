<select name="epic">
									<?php
						$selected = '';
						if (isset($_POST['submit'])) {
							$selected = $_POST['epic'];
						}
						echo '<option value="" disabled selected></option>';
							//add_option($selected,'epic00a','');
							?>
	
								</select>
									<?php
					if (isset($_POST['epic'])) {
						switch ($_POST['epic']) {
							//case 'epic00a': include ("Roblox/TD/UTS/Tower/4epic/.php"); break;
						}
					}
				?>