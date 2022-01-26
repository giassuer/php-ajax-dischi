<?php
require __DIR__ . '/database.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>Document</title>
</head>
<body>
    <!-- HEADER -->
    <header>
        <div class="logo">
            <img src="./assets/logo.png" alt="">
        </div>
    </header>

    <!-- MAIN -->
    <main>
        <div class="container">
        <div class="dischi-container">
            <div class="single-disco">
            <?php foreach($db as $faq) { ?>
                <div class="disco-img">
                    <img :src="details.poster" alt="">
                </div>
                <div class="disco-title white">{{ details.title }}</div>
                <div class="disco-dati">
                    <div class="artist grey">{{ details.author }}</div>
                    <div class="date grey">{{ details.year }}</div>
                </div>
            <?php } ?>
            </div>
        </div>
        <!-- {{selectDiscs}} -->
        </div> 
    </main>

</body>
</html>