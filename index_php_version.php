<?php
    $database = [
        [
            'title' => 'New Jersey',
            'author' => 'Bon Jovi',
            'year' => 1988,
            'poster' => 'https://images-na.ssl-images-amazon.com/images/I/51sBr4IWDwL.jpg',
            'genre' => 'Rock'
        ],
        [
            'title' => 'Live at Wembley 86',
            'author' => 'Queen',
            'year' => 1992,
            'poster' => 'https://images-na.ssl-images-amazon.com/images/I/71g40mlbinL._SX355_.jpg',
            'genre' => 'Pop'
        ],
        [
            'title' => 'Ten\'s Summoner\'s Tales',
            'author' => 'Sting',
            'year' => 1993,
            'poster' => 'https://images-na.ssl-images-amazon.com/images/I/411BQR6BHRL.jpg',
            'genre' => 'Pop'
        ],
        [
            'title' => 'Steve Gadd band',
            'author' => 'Steve Gadd Band',
            'year' => 2018,
            'poster' => 'https://m.media-amazon.com/images/I/81UtLzBDoEL._SS500_.jpg',
            'genre' => 'Jazz'
        ],
        [
            'title' => 'Brave new World',
            'author' => 'Iron Maiden',
            'year' => 2000,
            'poster' => 'https://upload.wikimedia.org/wikipedia/en/0/03/Iron_Maiden_-_Brave_New_World.jpg',
            'genre' => 'Metal'
        ],
        [
            'title' => 'One more car, one more rider',
            'author' => 'Eric Clapton',
            'year' => 2002,
            'poster' => 'https://images-na.ssl-images-amazon.com/images/I/81MDAIdh78L._SY355_.jpg',
            'genre' => 'Rock'
        ]
    ];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.scss">
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
                <!-- <div class="card  border-0  ms_bg_secondary h-100 " style="width: 15rem;">
                    <img src="https://i.picsum.photos/id/943/200/200.jpg?hmac=cFvTm_QTKVRRCLsOsMx1m2RmksDL0_U5AfcmnQ7TVds" class="card-img-top h-100 p-3" alt="...">
                    <h5 class="card-title text-center text-light fs-7">{{disc.title}}</h5>
                    <p class="card-text text-center mb-0 text-secondary">{{disc.author}}</p>
                    <p class="card-text text-center text-secondary mb-1">{{disc.year}}</p>
                </div> -->
            </div>

            </div>
        </div>
</main>

    </div>
</body>
</html>