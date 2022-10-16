<select name="common">
									<?php
						$selected = '';
						if (isset($_POST['submit'])) {
							$selected = $_POST['common'];
						}
						echo '<option value="" disabled selected></option>';
							add_option($selected,'common00a','Ant-Man');
							add_option($selected,'common00b','Acunt May');
							add_option($selected,'common00c','Bat Girl');
							add_option($selected,'common00d','Batman');
							add_option($selected,'common00e','Black Panther');
							add_option($selected,'common00f','Black Widow');
							add_option($selected,'common00g','Catwoman');
							add_option($selected,'common00h','Cyborg');
							add_option($selected,'common00i','Deku');
							add_option($selected,'common00j','Flash');
							add_option($selected,'common00k','Green Arrow');
							add_option($selected,'common00l','Hawkeye');
							add_option($selected,'common00m','Iron Man');
							add_option($selected,'common00n','Luffy');
							add_option($selected,'common00o','Luke Cage');
							add_option($selected,'common00p','Nightwing');
							add_option($selected,'common00q','Robin');
							add_option($selected,'common00r','Sabretooth');
							add_option($selected,'common00s','Spiderman');
							add_option($selected,'common00t','War Machine');
							add_option($selected,'common00u','Wonder Woman');
						?>

								</select>
									<?php
					if (isset($_POST['common'])) {
						switch ($_POST['common']) {
							case 'common00a': include ("Roblox/TD/UTS/Tower/1common/am.php"); break;
							case 'common00b': include ("Roblox/TD/UTS/Tower/1common/am2.php"); break;
							case 'common00c': include ("Roblox/TD/UTS/Tower/1common/bg.php"); break;
							case 'common00d': include ("Roblox/TD/UTS/Tower/1common/bm.php"); break;
							case 'common00e': include ("Roblox/TD/UTS/Tower/1common/bp.php"); break;
							case 'common00f': include ("Roblox/TD/UTS/Tower/1common/bw.php"); break;
							case 'common00g': include ("Roblox/TD/UTS/Tower/1common/cw.php"); break;
							case 'common00h': include ("Roblox/TD/UTS/Tower/1common/cb.php"); break;
							case 'common00i': include ("Roblox/TD/UTS/Tower/1common/d.php"); break;
							case 'common00j': include ("Roblox/TD/UTS/Tower/1common/f.php"); break;
							case 'common00k': include ("Roblox/TD/UTS/Tower/1common/ga.php"); break;
							case 'common00l': include ("Roblox/TD/UTS/Tower/1common/he.php"); break;
							case 'common00m': include ("Roblox/TD/UTS/Tower/1common/im.php"); break;
							case 'common00n': include ("Roblox/TD/UTS/Tower/1common/l.php"); break;
							case 'common00o': include ("Roblox/TD/UTS/Tower/1common/lc.php"); break;
							case 'common00p': include ("Roblox/TD/UTS/Tower/1common/nw.php"); break;
							case 'common00q': include ("Roblox/TD/UTS/Tower/1common/r.php"); break;
							case 'common00r': include ("Roblox/TD/UTS/Tower/1common/st.php"); break;
							case 'common00s': include ("Roblox/TD/UTS/Tower/1common/sm.php"); break;
							case 'common00t': include ("Roblox/TD/UTS/Tower/1common/wm.php"); break;
							case 'common00u': include ("Roblox/TD/UTS/Tower/1common/ww.php"); break;
						}
					}
				?>