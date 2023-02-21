<?php
	require_once ("../../../include/data.php");
	$connection = Connection::getInstance();
	
	// Bei Klick auf eine Kategorie wenn Interpret ausgewählt:
	//echo 'struktur unfertig';
	$query = "SELECT * From Songs WHERE InterpretID =:interpreten AND catID =:category";

	$statement = $connection->prepare($query, [PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY]);
	$statement->execute([":interpreten"=>$_POST["Interpret"],":category"=>$_POST["Kategorien"]]);
	$data=$statement->fetchAll();
	$array=[];
	foreach($data as $row) {
		$array[]=[$row["SongID"],$row["Song"]];
		echo '                	<option value="' . $row['SongID'] . '">' . $row['Songs'] . '</option>'.PHP_EOL;
	}
?>