<?php
	$Spalte3_Tabelle = 'Songs';
	$Spalte3_ID = 'SongID';
	$Ausgabe_1 = 'SongURL';
	
	require_once ("../../../include/data.php");
	$connection = Connection::getInstance();
	
	// Bei Klick auf eine Kategorie wenn Interpret ausgewählt:
	$embed = "https://www.youtube-nocookie.com/embed/";
	$external = "https://www.youtube.com/";
	$query = "SELECT * FROM $Spalte3_Tabelle WHERE $Spalte3_ID =:link";

	$statement = $connection->prepare($query, [PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY]);
	$statement->execute([":link"=>$_POST["$Spalte3_Tabelle"]]);
	$data=$statement->fetchAll();
	$array=[];
	foreach($data as $row) {
		$array[]=[$row["$Ausgabe_1"]];
		echo '<iframe src="';
			echo $embed;
			echo htmlspecialchars($row[$Ausgabe_1]);
		echo '" frameborder="0"';
		include ("1.php");
		echo ' allowfullscreen></iframe>'.PHP_EOL;
	}
?>
