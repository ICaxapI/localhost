<?php
    session_start();
    unset($_SESSION['login']);
    unset($_SESSION['id']);
    $_SESSION['page']=1;
    header('Refresh: 0; /index.php/');
?>