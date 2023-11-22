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

// var_dump($hotels);
// var_dump($hotels[0],'indice array');



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotels table</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

<table class="table">
    <thead>
        <tr>
            <th class="text-primary" scope="col">Nome</th>
            <th class="text-primary" scope="col">Descrizione</th>
            <th class="text-primary" scope="col">Parcheggio</th>
            <th class="text-primary" scope="col">voto</th>
            <th class="text-primary" scope="col">Distanza</th>
        </tr>
    </thead>
    <?php foreach ($hotels as $hotel) { 
                $parking = '';

                if ($hotel['parking'] === true ) {
                    $parking = 'Diponibile';
                } else {
                    $parking = 'Non diponibile';
                } 
    ?>
  
    <tbody class="table-group-divider">

        <tr>
            <td class="fw-bold" > <?php echo $hotel['name']; ?> </td>
            <td> <?php echo $hotel['description']; ?> </td>
            <td> <?php echo $parking; ?> </td>
            <td> <?php echo $hotel['vote']; ?> </td>
            <td> <?php echo $hotel['distance_to_center']; ?> </td>  
        </tr>
    
    </tbody>

    <?php } ?>
</table>

</body>
</html>




<!-- ciclo for -->


<!-- <ul>
    <?php 
        for ($i = 0; $i < count($hotels); $i++ ) {
        // var_dump($hotels[$i]);
    ?>
    <li>
        <p><em>
        <? echo $hotels[$i]['description'] ?>
        </em></p>
        <strong>Name</strong>
        <em><? echo $hotels[$i]['name'] ?></em>
    </li>

    <?php 
        }
    ?>
</ul> -->

<!-- ciclo foreach -->

<!-- <ul>
<?php foreach ($hotels as $hotel) { 
        $parking = '';

        if ($hotel['parking'] === true ) {
            $parking = 'Diponibile';
        } else {
            $parking = 'Non diponibile';
        } 
        ?> 
    <li>
        <strong>Name</strong>
        <p>
            <em>
                <?php echo $hotel['name']; ?>
            </em>
        </p>
        <strong>Descrizione</strong>
        <p>
            <em>
                <?php echo $hotel['description']; ?>
            </em>
        </p>
        <strong>Parcheggio</strong>
        <p>
            <em>
                <?php echo $parking; ?>
            </em>
        </p>
        <strong>Voto</strong>
        <p>
            <em>
                <?php echo $hotel['vote']; ?>
            </em>
        </p>
        <strong>Distanza</strong>
        <p>
            <em>
                <?php echo $hotel['distance_to_center']; ?>
            </em>
        </p>
    </li>

    <?php } ?>

</ul> -->