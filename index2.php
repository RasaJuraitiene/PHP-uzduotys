<?php
$my_memories = ['darbas', 'popkornai', 'namai', 'vaikai', 'penktadienio_filmas', 'non-alcoholic_drinks', 'bemieges_naktys',  'poilsis'];

$h1 = 'Kas buvo penktadieni?!';
$h2 = 'Rasos prisiminimai:';
?>
<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">

</head>

<body>

<h1><?php print $h1; ?></h1>
<h2><?php print $h2; ?></h2>
<ul>
    <?php foreach ($my_memories as $value): ?>
    <li><?php print $value; ?></li>
    <?php endforeach; ?>
</ul>

</body>
</html>