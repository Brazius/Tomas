<html>
    <head>
        <title>PHP lydės ir <?php print date('Y-m-d', strtotime('+' . rand(1, 10) . 'years')); ?></title>
        <style>
            .kaul_1 {
                background-image: url('1.png');
                display: block; 
                width: 139px;
                height: 139px;
            }
            .kaul_2 {
                background-image: url('2.png');
                width: 139px;
                height: 139px;
            }
            .kaul_3 {
                background-image: url('3.png');
                width: 139px;
                height: 139px;
            }
            .kaul_4 {
                background-image: url('4.png');
                width: 139px;
                height: 139px;
            }
            .kaul_5 {
                background-image: url('5.png');
                width: 139px;
                height: 139px;
            }
            .kaul_6 {
                background-image: url('6.png');
                width: 139px;
                height: 139px;
            }

        </style>
    </head>
    <body>
        <div class= "kaul_<?php print rand(1, 6) ?> ">
            <img src="1.png" alt="Smiley face" height="10" width="10"> 
        </div>

    </body>
</html>
