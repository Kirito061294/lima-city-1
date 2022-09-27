<select name="2009">
							<?php
						$selected = '';
						if (isset($_POST['submit'])) {
							$selected = $_POST['2009'];
						}
						echo '<option value="" disabled selected></option>';
							add_option($selected,'2009_1','Polarkreis 18 - Allein Allein');
							add_option($selected,'2009_2','Avril Lavigne - When You are Gone');
						?>

						</select>
							<?php
			    if (isset($_POST['2009'])) {
                    switch ($_POST['2009']) {
                        case '2009_1': include ("include/iframes/a2/2009/aa.php"); break;
                        case '2009_2': include ("include/iframes/a2/2009/wyg.php"); break;
                    }
				}
			?>