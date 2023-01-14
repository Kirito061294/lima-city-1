			<select name="fairy">
							<?php
							$selected = '';
							if (isset($_POST['submit'])) {
								$selected = $_POST['fairy'];
							}
							echo '<option value="" disabled selected></option>';
								add_option($selected,'fairy001','S1 Opening 1');
								add_option($selected,'fairy00a','S1 Ending 1');
								add_option($selected,'fairy002','S1 Opening 2');
								add_option($selected,'fairy00b','S1 Ending 2');
								add_option($selected,'fairy003','S1 Opening 3');
								add_option($selected,'fairy00c','S1 Ending 3');
								add_option($selected,'fairy004','S1 Opening 4');
								add_option($selected,'fairy00d','S1 Ending 4');
								add_option($selected,'fairy005','S2 Opening 1');
								add_option($selected,'fairy00e','S2 Ending 1');
								add_option($selected,'fairy006','S2 Opening 2');
								add_option($selected,'fairy00f','S2 Ending 2');
								add_option($selected,'fairy007','S2 Opening 3');
								add_option($selected,'fairy00g','S2 Ending 3');
								add_option($selected,'fairy008','S2 Opening 4');
								add_option($selected,'fairy00h','S2 Ending 4');
								add_option($selected,'fairy009','S3 Opening 1');
								add_option($selected,'fairy00i','S3 Ending 1');
								add_option($selected,'fairy010','S3 Opening 2');
								add_option($selected,'fairy00j','S3 Ending 2');
								add_option($selected,'fairy011','S3 Opening 3');
								add_option($selected,'fairy00k','S3 Ending 3');
								add_option($selected,'fairy012','S3 Opening 4');
								add_option($selected,'fairy00l','S3 Ending 4');
								add_option($selected,'fairy013','S4 Opening 1');
								add_option($selected,'fairy00m','S4 Ending 1');
								add_option($selected,'fairy014','S4 Opening 2');
								add_option($selected,'fairy00n','S4 Ending 2');
								add_option($selected,'fairy015','S5 Opening 1');
								add_option($selected,'fairy00o','S5 Ending 1');
								add_option($selected,'fairy016','S5 Opening 2');
								add_option($selected,'fairy00p','S5 Ending 2');
								add_option($selected,'fairy017','S5 Opening 3');
								add_option($selected,'fairy00q','S5 Ending 3');
								//add_option($selected,'fairy018','S6 Opening 1');
								//add_option($selected,'fairy00r','S6 Ending 1');
								//add_option($selected,'fairy019','S6 Opening 2');
								//add_option($selected,'fairy00s','S6 Ending 2');
								//add_option($selected,'fairy020','S6 Opening 3');
								//add_option($selected,'fairy00t','S6 Ending 3');
							?>

						</select>
			<?php
			    if (isset($_POST['fairy'])) {
                    switch ($_POST['fairy']) {
                        case 'fairy001': include ("include/iframes/A-i/FT/op/01/1.php"); break;
                        case 'fairy002': include ("include/iframes/A-i/FT/op/01/2.php"); break;
                        case 'fairy003': include ("include/iframes/A-i/FT/op/01/3.php"); break;
                        case 'fairy004': include ("include/iframes/A-i/FT/op/01/4.php"); break;
                        case 'fairy005': include ("include/iframes/A-i/FT/op/02/5.php"); break;
                        case 'fairy006': include ("include/iframes/A-i/FT/op/02/6.php"); break;
                        case 'fairy007': include ("include/iframes/A-i/FT/op/02/7.php"); break;
                        case 'fairy008': include ("include/iframes/A-i/FT/op/02/8.php"); break;
                        case 'fairy009': include ("include/iframes/A-i/FT/op/03/9.php"); break;
                        case 'fairy010': include ("include/iframes/A-i/FT/op/03/10.php"); break;
                        case 'fairy011': include ("include/iframes/A-i/FT/op/03/11.php"); break;
                        case 'fairy012': include ("include/iframes/A-i/FT/op/03/12.php"); break;
                        case 'fairy013': include ("include/iframes/A-i/FT/op/04/13.php"); break;
                        case 'fairy014': include ("include/iframes/A-i/FT/op/04/14.php"); break;
                        case 'fairy015': include ("include/iframes/A-i/FT/op/05/15.php"); break;
                        case 'fairy016': include ("include/iframes/A-i/FT/op/05/16.php"); break;
                        case 'fairy017': include ("include/iframes/A-i/FT/op/05/17.php"); break;
                        case 'fairy018': include ("include/iframes/A-i/FT/op/06/18.php"); break;
                        case 'fairy019': include ("include/iframes/A-i/FT/op/06/19.php"); break;
                        case 'fairy020': include ("include/iframes/A-i/FT/op/06/20.php"); break;
                        case 'fairy00a': include ("include/iframes/A-i/FT/ed/1.php"); break;
                        case 'fairy00b': include ("include/iframes/A-i/FT/ed/2.php"); break;
                        case 'fairy00c': include ("include/iframes/A-i/FT/ed/3.php"); break;
                        case 'fairy00d': include ("include/iframes/A-i/FT/ed/4.php"); break;
                        case 'fairy00e': include ("include/iframes/A-i/FT/ed/5.php"); break;
                        case 'fairy00f': include ("include/iframes/A-i/FT/ed/6.php"); break;
                        case 'fairy00g': include ("include/iframes/A-i/FT/ed/7.php"); break;
                        case 'fairy00h': include ("include/iframes/A-i/FT/ed/8.php"); break;
                        case 'fairy00i': include ("include/iframes/A-i/FT/ed/9.php"); break;
                        case 'fairy00j': include ("include/iframes/A-i/FT/ed/10.php"); break;
                        case 'fairy00k': include ("include/iframes/A-i/FT/ed/11.php"); break;
                        case 'fairy00l': include ("include/iframes/A-i/FT/ed/12.php"); break;
                        case 'fairy00m': include ("include/iframes/A-i/FT/ed/13.php"); break;
                        case 'fairy00n': include ("include/iframes/A-i/FT/ed/14.php"); break;
                        case 'fairy00o': include ("include/iframes/A-i/FT/ed/15.php"); break;
                        case 'fairy00p': include ("include/iframes/A-i/FT/ed/16.php"); break;
                        case 'fairy00q': include ("include/iframes/A-i/FT/ed/17.php"); break;
                    }
				}
			?>