<select name="fairy">
                    <option value="" disabled selected></option>
                    <option value="fairy001">Opening 1</option>
                    <option value="fairy002">Opening 2</option>
                    <option value="fairy003">Opening 3</option>
                    <option value="fairy004">Opening 4</option>
                    <option value="fairy005">Opening 5</option>
                    <option value="fairy006">Opening 6</option>
                    <option value="fairy007">Opening 7</option>
                    <option value="fairy008">Opening 8</option>
                    <option value="fairy009">Opening 9</option>
                    <option value="fairy010">Opening 10</option>
                    <option value="fairy011">Opening 11</option>
                    <option value="fairy012">Opening 12</option>
                    <option value="fairy013">Opening 13</option>
                    <option value="fairy014">Opening 14</option>
                    <option value="fairy015">Opening 15</option>
                    <option value="fairy016">Opening 16</option>
                    <option value="fairy017">Opening 17</option>
		        </select>
			<?php
			    if (isset($_POST['fairy'])) {
                    switch ($_POST['fairy']) {
                        case 'fairy001': include ("include/iframes/A-i/FT/op/1.php"); break;
                        case 'fairy002': include ("include/iframes/A-i/FT/op/2.php"); break;
                        case 'fairy003': include ("include/iframes/A-i/FT/op/3.php"); break;
                        case 'fairy004': include ("include/iframes/A-i/FT/op/4.php"); break;
                        case 'fairy005': include ("include/iframes/A-i/FT/op/5.php"); break;
                        case 'fairy006': include ("include/iframes/A-i/FT/op/6.php"); break;
                        case 'fairy007': include ("include/iframes/A-i/FT/op/7.php"); break;
                        case 'fairy008': include ("include/iframes/A-i/FT/op/8.php"); break;
                        case 'fairy009': include ("include/iframes/A-i/FT/op/9.php"); break;
                        case 'fairy010': include ("include/iframes/A-i/FT/op/10.php"); break;
                        case 'fairy011': include ("include/iframes/A-i/FT/op/11.php"); break;
                        case 'fairy012': include ("include/iframes/A-i/FT/op/12.php"); break;
                        case 'fairy013': include ("include/iframes/A-i/FT/op/13.php"); break;
                        case 'fairy014': include ("include/iframes/A-i/FT/op/14.php"); break;
                        case 'fairy015': include ("include/iframes/A-i/FT/op/15.php"); break;
                        case 'fairy016': include ("include/iframes/A-i/FT/op/16.php"); break;
                        case 'fairy017': include ("include/iframes/A-i/FT/op/17.php"); break;
                    }
				}
			?>