<?php

    $hotels = [

        [
            'name' => 'Hotel Belvedere',
            'description' => 'Hotel Belvedere Descrizione',
            'parking' => true,
            'vote' => 4,
            'distance_to_center' => 10.4
        ],
        [
            'name' => 'Hotel Futuro',
            'description' => 'Hotel Futuro Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 2
        ],
        [
            'name' => 'Hotel Rivamare',
            'description' => 'Hotel Rivamare Descrizione',
            'parking' => false,
            'vote' => 1,
            'distance_to_center' => 1
        ],
        [
            'name' => 'Hotel Bellavista',
            'description' => 'Hotel Bellavista Descrizione',
            'parking' => false,
            'vote' => 5,
            'distance_to_center' => 5.5
        ],
        [
            'name' => 'Hotel Milano',
            'description' => 'Hotel Milano Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 50
        ],

    ];

    var_dump($hotels);
?>
 <!-- Stampo i dati degli hotel -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
    
    <!-- <?php 
        foreach($hotels as $hotel):
    ?>
            <li>
                <h2><?php echo $hotel['name']; ?></h2>
                <p><?php echo $hotel['description']; ?></p>
                <p>Parcheggio: <?php echo $hotel['parking'] ? 'Sì' : 'No'; ?></p>
                <p>Voto: <?php echo $hotel['vote']; ?></p>
                <p>Distanza dal centro: <?php echo $hotel['distance_to_center']; ?> km</p>
            </li>

    <?php 
        endforeach
    ?> -->

    <table class="table">
        <thead>
            <tr>
                <th scope="col">Nome</th>
                <th scope="col">Descrizione</th>
                <th scope="col">Parcheggio</th>
                <th scope="col">Voto</th>
                <th scope="col">Distanza dal centro</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($hotels as $hotel): ?>
            <tr>
                <td scope="col"><?php echo $hotel['name']; ?></td>
                <td scope="col"><?php echo $hotel['description']; ?></td>
                <td scope="col"><?php echo $hotel['parking'] ? 'Si' : 'No'; ?></td>
                <td scope="col"><?php echo $hotel['vote']; ?></td>
                <td scope="col"><?php echo $hotel['distance_to_center']; ?> km</td>
            </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</body>
</html>
