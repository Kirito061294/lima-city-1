<?php
	$Spalte1_Tabelle = 'Tabelle_Lesen_01';
	$Spalte1_ID = 'Lesen_01_ID';
	$Spalte2_Tabelle = 'Tabelle_Lesen_02';
	$Spalte2_ID = 'Lesen_02_ID';
	$Spalte3_Tabelle = 'Tabelle_Lesen_03';
	$Spalte3_ID = 'Lesen_03_ID';
	$Spalte3_Bezeichnung = 'Lesen_03_Chapter';
	
	require_once ("../../include/data.php");
	$connection = Connection::getInstance();
	
	// Bei Klick auf eine Kategorie wenn Interpret ausgewählt:
	$query = "SELECT * FROM $Spalte3_Tabelle WHERE $Spalte2_ID =:lesenzwei AND $Spalte1_ID =:leseneins";

	$statement = $connection->prepare($query, [PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY]);
	$statement->execute([":lesenzwei"=>$_POST["$Spalte2_Tabelle"],":leseneins"=>$_POST["$Spalte1_Tabelle"]]);
	$data=$statement->fetchAll();
	$array=[];
	foreach($data as $row) {
		$array[]=[$row["$Spalte3_ID"],$row["$Spalte3_Bezeichnung"]];
		echo '                	<option class="kategorie03" value="' . $row[$Spalte3_ID] . '">' . $row[$Spalte3_Bezeichnung] . '</option>'.PHP_EOL;
	}
?>