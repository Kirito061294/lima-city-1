<select name="medien">
						<?php
						$selected = '';
						if (isset($_POST['submit'])) {
							$selected = $_POST['medien'];
						}
						echo '<option value="" disabled selected></option>';
							//add_option($selected,'medien00a','Aktuelles');
						?>

					</select>
			<?php
			    if (isset($_POST['medien'])) {
                    switch ($_POST['medien']) {
                        //case 'medien00a': include ("include/cat/A_i/PKMN.php"); break;
                    }
				}
			?>