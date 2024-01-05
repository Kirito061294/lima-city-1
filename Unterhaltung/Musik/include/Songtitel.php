<?php
	$Spalte1_Tabelle = 'Interpret';
	$Spalte1_ID = 'InterpretID';
	$Spalte2_Tabelle = 'Kategorien';
	$Spalte2_ID = 'catID';
	$Spalte3_Tabelle = 'Songs';
	$Spalte3_ID = 'SongID';
	$Spalte3_Bezeichnung = 'SongName';
	
	require_once ("../../../include/data.php");
	$connection = Connection::getInstance();
	
	// Bei Klick auf eine Kategorie wenn Interpret ausgewählt:
	$query = "SELECT * FROM $Spalte3_Tabelle WHERE $Spalte2_ID =:category AND $Spalte1_ID =:interpreten ORDER BY $Spalte3_Bezeichnung ASC";

	$statement = $connection->prepare($query, [PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY]);
	$statement->execute([":category"=>$_POST["$Spalte2_Tabelle"],":interpreten"=>$_POST["$Spalte1_Tabelle"]]);
	$data=$statement->fetchAll();
	$array=[];
	foreach($data as $row) {
		$array[]=[$row["$Spalte3_ID"],$row["$Spalte3_Bezeichnung"]];
		echo '                	<option class="kategorie03" value="' . $row[$Spalte3_ID] . '">' . $row[$Spalte3_Bezeichnung] . '</option>'.PHP_EOL;
	}
?>