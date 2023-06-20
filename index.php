<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<!-- Aggiungere un form ad inizio pagina che tramite una richiesta GET permetta di filtrare gli hotel che hanno un parcheggio -->
    <div class="container">
        <form action="">
            <label for="search">Search:</label>
            <input type="text" name="search">
            <input type="number" name="vote">
            <button type="submit" class="btn btn-primary">Filtra</button>
        </form>


    </div>




    <div class="container">
            <table class="table">
                <thead>
                    <tr>
                        <th class="col">Nome</th>
                        <th class="col">Descrizione</th>
                        <th class="col">Parcheggio</th>
                        <th class="col">Voto</th>
                        <th class="col">Distanza dal centro</th>
                    </tr>
                </thead>
                
                <tbody>
                    <tr>
                        <th>
                        </th>
                    </tr>
                
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


                        // var_dump($_GET)
                        
                        if ($_GET == [] || $_GET["search"] == "") {
                            
                            foreach ($hotels as $hotel) {
                                echo  "<tr>" ;
                                echo  "<td>" . $hotel['name'] . "</td>";
                                echo  "<td>" .  $hotel['description'] . "</td>";
                                echo  "<td>" . $hotel['parking'] . "</td>";
                                echo  "<td>" .  $hotel['vote'] . "</td>";
                                echo  "<td>" . $hotel['distance_to_center'] . "</td>";
                                echo  "</tr>";
    
                            }
                            
                        } else {
                            
                           
                            foreach ($hotels as $hotel) {
                                
                                if ($_GET['search'] == 'true' && $hotel['parking'] || $hotel['vote'] <= intval($_GET['vote'])) {
                        
                                    echo  "<tr>" ;  
                                    echo  "<td>" . $hotel['name'] . "</td>";
                                    echo  "<td>" .  $hotel['description'] . "</td>";
                                    echo  "<td>" . $hotel['parking'] . "</td>";
                                    echo  "<td>" .  $hotel['vote'] . "</td>";
                                    echo  "<td>" . $hotel['distance_to_center'] . "</td>";
                                    echo  "</tr>";
                                } 
                            }
                            
                        }
                    ?>
                    
                </tbody>
            </table>
    </div>

    
    
</body>
</html>