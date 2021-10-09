<?php
$DB_HOST = 'localhost';
$DB_LOGIN = 'root';
$DB_PASSWORD = '';
$DB_SELECTED_DB = 'support';

$DEV_DEBUG = 0;

$sql = @mysqli_connect($DB_HOST, $DB_LOGIN, $DB_PASSWORD, $DB_SELECTED_DB);

if(!$sql) {
    echo 'Błąd połączenia z serwerem!';
    exit();
}



