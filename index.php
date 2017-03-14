<meta charset = <utf-8>
<?php
require 'function.php';
require 'components.php';
$name = "Jyri";

// üherealine kommentaar
/*
see on kommentar mitmel real
*/
// tagasi algusesse
home();
menu($menu_begin, $menu_arr, $menu_end);
// näitame praegust aega ja anname soovitusi
aeg();
// näited teksti kuvamise kohta
//echo "$name esimene PHP's kirjutatud lause!<br>"; - sedasi näitab nime!
echo '<b>$name esineme lause</b><br>';  //- sedasi ei näita nime!
echo "<b>$name esineme lause</b><br>";
echo "Nüüd vaatame täpitähti";

getVisitorIp();

?>