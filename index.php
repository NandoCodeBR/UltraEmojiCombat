<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require_once 'lutador.php';
        require_once 'luta.php';
        $lutador = array();
        $lutador[0] = new Lutador("pretty boy", "frança", 37, 1.75, 68.9, 11, 2, 1);
        $lutador[1] = new Lutador("putscript", "Brasil", 29, 1.68, 57.8, 14, 2, 3);
        $lutador[2] = new Lutador("SnapShadow", "USA", 35, 1.65, 80.9, 12, 2, 1);
        $lutador[3] = new Lutador("Dead code", "Austrália", 28, 1.93, 81.6, 13, 0, 2);
        $lutador[4] = new Lutador("UFOCobol", "Brasil", 37, 1.70, 119.3, 5, 4, 3);
        $lutador[5] = new Lutador("Nerdaart", "EUA", 30, 1.81, 105.7, 12, 2, 4);
        
        $UEC01 = new Luta();
        $UEC01->marcarLuta($lutador[0], $lutador[1]);
        $UEC01->lutar();
        
        
        ?>
    </body>
</html>
