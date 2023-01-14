<select name="2012_1">
							<?php
						$selected = '';
						if (isset($_POST['submit'])) {
							$selected = $_POST['2012_1'];
						}
						echo '<option value="" disabled selected></option>';
							add_option($selected,'2012_1_001','');
						?>

						</select>
			<?php
			    if (isset($_POST['2012_1'])) {
                    switch ($_POST['2012_1']) {
                        case '2012_1_001': include ("include/iframes/A-i/FT/op/1.php"); break;
                    }
				}
			?>