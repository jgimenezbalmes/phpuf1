<!DOCTYPE html>
<html>
    <body>
<!-- Al php gran fiquem totes les variables que volem invocar -->
        <?php
            $nom= "Jordi";
            $cognoms= "Pujol i Soley";
            $edat=92;
            $dataNaix= date_create('1930-06-09');
            $dataFormat= date_format($dataNaix,"Y-m-d");
            $telf=605043223;
            $aPostal="Plaça Sant Jaume, 1, Barcelona";
            $email="molthonorable@gencat.cat";
            $treballador=false;
            $treballa="";
            if ($treballador){
                $treballa="i actualment treballa";
            }
            else{
                $treballa="i actualment no treballa";
            }
            $alçada=1.50;

        ?>
<!-- Fem els dos títols... -->
        <h1>Descrivint a <?php echo $nom?>  <?php echo $cognoms?></h1>
            <h2>Les dades de <?php echo $nom?></h2>
<!-- I creem el llistat. Cada cop que volguem invocar una variable, fem php echo -->
            <ul>
                <li>Es diu: <?php echo $nom?> <?php echo $cognoms?></li>
                <li>Té <?php echo $edat?> anys</li>
                <li>Va néixer l'any <?php echo $dataFormat ?></li>
                <li>El seu telèfon és: <?php echo $telf?></li>
                <li>Viu a <?php echo $aPostal?></li>
                <li>El seu e-mail és el <?php echo $email ?></li>
                <li>La seva alçada és <?php echo $alçada?> metres </li>
                <li><?php echo $treballa?></li>
            </ul>

</body>