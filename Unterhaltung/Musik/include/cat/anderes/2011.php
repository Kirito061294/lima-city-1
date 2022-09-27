<select name="2011">
							<?php
						$selected = '';
						if (isset($_POST['submit'])) {
							$selected = $_POST['2011'];
						}
						echo '<option value="" disabled selected></option>';
							add_option($selected,'2011_01','Lady Gaga - Alejandro');
							add_option($selected,'2011_02','Nelly Furtado - All good Things');
							add_option($selected,'2011_08','Eifel 65 - Blue');
							add_option($selected,'2011_03','Break your Heart');
							add_option($selected,'2011_04','O-Zone - Dragostea Din Tei');
							add_option($selected,'2011_05','Ich+Ich - Du erinnerst mich an Liebe');
							add_option($selected,'2011_06','Pirates Of The C. - Techno Remix');
							add_option($selected,'2011_07','Aura Dione - Geronimo');
							add_option($selected,'2011_09','Revolverheld - Halt dich an mir fest');
							add_option($selected,'2011_10','Merit Larsen - If a Song could get me You');
							add_option($selected,'2011_11','Alphaville - I die for You today');
							add_option($selected,'2011_12','ASDF - I like Trains');
							add_option($selected,'2011_13','Bruno Mars - Just the way you are');
							add_option($selected,'2011_14','Milow - Little in the middle');
							add_option($selected,'2011_15','Rob Thomas - Little Wonders');
							add_option($selected,'2011_16','Israel KamakawiwoOle - Somewhere over the Rainbow');
							add_option($selected,'2011_17','Coldplay - Paradise');
							add_option($selected,'2011_18','Lady Gaga - Poker Face');
							add_option($selected,'2011_20','Flo Rida - Right Round');
							add_option($selected,'2011_22','David Guetta - Titanium');
							add_option($selected,'2011_23','Take That - The Flood');
							add_option($selected,'2011_24','Ich+Ich - Universum');
							add_option($selected,'2011_25','Unheilig - Unter deiner Flagge');
							add_option($selected,'2011_26','Marquess - Vajamos Companeros');
							add_option($selected,'2011_27','Empire of the Sun - We are the People');
							add_option($selected,'2011_28','Melanie Thornton - Wonderful Dream');
							add_option($selected,'2011_29','Shakira - Whenever, Wherever');
							add_option($selected,'2011_30','James Blunt - Youre Beautiful');
						?>

						</select>
			<?php
			    if (isset($_POST['2011'])) {
                    switch ($_POST['2011']) {
                        case '2011_01': include ("include/iframes/a2/2011/a.php"); break;
                        case '2011_02': include ("include/iframes/a2/2011/agt.php"); break;
                        case '2011_08': include ("include/iframes/a2/2011/b.php"); break;
                        case '2011_03': include ("include/iframes/a2/2011/byh.php"); break;
                        case '2011_04': include ("include/iframes/a2/2011/ddt.php"); break;
                        case '2011_05': include ("include/iframes/a2/2011/demal.php"); break;
                        case '2011_06': include ("include/iframes/a2/2011/fdk.php"); break;
                        case '2011_07': include ("include/iframes/a2/2011/g.php"); break;
                        case '2011_09': include ("include/iframes/a2/2011/hdamf.php"); break;
                        case '2011_10': include ("include/iframes/a2/2011/iascgmy.php"); break;
                        case '2011_11': include ("include/iframes/a2/2011/idfyt.php"); break;
                        case '2011_12': include ("include/iframes/a2/2011/ilt.php"); break;
                        case '2011_13': include ("include/iframes/a2/2011/jtwya.php"); break;
                        case '2011_14': include ("include/iframes/a2/2011/litm.php"); break;
                        case '2011_15': include ("include/iframes/a2/2011/lw.php"); break;
                        case '2011_16': include ("include/iframes/a2/2011/otr.php"); break;
                        case '2011_17': include ("include/iframes/a2/2011/p.php"); break;
                        case '2011_18': include ("include/iframes/a2/2011/pf.php"); break;
                        case '2011_20': include ("include/iframes/a2/2011/rr.php"); break;
                        case '2011_22': include ("include/iframes/a2/2011/t.php"); break;
                        case '2011_23': include ("include/iframes/a2/2011/tf.php"); break;
                        case '2011_24': include ("include/iframes/a2/2011/u.php"); break;
                        case '2011_25': include ("include/iframes/a2/2011/udf.php"); break;
                        case '2011_26': include ("include/iframes/a2/2011/vc.php"); break;
                        case '2011_27': include ("include/iframes/a2/2011/watp.php"); break;
                        case '2011_28': include ("include/iframes/a2/2011/wd.php"); break;
                        case '2011_29': include ("include/iframes/a2/2011/yb.php"); break;
                    }
				}
			?>