<select name="politik">
							<?php
						$selected = '';
						if (isset($_POST['submit'])) {
							$selected = $_POST['politik'];
						}
						echo '<option value="" disabled selected></option>';
							//add_option($selected,'politik00a','Aktuelles');
							//add_option($selected,'politik00b','Vergangenes');
							add_option($selected,'politik00c','Parteien');
							//add_option($selected,'politik00d','Bundesregierung');
						?>

						</select>
							<?php
			    if (isset($_POST['politik'])) {
                    switch ($_POST['politik']) {
                        //case 'politik00a': include ("include/cat/Politik/.php"); break;
                        //case 'politik00b': include ("include/cat/Politik/.php"); break;
                        case 'politik00c': include ("include/cat/Politik/Parteien.php"); break;
                        //case 'politik00d': include ("include/cat/Politik/.php"); break;
                    }
				}
			?>