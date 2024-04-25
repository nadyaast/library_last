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
                <a class="active" href="index.php">Главная</a>
                <a href="registr.php">Личный кабинет</a>
            </nav>
        </header>
        <main>
            <h1>Электронная библиотека</h1>
            <div class="searching">
            <form action="search.php"> 
                <input type="text" name="text" class="search" placeholder="Поиск">
                <input type="submit" name="submit" class="submit" value="Найти">
            </form>
            </div>
            <div class="semilayer">
                <?php 
                $selectBook = mysqli_query($conn, 'SELECT * FROM library_bd'); //запрос данных
                //$request = 'SELECT * FROM library_bd';
                //$selectBook = $conn->query($request);
                if (!$selectBook) die('Проблема в отоброжении данных');

                while($bookArray = mysqli_fetch_assoc($selectBook)) {
                    include 'db/database.php';
                }
                ?>
            </div>
        </main>
        </body>
</html>