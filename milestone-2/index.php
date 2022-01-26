
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>Document</title>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/vue"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.20.0/axios.min.js"></script>
</head>
<body>
    <!-- HEADER -->
    <header>
        <div class="logo">
            <img src="./assets/logo.png" alt="">
        </div>
    </header>

    <!-- MAIN -->
    <div id="root">
        <main>
            <div class="container">
                <div class="dischi-container">
                        <div class="single-disco" v-for="(element, index) in dischi" :key="index">
                                <div class="disco-img">
                                    <img src="element.poster" alt="">
                                </div>
                                <div class="disco-title white">{{element.title}}</div>
                                <div class="disco-dati">
                                    <div class="artist grey">{{element.author}}</div>
                                    <div class="date grey">{{element.year}}</div>
                                </div>
                        </div>
                    
                </div>
            </div> 
        </main>
    </div>

    <script src="js/script.js"></script>
</body>
</html>