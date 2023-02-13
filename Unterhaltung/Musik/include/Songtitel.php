<?php
	//echo $_POST["Interpret"];
	$connection = Connection::getInstance();
	//$InterpretID = filter_input(INPUT_GET, 'InterpretID', FILTER_VALIDATE_INT);
	//if ($InterpretID === false) {
	//	echo "Ungültiger InterpretID-Wert".PHP_EOL;
	//	exit;
	//}
	$query = "SELECT * From Song WHERE InterpretID =:interpreten";

	$statement = $connection->prepare($query, [PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY]);
	$statement->execute([":interpreten"=>$_POST["Interpret"]]);
	$data=$statement->fetchAll();
	var_dump($data);
	$array=[];
	foreach($data as $row) {
		$array[]=[$row["SongID"],$row["Songtitel"]];
		echo $row["Songtitel"].PHP_EOL;
	}
?>