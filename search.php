<?php 
include 'db/config.php';
?>

<!DOCTYPE html>
    <html lang="ru">
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width">
            <link rel="stylesheet" href="style.css">
            <title>Библиотека</title>
        </head>
        <body>
        <header>
            <div class="wrap-logo">
                <img src="reading-book.png" width="75px" height="75px">
            </div>
            <nav>
                <a href="index.php">Главная</a>
                <a href="registr.php">Личный кабинет</a>
            </nav>
        </header>
        <main>
            <div class="search_header">
                <h2>Результаты поиска</h2>
            </div>
            <div class="semilayer">
            <?php
               // Get the search query from the form
                $search_query = $_GET['text'];

                // Create a query to search the database
                $query = "SELECT * FROM library.library_bd WHERE book_name LIKE '%$search_query%'
                            OR author LIKE '%$search_query'
                            OR book_year LIKE '%$search_query'
                            OR genre LIKE '%$search_query'
                            ";

                // Execute the query
                $result = mysqli_query($conn, $query);

                // Check if there are any results
                if (mysqli_num_rows($result) > 0) {
                    // Display the results
                    while($row = mysqli_fetch_assoc($result)) {
                        include 'db/database_search.php';
                    }
                } else {
                    echo "<p>К сожалению, ничего не найдено :(</p>";
                }
            ?>
            </div>
        </main>
        </body>
</html>
