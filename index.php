<!--HEADER-->
<?php
        include"app/include/header.php";
?>
<!--HEADER END-->

<!--Блок карусели-->
<div class="container ">
    <div class="row">
        <h2 class="slider-title">Топ публикации</h2>
    </div>
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="assets/images/image_1.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption-hack carousel-caption d-none d-md-block">
                    <h5><a href="">First slide label</a></h5>
                </div>
            </div>
            <div class="carousel-item">
                <img src="assets/images/image_2.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption-hack carousel-caption d-none d-md-block">
                    <h5>Second slide label</h5>
                </div>
            </div>
            <div class="carousel-item">
                <img src="assets/images/image_3.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption-hack  carousel-caption d-none d-md-block">
                    <h5>Third slide label</h5>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
<!--  Блок карусели конец  -->

<!--    Блок мейн   -->
<div class="container">
    <div class="content row">
        <!--  Мейн контент  -->
        <div class="main-content col-md-9 col-12">
            <h2>Последние публикация</h2>

            <div class="post row">
                <div class="img col-12 col-md-4">
                    <img src="assets/images/image_3.jpg" alt="" class="img-thumbnail">
                </div>

                <div class="post_text col-12 col-md-8">
                    <h3>
                        <a href="single.php">Прикольная статья на тему динамического сайта...</a>
                    </h3>
                    <i class="far fa-user">Имя автора</i>
                    <i class="far fa-calendar">3 ноября 2022</i>
                    <p class="prieview-text">
                        Lorem ipsum dolor sit amet,
                        consectetur adipisicing elit. Dolore, officia!
                    </p>
                </div>
            </div>
            <div class="post row">
                <div class="img col-12 col-md-4">
                    <img src="assets/images/image_3.jpg" alt="" class="img-thumbnail">
                </div>

                <div class="post_text col-12 col-md-8">
                    <h3>
                        <a href="#">Прикольная статья на тему динамического сайта...</a>
                    </h3>
                    <i class="far fa-user">Имя автора</i>
                    <i class="far fa-calendar">3 ноября 2022</i>
                    <p class="prieview-text">
                        Lorem ipsum dolor sit amet,
                        consectetur adipisicing elit. Dolore, officia!
                    </p>
                </div>
            </div>

            <div class="post row">
                <div class="img col-12 col-md-4">
                    <img src="assets/images/image_3.jpg" alt="" class="img-thumbnail">
                </div>

                <div class="post_text col-12 col-md-8">
                    <h3>
                        <a href="#">Прикольная статья на тему динамического сайта...</a>
                    </h3>
                    <i class="far fa-user">Имя автора</i>
                    <i class="far fa-calendar">3 ноября 2022</i>
                    <p class="prieview-text">
                        Lorem ipsum dolor sit amet,
                        consectetur adipisicing elit. Dolore, officia!
                    </p>
                </div>
            </div>

            <div class="post row">
                <div class="img col-12 col-md-4">
                    <img src="assets/images/image_3.jpg" alt="" class="img-thumbnail">
                </div>

                <div class="post_text col-12 col-md-8">
                    <h3>
                        <a href="#">Прикольная статья на тему динамического сайта...</a>
                    </h3>
                    <i class="far fa-user">Имя автора</i>
                    <i class="far fa-calendar">3 ноября 2022</i>
                    <p class="prieview-text">
                        Lorem ipsum dolor sit amet,
                        consectetur adipisicing elit. Dolore, officia!
                    </p>
                </div>
            </div>

            <div class="post row">
                <div class="img col-12 col-md-4">
                    <img src="assets/images/image_3.jpg" alt="" class="img-thumbnail">
                </div>

                <div class="post_text col-12 col-md-8">
                    <h3>
                        <a href="#">Прикольная статья на тему динамического сайта...</a>
                    </h3>
                    <i class="far fa-user">Имя автора</i>
                    <i class="far fa-calendar">3 ноября 2022</i>
                    <p class="prieview-text">
                        Lorem ipsum dolor sit amet,
                        consectetur adipisicing elit. Dolore, officia!
                    </p>
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
<?php include("app/include/footer.php"); ?>
<!--FOOTER END-->
