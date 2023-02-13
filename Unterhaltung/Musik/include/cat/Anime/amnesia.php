			<select name="amnesia">
							<?php
							$selected = '';
							if (isset($_POST['submit'])) {
								$selected = $_POST['amnesia'];
							}
							echo '<option value="" disabled selected></option>';
								add_option($selected,'amnesia001','Opening 1');
								add_option($selected,'amnesia00a','Ending 1');
							?>

						</select>
			<?php
			    if (isset($_POST['amnesia'])) {
                    switch ($_POST['amnesia']) {
                        case 'amnesia001': include ("include/iframes/A-i/A/op/1.php"); break;
                        case 'amnesia00a': include ("include/iframes/A-i/A/ed/1.php"); break;
                    }
				}
			?>