<html>
    <head>
        <title>PHP lydės ir <?php print date('Y-m-d', strtotime('+' . rand(1, 10) . 'years')); ?></title>
    </head>
    <body>
        <h1><b>Tomas</b> - Galbūt turėsiu <?php print rand(1, 5); ?></h1>
        <p>D. Trump'as nebebus prezidentu:
            <?php print date('Y-m-d', strtotime('+' . rand(2, 10) . 'years')); ?>

            <!--
            <p> MIndau svetimo kodo gatves... </p>
            -->

    </body>
</html>
