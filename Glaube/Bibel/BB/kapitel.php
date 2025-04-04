<?php
	$Spalte1_Tabelle = 'Tabelle_BasisBibel_Buch';
	$Spalte1_ID = 'Buch_ID';
	$Spalte2_Tabelle = 'Tabelle_BasisBibel_Kapitel';
	$Spalte2_ID = 'Kapitel_ID';
	$Spalte2_Bezeichnung = 'Kapitel_Name';
	
	require_once ("../../../include/data.php");
	$connection = Connection::getInstance();

	// Bei Klick auf Interpreten:
	$query = "SELECT * FROM $Spalte2_Tabelle WHERE $Spalte1_ID =:buch ORDER BY $Spalte2_Bezeichnung ASC";

	$statement = $connection->prepare($query, [PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY]);
	$statement->execute([":buch"=>$_POST["$Spalte1_Tabelle"]]);
	$data=$statement->fetchAll();
	$array=[];
	foreach($data as $row) {
		$array[]=[$row["$Spalte2_ID"],$row["$Spalte2_Bezeichnung"]];
		echo '                	<option class="kategorie02" value="' . $row[$Spalte2_ID] . '">' . $row[$Spalte2_Bezeichnung] . '</option>'.PHP_EOL;
	}
?>