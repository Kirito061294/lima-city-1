<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
       "http://www.w3.org/TR/html4/loose.dtd">


<html>
    <head>
        <title>Musik</title>
        <?php include ("../../include/head1.php"); ?>
			<link rel="stylesheet" type="text/css" href="https://mwiese.de/include/css/musik.css">
            <div class="ueberschrift">
                <h1>Musik</h1>
			</div>
			<div class="rechte">
				<p>Der Inhalt dieser eingebetteten Videos stammt nicht von mir und ich habe keinerlei Kontakt oder Verbindung zum Rechteinhaber.</p>
				<p>Sollten rechtliche Probleme auftreten werde ich die betreffenden Videos statt sie einzubetten lediglich verlinken.</p>
			</div>
            <div class="medienzone01">
				<div class="musikauswahl">
					<script src="include/ajax.js"></script>
					<script src="../../include/jquery.js"></script>
					<div class="spalte">
						<div class="Interpreten">
							<?php require_once ("../../include/data.php");
								//  Für Interpretenliste
								$connection = Connection::getInstance();
								$query = "SELECT * FROM Interpret";
		
								$statement = $connection->prepare($query);
								$statement->execute();
					
								echo ''.PHP_EOL;
								while ($row = $statement->fetch()) {
								echo '					<option onClick="selectInterpret(this)" value="' . $row['InterpretID'] . '" class="interpret">' . $row['InterpretName'] . '</option>'.PHP_EOL;
								}
							?>
						</div>
					</div>
					<div class="spalte"><div id="output" class="cat2"></div></div>
					<div class="spalte"><div id="output2" class="cat3"></div></div>
				</div>
            </div>
			<?php include ("../../include/footer1.php"); ?>
</html>