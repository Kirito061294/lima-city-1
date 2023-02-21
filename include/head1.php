<meta charset="UTF-8" lang="de" name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
		<link rel="shortcut icon" href="https://mwiese.de/include/45454.ico" type="image/x-icon"/>
        <link rel="stylesheet" type="text/css" href="https://mwiese.de/include/css/style.css">
    </head>
	<body>
		<header>
			<nav>
				<input type="checkbox" id="toggle_button">
				<label for="toggle_button" class="toggle_button"><span class="bar"></span><span class="bar"></span><span class="bar"></span></label>
				<?php
				function php_header($menue_eintrag,$new_tab=false) {
					foreach($menue_eintrag as $item => $url) {
						if(is_array($url)) {
							echo '					<li class="expandable_li">'.PHP_EOL;
							echo '						<input type="checkbox" id="' . $item . '_checkbox">'.PHP_EOL;
							echo '						<label class="hide-onDesktop" for="' . $item . '_checkbox">' . $item . '</label>' . $item.PHP_EOL;
							echo '						<ul class="dropdown">'.PHP_EOL;
							foreach($url as $subitem => $suburl) {
								if($new_tab) {
									echo '							<li><a href="' . $suburl . '" target="_blank">' . $subitem . '</a></li>'.PHP_EOL;
								} else {
									echo '							<li><a href="' . $suburl . '">' . $subitem . '</a></li>'.PHP_EOL;
								}
							}
							echo '						</ul>'.PHP_EOL;
							echo '					</li>'.PHP_EOL;
							//echo ''
						} else {
							if($new_tab) {
								echo '					<li><a href="' . $url . '" target="_blank">' . $item . '</a></li>' .PHP_EOL;
							} else {
								echo '					<li><a href="' . $url . '">' . $item . '</a></li>'.PHP_EOL;
							}
						}
					}
				}
				// Eingabe
				$menu = array(
					'Home' => 'https://mwiese.de',
					'Unterhaltung' => array(
						'Musik' => 'https://mwiese.de/Unterhaltung/Musik/Musik.php',
						'Spiele' => 'https://mwiese.de/Unterhaltung/Spiele/Spiele.php',
						//'Live-TV' => 'https://mwiese.de/Unterhaltung/1/live-tv.php'
					),
					'Technik' => array(
						'Betriebssysteme' => 'https://mwiese.de/Technik/OS.php',
						'Internet/Netzwerk' => 'https://mwiese.de/Technik/Netzwerk/Netzwerk.php',
						'Interessantes' => 'https://mwiese.de/Technik/Interessantes.php'
					)
				);
				// Diese Links in einem neuen Tab öffnen
				$links = array(
					'Unterseiten' => array(
						"Glaube" => "https://mwiese.de/Glaube/Vorschaltung.php",
						"PC" => "https://pc.mwiese.de/",
						"Themen" => "https://mwiese.de/Themen/Themen.php"
					),
					"Impressum" => "https://mwiese.de/Rechtliches/Impressum.php",
					"Datenschutz" => "https://mwiese.de/Rechtliches/Datenschutz.php"
				);
				// Ausgabe
				echo '<ul class="kopf">'.PHP_EOL;
				php_header($menu);
				php_header($links,true);
				echo '				</ul>'.PHP_EOL;
				?>
			</nav>
		</header>
        <div class="center1">
