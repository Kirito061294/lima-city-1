<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
       "http://www.w3.org/TR/html4/loose.dtd">


<html>
    <head>
        <title>Betriebssysteme</title>
        <?php include ("../include/head1.php"); ?>
            <div class="ueberschrift">
                <h1>Betriebssysteme</h1>
			</div>
            <div class="main_content">
			<form action="" method="post" class="mb-3">
				<div><input type="submit" name="submit" value="Auswahl"></div>
				<div class="include1">
			    <select name="os">
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
						$selected = $_POST['os'];
					}
					echo '<option value="" disabled selected></option>';
						add_option($selected,'os001','Linux');
						add_option($selected,'os002','Microsoft Windows');
					?>

		        </select>
					<?php
						if (isset($_POST['os'])) {
							switch ($_POST['os']) {
								//case 'os001': include ("OS/Linux.php"); break;
								case 'os002': include ("OS/Win.php"); break;
							}
						} else {
							include ("../include/else.php");
						}
					?>
				</div>
            </form>
			</div>
                <?php include ("../include/footer1.php"); ?>
</html>