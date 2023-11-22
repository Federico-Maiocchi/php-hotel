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



<ul>
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
</ul>

<ul>
    <?php 
        foreach ($hotels as $key => $value) {
        // var_dump($key,$value);
    ?> 
    <li>
        <strong>Name</strong>
        <em>
            <?php echo $value['name']; ?>
        </em>
    </li>
    <li>
        <strong>Descrizione</strong>
        <em>
            <?php echo $value['description']; ?>
        </em>
    </li>
    <li>
        <strong>Voto</strong>
        <em>
            <?php echo $value['vote']; ?>
        </em>
    </li>
    <li>
        <strong>Distanza</strong>
        <em>
            <?php echo $value['distance_to_center']; ?>
        </em>
    </li>

    <?php 
        }
    ?>

</ul>