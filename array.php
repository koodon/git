<?php

require 'function.php';
home();

$month = "veebruar";

$test = array('kolmapäev', 3.14, $month, 8, "Klass nr A210");

// massiivi sisu trükk
print_r($test);
echo "<br>";
// muutuja sisu näitamine
var_dump($test);
echo "<br>";
// massiivi üksiku elemendi näitamine
echo $test[0];
echo "<br>";
// massiivi liikme lisamine
$test[] = "uus massiivi liige";
    print_r($test);
    echo "<br>";
$test_a = array('esimene' => 'Jyri',
                'teine' => 'Ragnar',
                'kolmas' => 'Kevin');
print_r($test_a);
// esimese massiivi väljatrükk kultuursel kombel
for ($i=0; $i < count($test); $i++) {
    echo "<li>".$test[$i]."</li>";
}
// sidusmassiivi (associative array) väljatrükk
foreach($test_a as $jrk => $name) {
    echo "<li>".$name." on järjekorras ".$jrk."</li>";
}
// kahemõõtmeline massiiv
$esta = "Eesti keel";
$mata = "Matemaatika";
$fyss = "Füüsika";

$hinded = array(
            "Peeter" =>
                array($esta => 4,           //array("Eesti keel => 4,   -tulemus ei muutu
                      $mata => 4,           //võib ka omakorda olla massiiv taga (mitu hinnet aines)
                      $fyss => 3),
            "Mari" =>
                array($esta => 5,
                      $mata => 3,
                      $fyss => 4),
            "Jüri" =>
                array($esta => 3,
                      $mata => 2,
                      $fyss => 2),
            "Pille" =>
                array($esta => 5,
                      $mata => 5,
                      $fyss => 4)
    );

echo $hinded['Peeter'][$esta]."<br>";       //vaata, mis on kohal $esta

//var_dump($hinded);

// massiivi (KÕIGE KÕRGEMA) võtmed
print_r(array_keys($hinded));               //massiivi funktsioon, annab, mis on võtmeväärtusele omistatud
echo "<br>";

// masiivi (KÕIGE KÕRGEMA) võtmeväärtused
print_r(array_values($hinded));

$hinded_id = array_keys($hinded);

// kahemõõtmelise massiivi kultuurne väljatrükk
for ($i=0; $i < count($hinded_id); $i++) {
    echo $hinded_id[$i].":<br>";
    foreach($hinded[$hinded_id[$i]] as $aine => $hinne) {
    echo $aine." : ".$hinne."<br>";
    }
}

?>