<!--HEADER-->
<?php   include("app/include/header.php");
        include_once "app/controllers/users.php";
?>
<!--HEADER END-->

<!--FORM-->
<div class="container reg_form">
    <form class="row justify-content-center" method="post" action="log.php">
        <h2 class="col-12">Авторизация</h2>
        <div class="mb-3 col-12 col-md-4 err">
            <p><?php echo $errMsg?></p>
        </div>
        <div class="w-100"></div>
        <div class="mb-3 col-12 col-md-4">
            <label for="formGroupExampleInput" class="form-label">Ваша почта</label>
            <input name="mail" value="<?=$email?>" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Введите ваш Email...">
        </div>
        <div class="w-100"></div>
        <div class="mb-3 col-12 col-md-4">
            <label for="exampleInputPassword1" class="form-label">Пароль</label>
            <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Введите ваш пароль...">
        </div>
        <div class="w-100"></div>
        <div class="mb-3 col-12 col-md-4">
            <button  type="submit" class="btn btn-secondary" name="button-log">Войти</button>
            <a href="reg.php" class="reg">Зарегистрироваться</a>
        </div>
    </form>
</div>
<!--FORM END-->

<!--FOOTER-->
<?php include("app/include/footer.php"); ?>
<!--FOOTER END-->
