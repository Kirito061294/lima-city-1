<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
       "https://www.w3.org/TR/html4/loose.dtd">

<html>
    <head>
        <title>Interessantes</title>
    <?php include ("../include/head1.php"); ?>
            <div class="ueberschrift">
                <h1>Interessantes</h1>
			</div>
            <div class="linkzone01">
			<form action="" method="post" class="mb-3">
				<div><input type="submit" name="submit" value="Auswahl"></div>
				<div class="include1">
			    <select name="interessantes">
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
                    $selected = $_POST['interessantes'];
                }
                echo '<option value="" disabled selected></option>';
					add_option($selected,'i001','Passwort-Generator');
					add_option($selected,'i002','Raspberry Pi zeugs');
				?>
		        </select>
			<?php
				if (isset($_POST['interessantes'])) {
					switch ($_POST['interessantes']) {
						case 'i001': include ("1/pw.php"); break;
						case 'i002': include ("pi/pi.php"); break;
					}
				}
			?>
				</div>
            </form>
			</div>
                <?php include ("../include/footer1.php"); ?>
</html>