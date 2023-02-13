			<select name="SAO">
							<?php
							$selected = '';
							if (isset($_POST['submit'])) {
								$selected = $_POST['SAO'];
							}
							echo '<option value="" disabled selected></option>';
								add_option($selected,'SAO001','Aincrad Opening 1');
								add_option($selected,'SAO00a','Aincrad Ending 1');
								add_option($selected,'SAO002','Fairy Dance Opening 1');
								add_option($selected,'SAO00b','Fairy Dance Ending 1');
								add_option($selected,'SAO003','GGO Opening 1');
								add_option($selected,'SAO00c','GGO Ending 1');
								add_option($selected,'SAO004','Calibur Opening 1');
								add_option($selected,'SAO00d','Calibur Ending 1');
								add_option($selected,'SAO005','Mothers Rosario Opening 1');
								add_option($selected,'SAO00e','Mothers Rosario Ending 1');
								add_option($selected,'SAO006','Alicisation Opening 1');
								add_option($selected,'SAO00f','Alicisation Ending 1');
								add_option($selected,'SAO007','Alicisation Opening 2');
								add_option($selected,'SAO00g','Alicisation Ending 2');
								add_option($selected,'SAO008','War of Underworld Opening 1');
								add_option($selected,'SAO00h','War of Underworld Ending 1');
								add_option($selected,'SAO009','War of Underworld Opening 2');
								add_option($selected,'SAO00i','War of Underworld Ending 2');
							?>

						</select>
			<?php
			    if (isset($_POST['SAO'])) {
                    switch ($_POST['SAO']) {
                        case 'SAO001': include ("include/iframes/A-i/SAO/op/1.php"); break;
                        case 'SAO00a': include ("include/iframes/A-i/SAO/ed/1.php"); break;
                    }
				}
			?>