<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="style.css"> -->
    <title>Pruebas php</title>
</head>
<body class="body">
    <!--
    <?php
        $name = "One punch man";
        $read = true;

        if($read){
            $message = "Has visto $name :)";
        }else{
            $message = "No has visto $name :(";
        }
    ?>
    <h2><?= $message; ?></h2>
    -->

    <h1>Canciones recomendadas</h1>

    <?php
        $songs = [
            [
                "name" => "I  will",
                "artist" => "The Beatles",
            ],
            [
                "name" => "Selfless",
                "artist" => "The Strokes",
            ],
            [
                "name" => "Orgasm of death",
                "artist" => "The Growlers",
            ],
            [
                "name" => "Leave you alone",
                "artist" => "The Sea Of Lettuce",
            ]
        ];
    ?>
    <ul>    
        <?php foreach($songs as $song): ?>
            <li><?= $song["name"] ?> - <?= $song["artist"] ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>