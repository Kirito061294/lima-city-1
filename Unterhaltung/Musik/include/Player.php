<?php
	require_once ("../../../include/data.php");
	$connection = Connection::getInstance();
	
	// Bei Klick auf eine Kategorie wenn Interpret ausgewählt:
	$embed = "https://www.youtube-nocookie.com/embed/";
	$external = "https://www.youtube.com/";
	$query = "SELECT * FROM Songs WHERE SongID =:link";

	$statement = $connection->prepare($query, [PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY]);
	$statement->execute([":link"=>$_POST["Songs"]]);
	$data=$statement->fetchAll();
	$array=[];
	foreach($data as $row) {
		$array[]=[$row["SongURL"]];
		echo '<iframe src="';
		echo $embed;
		echo htmlspecialchars($row['SongURL']);
		echo '" frameborder="0"';
		include ("1.php");
		echo 'allowfullscreen></iframe>'.PHP_EOL;
	}
?>
