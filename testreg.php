<?php
    session_start();
    if (isset($_POST['login'])) { $login = $_POST['login']; }
    if (isset($_POST['password'])) { $password = $_POST['password']; }
    if (empty($login) or empty($password)){
        exit ("Вы ввели не всю информацию, вернитесь назад и заполните все поля!");
    }
    $login = stripslashes($login);
    $login = htmlspecialchars($login);
    $password = stripslashes($password);
    $password = htmlspecialchars($password);
    $login = trim($login);
    $password = trim($password);
    include ("bd.php");
    $result = mysqli_query($db,"SELECT * FROM users WHERE login='$login'");
    $myrow = mysqli_fetch_array($result);
    if (empty($myrow['password'])){
        header('Refresh: 3; /login.php/');
        echo ("Извините, введённый вами login или пароль неверный. Попробуйте снова через 3 секунды");
    }
    else {
        if ($myrow['password']==$password) {
            $_SESSION['login']=$myrow['login']; 
            $_SESSION['id']=$myrow['id'];
            $_SESSION['page']=1;
            $_SESSION['authortype']=$myrow['authortype'];
            header('Refresh: 0; /index.php/');
        }
        else {
            header('Refresh: 3; /login.php/');
            echo ("Извините, введённый вами login или пароль неверный. Попробуйте снова через 3 секунды");
        }
    }
?>