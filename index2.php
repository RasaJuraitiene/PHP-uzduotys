<?php
$array = [
    '#1' => [
        'pin_left' =>
            [
                'first_row' => [1, 0, 0, 1],
                'second_row' => [0, 0, 1],
                'fird_row' => [0, 1],
                'fourth_row' => [1],
                'track_clean' =>
                    [
                        'condition' => 'clean',
                    ],
            ],
    ],
    '#2' => [
        'pin_left' =>
            [
                'first_row' => [0, 0, 0, 0],
                'second_row' => [0, 0, 0],
                'fird_row' => [0, 0],
                'fourth_row' => [0],
                'track_clean' =>
                    [
                        'condition' => 'dirty',
                    ],
            ],
    ],
];

echo "<pre>";
var_dump($array);
echo "</pre>";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

</head>

<body>

</body>
</html>