<select name="anime">
                    <option value="" disabled selected></option>
                    <option value="anime00a">Pokemon</option>
                    <option value="anime00b">Fairy Tail</option>
                    <option value="anime001">Accel World Opening 1</option>
                    <option value="anime002">Accel World Ending 1</option>
                    <option value="anime003">Amnesia Opening 1</option>
                    <option value="anime004">La Storia Della Arcana Famiglia Opening 1</option>
                    <option value="anime005">Mondaiji-tachi ga Isekai Kara Kuru Sou Desu yo Opening 1</option>
                    <option value="anime006">Seiken Tsukai no World Break Opening 1</option>
		        </select>
			<?php
			    if (isset($_POST['anime'])) {
                    switch ($_POST['anime']) {
                        case 'anime00a': include ("include/cat/A_i/PKMN.php"); break;
                        case 'anime00b': include ("include/cat/A_i/FairyTail.php"); break;
                        case 'anime001': include ("include/iframes/A-i/AW_op_1.php"); break;
                        case 'anime002': include ("include/iframes/A-i/AW_ed_1.php"); break;
                        case 'anime003': include ("include/iframes/A-i/A_op_1.php"); break;
                        case 'anime004': include ("include/iframes/A-i/LSdAF_op_1.php"); break;
                        case 'anime005': include ("include/iframes/A-i/MtgIKKSDy_op_1.php"); break;
                        case 'anime006': include ("include/iframes/A-i/STnWB_op_1.php"); break;
                    }
				}
			?>
