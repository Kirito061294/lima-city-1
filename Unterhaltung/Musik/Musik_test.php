<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
       "http://www.w3.org/TR/html4/loose.dtd">


<html>
    <head>
        <title>Musik</title>
        <?php include ("../../include/head1.php"); ?>
            <div class="ueberschrift">
                <h1>Musik</h1>
			</div>
			<div class="rechte">
				<p>Der Inhalt dieser eingebetteten Videos stammt nicht von mir und ich habe keinerlei Kontakt oder Verbindung zum Rechteinhaber.</p>
				<p>Sollten rechtliche Probleme auftreten werde ich die betreffenden Videos statt sie einzubetten lediglich verlinken.</p>
			</div>
            <div class="medienzone01">
			<?php
			require_once ('konfiguration.php');
			$db_link = mysqli_connect (
								MYSQL_HOST, 
								MYSQL_BENUTZER, 
								MYSQL_KENNWORT, 
								MYSQL_DATENBANK
								);
			
			$sql = "SELECT * FROM Musik";
			
			$db_erg = mysqli_query( $db_link, $sql );
			if ( ! $db_erg )
			{
			die('Ungültige Abfrage: ' . mysqli_error());
			}

			echo '<table border="1">';
			while ($zeile = mysqli_fetch_array( $db_erg, MYSQLI_ASSOC))
			{
			echo "<tr>";
			echo "<td>". $zeile['id'] . "</td>";
			echo "<td>". $zeile['nachname'] . "</td>";
			echo "<td>". $zeile['vorname'] . "</td>";
			echo "<td>". $zeile['akuerzel'] . "</td>";
			echo "<td>". $zeile['strasse'] . "</td>";
			echo "<td>". $zeile['plz'] . "</td>";
			echo "<td>". $zeile['telefon'] . "</td>";
			echo "</tr>";
			}
			echo "</table>";

			mysqli_free_result( $db_erg );
			?>
				</div>
            </form>
            </div>
			<?php include ("../../include/footer1.php"); ?>
</html>