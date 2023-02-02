			<select name="mgnf">
							<?php
							$selected = '';
							if (isset($_POST['submit'])) {
								$selected = $_POST['mgnf'];
							}
							echo '<option value="" disabled selected></option>';
								add_option($selected,'mgnf001','Opening 1');
								add_option($selected,'mgnf00a','Ending 1');
								add_option($selected,'mgnf002','Opening 2');
								add_option($selected,'mgnf00b','Ending 2');
							?>

						</select>
			<?php
			    if (isset($_POST['mgnf'])) {
                    switch ($_POST['mgnf']) {
                        case 'mgnf001': include ("include/iframes/A-i/MGnF/op/1.php"); break;
                        case 'mgnf002': include ("include/iframes/A-i/MGnF/op/2.php"); break;
                        case 'mgnf00a': include ("include/iframes/A-i/MGnF/ed/1.php"); break;
                        case 'mgnf00b': include ("include/iframes/A-i/MGnF/ed/2.php"); break;
                    }
				}
			?>