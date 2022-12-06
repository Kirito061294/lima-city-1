<select name="windows">
						<?php
						$selected = '';
						if (isset($_POST['submit'])) {
							$selected = $_POST['windows'];
						}
						echo '<option value="" disabled selected></option>';
							add_option($selected,'win001','Windows 95');
							//add_option($selected,'win002','Windows 98');
							add_option($selected,'win003','Windows ME');
							//add_option($selected,'win004','Windows 2000');
							add_option($selected,'win005','Windows XP');
							//add_option($selected,'win006','Windows Vista');
							add_option($selected,'win007','Windows 7');
							//add_option($selected,'win008','Windows 8');
							//add_option($selected,'win009','Windows 8.1');
							//add_option($selected,'win010','Windows 10');
							add_option($selected,'win011','Windows Server 2003');
							//add_option($selected,'win011','Windows Server 2012');
						?>

					</select>
						<?php
				if (isset($_POST['windows'])) {
					switch ($_POST['windows']) {
						case 'win001': include ("MS/95/95_I.php"); break;
						case 'win003': include ("MS/ME/ME.php"); break;
						case 'win005': include ("MS/XP/XP.php"); break;
						case 'win007': include ("MS/7/7.php"); break;
						case 'win011': include ("MS/Server/Server_03.php"); break;
					}
				}
			?>