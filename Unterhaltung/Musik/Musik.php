<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
       "http://www.w3.org/TR/html4/loose.dtd">


<html>
    <head>
        <title>Musik</title>
        <?php include ("../../include/head1.php"); ?>
			<link rel="stylesheet" type="text/css" href="include/musik.css">
            <div class="ueberschrift">
                <h1>Musik</h1>
			</div>
			<div id="info">
				<p>Der Inhalt dieser eingebetteten Videos stammt nicht von mir und ich habe keinerlei Kontakt oder Verbindung zum Rechteinhaber.</p>
				<p>Sollten rechtliche Probleme auftreten werde ich die betreffenden Videos statt sie einzubetten lediglich verlinken.</p>
			</div>
			<button class="knopf" onclick="toggleBlock('info')">Rechtliches</button>
            <div class="medienzone01">
				<form action="" method="post" class="mb-3">
				<div><input type="submit" name="submit" value="Auswahl"></div>
				<div class="include1">
					<select name="musik">
						<?php
							$embed = "https://www.youtube-nocookie.com/embed/";
							$external = "https://www.youtube.com/";
							$selected = '';
							function add_option($selected, $option_value,$interpret_name) {
								echo '						<option value="'.$option_value.'"';
								if ($selected == $option_value) {
									echo 'selected="selected"';
								}
								echo '>'.$interpret_name.'</option>'.PHP_EOL;;
							}
							if (isset($_POST['submit'])) {
								$selected = $_POST['musik'];
							}
							echo '				<option value="" disabled selected></option>'.PHP_EOL;;
								//add_option($selected,'m001','Adele');
								//add_option($selected,'m002','Adel Tawil');
								//add_option($selected,'m003','Alan Walker');
								add_option($selected,'m005','Anime Tracks').PHP_EOL;;
								//add_option($selected,'m006','Damestream');
								add_option($selected,'m007','Geometry Dash').PHP_EOL;;
								//add_option($selected,'m008','George Ezra');
								add_option($selected,'m009','Nightcore').PHP_EOL;;
								//add_option($selected,'m010','Sunrise Avenue');
								//add_option($selected,'m004','Anderes');
						?>

					</select>
						<?php
							if (isset($_POST['musik'])) {
								switch ($_POST['musik']) {
									case 'm001': include ("include/cat/Adele.php"); break;
									case 'm002': include ("include/cat/Adel-Tawil.php"); break;
									case 'm003': include ("include/cat/Alen-Walker.php"); break;
									case 'm004': include ("include/cat/Anderes.php"); break;
									case 'm005': include ("include/cat/Anime.php"); break;
									case 'm006': include ("include/cat/Damestream.php"); break;
									case 'm007': include ("include/cat/GeometryDash.php"); break;
									case 'm008': include ("include/cat/George-Ezra.php"); break;
									case 'm009': include ("include/cat/Nightcore.php"); break;
									case 'm010': include ("include/cat/Sunrise-Avenue.php"); break;
								}
							} else {
								include ("../../include/else.php");
							}
						?>
				</div>
				</form>
            </div>
			<?php include ("../../include/footer1.php"); ?>
</html>