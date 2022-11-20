<?php
include_once "app/database/db.php";

$errMsg = '';
if($_SERVER['REQUEST_METHOD'] === 'POST'){
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

            $_SESSION['id'] = $user['id_user'];
            $_SESSION['login'] = $user['username'];
            $_SESSION['admin'] = $user['admin'];
            if($_SESSION['admin']) {
                header('location: ' . admin/admin.php);
            }else{
                header('location: ' . BASE_URL);
            }
        }
    }

//    $last_row = selectOne('users', ['id_user' => $id]);
}else{
    echo 'GET';
    $login = '';
    $email = '';
}



//    $pass = password_hash($_POST['pass-second'], PASSWORD_DEFAULT);








