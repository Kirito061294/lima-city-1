<?php
	$Spalte1_Tabelle = 'Interpret';
	$Spalte1_ID = 'InterpretID';
	$Spalte2_Tabelle = 'Kategorien';
	$Spalte2_ID = 'catID';
	$Spalte2_Bezeichnung = 'KategorieName';
	
	require_once ("../../../include/data.php");
	$connection = Connection::getInstance();

	// Bei Klick auf Interpreten:
	$query = "SELECT * FROM $Spalte2_Tabelle WHERE $Spalte1_ID =:interpreten ORDER BY $Spalte2_Bezeichnung ASC";

	$statement = $connection->prepare($query, [PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY]);
	$statement->execute([":interpreten"=>$_POST["$Spalte1_Tabelle"]]);
	$data=$statement->fetchAll();
	$array=[];
	foreach($data as $row) {
		$array[]=[$row["$Spalte2_ID"],$row["$Spalte2_Bezeichnung"]];
		echo '                	<option class="kategorie02" value="' . $row[$Spalte2_ID] . '">' . $row[$Spalte2_Bezeichnung] . '</option>'.PHP_EOL;
	}
?>