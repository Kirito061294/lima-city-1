			<select name="accel-world">
							<?php
							$selected = '';
							if (isset($_POST['submit'])) {
								$selected = $_POST['accel-world'];
							}
							echo '<option value="" disabled selected></option>';
								add_option($selected,'accel001','Opening 1');
								add_option($selected,'accel00a','Ending 1');
								add_option($selected,'accel002','Opening 2');
								add_option($selected,'accel00b','Ending 2');
							?>

						</select>
			<?php
			    if (isset($_POST['accel-world'])) {
                    switch ($_POST['accel-world']) {
                        case 'accel001': include ("include/iframes/A-i/AW/op/1.php"); break;
                        case 'accel002': include ("include/iframes/A-i/AW/op/2.php"); break;
                        case 'accel00a': include ("include/iframes/A-i/AW/ed/1.php"); break;
                        case 'accel00b': include ("include/iframes/A-i/AW/ed/2.php"); break;
                    }
				}
			?>