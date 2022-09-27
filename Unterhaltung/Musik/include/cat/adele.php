<select name="adele">
						<?php
						$selected = '';
						if (isset($_POST['submit'])) {
							$selected = $_POST['adele'];
						}
						echo '<option value="" disabled selected></option>'; //67 songs
							//add_option($selected,'adele001','All i Ask');
							//add_option($selected,'adele002','All Night Parking');
							//add_option($selected,'adele003','Be Divine');
							//add_option($selected,'adele004','Best for Last');
							//add_option($selected,'adele005','Can i get it');
							//add_option($selected,'adele006','Cant be together');
							//add_option($selected,'adele007','Cant let go');
							//add_option($selected,'adele008','Chasing Pavements');
							//add_option($selected,'adele009','Cold Shoulder');
							//add_option($selected,'adele010','Crazy for You');
							//add_option($selected,'adele011','Cry your Heart out');
							//add_option($selected,'adele012','Daydreamer');
							//add_option($selected,'adele013','Dont you remember');
							//add_option($selected,'adele014','Every Glance');
							add_option($selected,'adele015','Easy on me');
							//add_option($selected,'adele016','Easy on me (Feature Version)');
							//add_option($selected,'adele017','First Love');
							//add_option($selected,'adele018','Fool that i am');
							//add_option($selected,'adele019','He wont go');
							//add_option($selected,'adele020','Hello');
							//add_option($selected,'adele021','Hiding my Heart');
							//add_option($selected,'adele022','Hold on');
							//add_option($selected,'adele023','Hometown Glory');
							//add_option($selected,'adele024','I can´t make you love me');
							//add_option($selected,'adele025','I drink wine');
							//add_option($selected,'adele026','I found a Boy');
							//add_option($selected,'adele027','I miss you');
							//add_option($selected,'adele028','I´ll be waiting');
							//add_option($selected,'adele029','If it had´nt been for love');
							//add_option($selected,'adele030','Lay me down');
							//add_option($selected,'adele031','Love in the Dark');
							//add_option($selected,'adele032','Love is a Game');
							//add_option($selected,'adele033','Lovesong');
							//add_option($selected,'adele034','Make you feel my love');
							//add_option($selected,'adele035','Many shades of black');
							//add_option($selected,'adele036','Melt my Heart to Stone');
							//add_option($selected,'adele037','Million Years ago');
							//add_option($selected,'adele038','My little Love');
							//add_option($selected,'adele039','My same');
							//add_option($selected,'adele040','My Yvonne');
							//add_option($selected,'adele041','Need you now');
							//add_option($selected,'adele042','Now and then');
							//add_option($selected,'adele043','Oh my God');
							//add_option($selected,'adele044','One and Only');
							//add_option($selected,'adele045','Painting Pictures');
							//add_option($selected,'adele046','Remedy');
							//add_option($selected,'adele047','Right as Rain');
							//add_option($selected,'adele048','River Lea');
							add_option($selected,'adele049','Rolling in the Deep');
							//add_option($selected,'adele050','Rumour has it');
							//add_option($selected,'adele051','Send my Love');
							add_option($selected,'adele052','Set Fire to the Rain');
							add_option($selected,'adele053','Skyfall');
							//add_option($selected,'adele054','Someone like you');
							//add_option($selected,'adele055','Strangers by nature');
							//add_option($selected,'adele056','Sweetest Devotion');
							//add_option($selected,'adele057','Take it all');
							//add_option($selected,'adele058','Tired');
							//add_option($selected,'adele059','That´s it, i quit, i´m moving on');
							//add_option($selected,'adele060','To be loved');
							//add_option($selected,'adele061','Turning Tables');
							//add_option($selected,'adele062','Water and a Flame');
							//add_option($selected,'adele063','Water under the Bridge');
							//add_option($selected,'adele064','When we were young');
							//add_option($selected,'adele065','Why do you love me');
							//add_option($selected,'adele066','Wild wild West');
							//add_option($selected,'adele067','Woman like me');
						?>

					</select>
						<?php
				if (isset($_POST['adele'])) {
					switch ($_POST['adele']) {
						//case 'adele001': include ("include/iframes/adele/.php"); break;
						//case 'adele002': include ("include/iframes/adele/.php"); break;
						//case 'adele003': include ("include/iframes/adele/.php"); break;
						//case 'adele004': include ("include/iframes/adele/.php"); break;
						//case 'adele005': include ("include/iframes/adele/.php"); break;
						//case 'adele006': include ("include/iframes/adele/.php"); break;
						//case 'adele007': include ("include/iframes/adele/.php"); break;
						//case 'adele008': include ("include/iframes/adele/.php"); break;
						//case 'adele009': include ("include/iframes/adele/.php"); break;
						//case 'adele010': include ("include/iframes/adele/.php"); break;
						//case 'adele011': include ("include/iframes/adele/.php"); break;
						//case 'adele012': include ("include/iframes/adele/.php"); break;
						//case 'adele013': include ("include/iframes/adele/.php"); break;
						//case 'adele014': include ("include/iframes/adele/.php"); break;
						case 'adele015': include ("include/iframes/adele/eom.php"); break;
						//case 'adele016': include ("include/iframes/adele/.php"); break;
						case 'adele049': include ("include/iframes/adele/ritd.php"); break;
						case 'adele052': include ("include/iframes/adele/sfttr.php"); break;
						case 'adele053': include ("include/iframes/adele/s.php"); break;
					}
				}
			?>