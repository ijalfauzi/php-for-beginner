<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Associative Arrays</title>
    </head>
    <body>
        <?php
        
            $books = [
                [
                    'name' => 'Laskar Pelangi',
                    'author' => 'Andrea Hirata',
                    'purchaseUrl' => 'http://example.com',
                ],
                [
                    'name' => 'Laut Bercerita',
                    'author' => 'Leila S. Chudori',
                    'purchaseUrl' => 'http://example.com',
                ],
                [
                    'name' => 'Bumi Manusia',
                    'author' => 'Pramoedya Ananta Toer',
                    'purchaseUrl' => 'http://example.com',
                ]
            ];
            
        ?>

        <ul>
            <?php foreach($books as $book) : ?>
                <li>
                    <a href="<?= $book['purchaseUrl']; ?>">
                        <?= $book['name']; ?>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
    </body>
</html>