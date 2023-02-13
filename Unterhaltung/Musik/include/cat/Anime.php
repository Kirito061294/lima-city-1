<select name="anime">
							<?php
						$selected = '';
						if (isset($_POST['submit'])) {
							$selected = $_POST['anime'];
						}
						echo '<option value="" disabled selected></option>';
							add_option($selected,'anime00c','Accel World');
							add_option($selected,'anime00d','Amnesia');
							add_option($selected,'anime00b','Fairy Tail');
							add_option($selected,'anime00h','Food Wars');
							add_option($selected,'anime00e','La Storia Della Arcana Famiglia');
							add_option($selected,'anime00i','Maou Gakuin no Futekigousha');
							add_option($selected,'anime00f','Mondaiji-tachi ga Isekai Kara Kuru Sou Desu yo');
							add_option($selected,'anime00a','Pokemon');
							add_option($selected,'anime00g','Seiken Tsukai no World Break');
							add_option($selected,'anime00j','Sword Art Online');
						?>

						</select>
				<?php
			    if (isset($_POST['anime'])) {
                    switch ($_POST['anime']) {
                        case 'anime00a': include ("include/cat/A_i/PKMN.php"); break;
                        case 'anime00b': include ("include/cat/A_i/FairyTail.php"); break;
                        case 'anime00c': include ("include/cat/A_i/accel-world.php"); break;
                        case 'anime00d': include ("include/cat/A_i/amnesia.php"); break;
                        case 'anime00e': include ("include/cat/A_i/LSdAF.php"); break;
                        case 'anime00f': include ("include/cat/A_i/MtgIKKSDy.php"); break;
                        case 'anime00g': include ("include/cat/A_i/STnWB.php"); break;
                        case 'anime00h': include ("include/cat/A_i/FoodWars.php"); break;
                        case 'anime00i': include ("include/cat/A_i/MGnF.php"); break;
                        case 'anime00j': include ("include/cat/A_i/SAO.php"); break;
                    }
				}
			?>