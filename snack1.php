<?php 

    $partite = [
        [
            "squadraCasa" => "Olimpia Milano",
            "squadraOspite" => "Cantù",
            "punteggioCasa" => "55",
            "punteggioOspite" => "60"
        ],
        [
            "squadraCasa" => "Virtus Bologna",
            "squadraOspite" => "Globe Trotter",
            "punteggioCasa" => "50",
            "punteggioOspite" => "110"
        ],
        [
            "squadraCasa" => "Chicago Bulls",
            "squadraOspite" => "Yankee",
            "punteggioCasa" => "85",
            "punteggioOspite" => "84"
        ]
    ];

    $calendario= count($partite);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>  

    <h5>elenco partite:</h5>
    <?php for($i = 0; $i<$calendario; $i++) { ?>
        <div>
            <?php echo $partite[$i]['squadraCasa'] . ' ' . '-' . ' ' . $partite[$i]['squadraOspite'] . ' ' . '|' . ' ' . $partite[$i]['punteggioCasa'] . '-' . $partite[$i]['punteggioOspite'] ?>           
        </div>
    <?php } ?>

</body>
</html>