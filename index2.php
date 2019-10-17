<?php

$petrol_in_tank = rand(20, 30);

for ($diesel_limit = 0; ($petrol_in_tank + $diesel_limit) * 0.1 > $diesel_limit; $diesel_limit++)

$h1 = 'Pripylei dyzelio į benzo mašina?';
$h2 = " Benzino buvo: $petrol_in_tank l.";
$h3 = "Max dyzelio riba: $diesel_limit l.";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

</head>

<body>

<h2><?php print $h1; ?></h2>
<h2><?php print $h2; ?></h2>
<h2><?php print $h3; ?></h2>

</body>

</html>