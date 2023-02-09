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
				<link rel="stylesheet" type="text/css" href="https://mwiese.de/include/style-test.css">
				<form action="">
					<?php
					$directory = 'include/iframes/A-i/';
					$files = scandir($directory);
					foreach ($files as $file) {
						if ($file != '.' && $file != '..') {
							if (is_dir($directory . '/' . $file)) {
								echo '			<input type="checkbox" name="' . $file . '">' . $file . '<br>'.PHP_EOL;
								$sub_files = scandir($directory . '/' . $file);
								foreach ($sub_files as $sub_file) {
									if ($sub_file != '.' && $sub_file != '..') {
										echo '			<input type="checkbox" name="' . $file . '/' . $sub_file . '">' . $sub_file . '<br>'.PHP_EOL;
									}
								}
							} else {
								echo '			<input type="checkbox" name="' . $file . '">' . $file . '<br>'.PHP_EOL;
							}
						}
					}
				?>
				<input type="submit" value="Auswahl">
				</form>
            </div>
			<?php include ("../../include/footer1.php"); ?>
</html>