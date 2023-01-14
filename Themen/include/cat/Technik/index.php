<select name="technik">
						<?php
						$selected = '';
						if (isset($_POST['submit'])) {
							$selected = $_POST['technik'];
						}
						echo '<option value="" disabled selected></option>';
							add_option($selected,'technik00a','Raspberry Pi');
						?>

					</select>
			<?php
			    if (isset($_POST['technik'])) {
                    switch ($_POST['technik']) {
                        case 'technik00a': include ("include/cat/Technik/raspi.php"); break;
                    }
				}
			?>