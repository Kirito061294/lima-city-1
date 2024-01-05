<?php
	$Spalte1_Tabelle = 'Tabelle_Lesen_01';
	$Spalte1_ID = 'Lesen_01_ID';
	$Spalte2_Tabelle = 'Tabelle_Lesen_02';
	$Spalte2_ID = 'Lesen_02_ID';
	$Spalte2_Bezeichnung = 'Lesen_02_Variant';
	
	require_once ("../../include/data.php");
	$connection = Connection::getInstance();

	// Bei Klick auf Bücher:
	$query = "SELECT * FROM $Spalte2_Tabelle WHERE $Spalte1_ID =:leseneins ORDER BY $Spalte2_Bezeichnung ASC";

	$statement = $connection->prepare($query, [PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY]);
	$statement->execute([":leseneins"=>$_POST["$Spalte1_Tabelle"]]);
	$data=$statement->fetchAll();
	$array=[];
	foreach($data as $row) {
		$array[]=[$row["$Spalte2_ID"],$row["$Spalte2_Bezeichnung"]];
		echo '                	<option class="kategorie02" value="' . $row[$Spalte2_ID] . '">' . $row[$Spalte2_Bezeichnung] . '</option>'.PHP_EOL;
	}
?>