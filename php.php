<?php

$months = 12;
$wallet = 1000;
$month_income = 700;

for($i = 0; $i <= $months; $i++ ){


    $wallet += $month_income - rand(0, 1000);
    
}


?>