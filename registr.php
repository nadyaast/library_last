<?php 
include 'db/config.php'; 
?>
<!DOCTYPE html>
    <html lang="ru">
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width">
            <link rel="stylesheet" href="style.css">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
            <title>Личный кабинет</title>
        </head>
        <body>
        <header>
            <div class="wrap-logo">
                <img src="reading-book.png" width="75px" height="75px">
            </div>
            <nav>
                <a href="index.php">Главная</a>
                <a class="active">Личный кабинет</a>
            </nav>
        </header>
        <main>
            <br>
            <h1>Регистрация</h1>
            <div class="container reg_form">
                <form class="row justify-content-md-center" method="post" action="registr.html">
                    <div class="mb-3 col-12 col-md-5">
                        <label for="formGroupExampleInput" class="form-label">Имя</label>
                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Ваше имя, которое будет видно другим пользователям">
                    </div>
                    <div class="w-100"></div>
                    <div class="mb-3 col-12 col-md-5">
                        <label for="exampleInputEmail1" class="form-label">Почта</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="w-100"></div>
                    <div class="mb-3 col-12 col-md-5">
                        <label for="exampleInputPassword1" class="form-label">Пароль</label>
                        <input type="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="w-100"></div>
                    <div class="mb-3 col-12 col-md-5">
                        <label for="exampleInputPassword2" class="form-label">Подтвердите пароль</label>
                        <input type="password" class="form-control" id="exampleInputPassword2">
                    </div>
                    <div class="w-100"></div>
                    <div class="mb-3 col-12 col-md-5">
                        <button type="submit" class="btn btn-secondary">Продолжить</button>
                        <a href="aut.html">Войти</a>
                    </div>
                </form>
            </div>
        </main>
        </body>
    </html>

    