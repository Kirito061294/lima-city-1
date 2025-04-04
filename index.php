<?php include ("include/open_head.php")?>
    </head>
	<body>
		<header>
<?php
include ("include/index_php_extras.php");
echo'			<nav>'.PHP_EOL;
echo $tab4.'<button class="knopf mobile_header mobile" onclick="toggleBlock(\'dropdown\')">Menü</button>'.PHP_EOL;
echo $tab4.'<ul class="kopf" id="dropdown">'.PHP_EOL;
echo $tab5.'<li><a href="'.$home.'">Home</a></li>'.PHP_EOL;
echo $li1_start.PHP_EOL;
echo $checkbox_p1.'Unterhaltung'.$checkbox_p2.'Unterhaltung_checkbox">Unterhaltung</label>'.PHP_EOL;
echo $ul2_start.PHP_EOL;
echo $li2_p1.'(\'Unterhaltung/Lesen.php\')'.$li2_p2.'Lesen</a></li>'.PHP_EOL;
echo $li2_p1.'(\'Unterhaltung/Lesen_hidden.php\')'.$li2_p2.'Lesen (hidden)</a></li>'.PHP_EOL;
echo $li2_p1.'(\'Unterhaltung/Musik3.php\')'.$li2_p2.'Musik</a></li>'.PHP_EOL;
echo $li2_p1.'(\'Unterhaltung/Musik_hidden.php\')'.$li2_p2.'Musik (hidden)</a></li>'.PHP_EOL;
echo $li2_p1.'(\'Unterhaltung/Spiele.php\')'.$li2_p2.'Spiele</a></li>'.PHP_EOL;
#echo $li2_p1.'(\'Unterhaltung/Youtube.php\')'.$li2_p2.'YouTube</a></li>'.PHP_EOL;
echo $ul2_end.PHP_EOL;
echo $li1_end.PHP_EOL;
#echo $li1_start.PHP_EOL;
#echo $checkbox_p1.'Technik'.$checkbox_p2.'Technik_checkbox">Technik</label>'.PHP_EOL;
#echo $ul2_start.PHP_EOL;
#echo $li2_p1.'(\'Technik/OS.php\')'.$li2_p2.'Betriebssysteme</a></li>'.PHP_EOL;
#echo $li2_p1.'(\'Technik/Netzwerk/Netzwerk.php\')'.$li2_p2.'Internet/Netzwerk</a></li>'.PHP_EOL;
#echo $ul2_end.PHP_EOL;
#echo $li1_end.PHP_EOL;
echo $li1_start.PHP_EOL;
echo $checkbox_p1.'Unterseiten'.$checkbox_p2.'Unterseiten_checkbox">Unterseiten</label>'.PHP_EOL;
echo $ul2_start.PHP_EOL;
echo'							<li><a href="'.$home.'/Glaube/Glaube.php" target="_blank">Glaube</a></li>'.PHP_EOL;
echo'							<li><a href="https://pc.mwiese.de" target="_blank">PC</a></li>'.PHP_EOL;
echo $ul2_end.PHP_EOL;
echo $li1_end.PHP_EOL;
echo $tab5.'<li><a onclick="loadPage(\'Rechtliches/Impressum.php\')'.$li2_p2.'Impressum</a></li>'.PHP_EOL;
echo $tab5.'<li><a onclick="loadPage(\'Rechtliches/Datenschutz.php\')'.$li2_p2.'Datenschutz</a></li>'.PHP_EOL;
echo $tab4.'</ul>'.PHP_EOL;
echo'			</nav>'.PHP_EOL;
?>
		</header>
		<div class="center" id="main-container">
		</div>
		<?php
			$js_1 = '<script type="text/javascript" src="';
			$js_2 = '></script>';
			echo $js_1.'js/visibility_switch.js" defer'.$js_2.PHP_EOL;
			echo '		'.$js_1.'js/jquery.js" defer'.$js_2.PHP_EOL;
			echo '		'.$js_1.'js/auswahlmenue.js" defer'.$js_2.PHP_EOL;
			echo '		'.$js_1.'js/loadPage.js" defer'.$js_2.PHP_EOL;
			echo '		'.$js_1.'js/reload.js" async'.$js_2.PHP_EOL;
			echo '		'.$js_1.'Optimierung/optimierung.js" defer'.$js_2.PHP_EOL;
			echo '		'.$js_1.'Technik/technik.js" defer'.$js_2.PHP_EOL;
			echo '		'.$js_1.'Unterhaltung/unterhaltung.js" defer'.$js_2.PHP_EOL;
			#echo '		'.$js_1.'Unterhaltung/youtube_nocookies.js" defer'.$js_2.PHP_EOL;
		?>
	</body>
	<footer>
		<div class="footer_grid">
			<div class="spalte1">
				<p>Author: Marcel Wiese</p>
				<p>Copyright: <a href="<?php echo $home;?>">mwiese.de</a> 2018-2025</p>
			</div>
			<div class="spalte2">
				<p><a href="https://robertsspaceindustries.com/enlist?referral=STAR-WQLP-JGC7" target="_blank">Star Citizen</a> Referral-Code: STAR-WQLP-JGC7</p>
			</div>
		</div>
    </footer>
</html>