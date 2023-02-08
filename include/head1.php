<link rel="shortcut icon" href="https://mwiese.de/include/45454.ico" type="image/x-icon"/>
        <link rel="stylesheet" type="text/css" href="https://mwiese.de/include/style.css">
        <meta lang="de" charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
    </head>
	<body>
		<header>
			<nav>
				<?php
				
				function keks($menue_eintrag) {
					echo '<ul class="kopf">';
					foreach($menue_eintrag as $item => $url) {
						if(is_array($url)) {
							echo '<li class="expandable_li"><br />' . $item;echo '<ul class="dropdown">';
							foreach($url as $subitem => $suburl) {
								echo '<li><a href="' . $suburl . '">' . $subitem . '</a></li>';
							}
							echo '</ul>';
							echo '</li>';
						} else {
							echo '<li><a href="' . $url . '">' . $item . '</a></li>';
					}
				}
				echo '</ul>';
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
					),
					'Unterseiten' => array(
						//'Web Development' => '#',
						//'Design' => '#',
						//'Consulting' => '#'
					),
					'Impressum' => 'https://mwiese.de/Rechtliches/Impressum.php',
					'Datenschutz' => 'https://mwiese.de/Rechtliches/Datenschutz.php'
				);
				// Diese Links in einem neuen Tab öffnen
				$links = array(
					"Glaube" => "https://mwiese.de/Glaube/Vorschaltung.php",
					"PC" => "https://pc.mwiese.de/",
					"Themen" => "https://mwiese.de/Themen/Themen.php",
					"Impressum" => "https://mwiese.de/Rechtliches/Impressum.php",
					"Datenschutz" => "https://mwiese.de/Rechtliches/Datenschutz.php"
				);
				// Ausgabe
				keks ($menu)
				keks ($links)
				?>

			</nav>
		</header>
        <div class="center1">
