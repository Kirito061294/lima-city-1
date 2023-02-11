<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
       "http://www.w3.org/TR/html4/loose.dtd">


<html>
    <head>
        <title>Musik</title>
        <?php include ("../../include/head1.php"); ?>
            <div class="ueberschrift">
                <h1>Musik</h1>
			</div>
			<div class="rechte">
				<p>Der Inhalt dieser eingebetteten Videos stammt nicht von mir und ich habe keinerlei Kontakt oder Verbindung zum Rechteinhaber.</p>
				<p>Sollten rechtliche Probleme auftreten werde ich die betreffenden Videos statt sie einzubetten lediglich verlinken.</p>
			</div>
            <div class="medienzone01">
				<?php
					require_once ("../../include/data.php");
				?>
				<?php
					// some previous code...
					$connection = Connection::getInstance();
					$query = "SELECT * FROM user WHERE id = :user_id";

					$statement = $connection->prepare($query);
					$statement->bindValue('user_id', $user_id, \PDO::PARAM_INT);
					$statement->execute();

					$result = $statement->fetchColumn();

					// some next code...
				?>
            </div>
			<?php include ("../../include/footer1.php"); ?>
</html>