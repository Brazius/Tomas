<?php
$days = 365;



$pack_price = 3.50;
$count_ttl = 0;

for ($i = 1; $i <= $days; $i++) {
    $w_d = date('N', strtotime("+$i days"));
    if ($w_d == 6) {
        $cigs_sat = rand(3, 4);
        $count_ttl += $cigs_sat;
    } elseif ($w_d == 7) {
        $cigs_sun = rand(1, 3);
        $count_ttl += $cigs_sun;
    }
 else {
        $cigs_mon_fri = rand(10, 20);
        $count_ttl += $cigs_mon_fri;
    }
}

$price_ttl = ceil($count_ttl / 20) * $pack_price;


$h1 = 'Mano dumu skaicius';
$h2 = "Per $days dienas, surukysiu $count_ttl cigareciu uz $price_ttl eur.";
?>
<html lang="en">
    <head>
        <title><?php print $title; ?></title>
    </head>
    <body>
        <h1><?php print $h1; ?></h1>
        <h2><?php print $h2; ?></h2>
    </body>
</html>