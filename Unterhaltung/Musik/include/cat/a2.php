<select name="anderes">
						<?php
						$selected = '';
						if (isset($_POST['submit'])) {
							$selected = $_POST['anderes'];
						}
						echo '<option value="" disabled selected></option>';
							add_option($selected,'anderes001','2009');
							add_option($selected,'anderes002','2010');
							add_option($selected,'anderes003','2011');
							//add_option($selected,'anderes004','2012 (1)');
							//add_option($selected,'anderes005','2012 (2)');
							//add_option($selected,'anderes006','2013 (1)');
							//add_option($selected,'anderes007','2013 (2)');
							//add_option($selected,'anderes008','2014');
							//add_option($selected,'anderes009','2015');
							//add_option($selected,'anderes010','2016');
						?>

					</select>
						<?php
				if (isset($_POST['anderes'])) {
					switch ($_POST['anderes']) {
						case 'anderes001': include ("include/cat/anderes/2009.php"); break;
						case 'anderes002': include ("include/cat/anderes/2010.php"); break;
						case 'anderes003': include ("include/cat/anderes/2011.php"); break;
					}
				}
			?>