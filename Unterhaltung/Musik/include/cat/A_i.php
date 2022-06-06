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
                if(isset($_POST['submit'])){if ($_POST['anime'] == 'anime00a') {include ("include/cat/A_i/PKMN.php"); }}
                if(isset($_POST['submit'])){if ($_POST['anime'] == 'anime00b') {include ("include/cat/A_i/FairyTail.php"); }}
                if(isset($_POST['submit'])){if ($_POST['anime'] == 'anime001') {include ("include/iframes/A-i/AW_op_1.php"); }}
                if(isset($_POST['submit'])){if ($_POST['anime'] == 'anime002') {include ("include/iframes/A-i/AW_ed_1.php"); }}
                if(isset($_POST['submit'])){if ($_POST['anime'] == 'anime003') {include ("include/iframes/A-i/A_op_1.php"); }}
                if(isset($_POST['submit'])){if ($_POST['anime'] == 'anime004') {include ("include/iframes/A-i/LSdAF_op_1.php"); }}
                if(isset($_POST['submit'])){if ($_POST['anime'] == 'anime005') {include ("include/iframes/A-i/MtglKKSDy_op_1.php"); }}
                if(isset($_POST['submit'])){if ($_POST['anime'] == 'anime006') {include ("include/iframes/A-i/STnWB_op_1.php"); }}