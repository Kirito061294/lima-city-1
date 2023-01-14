<select name="clientmods">
								<?php
							$selected = '';
							if (isset($_POST['submit'])) {
								$selected = $_POST['clientmods'];
							}
							echo '<option value="" disabled selected></option>';
								add_option($selected,'cm00e','Agricraft');
								add_option($selected,'cm00d','GregTech Intergalactical');
								add_option($selected,'cm00b','JourneyMap');
								add_option($selected,'cm00c','Just Enough Items');
								add_option($selected,'cm00f','Mystical Agriculture');
								add_option($selected,'cm00a','Optifine');
								add_option($selected,'cm00g','Thaumcraft');
								add_option($selected,'cm00h','Waila');
								//add_option($selected,'cm00i','Light Overlay');
								//add_option($selected,'cm00j','Light Overlay');
								//add_option($selected,'cm00k','Light Overlay');
								//add_option($selected,'cm00l','Light Overlay');
							?>

							</select>
								<?php
					if (isset($_POST['clientmods'])) {
						switch ($_POST['clientmods']) {
							case 'cm00a': include ("PC/MC/CM/optifine.php"); break;
							case 'cm00b': include ("PC/MC/CM/journeymap.php"); break;
							case 'cm00c': include ("PC/MC/CM/jei.php"); break;
							case 'cm00d': include ("PC/MC/CM/gti.php"); break;
							case 'cm00e': include ("PC/MC/CM/agricraft.php"); break;
							case 'cm00f': include ("PC/MC/CM/myst_agri.php"); break;
							case 'cm00g': include ("PC/MC/CM/thaumcraft.php"); break;
							case 'cm00h': include ("PC/MC/CM/waila.php"); break;
							//case 'cm00i': include ("PC/MC/L.php"); break;
							//case 'cm00j': include ("PC/MC/L.php"); break;
						}
					}
				?>