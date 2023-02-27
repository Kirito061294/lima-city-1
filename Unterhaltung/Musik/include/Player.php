<?php
	require_once ("../../../include/data.php");
	$connection = Connection::getInstance();
	
	// Bei Klick auf eine Kategorie wenn Interpret ausgewählt:
	$query = "SELECT * From LinkListe WHERE SongID =:link";

	$statement = $connection->prepare($query, [PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY]);
	$statement->execute([":link"=>$_POST["Songs"]]);
	$data=$statement->fetchAll();
	$array=[];
	foreach($data as $row) {
		$array[]=[$row["SongURL"]];
		echo '					<iframe src="' . htmlspecialchars($row['SongURL']) . '" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>'.PHP_EOL;
	}
?>
