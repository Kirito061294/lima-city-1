<select name="pkmn">
							<?php
                $selected = '';
                if (isset($_POST['submit'])) {
                    $selected = $_POST['pkmn'];
                }
                echo '<option value="" disabled selected></option>';
					add_option($selected,'pkmn00a','Pokemon Cheats');
					//add_option($selected,'pkmn00b','Pokemon Roms');
							?>

						</select>
							<?php
				if (isset($_POST['pkmn'])) {
					switch ($_POST['pkmn']) {
                        case 'pkmn00a': include ("Konsole/P/PkmnCh.php"); break;
                        case 'pkmn00b': include ("Konsole/P/PkmnRom.php"); break;
					}
				}
							?>