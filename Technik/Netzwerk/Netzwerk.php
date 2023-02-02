<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
       "http://www.w3.org/TR/html4/loose.dtd">


<html>
    <head>
        <title>Internet/Netzwerk</title>
        <?php include ("../../include/head1.php"); ?>
            <div class="ueberschrift">
                <h1>Internet/Netzwerk</h1>
			</div>
            <div class="linkzone01">
			<form action="" method="post" class="mb-3">
				<div><input type="submit" name="submit" value="Auswahl"></div>
				<div class="include1">
			    <select name="netzwerk">
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
                    $selected = $_POST['netzwerk'];
                }
                echo '<option value="" disabled selected></option>';
					add_option($selected,'i001','Internet-Tests');
				?>
		        </select>
			<?php
				if (isset($_POST['netzwerk'])) {
					switch ($_POST['netzwerk']) {
						case 'i001': include ("I/I.php"); break;
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