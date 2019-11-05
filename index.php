<?php
$months = 12;
$wallet = 1000;
$month_income = 700;

$title = 'Wallet Forecast';
$h1 = 'Wallet Forecast';
$h2 = "Po $months m., prognozuojamas likutis: $wallet";

for ($i = 1; $i <= $months; $i++) {
    $month_expenses = rand(600, 1000);
    $wallet += $month_income - $month_expenses;
    if ($wallet <= 0) {
        $h2 = "Atsargiai, $i menesi gali baigtis pinigai!";
        break;
}


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