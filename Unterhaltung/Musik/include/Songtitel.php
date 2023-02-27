<?php
	require_once ("../../../include/data.php");
	$connection = Connection::getInstance();
	
	// Bei Klick auf eine Kategorie wenn Interpret ausgewählt:
	$query = "SELECT * From Songs WHERE catID =:category";

	$statement = $connection->prepare($query, [PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY]);
	$statement->execute([":category"=>$_POST["Kategorien"]]);
	$data=$statement->fetchAll();
	$array=[];
	foreach($data as $row) {
		$array[]=[$row["SongID"],$row["SongName"]];
		echo '                	<option onClick="selectSong(this)" value="' . $row['SongID'] . '">' . $row['SongName'] . '</option>'.PHP_EOL;
	}
?>