			<select name="LSdAF">
							<?php
							$selected = '';
							if (isset($_POST['submit'])) {
								$selected = $_POST['LSdAF'];
							}
							echo '<option value="" disabled selected></option>';
								add_option($selected,'LSdAF001','Opening 1');
								add_option($selected,'LSdAF00a','Ending 1');
							?>

						</select>
			<?php
			    if (isset($_POST['LSdAF'])) {
                    switch ($_POST['LSdAF']) {
                        case 'LSdAF001': include ("include/iframes/A-i/LSdAF/op/1.php"); break;
                        case 'LSdAF00a': include ("include/iframes/A-i/LSdAF/ed/1.php"); break;
                    }
				}
			?>