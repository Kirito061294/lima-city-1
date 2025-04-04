<?php include ("../include/open_head.php")?>
        <link rel="stylesheet" type="text/css" href="include/style.css">
    </head>
	<body>
		<script src="https://mwiese.de/js/visibility_switch.js"></script>
        <header>
            <section>
                <nav>
					<button class="knopf mobile_header mobile" onclick="toggleBlock('dropdown')">Menü</button>
					<ul class="kopf" id="dropdown">
						<li><a href="/Glaube/Glaube.php">Home</a></li>
						<li class="expandable_li">
							<input type="checkbox" id="Bibel lesen_checkbox">
							<label for="Bibel lesen_checkbox">Bibel lesen</label>
							<ul class="dropdown">
								<li><a onclick="loadPage('Bibel/BasisBibel.php');" target="main">BasisBibel</a></li>
								<li><a onclick="loadPage('Bibel/BasisBibel_hidden.php');" target="main">BasisBibel (versteckt)</a></li>
								<li><a onclick="loadPage('Bibel/Hinweise.php');" target="main">Hinweise</a></li>
								<li><a onclick="loadPage('Bibel/Zusammenfassungen.php');" target="main">Zusammenfassungen</a></li>
							</ul>
						</li>
						<li><a onclick="loadPage('themen/Themen.php');" target="main">Themen</a></li>
						<li><a href="https://mwiese.de/Rechtliches/ImpressumOnly.php" target="_blank">Impressum</a></li>
						<li><a href="https://mwiese.de/Rechtliches/DatenschutzOnly.php" target="_blank">Datenschutz</a></li>
					</ul>
                </nav>
            </section>
        </header>
		<div class="center" id="main-container">
		</div>
		<?php
			echo '<script type="text/javascript" src="https://mwiese.de/js/jquery.js"></script>'.PHP_EOL;
			echo '		<script type="text/javascript" src="../js/auswahlmenue.js"></script>'.PHP_EOL;
			echo '		<script type="text/javascript" src="https://mwiese.de/js/loadPage.js"></script>'.PHP_EOL;
			echo '		<script type="text/javascript" src="include/reload.js"></script>'.PHP_EOL;
			echo '		<script type="text/javascript" src="js/themen.js"></script>'.PHP_EOL;
		?>
	</body>
	<footer>
		<div style="display: grid; grid-template-columns: 1fr 1fr;">
			<div class="spalte1" style="border: none;">
				<p>Author: Marcel Wiese</p>
				<p>Copyright: <a href="https://opnsense.local:2000">mwiese.de</a> 2018-2025</p>
			</div>
			<div class="spalte2" style="border: none;">
				<p><a href="https://robertsspaceindustries.com/enlist?referral=STAR-WQLP-JGC7" target="_blank">Star Citizen</a> Referral-Code: STAR-WQLP-JGC7</p>
			</div>
		</div>
    </footer>
</html>