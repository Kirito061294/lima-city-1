<select name="2010">
							<?php
						$selected = '';
						if (isset($_POST['submit'])) {
							$selected = $_POST['2010'];
						}
						echo '<option value="" disabled selected></option>';
							add_option($selected,'2010_1','Silbermond - Krieger des Lichts');
						?>

						</select>
							<?php
			    if (isset($_POST['2010'])) {
                    switch ($_POST['2010']) {
                        case '2010_1': include ("include/iframes/a2/2010/kdl.php"); break;
                    }
				}
			?>