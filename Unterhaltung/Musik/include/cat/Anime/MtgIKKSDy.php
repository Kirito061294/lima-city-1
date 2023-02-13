			<select name="MtgIKKSDy"> <!-- Mondaiji-tachi ga Isekai Kara Kuru Sou Desu Yo -->
							<?php
							$selected = '';
							if (isset($_POST['submit'])) {
								$selected = $_POST['MtgIKKSDy'];
							}
							echo '<option value="" disabled selected></option>';
								add_option($selected,'MtgIKKSDy001','Opening 1');
								add_option($selected,'MtgIKKSDy00a','Ending 1');
							?>

						</select>
			<?php
			    if (isset($_POST['MtgIKKSDy'])) {
                    switch ($_POST['MtgIKKSDy']) {
                        case 'MtgIKKSDy001': include ("include/iframes/A-i/MtgIKKSDy/op/1.php"); break;
                        case 'MtgIKKSDy00a': include ("include/iframes/A-i/MtgIKKSDy/ed/1.php"); break;
                    }
				}
			?>