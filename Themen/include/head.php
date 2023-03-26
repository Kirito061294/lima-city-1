<link rel="shortcut icon" href="https://mwiese.de/include/45454.ico" type="image/x-icon"/>
        <link rel="stylesheet" type="text/css" href="https://mwiese.de/include/css/style.css">
        <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
    </head>
	<body>
		<header>
			<nav>
				<input type="checkbox" id="toggle_button">
				<label for="toggle_button" class="toggle_button"><span class="bar"></span><span class="bar"></span><span class="bar"></span></label>
				<?php
				$mwiese_de = 'https://mwiese.de';
				function php_header($menue_eintrag,$new_tab=false) {
					foreach($menue_eintrag as $item => $url) {
						if(is_array($url)) {
							echo '					<li class="expandable_li">'.PHP_EOL;
							echo '						<input type="checkbox" id="' . $item . '_checkbox">'.PHP_EOL;
							echo '						<label for="' . $item . '_checkbox">' . $item . '</label>'.PHP_EOL;
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
					'Home' => $mwiese_de,
					'Themen' => array(
						'Covid-19' => '',
						'Medien' => '',
						'Politik' => '',
						'Technik' => ''
					)
				);
				// Diese Links in einem neuen Tab öffnen
				$links = array(
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
