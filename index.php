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
    <!-- <?php foreach ($hotels as $hotel) { ?>
        <h1><?php echo $hotel['name'] ?></h1>
        <p><?php echo $hotel['description'] ?></p>
        <p><?php echo $hotel['parking'] ?></p>
        <p><?php echo $hotel['vote'] ?></p>
        <p><?php echo $hotel['distance_to_center'] ?></p>
    <?php } ?> -->

    <table class="table table-striped table-hover">
  <thead>
    <tr>
        <?php foreach($hotels[0] as $key => $value) {?>
            <th scope="col"><?php echo $key ?></th>
        <?php }?>
    </tr>
  </thead>
  <tbody>
    <?php foreach($hotels as $hotel) {?>
    <tr>
      <th scope="row"><?php echo $hotel['name']?></th>
      <td><?php echo $hotel['description'] ?></td>
      <td><?php echo $hotel['parking'] === true ? 'Yes' : 'No' ?></td>
      <td><?php echo $hotel['vote'] . '/5'?></td>
      <td><?php echo $hotel['distance_to_center'] . ' ' . 'Km' ?></td>
    </tr>
    <?php }?>
  </tbody>
</table>
</body>

</html>