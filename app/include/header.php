<?php
    include_once "app/database/db.php";
    include "path.php";
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My blog</title>
    <!--   fontawesome   -->
    <script src="https://kit.fontawesome.com/506ba669db.js" crossorigin="anonymous"></script>
    <!--   bootstrap    -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!--    css.style   -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!--    Шрифты гугла    -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400;500;600;700&display=swap" rel="stylesheet">

</head>
<body>

<header class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-4">
                <h1>
                    <a href="<?php echo BASE_URL?>">My blog</a>
                </h1>
            </div>

            <nav class="col-8">
                <ul>
                    <li><a href="<?php echo BASE_URL?>">Главная</a></li>
                    <li><a href="<?php echo BASE_URL . 'o_nas.php'?>">О нас</a></li>
                    <li><a href="#">Услуги</a></li>

                    <li>
                        <?php if(isset($_SESSION['id'])): ?>
                            <a href="#">
                                <i class="fa-solid fa-user"></i>
                                <?php echo $_SESSION['login'] ?>
                            </a>
                            <ul>
                                <?php if($_SESSION['admin']): ?>
                                    <li><a href="#">Админ панель</a></li>
                                <?php endif; ?>
                                <li><a href="<?php echo BASE_URL; ?>">Выход</a></li>
                            </ul>
                        <?php else:?>
                            <a href="<?php echo BASE_URL . "log.php";?>">
                                <i class="fa-solid fa-user"></i>
                                Войти
                            </a>
                            <ul>

                                <li><a href="<?php echo BASE_URL . "reg.php";?>">Регистрация</a></li>
                            </ul>
                        <?php endif; ?>

                    </li>
                </ul>
            </nav>
        </div>
    </div>

</header>