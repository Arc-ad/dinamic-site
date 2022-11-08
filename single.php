<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Single_post</title>
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
                    <a href="#">My blog</a>
                </h1>
            </div>

            <nav class="col-8">
                <ul>
                    <li><a href="index.php">Главная</a></li>
                    <li><a href="o_nas.php">О нас</a></li>
                    <li><a href="#">Услуги</a></li>

                    <li>
                        <a href="#">
                            <i class="fa-solid fa-user"></i>
                            Кабинет
                        </a>
                        <ul>
                            <li><a href="#">Админ панель</a></li>
                            <li><a href="#">Выход</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </div>

</header>

<!--    Блок мейн   -->
<div class="container">
    <div class="content row">
        <!--  Мейн контент  -->
        <div class="main-content col-md-9 col-12">
            <h2>Загаловок статьи Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque corporis eos odit omnis voluptatem, voluptates!</h2>

            <div class="single_post row">
                <div class="img col-12">
                    <img src="assets/images/image_3.jpg" alt="" class="img-thumbnail">
                </div>
                <div class="info">
                    <i class="far fa-user">Имя автора</i>
                    <i class="far fa-calendar">3 ноября 2022</i>
                </div>
                <div class="single_post_text col-12 ">
                    <h3>Загаловок третьего уровня</h3>
                    <p>Lorem ipsum <a href="#">dolor</a>  sit amet, consectetur adipisicing elit. A aperiam beatae dolore eaque eligendi est et exercitationem facilis, impedit ipsa ipsum maxime neque officia optio quas rem, tempore! Harum quaerat quo vel voluptates! Excepturi iusto optio voluptates? Aliquam autem beatae consectetur enim error harum illo illum iusto voluptatum? A animi commodi consequatur cumque cupiditate doloremque excepturi impedit molestias, nostrum, quaerat repellendus rerum suscipit voluptatum. Atque cupiditate distinctio dolorum incidunt inventore iste, itaque laboriosam molestias qui quod ratione sint, ut velit? Alias asperiores illo inventore ipsam laudantium, natus, nemo nihil nostrum optio pariatur perspiciatis provident quia, reprehenderit sit sunt vel voluptas? Eos, quisquam, veritatis? Aliquid architecto dolorem in, laborum mollitia nihil obcaecati. Accusantium adipisci aliquam assumenda aut blanditiis corporis debitis deleniti dignissimos eaque eligendi eum eveniet expedita harum hic impedit laboriosam minus natus non omnis quia quis quo quod quos rerum saepe similique voluptate, voluptatem. A assumenda aut beatae commodi, consectetur cumque, deleniti dolor eius eveniet incidunt nulla numquam pariatur, possimus quae quaerat quasi qui quidem quo sint soluta suscipit unde voluptatum! A, amet corporis culpa cupiditate debitis deleniti eius enim error, exercitationem fugiat illo impedit ipsa ipsam necessitatibus nisi odio officia porro quam recusandae reiciendis repellat temporibus vitae voluptate, voluptatem.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis illo maxime quam qui totam. Autem beatae deleniti earum eligendi, eum itaque officiis, perspiciatis quae quibusdam, quod repellendus voluptatibus voluptatum. Adipisci at culpa distinctio dolores eum ex excepturi facilis fugit inventore ipsum minus nisi obcaecati omnis quaerat, qui quia reiciendis sed sit suscipit tenetur ut vel velit voluptas voluptate voluptates. Esse facilis ipsum iste laboriosam porro quo veniam? Distinctio dolore eius eum neque nesciunt nostrum omnis quos reprehenderit sequi sint sit tempora tenetur, voluptate? Esse exercitationem explicabo, possimus repellendus rerum vel veritatis. Aliquid amet beatae consequatur culpa delectus distinctio dolorum ea eligendi enim eos eum, explicabo facere ipsa ipsum itaque iusto maxime, mollitia officia placeat praesentium quam quia reprehenderit, sit suscipit.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A adipisci, alias, beatae dicta distinctio fugiat impedit ipsam nobis nulla omnis praesentium qui, repellendus veritatis voluptates.</p>

                </div>
            </div>

        </div>
        <!--   сайдбар контент -->
        <div class="sidebar col-md-3 col-12">

            <div class="section search">
                <h3>Поиск</h3>
                <form action="/" method="post">
                    <input type="text" class="text-input" name="search-term" placeholder="Введите искомое...">
                </form>
            </div>

            <div class="section topics">
                <h3>Категории</h3>
                <ul>
                    <li><a href="#">Программирование</a></li>
                    <li><a href="#">Курсы</a></li>
                    <li><a href="#">Мотивация</a></li>
                    <li><a href="#">Интересные факты</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!--    Блок мейн конец-->
<!--FOOTER-->
<div class="footer container-fluid">
    <div class="footer-content container">
        <div class="row">
            <div class="footer-section about col-md-4 col-12">
                <h3 class="logo-text">Мой блог</h3>
                <p>
                    Мой блог - это блог по обучению с уроков по
                    YouTube, прокачки навыков и получения знаний.
                </p>
                <div class="contact">
                    <span><i class="fas fa-phone">&nbsp;123-123-123</i></span>
                    <span><i class="fas fa-envelope">&nbsp;info@myblog.com</i></span>
                </div>
                <div class="socials">
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-youtube"></i></a>
                </div>
            </div>

            <div class="footer-section links col-md-4 col-12">
                <h3>Quick Links</h3>
                <br>
                <ul>
                    <a href="#">
                        <li>События</li>
                    </a>
                    <a href="#">
                        <li>Команда</li>
                    </a>
                    <a href="#">
                        <li>Упражнения</li>
                    </a>
                    <a href="#">
                        <li>Галерея</li>
                    </a>
                </ul>
            </div>

            <div class="footer-section contact-form col-md-4 col-12">
                <h3>Контакты</h3>
                <br>
                <form action="index.php" method="post">
                    <input type="email" name="email" class="text-input contact-input" placeholder="Your email adress...">
                    <textarea name="message" class="text-input contact-input" placeholder="Your message..." rows="4"></textarea>
                    <button type="submit" class="btn btn-big contact-btn">
                        <i class="fas fa-envelope"></i>
                        Отправить
                    </button>
                </form>
            </div>
        </div>
        <div class="footer-bottom">
            &nbsp; myblog.com | Designed by Alexandr
        </div>
    </div>
</div>
<!--FOOTER END-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>

-->
</body>
</html>