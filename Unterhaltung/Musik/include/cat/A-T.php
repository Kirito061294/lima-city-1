		<select name="adel-tawil">
						<?php
						$selected = '';
						if (isset($_POST['submit'])) {
							$selected = $_POST['adel-tawil'];
						}
						echo '<option value="" disabled selected></option>';
							add_option($selected,'adel001','1000 gute Gründe');
							add_option($selected,'adel002','Aschenflug');
							add_option($selected,'adel003','Atombombe');
							add_option($selected,'adel004','Bis hier und noch weiter');
							add_option($selected,'adel005','Der Himmel soll warten');
							add_option($selected,'adel006','DNA');
							add_option($selected,'adel007','Eine Welt eine Heimat');
							add_option($selected,'adel008','Endgegner');
							add_option($selected,'adel009','Flutlicht');
							add_option($selected,'adel010','Gott steh mir bei');
							add_option($selected,'adel011','Graffiti Love');
							add_option($selected,'adel012','Immer da');
							add_option($selected,'adel013','Ist da jemand');
							add_option($selected,'adel014','Kartenhaus');
							add_option($selected,'adel015','Katsching');
							add_option($selected,'adel016','Liebe to go');
							add_option($selected,'adel017','Lieder');
							add_option($selected,'adel018','Neonfarben');
							add_option($selected,'adel019','Neues Ich');
							add_option($selected,'adel020','Neujahr');
							add_option($selected,'adel021','Niemals Niemand');
							add_option($selected,'adel022','Sie rennt');
							add_option($selected,'adel023','So schön anders');
							add_option($selected,'adel024','Tu m appelles');
							add_option($selected,'adel025','Unsere Lieder');
							add_option($selected,'adel026','Unter dem selben Himmel');
							add_option($selected,'adel027','Vermiss mich');
							add_option($selected,'adel028','Wenn du liebst');
							add_option($selected,'adel029','Weinen');
							add_option($selected,'adel030','Wohin soll ich gehen');
							add_option($selected,'adel031','Zuhause');
						?>

					</select>
			<?php
				if (isset($_POST['adel-tawil'])) {
					switch ($_POST['adel-tawil']) {
						case 'adel001': include ("include/iframes/a-t/1gg.php"); break;
						case 'adel002': include ("include/iframes/a-t/as.php"); break;
						case 'adel003': include ("include/iframes/a-t/at.php"); break;
						case 'adel004': include ("include/iframes/a-t/bhunw.php"); break;
						case 'adel005': include ("include/iframes/a-t/dhsw.php"); break;
						case 'adel006': include ("include/iframes/a-t/d.php"); break;
						case 'adel007': include ("include/iframes/a-t/eweh.php"); break;
						case 'adel008': include ("include/iframes/a-t/eg.php"); break;
						case 'adel009': include ("include/iframes/a-t/fl.php"); break;
						case 'adel010': include ("include/iframes/a-t/gsmb.php"); break;
						case 'adel011': include ("include/iframes/a-t/gl.php"); break;
						case 'adel012': include ("include/iframes/a-t/id.php"); break;
						case 'adel013': include ("include/iframes/a-t/idj.php"); break;
						case 'adel014': include ("include/iframes/a-t/kh.php"); break;
						case 'adel015': include ("include/iframes/a-t/k.php"); break;
						case 'adel016': include ("include/iframes/a-t/ltg.php"); break;
						case 'adel017': include ("include/iframes/a-t/l.php"); break;
						case 'adel018': include ("include/iframes/a-t/nf.php"); break;
						case 'adel019': include ("include/iframes/a-t/ni.php"); break;
						case 'adel020': include ("include/iframes/a-t/nj.php"); break;
						case 'adel021': include ("include/iframes/a-t/nn.php"); break;
						case 'adel022': include ("include/iframes/a-t/sr.php"); break;
						case 'adel023': include ("include/iframes/a-t/sosa.php"); break;
						case 'adel024': include ("include/iframes/a-t/tma.php"); break;
						case 'adel025': include ("include/iframes/a-t/ul.php"); break;
						case 'adel026': include ("include/iframes/a-t/udsh.php"); break;
						case 'adel027': include ("include/iframes/a-t/vm.php"); break;
						case 'adel028': include ("include/iframes/a-t/wdl.php"); break;
						case 'adel029': include ("include/iframes/a-t/w.php"); break;
						case 'adel030': include ("include/iframes/a-t/wsig.php"); break;
						case 'adel031': include ("include/iframes/a-t/z.php"); break;
					}
				}
			?>