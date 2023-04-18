<!-- dichiaro l'array multidimensionale -->
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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- stile -->
    <style>
        th {
            text-transform: capitalize;
        }
    </style>


    <title>PHP Hotel</title>

    <!-- link bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>

    <!-- tabella -->
    <table class="table">

        <!-- prima riga della tabella contenente le varie th -->
        <thead>

            <tr>
                <!-- apertura PHP n°1 -->
                <?php

                // ciclo internamente solo il primo array associativo contenuto in '$hotels' per ottenere solo una volta le key che saranno le th nella thead
                foreach ($hotels[0] as $key0 => $value0) {

                    // sostituisco il carattere '_' con uno spazio tramite il metodo 'str_replace'
                    $newkey0 = str_replace("_", " ", $key0);

                    ?>
                    <!-- chiusura PHP n°1 -->

                    <th scope="col">
                        <?php echo "{$newkey0}"; ?>
                    </th>

                    <!-- apertura PHP n°2 -->
                    <?php
                }

                ?>
                <!-- chiusura PHP n°2 -->

            </tr>

        </thead>

        <!-- apertura PHP n°3 -->
        <?php

        // ciclo per ogni array(associativo) contenuto nell'array '$hotels' 
        foreach ($hotels as $hotel) {

            ?>
            <!-- chiusura PHP n°3 -->

            <tr>

                <!-- apertura PHP n°4 -->
                <?php

                // ciclo per ogni elemento contenuto in ogni singolo array associativo(anche se sarebbe un oggetto in JS)
                foreach ($hotel as $key => $value) {

                    if ($key == 'parking') {

                        // trasformazione della booleana, perchè in php true = 1 & false = '', quindi trasformo '1'(true) in 'yes' & ''(false) in 'no';
                        if ($value == 1) {
                            $value = 'yes';
                        } else {
                            $value = 'no';
                        }
                    }

                    if ($key == 'vote') {

                        // aggiunta della base del voto
                        $value .= '/5';
                    }

                    if ($key == 'distance_to_center') {

                        // aggiunta dell'unità di misura per la distanza
                        $value .= " km";
                    }

                    ?>
                    <!-- chiusura PHP n°4 -->

                    <!-- definisco la singola cella tramite il valore della proprietà del singolo array associativo -->
                    <td>
                        <?php echo "{$value}"; ?>
                    </td>



                    <!-- apertura PHP n°2 -->
                    <?php
                }
                ?>

            </tr>

            <?php
        }
        ?>
        <!-- chiusura PHP n°2 -->
        </tbody>
    </table>

    <!-- link bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
</body>

</html>