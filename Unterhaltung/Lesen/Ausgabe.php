<?php
	$Spalte1_ID = 'Lesen_01_ID';
	$Spalte2_ID = 'Lesen_02_ID';
	$Spalte3_Tabelle = 'Tabelle_Lesen_03';
	$Ausgabe_1 = 'part';
	$Ausgabe_2 = 'Lesen_03_File';
	
	require_once ("../../include/data.php");
	$connection = Connection::getInstance();
	
	// Bei Klick auf eine Kategorie wenn Interpret ausgewählt:
	$query = "SELECT * FROM $Spalte3_Tabelle WHERE Lesen_03_ID =:lesen";

	$statement = $connection->prepare($query, [PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY]);
	$statement->execute([":lesen"=>$_POST["$Spalte3_Tabelle"]]);
	$data=$statement->fetchAll();
	$array=[];
	foreach($data as $row) {
		$array[]=[$row["$Ausgabe_2"],$row["$Spalte1_ID"],$row["$Spalte2_ID"],$row["$Ausgabe_1"]];
		echo '<iframe src="';
			echo 'Lesen/'.$row[$Spalte1_ID].'/'.$row[$Spalte2_ID].'/'.$row[$Ausgabe_1].'/';
			echo htmlspecialchars($row[$Ausgabe_2]);
		echo '" frameborder="0"';
		echo ' allowfullscreen></iframe>'.PHP_EOL;
	}
?>