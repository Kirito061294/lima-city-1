<select name="parteien">
								<?php
			$selected = '';
			if (isset($_POST['submit'])) {
				$selected = $_POST['parteien'];
			}
			echo '<option value="" disabled selected></option>';
				add_option($selected,'parteien001','CDU+CSU');
				add_option($selected,'parteien002','SPD');
				//add_option($selected,'parteien003','FDP');
				add_option($selected,'parteien004','Bündnis 90, die Gr&uuml;nen');
				//add_option($selected,'parteien005','AfD');
				//add_option($selected,'parteien006','Die Linke');
				//add_option($selected,'parteien007','NPD');
				//add_option($selected,'parteien008','Die Partei');
			?>

							</select>
			<?php
			if (isset($_POST['parteien'])) {
				switch ($_POST['parteien']) {
					case 'parteien001': include ("include/cat/Politik/Parteien/CDU+CSU.php"); break;
					case 'parteien002': include ("include/cat/Politik/Parteien/SPD.php"); break;
					//case 'parteien003': include ("include/cat/Politik/Parteien/FDP.php"); break;
					case 'parteien004': include ("include/cat/Politik/Parteien/B90.php"); break;
					//case 'parteien005': include ("include/cat/Politik/Parteien/AfD.php"); break;
					//case 'parteien006': include ("include/cat/Politik/Parteien/DieLinke.php"); break;
					//case 'parteien007': include ("include/cat/Politik/Parteien/NPD.php"); break;
					//case 'parteien008': include ("include/cat/Politik/Parteien/DiePartei.php"); break;
				}
			}
			?>