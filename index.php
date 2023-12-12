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



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <form action="index.php" method="GET">
        <label for="parking">Seleziona una opzione</label>
        <select name="parking" id="parking">
            <option value="" disabled selected>Nessun filtro</option>
            <option value="true">Parcheggio SI</option>
            <option value="false">Parcheggio NO</option>
        </select>
        <br>
        <label for="vote">Seleziona una opzione</label>
        <select name="vote" id="vote">
            <option value="" disabled selected>Nessun filtro</option>
            <option value="1">1 Stella</option>
            <option value="2">2+ Stelle</option>
            <option value="3">3+ Stelle</option>
            <option value="4">4+ Stelle</option>
            <option value="5">5+ Stelle</option>
        </select>
        <button type="submit">Filtra</button>
    </form>
    <br>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <?php foreach ($hotels[0] as $key => $value) { ?>
                    <th scope="col"><?php echo $key ?></th>
                <?php } ?>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($hotels as $hotel) { ?>
                <tr class="<?php if (isset($_GET['parking'])) {
                                $parking = $_GET['parking'];
                                if ($parking == 'false' && ($hotel['parking'] == true)) {
                                    echo 'd-none ';
                                } elseif ($parking == 'true' && ($hotel['parking'] == false)) {
                                    echo 'd-none ';
                                }
                            };
                            if (isset($_GET['vote'])) {
                                $vote = $_GET['vote'];
                                if ($vote == '2' && ($hotel['vote'] < 2)) {
                                    echo ' d-none';
                                } elseif ($vote == '3' && ($hotel['vote'] < 3)) {
                                    echo ' d-none';
                                } elseif ($vote == '4' && ($hotel['vote'] < 4)) {
                                    echo ' d-none';
                                } elseif ($vote == '5' && ($hotel['vote'] < 5)) {
                                    echo ' d-none';
                                }
                            };
                             ?>">
                    <th scope="row"><?php echo $hotel['name'] ?></th>
                    <td><?php echo $hotel['description'] ?></td>
                    <td><?php echo $hotel['parking'] === true ? 'Si' : 'No' ?></td>
                    <td><?php echo $hotel['vote'] . '/5' ?></td>
                    <td><?php echo $hotel['distance_to_center'] . ' ' . 'Km' ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>

</html>