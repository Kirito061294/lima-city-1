<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
       "http://www.w3.org/TR/html4/loose.dtd">


<html>
    <head>
        <title>Musik</title>
        <?php include ("../include/head1.php"); ?>
            <div class="ueberschrift">
                <h1>Musik</h1>
			</div>
                <p>____________________________________________</p>
            <div class="linkzone01">
			<form action="" method="post" class="mb-3">
			    <select name="musik">
                    <option value="" disabled selected></option>
                    <option selected="selected" value="m001">Adel Tawil</option>
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
                    if(!empty($_POST['musik'])) {$selected = $_POST['m001']; include ("include/cat/A-T.php"); }
                }
                if(isset($_POST['submit'])){
					if(!empty($_POST['musik'])) {$selected = $_POST['m002']; include ("include/cat/A-W.php"); }
                }
                if(isset($_POST['submit'])){
					if(!empty($_POST['musik'])) {$selected = $_POST['m003']; include ("include/cat/a2.php"); }
                }
                if(isset($_POST['submit'])){
					if(!empty($_POST['musik'])) {$selected = $_POST['m004']; include ("include/cat/A_i.php"); }
                }
                if(isset($_POST['submit'])){
					if(!empty($_POST['musik'])) {$selected = $_POST['m005']; include ("include/cat/ds.php"); }
                }
                if(isset($_POST['submit'])){
					if(!empty($_POST['musik'])) {$selected = $_POST['m006']; include ("include/cat/gd.php"); }
                }
                if(isset($_POST['submit'])){
					if(!empty($_POST['musik'])) {$selected = $_POST['m007']; include ("include/cat/G-E.php"); }
                }
                if(isset($_POST['submit'])){
					if(!empty($_POST['musik'])) {$selected = $_POST['m008']; include ("include/cat/N.php"); }
                }
                if(isset($_POST['submit'])){
					if(!empty($_POST['musik'])) {$selected = $_POST['m009']; include ("include/cat/SA.php"); }
                }
			?>
                <input type="submit" name="submit" value="Auswahl">
            </form>
            </div>
                <p>____________________________________________</p>
            <div class="ende1">
                <a href="javascript:history.back()">Zurück</a>
            </div>
		</div>
    </body>
	<?php include ("../include/footer.php"); ?>
</html>
