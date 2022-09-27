<select name="covid">
						<?php
						$selected = '';
						if (isset($_POST['submit'])) {
							$selected = $_POST['covid'];
						}
						echo '<option value="" disabled selected></option>';
							add_option($selected,'covid00a','Allgemeines');
						?>

					</select>
			<?php
			    if (isset($_POST['covid'])) {
                    switch ($_POST['covid']) {
                        case 'covid00a': include ("include/cat/Covid-19/Allgemeines.php"); break;
                    }
				}
			?>