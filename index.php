<?php
$petrol_in_tank = rand(20, 30);
$fuel_in_tank = $petrol_in_tank;
$diesel_limit = 0;

for ($diesel_limit = 0; $diesel_limit < ($fuel_in_tank * 0.1); $diesel_limit++) {
    $fuel_in_tank++;
}

$h1 = 'Pripylei dyzelio Ä¯ benz. maÅ¡inÄ…';
$h2 = "Benzino buvo: $petrol_in_tank l.";
$h3 = "Max dyzelio riba: $diesel_limit l.";
?>
<html>
    <head>
        <title>PHP</title>
    </head>
    <body>
        <h1><?php print $h1; ?></h1>
        <h2><?php print $h2; ?></h2>
        <h3><?php print $h3; ?></h3>
    </body>
</html>




