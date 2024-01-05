<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
       "http://www.w3.org/TR/html4/loose.dtd">


<html>
    <head>
        <title>Youtube Embedded</title>
        <?php include ("../../include/head1.php"); ?>
			<link rel="stylesheet" type="text/css" href="../Musik/include/musik.css">
            <div class="ueberschrift">
                <h1>youtube-nocookie Embedded</h1>
			</div>
            <div class="main_content">
				<?php
					$link = 'zqLEO5tIuYs'; // Video das beim öffnen geladen wird
					
					if ($_SERVER["REQUEST_METHOD"] == "POST") {
						$textfieldContent = $_POST["textfield"];
						$allowedLength = 11; // Genau erlaubte Zeichenlänge
						// Überprüfen, ob die Zeichenlänge genau 9 ist
						if (strlen($textfieldContent) === $allowedLength) {
							// Weitere Verarbeitung, z. B. Zuweisung zu $link
							$link = $textfieldContent;
							echo "Der eingegebene Link ist: " . htmlspecialchars($link);
						} else {
							echo "Die Zeichenlänge muss genau 9 Zeichen betragen.";
						}
					}
				?>
				<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
					<label for="textfield">Video-ID:</label>
					<input type="text" id="textfield" name="textfield" required>
					<input class="knopf" type="submit" value="Link verarbeiten">
					<button class="knopf" onclick="toggleBlock('info')">Erklärung</button>
				</form>
				<div id="info">
					<p>Die Video ID ist teil der URL eines Youtube-Videos. Die URL sieht zb. so aus: "www.youtube.com/watch?v=xpmQK_uPDpg"<br>Um zum gewünschten Video zu wechseln müssen Sie nur den letzten Part (zb. "xpmQK_uPDpg") einfügen.</p>
				</div>
				<div class="video001">
					<?php echo '<iframe style="padding: 0;" src="https://www.youtube-nocookie.com/embed/'.$link.'"></iframe>'.PHP_EOL; ?>
				</div>
            </div>
			<?php include ("../../include/footer1.php"); ?>
</html>