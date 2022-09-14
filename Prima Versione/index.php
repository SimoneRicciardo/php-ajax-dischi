<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css" />
    <title>Document</title>
</head>
<body>
    <?php
        include __DIR__ . '/./database.php';
    ?>

    <header>
        <img src="../img/Logo.svg" alt="">
    </header>

    <main>
        
        <div class="container">

            <?php foreach($database as $value) : ?>
            <div class="card">
                <img src="<?php echo $value["poster"] ?>" />
                <h3><?php echo $value["title"] ?></h3>
                <p><?php echo $value["author"] ?></p>
                <p><?php echo $value["year"] ?></p>
            </div>
            <?php endforeach ?>
        
        </div>

    </main>
    
</body>
</html>