<html>
    <head>
        <title>PHP lydės ir <?php print date('Y-m-d', strtotime('+' . rand(1, 10) . 'years')); ?></title>
        <style>
            .bomb {
                background-image: url('https://cdn.imgbin.com/2/8/12/imgbin-counter-strike-global-offensive-dota-2-bomb-c-4-grenade-fez4eKcEunfSmReJ0CiSRsPbJ.jpg');
                width: <?php print date('s')?>px;
                height:<?php print date('s')?>px;
                background-size: cover;
                background-position: center;
            }

        </style>
    </head>
    <body>
        <div class= "bomb">
            
        </div>

    </body>
    
</html>
