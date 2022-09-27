<select name="sra">
						<?php
						$selected = '';
						if (isset($_POST['submit'])) {
							$selected = $_POST['sra'];
						}
						echo '<option value="" disabled selected></option>';
							add_option($selected,'sunriseave001','All Because of You');
							add_option($selected,'sunriseave002','Angels on a Rampage');
							add_option($selected,'sunriseave003','Beautiful');
							add_option($selected,'sunriseave004','Choose to be Me');
							add_option($selected,'sunriseave005','Dreamer');
							add_option($selected,'sunriseave006','Dream like a Child');
							add_option($selected,'sunriseave007','Damn Silence');
							add_option($selected,'sunriseave008','Fairytale gone bad');
							add_option($selected,'sunriseave009','Forever Yours');
							add_option($selected,'sunriseave010','Heartbreak Century');
							add_option($selected,'sunriseave011','Heal Me');
							add_option($selected,'sunriseave012','Hollywood Hills');
							add_option($selected,'sunriseave013','I can break your Heart');
							add_option($selected,'sunriseave014','I Dont Dance');
							add_option($selected,'sunriseave015','I help you hate me');
							add_option($selected,'sunriseave016','Kiss Goodbye');
							add_option($selected,'sunriseave017','Lifesaver');
							add_option($selected,'sunriseave018','Little bit Love');
							add_option($selected,'sunriseave019','Monk Bay');
							add_option($selected,'sunriseave020','Not Again');
							add_option($selected,'sunriseave021','Nothing is Over');
							add_option($selected,'sunriseave022','Out of Tune');
							add_option($selected,'sunriseave023','Prisoner in Paradise');
							add_option($selected,'sunriseave024','Point of no Return');
							add_option($selected,'sunriseave025','Stormy End');
							add_option($selected,'sunriseave026','Somebody help me');
							add_option($selected,'sunriseave027','Sweet Symphony');
							add_option($selected,'sunriseave028','The whole Story');
							add_option($selected,'sunriseave029','Thank you for Everything');
							add_option($selected,'sunriseave030','Wonderland');
							add_option($selected,'sunriseave031','Welcome to my Life');
							add_option($selected,'sunriseave032','You can never be ready');
						?>

					</select>
						<?php
			    if (isset($_POST['sra'])) {
                    switch ($_POST['sra']) {
                        case 'sunriseave001': include ("include/iframes/S-A/aboy.php"); break;
                        case 'sunriseave002': include ("include/iframes/S-A/aoar.php"); break;
                        case 'sunriseave003': include ("include/iframes/S-A/b.php"); break;
                        case 'sunriseave004': include ("include/iframes/S-A/ctbm.php"); break;
                        case 'sunriseave005': include ("include/iframes/S-A/d.php"); break;
                        case 'sunriseave006': include ("include/iframes/S-A/dlac.php"); break;
                        case 'sunriseave007': include ("include/iframes/S-A/ds.php"); break;
                        case 'sunriseave008': include ("include/iframes/S-A/fgb.php"); break;
                        case 'sunriseave009': include ("include/iframes/S-A/fy.php"); break;
                        case 'sunriseave010': include ("include/iframes/S-A/hbc.php"); break;
                        case 'sunriseave011': include ("include/iframes/S-A/hm.php"); break;
                        case 'sunriseave012': include ("include/iframes/S-A/hohi.php"); break;
                        case 'sunriseave013': include ("include/iframes/S-A/icbyh.php"); break;
                        case 'sunriseave014': include ("include/iframes/S-A/idd.php"); break;
                        case 'sunriseave015': include ("include/iframes/S-A/ihyhm.php"); break;
                        case 'sunriseave016': include ("include/iframes/S-A/kg.php"); break;
                        case 'sunriseave017': include ("include/iframes/S-A/l.php"); break;
                        case 'sunriseave018': include ("include/iframes/S-A/lbl.php"); break;
                        case 'sunriseave019': include ("include/iframes/S-A/mb.php"); break;
                        case 'sunriseave020': include ("include/iframes/S-A/na.php"); break;
                        case 'sunriseave021': include ("include/iframes/S-A/nio.php"); break;
                        case 'sunriseave022': include ("include/iframes/S-A/oot.php"); break;
                        case 'sunriseave023': include ("include/iframes/S-A/pip.php"); break;
                        case 'sunriseave024': include ("include/iframes/S-A/ponr.php"); break;
                        case 'sunriseave025': include ("include/iframes/S-A/se.php"); break;
                        case 'sunriseave026': include ("include/iframes/S-A/shm.php"); break;
                        case 'sunriseave027': include ("include/iframes/S-A/swsy.php"); break;
                        case 'sunriseave028': include ("include/iframes/S-A/tws.php"); break;
                        case 'sunriseave029': include ("include/iframes/S-A/tyfe.php"); break;
                        case 'sunriseave030': include ("include/iframes/S-A/w.php"); break;
                        case 'sunriseave031': include ("include/iframes/S-A/wtml.php"); break;
                        case 'sunriseave032': include ("include/iframes/S-A/ycnbr.php"); break;
                    }
				}
			?>