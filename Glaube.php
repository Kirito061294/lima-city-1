<!DOCTYPE html>
<html lang="de">
    <head>
	    <title>glaube.mwiese.de</title>
		<link rel="shortcut icon" href="include/45454.ico" type="image/x-icon"/>
        <link rel="stylesheet" type="text/css" href="include/min-style.css">
        <link rel="stylesheet" type="text/css" href="Glaube/include/style.css">
        <meta lang="de" charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
    </head>
	<body>
        <header>
            <section>
                <nav>
					<button class="knopf mobile_header mobile" onclick="toggleBlock('dropdown')">Menü</button>
					<ul class="kopf" id="dropdown">
						<li><a href="Glaube.php">Home</a></li>
						<li class="expandable_li">
							<input type="checkbox" id="Bibel lesen_checkbox">
							<label for="Bibel lesen_checkbox">Bibel lesen</label>
							<ul class="dropdown">
								<li><a onclick="loadPage('Glaube/Bibel/BasisBibel.php');" target="main">BasisBibel</a></li>
								<li><a onclick="loadPage('Glaube/Bibel/BasisBibel_hidden.php');" target="main">BasisBibel (versteckt)</a></li>
								<li><a onclick="loadPage('Glaube/Bibel/Hinweise.php');" target="main">Hinweise</a></li>
								<li><a onclick="loadPage('Glaube/Bibel/Zusammenfassungen.php');" target="main">Zusammenfassungen</a></li>
							</ul>
						</li>
						<li class="expandable_li">
							<input type="checkbox" id="Themen_checkbox">
							<label for="Themen_checkbox">Themen</label>
							<ul class="dropdown">
								<li><a onclick="loadPage('Glaube/themen/begnadigung-satans.php');" target="main">Begnadigung Satans?</a></li>
								<li><a onclick="loadPage('Glaube/themen/VaJ.php');" target="main">Verweise auf Jesus</a></li>
								<li><a onclick="loadPage('Glaube/themen/wkidh.php');" target="main">Wer kommt in die Hölle?</a></li>
							</ul>
						</li>
						<li><a href="https://mwiese.de/Rechtliches/ImpressumOnly.php" target="_blank">Impressum</a></li>
						<li><a href="https://mwiese.de/Rechtliches/DatenschutzOnly.php" target="_blank">Datenschutz</a></li>
					</ul>
                </nav>
            </section>
        </header>
		<div class="center" id="main-container">
		</div>
		<?php
			$js_1 = '<script type="text/javascript" src="';
			$js_2 = '.js"></script>';
			echo $js_1.'js/jquery'.$js_2.PHP_EOL;
			echo '		'.$js_1.'js/auswahlmenue'.$js_2.PHP_EOL;
			echo '		'.$js_1.'js/loadPage'.$js_2.PHP_EOL;
			echo '		'.$js_1.'Glaube/include/reload'.$js_2.PHP_EOL;
			echo '		'.$js_1.'js/visibility_switch'.$js_2.PHP_EOL;
		?>
	</body>
	<footer>
		<div style="display: grid; grid-template-columns: 1fr 1fr;">
			<div class="spalte1" style="border: none;">
				<p>Author: Marcel Wiese</p>
				<p>Copyright: <a href="https://mwiese.de">mwiese.de</a> 2018</p>
			</div>
			<div class="spalte2" style="border: none;">
				<p><a href="https://robertsspaceindustries.com/enlist?referral=STAR-WQLP-JGC7" target="_blank">Star Citizen</a> Referral-Code: STAR-WQLP-JGC7</p>
			</div>
		</div>
    </footer>
</html>