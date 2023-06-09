<?php
    $selectParking = $_GET['parking'];
    $selectVote = $_GET['vote'];
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
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="voterelli">
        <form action="parking.php">
            <div>
                <label for="parking">Area Parcheggio</label>
                <select id="parking" name="parking"> 
                    <option value="0">select one</option>                     
                    <option value="1">Si</option>
                    <option value="2">No</option>
                </select>
            </div>
            <div>
                <label for="vote">Voto Hotel</label>
                <select id="vote" name="vote"> 
                    <option value="0">select one</option>                     
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
            </div>
            
            <button type="submit">Filtrami tutto</button>
        </form>
    </div>
    
        <table class="table">
            <thead>
                <tr>
                <th scope="col">Nome Hotel</th>
                <th scope="col">Descrizione</th>
                <th scope="col">Parcheggio</th>
                <th scope="col">Stelle</th>
                <th scope="col">Distanza dal centro</th>
                </tr>
            </thead>
            <tbody>
            <?php
                foreach ($hotels as $key => $value){ 
                    if( $hotels[$key]['parking'] == true && $selectParking == 1 && $hotels[$key]['vote'] >= $selectVote) { ?>
                        <tr>
                            <th scope="row"><?= $hotels[$key]['name']?></th>
                            <td><?= $hotels[$key]['description']?></td>
                            <td>
                                <?php 
                                    if ($hotels[$key]['parking'] == true){ ?>
                                    SI <?php
                                    } else { ?>
                                    NO <?php
                                    };
                                ?>
                            </td>
                            <td><?= $hotels[$key]['vote']?></td>
                            <td><?= $hotels[$key]['distance_to_center']?></td>
                        </tr><?php
                    } else if ($hotels[$key]['parking'] == false && $selectParking == 2 && $hotels[$key]['vote'] >= $selectVote) { ?>
                        <tr>
                            <th scope="row"><?= $hotels[$key]['name']?></th>
                            <td><?= $hotels[$key]['description']?></td>
                            <td>
                                <?php 
                                    if ($hotels[$key]['parking'] == true){ ?>
                                    SI <?php
                                    } else { ?>
                                    NO <?php
                                    };
                                ?>
                            </td>
                            <td><?= $hotels[$key]['vote']?></td>
                            <td><?= $hotels[$key]['distance_to_center']?></td>
                        </tr><?php  
                    } else if ( $selectParking == 0 && $hotels[$key]['vote'] >= $selectVote ) { ?>
                        <tr>
                            <th scope="row"><?= $hotels[$key]['name']?></th>
                            <td><?= $hotels[$key]['description']?></td>
                            <td>
                                <?php 
                                    if ($hotels[$key]['parking'] == true){ ?>
                                    SI <?php
                                    } else { ?>
                                    NO <?php
                                    };
                                ?>
                            </td>
                            <td><?= $hotels[$key]['vote']?></td>
                            <td><?= $hotels[$key]['distance_to_center']?></td>
                        </tr><?php  
                    } 
                } ?>
            </tbody>
        </table>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>