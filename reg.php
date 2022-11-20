<!--HEADER-->
<?php
    include_once "app/include/header.php";
    include_once "app/controllers/users.php";
?>
<!--HEADER END-->

<!--FORM-->
<div class="container reg_form">
    <form class="row justify-content-center" method="post" action="reg.php">
        <h2 class="col-12">Форма регистрации</h2>
        <div class="mb-3 col-12 col-md-4 err">
            <p><?php echo $errMsg?></p>
        </div>
        <div class="w-100"></div>
        <div class="mb-3 col-12 col-md-4">
            <label for="formGroupExampleInput" class="form-label">Ваш логин</label>
            <input name="login" value="<?=$login?>" type="text" class="form-control" id="formGroupExampleInput" placeholder="Введите ваш логин...">
        </div>
        <div class="w-100"></div>
        <div class="mb-3 col-12 col-md-4">
            <label for="exampleInputEmail1" class="form-label">Email</label>
            <input name="mail" value="<?=$email?>" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Введите ваш Email...">
            <div id="emailHelp" class="form-text">Ваш Email не будет использован для спама!</div>
        </div>
        <div class="w-100"></div>
        <div class="mb-3 col-12 col-md-4">
            <label for="exampleInputPassword1" class="form-label">Пароль</label>
            <input name="pass-first" type="password" class="form-control" id="exampleInputPassword1" placeholder="Введите ваш пароль...">
        </div>
        <div class="w-100"></div>

        <div class="mb-3 col-12 col-md-4">
            <label for="exampleInputPassword2" class="form-label">Повторите пароль</label>
            <input name="pass-second" type="password" class="form-control" id="exampleInputPassword2" placeholder="Повторите ваш пароль...">
        </div>
        <div class="w-100"></div>

        <div class="mb-3 col-12 col-md-4">
            <button type="submit" class="btn btn-secondary" name="button-reg">Регистрация</button>
            <a href="log.php" class="vhod">Войти</a>
        </div>
    </form>
</div>
<!--END FORM-->
<!--FOOTER-->
<?php include("app/include/footer.php"); ?>
<!--FOOTER END-->
