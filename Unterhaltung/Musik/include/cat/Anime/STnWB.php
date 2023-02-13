			<select name="STnWB">
							<?php
							$selected = '';
							if (isset($_POST['submit'])) {
								$selected = $_POST['STnWB'];
							}
							echo '<option value="" disabled selected></option>';
								add_option($selected,'STnWB001','Opening 1');
								add_option($selected,'STnWB00a','Ending 1');
							?>

						</select>
			<?php
			    if (isset($_POST['STnWB'])) {
                    switch ($_POST['STnWB']) {
                        case 'STnWB001': include ("include/iframes/A-i/STnWB/op/1.php"); break;
                        case 'STnWB00a': include ("include/iframes/A-i/STnWB/ed/1.php"); break;
                    }
				}
			?>