<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="dist/css/main.css">
    <title>PHP-ajax-dischi</title>
</head>
<body>
    <?php // includo database con dischi
        include __DIR__ . '/partials/database.php' 
    ?>
    <div id="app">
        <header class="header">
            <div class="logo">
                <img src="dist/img/logo.png" alt="Spotify">
            </div>
        </header>
        <div class="container">
        <?php foreach ($database as $song) {?>
            <div class="card">
                    <img src="<?php echo $song['poster'] ?>" alt="">
                    <h3><?php echo $song['title'] ?></h3>
                    <h4><?php echo $song['author'] ?></h4>
                    <h4><?php echo $song['year'] ?></h4>
                    <span><?php echo $song['genre'] ?></span>
            </div>
            <?php } ?>
        </div>
    </div>
</body>
</html>