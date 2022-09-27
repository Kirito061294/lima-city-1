<select name="tower">
								<?php
						$selected = '';
						if (isset($_POST['submit'])) {
							$selected = $_POST['tower'];
						}
						echo '<option value="" disabled selected></option>';
							add_option($selected,'tower00a','Common');
							add_option($selected,'tower00b','Uncommon');
							add_option($selected,'tower00c','Rare');
							add_option($selected,'tower00d','Epic');
							add_option($selected,'tower00e','Legendary');
							add_option($selected,'tower00f','Mythical');
							add_option($selected,'tower00g','Godly');
							add_option($selected,'tower00h','Divine');
						?>

							</select>
								<?php
					if (isset($_POST['tower'])) {
						switch ($_POST['tower']) {
							case 'tower00a': include ("Roblox/TD/UTS/Tower/common.php"); break;
							case 'tower00a': include ("Roblox/TD/UTS/Tower/uncommon.php"); break;
							case 'tower00a': include ("Roblox/TD/UTS/Tower/rare.php"); break;
							case 'tower00a': include ("Roblox/TD/UTS/Tower/epic.php"); break;
							case 'tower00a': include ("Roblox/TD/UTS/Tower/legendary.php"); break;
							case 'tower00a': include ("Roblox/TD/UTS/Tower/mythical.php"); break;
							case 'tower00a': include ("Roblox/TD/UTS/Tower/godly.php"); break;
							case 'tower00a': include ("Roblox/TD/UTS/Tower/divine.php"); break;
						}
					}
				?>