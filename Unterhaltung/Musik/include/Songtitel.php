<?php
	require_once ("../../../include/data.php");
	$connection = Connection::getInstance();
	
	// Bei Klick auf eine Kategorie wenn Interpret ausgewählt:
	if isset($_POST["Kategorie"]) {
		echo 'struktur unfertig';
//		$query = "SELECT * From Songs WHERE InterpretID =:interpreten AND catID =:category";
//
//		$statement = $connection->prepare($query, [PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY]);
//		$statement->execute([":interpreten"=>$_POST["Interpret"],":category"=>$_POST["Kategorien"]]);
//		$data=$statement->fetchAll();
//		$array=[];
//		foreach($data as $row) {
//			$array[]=[$row["SongID"],$row["Songs"]];
//			echo '                	<option value="' . $row['SongID'] . '">' . $row['Songs'] . '</option>'.PHP_EOL;
		}
	// Bei Klick auf Interpreten:
	} else {
		$query = "SELECT * From Kategorien WHERE InterpretID =:interpreten";

		$statement = $connection->prepare($query, [PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY]);
		$statement->execute([":interpreten"=>$_POST["Interpret"]]);
		$data=$statement->fetchAll();
		$array=[];
		foreach($data as $row) {
			$array[]=[$row["catID"],$row["Kategorien"]];
			echo '                	<option onClick="selectKategorien(this)"  value="' . $row['catID'] . '">' . $row['Kategorien'] . '</option>'.PHP_EOL;
		}
	}
	
?>