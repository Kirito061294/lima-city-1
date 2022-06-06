<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
       "http://www.w3.org/TR/html4/loose.dtd">


<html>
    <head>
        <title>Musik</title>
        <?php include ("../../include/head1.php"); ?>
            <div class="ueberschrift">
                <h1>Musik</h1>
			</div>
                <p>____________________________________________</p>
            <div class="linkzone01">
			<form action="" method="post" class="mb-3">
			    <select name="musik">
                    <option value="" disabled selected></option>
                    <option value="m001">Adel Tawil</option>
                    <option value="m002">Alan Walker</option>
                    <option value="m004">Anime Tracks</option>
                    <option value="m005">Damestream</option>
                    <option value="m006">Geometry Dash</option>
                    <option value="m007">George Ezra</option>
                    <option value="m008">Nightcore</option>
                    <option value="m009">Sunrise Avenue</option>
                    <option value="m003">Anderes</option>
		        </select>
			<?php
                if(isset($_POST['submit'])){
			if ($_POST['musik'] == 'm001') {include ("include/cat/A-T.php"); }
                	if ($_POST['musik'] == 'm002') {include ("include/cat/A-W.php"); }
               		if ($_POST['musik'] == 'm003') {include ("include/cat/a2.php"); }
                	if ($_POST['musik'] == 'm004') {include ("include/cat/A_i.php"); }
                	if ($_POST['musik'] == 'm005') {include ("include/cat/ds.php"); }
                	if ($_POST['musik'] == 'm006') {include ("include/cat/gd.php"); }
                	if ($_POST['musik'] == 'm007') {include ("include/cat/G-E.php"); }
                        if ($_POST['musik'] == 'm008') {include ("include/cat/N.php"); }
			if ($_POST['musik'] == 'm009') {include ("include/cat/S-A.php"); }
		}
			?>
                <input type="submit" name="submit" value="Auswahl">
            </form>
            </div>
                <?php include ("../../include/footer1.php"); ?>
</html>
