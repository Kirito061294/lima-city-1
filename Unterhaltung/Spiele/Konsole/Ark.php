<select name="ark">
							<?php
                $selected = '';
                if (isset($_POST['submit'])) {
                    $selected = $_POST['ark'];
                }
                echo '<option value="" disabled selected></option>';
					add_option($selected,'ark00a','Mein Ark Server');
							?>

						</select>
							<?php
				if (isset($_POST['ark'])) {
					switch ($_POST['ark']) {
                        case 'ark00a': include ("Konsole/Ark/AS.php"); break;
					}
				}
							?>