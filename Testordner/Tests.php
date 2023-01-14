<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
       "http://www.w3.org/TR/html4/loose.dtd">


<html>
    <head>
        <title>mwiese.de</title>
        <?php include ("head1.php"); ?>
            <div class="ueberschrift">
                <h1>Tests</h1>
			</div>
            <div class="Textzone01">
			<form action="" method="post" class="glaube01">
				<div>
					<div>
						<input type="submit" name="submit" value="Auswahl">
                        <div>hallo1</div>
						<label class="rechts_angezeigt" for="toggle_button1" class="toggle_button1"><span>Kommentare einblenden</span></label>
					</div>
                    <div> hallo2</div>
				</div>
				<div class="include1">
					<select name="test">
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
						$selected = $_POST['test'];
					}
					echo '<option value="" disabled selected></option>';
						add_option($selected,'t001','Test1');
					?>

					</select>
						<?php
				if (isset($_POST['test'])) {
					switch ($_POST['test']) {
						case 't001': include ("Tests/Test1.php"); break;
					}
				}
			?>
				</div>
						<input type="checkbox" id="toggle_button1" style="display:none;">
            </form>
            </div>
			<?php include ("../include/footer1.php"); ?>
</html>