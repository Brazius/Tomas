<?php
$months = 24;
$car_price_new = 30000;
$depreciation = 2;
$car_price_used = $car_price_new;
$santaupos = 15000;

for ($m = 1; $m <= $months; $m++) {
    $car_price_used *= 1 - $depreciation / 100;
}

$depr_perc = round(100 - (100 * $car_price_used / $car_price_new), 2);
$car_price_used = round($car_price_used, 2);

$h1 = 'Kiek nuvertės mašina?';
$h2 = "Naujos mašinos kaina: $car_price_new";
$h3 = "Po $months mėn., mašinos vertė bus: $car_price_used eur";
$h4 = "Mašina nuvertės $depr_perc proc.";
?>
<html>
    <head>
        <title>PHP</title>
    </head>
    <body>
        <h1><?php print $h1; ?></h1>
        <h2><?php print $h2; ?></h2>
        <h3><?php print $h3; ?></h3>
        <h4><?php print $h4; ?></h4>
    </body>
</html>