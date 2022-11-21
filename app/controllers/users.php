<?php
include_once "app/database/db.php";
function userAuth($user){
    $_SESSION['id'] = $user['id_user'];
    $_SESSION['login'] = $user['username'];
    $_SESSION['admin'] = $user['admin'];
    if($_SESSION['admin']) {
        header('location: ' . admin/admin.php);
    }else{
        header('location: ' . BASE_URL);
    }
}
$errMsg = '';
// код для формы регистрации
if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['button-reg'])){
    $admin = 0;
    $login = trim($_POST['login']);
    $email = trim($_POST['mail']);
    $passF = trim($_POST['pass-first']);
    $passS = trim($_POST['pass-second']);

    if($login === '' || $email === '' || $passF === '' || $passS === ''){
        $errMsg = 'Не все поля заполнены!';
    }else if(mb_strlen($login, 'UTF8') < 2 ) {
        $errMsg = 'Логин должен быть более 2-х символов';
    } else if($passF !== $passS) {
        $errMsg = 'Пароли в обоих полях должны быть одинаковыми';
    }  else {
        $existence = selectOne('users', ['email' => $email]);
        if (!empty($existence['email']) && $existence['email'] === $email){
            $errMsg = 'Пользователь с такой почтой уже зарегистрирован!';
        }else{
            $pass = password_hash($passF, PASSWORD_DEFAULT);
            $post = [
                'admin' => $admin,
                'username' => $login,
                'email' => $email,
                'password' => $pass
            ];

            $id = insert('users', $post);
            $user = selectOne('users', ['id_user' => $id]);
            userAuth($user);

        }
    }

//    $last_row = selectOne('users', ['id_user' => $id]);
}else{
    $login = '';
    $email = '';
}

// код для формы авторизации

if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['button-log'])) {

    $email = trim($_POST['mail']);
    $pass = trim($_POST['password']);

    if($email === '' || $pass === '' ){
        $errMsg = 'Не все поля заполнены!';
    }else{
        $existence = selectOne('users', ['email' => $email]);
        if($existence && password_verify($pass, $existence['password'])){
            userAuth($existence);
        }else{
            $errMsg = "Почта или пароль введены не верно!";
        }
    }
}else{
    $email = '';
}








