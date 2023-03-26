<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
       "http://www.w3.org/TR/html4/loose.dtd">


<html>
    <head>
        <title>Spiele</title>
        <?php include ("../../include/head1.php"); ?>
            <div class="ueberschrift">
                <h1>Spiele</h1>
			</div>
			<script src="https://mwiese.de/js/visibility_switch.js"></script>
			<div id="info">
                <p>Die meisten Dateilinks stammen nicht von mir und ich habe keinen Kontakt zum Uploader.</p>
                <p>Ich übernehme keine verantwortung für eventuell auftretende Schwierigkeiten</p>
            </div>
			<button id="myButton" class="footer-bg" onclick="toggleInfo()">Rechtliches</button>
            <div class="linkzone01">
			<form action="" method="post" class="mb-4">
				<div><input type="submit" name="submit" value="Auswahl"></div>
				<div class="include1">
			    <select name="spiele">
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
						$selected = $_POST['spiele'];
					}
					echo '<option value="" disabled selected></option>';
						add_option($selected,'s001','Konsolen Spiele');
						add_option($selected,'s002','Online Spiele');
						add_option($selected,'s003','PC Spiele');
						add_option($selected,'s004','Roblox');
					?>

		        </select>
					<?php
				if (isset($_POST['spiele'])) {
					switch ($_POST['spiele']) {
						case 's001': include ("Konsole/K.php"); break;
						case 's002': include ("Online/O.php"); break;
						case 's003': include ("PC/PC.php"); break;
						case 's004': include ("Roblox/Roblox.php"); break;
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