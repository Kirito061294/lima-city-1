<select name="nightcore">
							<?php
						$selected = '';
						if (isset($_POST['submit'])) {
							$selected = $_POST['nightcore'];
						}
						echo '<option value="" disabled selected></option>';
							add_option($selected,'nightcore00a','Airplanes');
							add_option($selected,'nightcore00b','All the right Moves');
							add_option($selected,'nightcore00c','Angel of Darkness');
							add_option($selected,'nightcore00d','Angel with a Shotgun');
							add_option($selected,'nightcore00e','Anima Libera');
							add_option($selected,'nightcore0as','Around the World');
							add_option($selected,'nightcore00f','Atemlos');
							add_option($selected,'nightcore00g','Au Revoir');
							add_option($selected,'nightcore00h','Battlefield');
							add_option($selected,'nightcore00i','Breaking the Habit');
							add_option($selected,'nightcore00j','Calling all the Monsters');
							add_option($selected,'nightcore0au','Centuries');
							add_option($selected,'nightcore00k','Colors of the Rainbow');
							add_option($selected,'nightcore00l','Comatose');
							add_option($selected,'nightcore00m','Dam Dadi Doo');
							add_option($selected,'nightcore00n','Disturbia');
							add_option($selected,'nightcore00o','DotA');
							add_option($selected,'nightcore00p','Dragostea Din Tei');
							add_option($selected,'nightcore00q','Echt');
							add_option($selected,'nightcore0aw','E.T.');
							add_option($selected,'nightcore00r','Fireflies');
							add_option($selected,'nightcore00s','Flute');
							add_option($selected,'nightcore00t','Glad you Came');
							add_option($selected,'nightcore00u','Hurry up and save me');
							add_option($selected,'nightcore00v','Ich bin Ich');
							add_option($selected,'nightcore00w','I Cry');
							add_option($selected,'nightcore00x','Infinity');
							add_option($selected,'nightcore00y','Im Blue');
							add_option($selected,'nightcore0at','Im Blue (Remix)');
							add_option($selected,'nightcore00z','Last Resort');
							add_option($selected,'nightcore0aa','Lieder');
							add_option($selected,'nightcore0ab','Monster (Skillet)');
							add_option($selected,'nightcore0ac','Moonlight Shadow');
							add_option($selected,'nightcore0ad','Miracle');
							add_option($selected,'nightcore0ae','Perfect Melodie');
							add_option($selected,'nightcore0av','Please dont stop the Musik');
							add_option($selected,'nightcore0af','Pirates of the Caribbean');
							add_option($selected,'nightcore0ag','Rather Be');
							add_option($selected,'nightcore0ah','Ravers Fantasy');
							add_option($selected,'nightcore0ai','Ravers in the UK');
							add_option($selected,'nightcore0aj','R.I.P.');
							add_option($selected,'nightcore0ak','R.I.P. (Rita Ora)');
							add_option($selected,'nightcore0al','Stamp on the Ground');
							add_option($selected,'nightcore0am','Tacata');
							add_option($selected,'nightcore0an','Tetris');
							add_option($selected,'nightcore0ao','The Black Pearl');
							add_option($selected,'nightcore0ap','When the Beat drops out');
							add_option($selected,'nightcore0aq','When you Leave');
							add_option($selected,'nightcore0ar','Whispers in the Dark');
						?>

						</select>
				<?php
			    if (isset($_POST['nightcore'])) {
                    switch ($_POST['nightcore']) {
                        case 'nightcore00a': include ("include/iframes/N/A.php"); break;
                        case 'nightcore00b': include ("include/iframes/N/AtrM.php"); break;
                        case 'nightcore00c': include ("include/iframes/N/AoD.php"); break;
                        case 'nightcore00d': include ("include/iframes/N/AwaS.php"); break;
                        case 'nightcore00e': include ("include/iframes/N/AL.php"); break;
                        case 'nightcore00f': include ("include/iframes/N/A2.php"); break;
                        case 'nightcore00g': include ("include/iframes/N/AR.php"); break;
                        case 'nightcore00h': include ("include/iframes/N/B.php"); break;
                        case 'nightcore00i': include ("include/iframes/N/BtH.php"); break;
                        case 'nightcore00j': include ("include/iframes/N/CatM.php"); break;
                        case 'nightcore00k': include ("include/iframes/N/CotR.php"); break;
                        case 'nightcore00l': include ("include/iframes/N/C.php"); break;
                        case 'nightcore00m': include ("include/iframes/N/DDD.php"); break;
                        case 'nightcore00n': include ("include/iframes/N/D.php"); break;
                        case 'nightcore00o': include ("include/iframes/N/D2.php"); break;
                        case 'nightcore00p': include ("include/iframes/N/DDT.php"); break;
                        case 'nightcore00q': include ("include/iframes/N/E.php"); break;
                        case 'nightcore00r': include ("include/iframes/N/F.php"); break;
                        case 'nightcore00s': include ("include/iframes/N/F2.php"); break;
                        case 'nightcore00t': include ("include/iframes/N/GyC.php"); break;
                        case 'nightcore00u': include ("include/iframes/N/HuaSm.php"); break;
                        case 'nightcore00v': include ("include/iframes/N/IbI.php"); break;
                        case 'nightcore00w': include ("include/iframes/N/IC.php"); break;
                        case 'nightcore00x': include ("include/iframes/N/I.php"); break;
                        case 'nightcore00y': include ("include/iframes/N/IB.php"); break;
                        case 'nightcore00z': include ("include/iframes/N/LR.php"); break;
                        case 'nightcore0aa': include ("include/iframes/N/L.php"); break;
                        case 'nightcore0ab': include ("include/iframes/N/S-M.php"); break;
                        case 'nightcore0ac': include ("include/iframes/N/MS.php"); break;
                        case 'nightcore0ad': include ("include/iframes/N/M.php"); break;
                        case 'nightcore0ae': include ("include/iframes/N/PM.php"); break;
                        case 'nightcore0af': include ("include/iframes/N/PotC.php"); break;
                        case 'nightcore0ag': include ("include/iframes/N/RB.php"); break;
                        case 'nightcore0ah': include ("include/iframes/N/RF.php"); break;
                        case 'nightcore0ai': include ("include/iframes/N/RitUK.php"); break;
                        case 'nightcore0aj': include ("include/iframes/N/R.php"); break;
                        case 'nightcore0ak': include ("include/iframes/N/R-O.php"); break;
                        case 'nightcore0al': include ("include/iframes/N/SotG.php"); break;
                        case 'nightcore0am': include ("include/iframes/N/T.php"); break;
                        case 'nightcore0an': include ("include/iframes/N/T2.php"); break;
                        case 'nightcore0ao': include ("include/iframes/N/TBP.php"); break;
                        case 'nightcore0ap': include ("include/iframes/N/WtBdo.php"); break;
                        case 'nightcore0aq': include ("include/iframes/N/WyL.php"); break;
                        case 'nightcore0ar': include ("include/iframes/N/WitD.php"); break;
                        case 'nightcore0as': include ("include/iframes/N/AtW.php"); break;
                        case 'nightcore0at': include ("include/iframes/N/IB-R.php"); break;
                        case 'nightcore0au': include ("include/iframes/N/centuries.php"); break;
                        case 'nightcore0av': include ("include/iframes/N/please-dont-stop-the-musik.php"); break;
                        case 'nightcore0aw': include ("include/iframes/N/extraterestrial.php"); break;
                    }
				}
			?>