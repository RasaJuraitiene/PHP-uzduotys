<?php

$petrol_in_tank = rand(20, 30);
$diesel_poured = rand(0, 5);

for ($i = 0; $i <= $diesel_poured; $i++) {
    if (($petrol_in_tank + $i + 1) * 0.1 > $i) {
        $isvada = 'zjbs';
        $nuotrauka = "https://i.imgflip.com/t5l49.jpg";
    } else{
        $isvada = 'pzdc';
        $nuotrauka = "https://www.automobiliusupirkimas.eu/wp-content/uploads/2013/04/kuro_kainos.jpg";
    }
}

$h1 = 'Pripylei dyzelio į benzo mašina?';
$h2 = " Benzino buvo: $petrol_in_tank l.";
$h3 = "Pripilta dyzelio: $diesel_poured l.";
$h4 = "Išvada: $isvada";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

</head>

<body>

<h2><?php print $h1; ?></h2>
<h2><?php print $h2; ?></h2>
<h3><?php print $h3; ?></h3>
<h3><?php print $h4; ?></h3>

<img src="<?php print $nuotrauka; ?>">

</body>

</html>