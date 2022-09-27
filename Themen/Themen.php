<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
       "http://www.w3.org/TR/html4/loose.dtd">

<html>
    <head>
        <title>mwiese.de</title>
    <?php include ("include/head.php"); ?>
            <div class="ueberschrift">
                <h1>Themensammlung</h1>
			</div>
			<div>
                <p>Wilkommen. Auf dieser Seite werden unregelmäßig Fakten, Infos und ähnliches angefügt.</p>
            </div>
            <div class="linkzone01">
			<form action="" method="post" class="mb-3">
				<div><input type="submit" name="submit" value="Auswahl"></div>
				<div class="include1">
					<select name="themen">
						<?php
					$selected = '';
					function add_option($selected, $option_value,$interpret_name) {
						echo '<option value="'.$option_value.'"';
						if ($selected == $option_value) {
							echo ' selected="selected"';
						}
						echo '>'.$interpret_name.'</option>';
					}
					if (isset($_POST['submit'])) {
						$selected = $_POST['themen'];
					}
					echo '<option value="" disabled selected></option>';
						add_option($selected,'themen001','Politik');
						//add_option($selected,'themen002','Medien');
						add_option($selected,'themen003','Covid-19');
						//add_option($selected,'themen004','Technik');
					?>

					</select>
						<?php
				if (isset($_POST['themen'])) {
					switch ($_POST['themen']) {
						case 'themen001': include ("include/cat/Politik.php"); break;
						case 'themen002': include ("include/cat/Medien.php"); break;
						case 'themen003': include ("include/cat/Covid.php"); break;
						case 'themen004': include ("include/cat/Technik.php"); break;
					}
				}
			?>
				</div>
			</form>
			</div>
                <?php include ("../include/footer1.php"); ?>
</html>