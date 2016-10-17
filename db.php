<?php

$connect = mysql_connect('localhost', 'root', '');
mysql_select_db ("tba",$connect);
if (!$connect) {
    die('Ошибка соединения: ' . mysql_error());
}
session_start();