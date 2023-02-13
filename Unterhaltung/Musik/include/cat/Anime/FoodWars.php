			<select name="FoodWars">
							<?php
							$selected = '';
							if (isset($_POST['submit'])) {
								$selected = $_POST['FoodWars'];
							}
							echo '<option value="" disabled selected></option>';
								add_option($selected,'FW001','1st Plate - Opening 1');
								add_option($selected,'FW00a','1st Plate - Ending 1');
								add_option($selected,'FW002','1st Plate - Opening 2');
								add_option($selected,'FW00b','1st Plate - Ending 2');
								add_option($selected,'FW003','2nd Plate - Opening');
								add_option($selected,'FW00c','2nd Plate - Ending');
								add_option($selected,'FW004','3rd Plate - Opening 1');
								add_option($selected,'FW00d','3rd Plate - Ending 1');
								add_option($selected,'FW005','3rd Plate - Opening 2');
								add_option($selected,'FW00e','3rd Plate - Ending 2');
								add_option($selected,'FW006','4rd Plate - Opening');
								add_option($selected,'FW00f','4rd Plate - Ending');
								add_option($selected,'FW007','5th Plate - Opening');
								add_option($selected,'FW00g','5th Plate - Ending');
							?>

						</select>
			<?php
			    if (isset($_POST['FoodWars'])) {
                    switch ($_POST['FoodWars']) {
                        case 'FW001': include ("include/iframes/A-i/FW/op/1.php"); break;
                        case 'FW002': include ("include/iframes/A-i/FW/op/2.php"); break;
                        case 'FW003': include ("include/iframes/A-i/FW/op/3.php"); break;
                        case 'FW004': include ("include/iframes/A-i/FW/op/4.php"); break;
                        case 'FW005': include ("include/iframes/A-i/FW/op/5.php"); break;
                        case 'FW00a': include ("include/iframes/A-i/FW/ed/1.php"); break;
                        case 'FW00b': include ("include/iframes/A-i/FW/ed/2.php"); break;
                        case 'FW00c': include ("include/iframes/A-i/FW/ed/3.php"); break;
                        case 'FW00d': include ("include/iframes/A-i/FW/ed/4.php"); break;
                        case 'FW00e': include ("include/iframes/A-i/FW/ed/5.php"); break;
                        case 'FW00f': include ("include/iframes/A-i/FW/ed/6.php"); break;
                        case 'FW00g': include ("include/iframes/A-i/FW/ed/7.php"); break;
                    }
				}
			?>