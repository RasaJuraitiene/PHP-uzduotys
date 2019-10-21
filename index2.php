<?php
$array = [
    'name' => 'Teddy Bear',
    'time' => 3,
    'bottles' => 2,
    'drunk' => true,
    'vomit' => true,
    'img' => "https://i.imgflip.com/o2hqs.jpg"
];

var_dump($array);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

</head>

<body>
<img src="<?php print $array['img']; ?>">
</body>
</html>