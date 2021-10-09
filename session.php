<?php

/* System weryfikacji sesji z bazą danych */
include('settings.php');
include('process.php');
   $user_check = $_SESSION['login_user'];

   $ses_sql = mysqli_query($sql,"select login from uzytkownicy where login = '$user_check' ");
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   $login_session = $row['login'];

   if($DEV_DEBUG == 1) {
       echo '[SESSION.PHP][DEBUG]: Zalogowano na sesję: ' . $login_session;
   }

   if(!isset($_SESSION['login_user'])){
       header("location:login.php");
       die();
   }
?>