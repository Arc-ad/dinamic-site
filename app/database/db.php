<?php
require('connect.php');
//ф-ция вывода запроса
function tt($value){
    echo '<pre>';
    print_r($value);
    echo '</pre>';
}
//проверка выполнения запроса к бд
function dbCheckError($query){
    $errInfo = $query->errorInfo();
    if ($errInfo[0] !== PDO::ERR_NONE){
        echo $errInfo[2];
        exit();
    }
    return true;
}

// Запрос на получение с одной таблицы
function selectAll($table, $params = []){
    global $pdo;
    $sql = "SELECT * FROM $table";
    if(!empty($params)){
        $i = 0;
        foreach($params as $key => $value){
            if(!is_numeric($value)){
                $value = "'" . $value . "'";
            }
            if($i === 0){
                $sql .=" WHERE $key = $value";
            }else{
                $sql .= " AND $key = $value";
            }
            $i++;
        }
    }

    $query = $pdo->prepare($sql);
    $query->execute();
    dbCheckError($query);
    return $query->fetchAll();
}



// Запрос на получение одной строки с выбранной таблицы
function selectOne($table, $params = []){
    global $pdo;
    $sql = "SELECT * FROM $table";
    if(!empty($params)){
        $i = 0;
        foreach($params as $key => $value){
            if(!is_numeric($value)){
                $value = "'" . $value . "'";
            }
            if($i === 0){
                $sql .=" WHERE $key = $value";
            }else{
                $sql .= " AND $key = $value";
            }
            $i++;
        }
    }

//    $sql .= " limit 1";
    $query = $pdo->prepare($sql);
    $query->execute();
    dbCheckError($query);
    return $query->fetch();
}
$params = [
    'admin' => 1,
    'username' => 'Alexandr'

];
// Запись в таблицу бд
function  insert($table, $params){
    global $pdo;
    //INSERT INTO `users` (admin, username, email, password) VALUES ('1', '44', 'for4@test.com', '4444');

    $i = 0;
    $col = '';
    $mask ='';
    foreach ($params as $key => $value){
        if($i === 0){
            $col .= "$key";
            $mask = ":$key";
        }else{
            $col .= ", $key";
            $mask .= ", :$key";
        }
        $i++;
    }
    $sql = "INSERT INTO $table ($col) VALUES ($mask)";
//    tt($sql);
//    exit();
    $query = $pdo->prepare($sql);
    $query->execute($params);
    dbCheckError($query);
    return $pdo->lastInsertId();
}

$arrData = [
    'admin' => '1',
    'username' =>'twix13ist',
    'email' => 'twix@re.ru',
    'password' => '121212',
    'created' => '2022-11-13 21:48:55'
];

//insert('users', $arrData);

// Обновление данных в таблице
function update($table, $id, $params){
    global $pdo;

    $i = 0;
    $str = '';
    foreach ($params as $key => $value){
        if($i === 0){
            $str = "$key = $value";
        }else{
            $str .= ", $key='$value'";
        }
        $i++;
    }
    $sql = "UPDATE $table SET $str WHERE id_user=$id";
//    tt($sql);
//    exit();
    $query = $pdo->prepare($sql);
    $query->execute();
    dbCheckError($query);
}

// удаление строки из таблицы
function delete($table, $id){
    global $pdo;
    $sql = "DELETE FROM $table WHERE id_user = $id";
//    tt($sql);
//    exit();
    $query = $pdo->prepare($sql);
    $query->execute();
    dbCheckError($query);
}


