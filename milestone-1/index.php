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
                <?php foreach($database as $disco) { ?>
                    <div class="single-disco">
                            <div class="disco-img">
                                <img src="<?php echo $disco['poster']?>" alt="">
                            </div>
                            <div class="disco-title white"><?php echo $disco['title'] ?></div>
                            <div class="disco-dati">
                                <div class="artist grey"><?php echo $disco['author'] ?></div>
                                <div class="date grey"><?php echo $disco['year'] ?></div>
                            </div>
                    </div>
                <?php } ?>
            </div>
        </div> 
    </main>

</body>
</html>