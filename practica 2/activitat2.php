<!DOCTYPE html>
<html>
<body>
<?php
//Creem un array buit
$hotel = array();
//Fem un bucle doble amb dues variables, n i m
for ($n = 0; $n < 10; $n++) {
    for ($m = 0; $m < 5; $m++) {
        //A cada iteració del doble bucle, s'omplirà l'array amb un valor aleatori entre 0 i 4
        $hotel[$n] = rand(0, 4);
        //Si un valor de l'array està entre 1 i 3
        if ($hotel[$n] > 0 && $hotel[$n] < 4) {
            //S'imprimeix els valors númerics de les posicions de l'array
            echo "A l'habitació ", $n, " de la planta ", $m, " hi ha ", $hotel[$n], " persones <br>";
        //Si él valor numèric de l'array és 4
        } elseif ($hotel[$n] == 4) {
            //Ens dirà que aquella habitació és plena
            echo "L'habitació ", $n, " de la planta ", $m, " està plena <br>";
        //Si el valor numèric de l'array és 0
        } else {
            //Ens dirà que aquella habitació és buida
            echo "L'habitació ", $n, " de la planta ", $m, " és buida <br>";
        }
    }
}

?>
</body>
</html>