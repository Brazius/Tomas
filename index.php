
<?php
$kates = rand(1, 3);
$sunys = rand(1, 3);
$katasuniai = 0;

print "kat rand $kates </br> sun rand $sunys </br>";

for ($kat_x = 1; $kat_x <= $kates; $kat_x++){
    for ($dog_x = 1; $dog_x <= $sunys; $dog_x++){
        $pavyko = rand(0,1);
        echo"Kate $kat_x </br> Suo $dog_x </br>Pavyko $pavyko /// </br>";
        if ($pavyko){
            $katasuniai++;
            break;
        }
     }
}

print "</br></br> $katasuniai";

$h1 = 'katasuniu iseiga';
$h2 = 'Dalyvavo $Kates kates ir $sunys sunys';
$h3 = 'katasuniai "$katasuniai"';
?> 
<html>
    <body> 
        <h1><?php print $h1; ?></h1>
        <h2><?php print $h2; ?></h2>
        <h3><?php print $h3; ?></h3>

    </body>
</html>