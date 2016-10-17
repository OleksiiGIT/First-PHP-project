<?php
require 'db.php';
$data = $_POST;

if (isset($data['enter']))
{
    $login = $data['login'];
    $password = $data['password'];
    $errors = array();
    $query = sprintf("SELECT * FROM users WHERE login = '$login';");
    $user = mysql_query($query,$connect);
    $num_rows = mysql_num_rows($user);
    $result = mysql_fetch_assoc($user);
    $id = $result['id'];
    if ($num_rows !=0)
    {
        //логин существует
        if ($result['password'] == $password)
        {
            //работает, логиним пользователя
            $_SESSION['id'] = $result;
        }else
        {
            $errors[] = 'Неверный пароль!';
        }
    }else
    {
        $errors[] = 'Пользователь с таким логином не найден!';
    }

    if (!empty($errors))
    {
        echo'<div style="color: red;">'.array_shift($errors).'</div><hr>';
    }

}

?>