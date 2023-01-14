<select name="fairy">
                    <option value="" disabled selected></option>
                    <option value="fairy001">Opening 1</option>
		        </select>
			<?php
			    if (isset($_POST['fairy'])) {
                    switch ($_POST['fairy']) {
                        case 'fairy001': include ("include/iframes/A-i/FT/op/1.php"); break;
                    }
				}
			?>