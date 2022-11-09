<!--HEADER-->
<?php include("app/include/header.php"); ?>
<!--HEADER END-->

<!--    Блок мейн   -->
<div class="container">
    <div class="content row">
        <!--  Мейн контент  -->
        <div class="main-content col-md-9 col-12">
            <h2>Загаловок статьи Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque corporis eos odit omnis voluptatem, voluptates!</h2>

            <div class="o_nas row">
                <div class="single_post_text col-12 ">
                    <h3>Информация о нас</h3>
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">First</th>
                            <th scope="col">Last</th>
                            <th scope="col">Handle</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td colspan="2">Larry the Bird</td>
                            <td>@twitter</td>
                        </tr>
                        </tbody>
                    </table>
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
