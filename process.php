<?php

include 'settings.php';
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST") {

    $local_login = mysqli_real_escape_string($sql, $_POST['login']);
    $local_password = mysqli_real_escape_string($sql, $_POST['password']);

    $ask = "SELECT uid FROM uzytkownicy WHERE login='" . $local_login . "' AND haslo='" . $local_password . "'";
    $result = mysqli_query($sql, $ask);
    $row = mysqli_fetch_array($result);
    $count = mysqli_num_rows($result);
    $active = $row['active'];
    echo $active;

    if ($count == 1) {
        header('location: index.php');
        $_SESSION['login_user'] = $local_login;
    } else {
        echo 'Brak konta w bazie';
    }
}
?>