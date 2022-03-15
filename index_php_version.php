<?php

    include  __DIR__ . '/database.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <div class="app">
    <header>
        <div class="header d-flex justify-content-between align-items-center px-2">
            <div class="logo_box">
                <img src="./images/spotify-1.svg" class="" alt="">
            </div>
            <select id="tipo_di_genere" @change="selectGenre()" class="form-select ms_w_min ms_h_min" aria-label="Default select example">
                <option value="">Seleziona un genere</option>
                <option value="genre">Rock</option>
                <option value="genre">Metal</option>
                <option value="genre">Jazz</option>
                <option value="genre">Pop</option>
            </select>
        </div>
    </header>   
    <main class="ms_bg_primary">
        <div class="container py-5 d-flex justify-content-center">
            <div class="row gx-3 gy-3 flex-wrap h-100 flex-center disc_box">

                <?php
                    foreach($database as $disc => $value){
                        
                     echo '<div class="col">';
                     echo '<div class="card  border-0  ms_bg_secondary h-100" style="width: 15rem;">';
                           echo '<img src=' . $value["poster"] .' class="card-img-top h-100 p-3" alt="...">';
                           echo '<h5 class="card-title text-center text-light fs-7">' . $value["title"] . '</h5>';
                           echo '<p class="card-text text-center mb-0 text-secondary">' . $value["author"] . '</p>';
                            echo '<p class="card-text text-center text-secondary mb-1">' . $value["year"] . '</p>';
                       echo '</div>';
                       echo '</div>';
                    }
                ?>
            </div>

            </div>
        </div>
</main>

    </div>
</body>
</html>