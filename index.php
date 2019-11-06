<?php
$days = 365;
$time_per_cig = 2; // min
$c = 20; // pakelis cigiu

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
    } else {
        $cigs_mon_fri = rand(10, 20);
        $count_ttl += $cigs_mon_fri;
    }
}

$price_ttl = ceil($count_ttl / 20) * $pack_price;

$time_total = ($count_ttl * $time_per_cig) / 60;
$h1 = 'Mano dūmų skaičiuoklė';
$h2 = "Per $days dienas, surukysiu $count_ttl cigareciu uz $price_ttl eur.";
$h3 = "Viso traukdamas prastovesiu $time_total valandų";
$div_skaic = 'https://www.maxpixel.net/static/photo/1x/Smoking-Cigarette-End-Cigarette-Stub-Ash-488400.jpg';
?>

<html lang="en">
    <head>
        <title>cigiu printas</title>
    </head>
    <body>
        <h1><?php print $h1; ?></h1>
        <h2><?php print $h2; ?></h2>
        <h3><?php print $h3; ?></h3>
        <div class="pakelis">
            <?php for ($c = 20; $c < $count_ttl; $x++): ?>   
                <div class="container">
                    <?php for ($x = 0; $x < $count_ttl; $x++): ?>
                        <img src='<?php print $div_skaic; ?>'>
                    <?php endfor; ?>
                </div>
            <?php endfor; ?>
        </div>
    </body>
</html>