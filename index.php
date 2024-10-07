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

$object_keys = array_keys($hotels[0]);

$filtered_array = [];

// Fase di raccolta dati
// Fase di elaborazione

if (isset($_GET['parking']) && $_GET['parking'] === 'on') {
    foreach ($hotels as $item) {
        if ($item['parking'] === true) {
            array_push($filtered_array, $item);
        }
    }
} else {
    $filtered_array = $hotels;
}

if (isset($_GET['average']) && $_GET['average'] !== 'Average') {
    $temp_array = [];
    foreach ($filtered_array as $item) {
        if ($item['average'] == $_GET['average']) {
            array_push($temp_array, $item);
        }
    }
    $filtered_array = $temp_array;
}

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
            <!-- Form -->
            <form action="index.php" method="get" class="d-flex align-items-center gap-1">
                <div class="form-check me-1">
                    <input type="checkbox" id="parking" class="form-check-input" name="parking">
                    <label for="parking" class="form-check-label">Parking</label>
                </div>
                <select class="form-select w-25" name="average">
                    <option selected>Average</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
                <button type="submit" class="btn btn-primary">Search</button>
                <button type="reset" class="btn btn-secondary">Reset</button>
            </form>
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
                    <?php foreach ($filtered_array as $item) { ?>
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