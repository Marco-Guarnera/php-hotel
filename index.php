<?php

// Fase di preparazione

// Struttura dati

$hotels = [
    [
        'name' => 'Hotel Belvedere',
        'description' => 'Description',
        'parking' => true,
        'average' => 4,
        'distance_to_center' => 10.4
    ],

    [
        'name' => 'Hotel Futuro',
        'description' => 'Description',
        'parking' => true,
        'average' => 2,
        'distance_to_center' => 2
    ],

    [
        'name' => 'Hotel Rivamare',
        'description' => 'Description',
        'parking' => false,
        'average' => 1,
        'distance_to_center' => 1
    ],

    [
        'name' => 'Hotel Bellavista',
        'description' => 'Description',
        'parking' => false,
        'average' => 5,
        'distance_to_center' => 5.5
    ],

    [
        'name' => 'Hotel Milano',
        'description' => 'Description',
        'parking' => true,
        'average' => 2,
        'distance_to_center' => 50
    ]
];

// Variabili

$object_keys = array_keys($hotels[0]);

// Fase di raccolta dati
// Fase di elaborazione

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Marco Guarnera">
    <meta name="description" content="PHP Hotel">
    <!-- Title -->
    <title>PHP Hotel</title>
    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <!-- Main Header -->
    <header id="main-header">
        <h1 class="text-center">PHP Hotel</h1>
    </header>
    <!-- Main -->
    <main>
        <div class="container-fluid">
            <!-- Table -->
            <table class="table table-hover">
                <thead>
                    <tr>
                        <?php foreach ($object_keys as $key) { ?>
                            <th><?= str_replace('_', ' ', ucfirst($key)) ?></th>
                        <?php } ?>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($hotels as $item) { ?>
                        <tr>
                            <td><?= $item['name'] ?></td>
                            <td><?= $item['description'] ?></td>
                            <td><?= $item['parking'] ? 'Yes' : 'No' ?></td>
                            <td><?= $item['average'] . '/5' ?></td>
                            <td><?= "{$item['distance_to_center']} km" ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </main>
</body>

</html>

<?php

// Fase di produzione

var_dump($hotels);

?>