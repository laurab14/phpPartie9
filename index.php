<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>Partie 9</title>
    </head>
    <body>
        <?php
        for ($i = 1; $i < 9; $i++) {
            ?>
            <p><a href=<?= 'exo' . $i . '/index.php' ?>>Exercice<?= $i ?></a></p>
            <?php
        }
        ?>
            <p><a href="exoTP/index.php">Exercice TP</a></p>
    </body>
</html>
