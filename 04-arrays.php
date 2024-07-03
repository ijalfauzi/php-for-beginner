<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Arrays</title>
    </head>
    <body>
        <?php
        
            $books = [
                "Laskar Pelangi", // first item = index 0
                "Laut Bercerita", // second item = index 1
                "Bumi Manusia" // third item = index 2
            ];
            
        ?>

        <!-- First approach -->

        <ul>
            <?php foreach ($books as $book) {
                echo "<li>$book</li>";
            }
            ?>
        </ul>

        <!-- Second approach -->

        <ul>
            <?php foreach($books as $book) : ?>
                <li><?= $book ?></li>
            <?php endforeach; ?>
        </ul>
    </body>
</html>