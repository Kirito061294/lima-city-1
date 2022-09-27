<select name="o">
						<?php
                $selected = '';
                if (isset($_POST['submit'])) {
                    $selected = $_POST['o'];
                }
                echo '<option value="" disabled selected></option>';
					add_option($selected,'o00a','MMORPG´s');
						?>

					</select>
						<?php
			    if (isset($_POST['o'])) {
                    switch ($_POST['o']) {
                        case 'o00a': include ("Online/MMO.php"); break;
                    }
				}
			?>
