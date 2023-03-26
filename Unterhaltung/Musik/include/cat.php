<?php
	require_once ("../../../include/data.php");
	$connection = Connection::getInstance();

	// Bei Klick auf Interpreten:
	$query = "SELECT * FROM Kategorien WHERE InterpretID =:interpreten ORDER BY KategorieName ASC";

	$statement = $connection->prepare($query, [PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY]);
	$statement->execute([":interpreten"=>$_POST["Interpret"]]);
	$data=$statement->fetchAll();
	$array=[];
	foreach($data as $row) {
		$array[]=[$row["catID"],$row["KategorieName"]];
		echo '                	<option onClick="selectCat(this)" class="kategorie" value="' . $row['catID'] . '">' . $row['KategorieName'] . '</option>'.PHP_EOL;
	}
?>