<select name="technik">
						<?php
						$selected = '';
						if (isset($_POST['submit'])) {
							$selected = $_POST['technik'];
						}
						echo '<option value="" disabled selected></option>';
							//add_option($selected,'technik00a','Aktuelles');
						?>

					</select>
			<?php
			    if (isset($_POST['technik'])) {
                    switch ($_POST['technik']) {
                        //case 'technik00a': include ("include/cat/A_i/PKMN.php"); break;
                    }
				}
			?>