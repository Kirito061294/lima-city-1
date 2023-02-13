<select name="geodash">
						<?php
						$selected = '';
						if (isset($_POST['submit'])) {
							$selected = $_POST['geodash'];
						}
						echo '<option value="" disabled selected></option>';
							add_option($selected,'gd001','Stereo Madness');
							add_option($selected,'gd002','Back on Track');
							add_option($selected,'gd003','Polargeist');
							add_option($selected,'gd004','Dry Out');
							add_option($selected,'gd005','Base after Base');
							add_option($selected,'gd006','Cant let go');
							add_option($selected,'gd007','Jumper');
							add_option($selected,'gd008','Time Machine');
							add_option($selected,'gd009','Cycles');
							add_option($selected,'gd010','xStep');
							add_option($selected,'gd011','Clutterfunk');
							add_option($selected,'gd012','Theory of Everything');
							add_option($selected,'gd013','Electroman adventures');
							add_option($selected,'gd014','Clubstep');
							add_option($selected,'gd015','Electrodynamix');
							add_option($selected,'gd016','Hexagon Force');
							add_option($selected,'gd017','Blast processing');
							add_option($selected,'gd018','Theory of Everything 2');
							add_option($selected,'gd019','Geometrical dominator');
							add_option($selected,'gd020','Deadlocked');
							add_option($selected,'gd021','Fingerdash');
							//add_option($selected,'gd022','');
						?>

					</select>
						<?php
				if (isset($_POST['geodash'])) {
					switch ($_POST['geodash']) {
						case 'gd001': include ("include/iframes/gd/SM.php"); break;
						case 'gd002': include ("include/iframes/gd/BoT.php"); break;
						case 'gd003': include ("include/iframes/gd/Pg.php"); break;
						case 'gd004': include ("include/iframes/gd/DO.php"); break;
						case 'gd005': include ("include/iframes/gd/BaB.php"); break;
						case 'gd006': include ("include/iframes/gd/ClG.php"); break;
						case 'gd007': include ("include/iframes/gd/J.php"); break;
						case 'gd008': include ("include/iframes/gd/TM.php"); break;
						case 'gd009': include ("include/iframes/gd/C.php"); break;
						case 'gd010': include ("include/iframes/gd/xS.php"); break;
						case 'gd011': include ("include/iframes/gd/Cl.php"); break;
						case 'gd012': include ("include/iframes/gd/ToE.php"); break;
						case 'gd013': include ("include/iframes/gd/Ea.php"); break;
						case 'gd014': include ("include/iframes/gd/Cs.php"); break;
						case 'gd015': include ("include/iframes/gd/Ed.php"); break;
						case 'gd016': include ("include/iframes/gd/HF.php"); break;
						case 'gd017': include ("include/iframes/gd/Bp.php"); break;
						case 'gd018': include ("include/iframes/gd/ToE2.php"); break;
						case 'gd019': include ("include/iframes/gd/Gd.php"); break;
						case 'gd020': include ("include/iframes/gd/Dl.php"); break;
						case 'gd021': include ("include/iframes/gd/Fd.php"); break;
					}
				}
			?>