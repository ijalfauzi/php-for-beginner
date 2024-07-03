<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Functions and Filters</title>
    </head>
    <body>
        <?php
        
            $books = [
                [
                    'name' => 'Laskar Pelangi',
                    'author' => 'Andrea Hirata',
                    'releaseYear' => 2005,
                    'purchaseUrl' => 'http://example.com',
                ],
                [
                    'name' => 'Laut Bercerita',
                    'author' => 'Leila S. Chudori',
                    'releaseYear' => 2017,
                    'purchaseUrl' => 'http://example.com',
                ],
                [
                    'name' => 'Bumi Manusia',
                    'author' => 'Pramoedya Ananta Toer',
                    'releaseYear' => 1980,
                    'purchaseUrl' => 'http://example.com',
                ]
            ];

            function filterByAuthor($books, $author) {
                $filteredBooks = [];

                foreach ($books as $book) {
                    if ($book['author'] === $author) {
                        $filteredBooks[] = $book;
                    } else {

                    }
                }

                return $filteredBooks;
            }
            
        ?>

        <ul>
            <?php foreach(filterByAuthor($books, 'Andrea Hirata') as $book) : ?>
                <li>
                    <a href="<?= $book['purchaseUrl'] ?>">
                        <?= $book['name']; ?> (<?= $book['releaseYear'] ?>) - By <?= $book['author'] ?>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
    </body>
</html>