<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./dist/css/main.css">
    <title>PHP-ajax-dischi</title>
</head>
<body>
    <div id="app">
        <!-- zona header con logo -->
        <header class="header">
            <div class="logo">
                <img src="dist/img/logo.png" alt="Spotify">
            </div>
        </header>
        <!-- zona contenitore totale zona carte -->
        <div class="container">
            <!-- foreach su array database nel file database per avere dati da inserire nelle carte --> 
             <!--contenitore carte canzoni  -->
            <div v-for='song in dischi' class="card">
                    <img :src="song.poster" alt="copertina album">
                    <h3>{{song.title}}</h3>
                    <h4>{{song.author}}</h4>
                    <h4>{{song.year}}</h4>
                    <span>{{song.genre}}</span>
            </div>
            
        </div>
    </div>
    <script src="./dist/js/main.js"></script>
</body>
</html>