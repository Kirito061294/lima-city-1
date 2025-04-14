<?php
	$Spalte1_ID = 'Spiele_01_ID';
	$Spalte2_ID = 'Spiele_02_ID';
	$Spalte3_ID = 'Spiele_03_ID';
	$Spalte3_Tabelle = 'Tabelle_Spiele_03';
	$Ausgabe_1 = 'Spiele_03_File';
	
	require_once ("../../include/data.php");
	$connection = Connection::getInstance();
	
	// Bei Klick auf eine Kategorie wenn Interpret ausgewählt:
	$query = "SELECT * FROM $Spalte3_Tabelle WHERE $Spalte3_ID =:spielen";

	$statement = $connection->prepare($query, [PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY]);
	$statement->execute([":spielen"=>$_POST["$Spalte3_Tabelle"]]);
	$data=$statement->fetchAll();
	$array=[];
	foreach($data as $row) {
		$array[]=[$row["$Ausgabe_1"],$row["$Spalte1_ID"],$row["$Spalte2_ID"]];
			$path = $row[$Spalte1_ID] . "/" . $row[$Spalte2_ID] . "/" . htmlspecialchars($row[$Ausgabe_1]);
			include($path);
	}
?>