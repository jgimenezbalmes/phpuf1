<!DOCTYPE html>
<html>
<body>
<?php
//Creem un array buit
$taula = array();
//Omplim l'array de valors random entre 0 i 5 mitjançant un bucle for
for ($n = 0; $n < 10; $n++) {
    $taula[$n] = rand(0, 5);
    //Si el valor que es troba està entre 1 i 4, imprimeix el valor numeric
    if ($taula[$n] > 0 && $taula[$n] < 5) {
        echo "A la taula ", $n, " hi ha ", $taula[$n], " comensals <br>";
    //Si el valor és 5, dirà que la taula és plena
    } elseif ($taula[$n] == 5) {
        echo "La taula ", $n, " està plena <br>";
    //Si el valor és 0, dirà que la taula és buida
    } else {
        echo "La taula ", $n, " és buida <br>";
    }
};
?>
</body>
</html>