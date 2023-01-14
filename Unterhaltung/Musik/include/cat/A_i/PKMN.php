			<select name="PKMN">
							<?php
							$selected = '';
							if (isset($_POST['submit'])) {
								$selected = $_POST['PKMN'];
							}
							echo '<option value="" disabled selected></option>';
								add_option($selected,'PKMN001','Opening 1');
								add_option($selected,'PKMN002','Opening 2');
								add_option($selected,'PKMN003','Opening 3');
								add_option($selected,'PKMN004','Opening 4');
								add_option($selected,'PKMN005','Opening 5');
								add_option($selected,'PKMN006','Opening 6');
								add_option($selected,'PKMN007','Opening 7');
								add_option($selected,'PKMN008','Opening 8');
								add_option($selected,'PKMN009','Opening 9');
								add_option($selected,'PKMN010','Opening 10');
								add_option($selected,'PKMN011','Opening 11');
								add_option($selected,'PKMN012','Opening 12');
								add_option($selected,'PKMN013','Opening 13');
								add_option($selected,'PKMN014','Opening 14');
								add_option($selected,'PKMN015','Opening 15');
								add_option($selected,'PKMN016','Opening 16');
								add_option($selected,'PKMN017','Opening 17');
								add_option($selected,'PKMN018','Opening 18');
								add_option($selected,'PKMN019','Opening 19');
								add_option($selected,'PKMN020','Opening 20');
								add_option($selected,'PKMN021','Opening 21');
								add_option($selected,'PKMN022','Opening 22');
								add_option($selected,'PKMN023','Opening 23');
								add_option($selected,'PKMN024','Opening 24');
							?>

						</select>
			<?php
			    if (isset($_POST['PKMN'])) {
                    switch ($_POST['PKMN']) {
                        case 'PKMN001': include ("include/iframes/A-i/Pkmn/op/1.php"); break;
                        case 'PKMN002': include ("include/iframes/A-i/Pkmn/op/2.php"); break;
                        case 'PKMN003': include ("include/iframes/A-i/Pkmn/op/3.php"); break;
                        case 'PKMN004': include ("include/iframes/A-i/Pkmn/op/4.php"); break;
                        case 'PKMN005': include ("include/iframes/A-i/Pkmn/op/5.php"); break;
                        case 'PKMN006': include ("include/iframes/A-i/Pkmn/op/6.php"); break;
                        case 'PKMN007': include ("include/iframes/A-i/Pkmn/op/7.php"); break;
                        case 'PKMN008': include ("include/iframes/A-i/Pkmn/op/8.php"); break;
                        case 'PKMN009': include ("include/iframes/A-i/Pkmn/op/9.php"); break;
                        case 'PKMN010': include ("include/iframes/A-i/Pkmn/op/10.php"); break;
                        case 'PKMN011': include ("include/iframes/A-i/Pkmn/op/11.php"); break;
                        case 'PKMN012': include ("include/iframes/A-i/Pkmn/op/12.php"); break;
                        case 'PKMN013': include ("include/iframes/A-i/Pkmn/op/13.php"); break;
                        case 'PKMN014': include ("include/iframes/A-i/Pkmn/op/14.php"); break;
                        case 'PKMN015': include ("include/iframes/A-i/Pkmn/op/15.php"); break;
                        case 'PKMN016': include ("include/iframes/A-i/Pkmn/op/16.php"); break;
                        case 'PKMN017': include ("include/iframes/A-i/Pkmn/op/17.php"); break;
                        case 'PKMN018': include ("include/iframes/A-i/Pkmn/op/18.php"); break;
                        case 'PKMN019': include ("include/iframes/A-i/Pkmn/op/19.php"); break;
                        case 'PKMN020': include ("include/iframes/A-i/Pkmn/op/20.php"); break;
                        case 'PKMN021': include ("include/iframes/A-i/Pkmn/op/21.php"); break;
                        case 'PKMN022': include ("include/iframes/A-i/Pkmn/op/22.php"); break;
                        case 'PKMN023': include ("include/iframes/A-i/Pkmn/op/23.php"); break;
                        case 'PKMN024': include ("include/iframes/A-i/Pkmn/op/24.php"); break;
                    }
				}
			?>