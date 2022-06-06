<select name="adel_tawil">
                    <option value="adel000"></option>
                    <option value="adel001">1000 gute Gründe</option>
                    <option value="adel002">Aschenflug</option>
                    <option value="adel003">Atombombe</option>
                    <option value="adel004">Bis hier und noch weiter</option>
                    <option value="adel005">Der Himmel soll warten</option>
                    <option value="adel006">DNA</option>
                    <option value="adel007">Eine Welt eine Heimat</option>
                    <option value="adel008">Endgegner</option>
                    <option value="adel009">Flutlicht</option>
                    <option value="adel010">Gott steh mir bei</option>
                    <option value="adel011">Graffiti Love</option>
                    <option value="adel012">Immer da</option>
                    <option value="adel013">Ist da jemand</option>
                    <option value="adel014">Kartenhaus</option>
                    <option value="adel015">Katsching</option>
                    <option value="adel016">Liebe to go</option>
                    <option value="adel017">Lieder</option>
                    <option value="adel018">Neonfarben</option>
                    <option value="adel019">Neues Ich</option>
                    <option value="adel020">Neujahr</option>
                    <option value="adel021">Niemals Niemand</option>
                    <option value="adel022">Sie rennt</option>
                    <option value="adel023">So schön anders</option>
                    <option value="adel024">Tu m'appelles</option>
                    <option value="adel025">Unsere Lieder</option>
                    <option value="adel026">Unter dem selben Himmel</option>
                    <option value="adel027">Vermiss mich</option>
                    <option value="adel028">Wenn du liebst</option>
                    <option value="adel029">Weinen</option>
                    <option value="adel030">Wohin soll ich gehen</option>
                    <option value="adel031">Zuhause</option>
                </select>
			<?php
			    if (isset($_POST['adel_tawil'])) {
                    switch ($_POST['adel_tawil']) {
                        case 'adel001': include ("include/iframes/a-t/1gg.php"); break;
                        case 'adel002': include ("include/iframes/a-t/as.php"); break;
                    }
				}
			?>
