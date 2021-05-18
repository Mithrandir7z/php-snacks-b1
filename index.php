<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-snacks-b1</title>
</head>
<body>
    
<!-- Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. 
Ogni array avrà una squadra di casa e una squadra ospite, 
punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. 
Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60

Snack 2
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) 
che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. 
Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->



    <!--snack 1-->
    <?php 

        $partite = [
            [
                "SquadraCasa" => "Brindisi",
                "SquadraOspite" => "Milano",
                "puntiSquadraCasa" => "127",
                "puntiSquadraOspite" => "87"
            ],
            [
                "SquadraCasa" => "Roma",
                "SquadraOspite" => "Firenze",
                "puntiSquadraCasa" => "57",
                "puntiSquadraOspite" => "59"
            ],
            [
                "SquadraCasa" => "Napoli",
                "SquadraOspite" => "Genova",
                "puntiSquadraCasa" => "23",
                "puntiSquadraOspite" => "45"
            ],
            [
                "SquadraCasa" => "Venezia",
                "SquadraOspite" => "Palermo",
                "puntiSquadraCasa" => "65",
                "puntiSquadraOspite" => "90"
            ],
            [
                "SquadraCasa" => "Brescia",
                "SquadraOspite" => "Torino",
                "puntiSquadraCasa" => "34",
                "puntiSquadraOspite" => "73"
            ],
        ];

        // var_dump($partite);
    ?>

    <h1>Match Oggi</h1>

    <ul>
        <?php for ($i = 0; $i < count($partite); $i++) { ?>
        <?php $thisSquadra = $partite[$i]; ?>

            <li>
                <?php echo $thisSquadra['SquadraCasa'] ?> - <?php echo $thisSquadra['SquadraOspite'] ?> | <?php echo $thisSquadra['puntiSquadraCasa'] ?> - <?php echo $thisSquadra['puntiSquadraOspite'] ?> 
            </li>

        <?php } ?>
    </ul>

   

   <!--snack 2-->

</body>
</html>