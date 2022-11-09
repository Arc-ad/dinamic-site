<!--HEADER-->
<?php include("app/include/header.php"); ?>
<!--HEADER END-->

<!--FORM-->
<div class="container reg_form">
    <form class="row justify-content-center" method="post" action="reg.html">
        <h2 class="col-12">Форма регистрации</h2>
        <div class="mb-3 col-12 col-md-4">
            <label for="formGroupExampleInput" class="form-label">Ваш логин</label>
            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Введите ваш логин...">
        </div>
        <div class="w-100"></div>
        <div class="mb-3 col-12 col-md-4">
            <label for="exampleInputEmail1" class="form-label">Email</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Введите ваш Email...">
            <div id="emailHelp" class="form-text">Ваш Email не будет использован для спама!</div>
        </div>
        <div class="w-100"></div>
        <div class="mb-3 col-12 col-md-4">
            <label for="exampleInputPassword1" class="form-label">Пароль</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Введите ваш пароль...">
        </div>
        <div class="w-100"></div>

        <div class="mb-3 col-12 col-md-4">
            <label for="exampleInputPassword2" class="form-label">Повторите пароль</label>
            <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Повторите ваш пароль...">
        </div>
        <div class="w-100"></div>

        <div class="mb-3 col-12 col-md-4">
            <button type="button" class="btn btn-secondary">Регистрация</button>
            <a href="log.php">Войти</a>
        </div>
    </form>
</div>
<!--END FORM-->
<!--FOOTER-->
<?php include("app/include/footer.php"); ?>
<!--FOOTER END-->
