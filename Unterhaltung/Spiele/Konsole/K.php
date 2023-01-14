<select name="k">
						<?php
                $selected = '';
                if (isset($_POST['submit'])) {
                    $selected = $_POST['k'];
                }
                echo '<option value="" disabled selected></option>';
					add_option($selected,'k00a','Ark');
					add_option($selected,'k00b','Pokemon');
						?>

					</select>
						<?php
				if (isset($_POST['k'])) {
					switch ($_POST['k']) {
                        case 'k00a': include ("Konsole/Ark.php"); break;
                        case 'k00b': include ("Konsole/P.php"); break;
					}
				}
						?>