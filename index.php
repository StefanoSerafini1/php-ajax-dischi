<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-ajax-dischi</title>
</head>
<body>
    <?php // includo database con dischi
        include __DIR__ . '/partials/database.php' 
    ?>
    <div id="app">
        <header class="header">
            <div class="container">
                <img src="" alt="Spotify">
            </div>
        </header>
        <div class="container">
            <div class="card">
                <?php foreach ($database as $song) {?>
                    <img src="<?php echo $song['poster'] ?>" alt="">
                    <h3><?php echo $song['title'] ?></h3>
                    <h4><?php echo $song['author'] ?></h4>
                    <h4><?php echo $song['year'] ?></h4>
                    <span><?php echo $song['genre'] ?></span>
                <?php } ?>
            </div>
        </div>
    </div>
</body>
</html>