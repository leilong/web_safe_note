<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/1/27
 * Time: 17:04
 */
$user_id = $_GET['id'];
//增加自定义的sql后语句应为
//$sql = 'select username,email,descl from users where id = 1 union select password,1,1 from users';
$sql = 'select username,email,descl from users where id = ' . $user_id;

try {
    $db_user = new PDO('mysql:host=localhost;dbname=web_safe', $user = 'root', $pass = '92a06c9be1');
    foreach ($db_user->query($sql) as $row){
        echo $row['username'] . '<br>';
        echo $row['email'] . '<br>';
        echo $row['descl'] . '<br>';
    }
    $db_user = null;
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}