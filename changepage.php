<?php
    session_start();
    if( isset( $_POST['prevbtn'] ) ) {
        $_SESSION['page'] --;
        header('Refresh: 0; /index.php/');
    }
    if( isset( $_POST['nextbtn'] ) ) {
        $_SESSION['page'] ++;
        header('Refresh: 0; /index.php/');
    }
?>