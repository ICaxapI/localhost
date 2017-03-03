<?php
    session_start();
    if (isset($_SESSION['login'])) { 
        $login = $_SESSION['login'];
        if ($login != "ICaxapI"){
            $authortype = "Пользователь";
        } else {
            $authortype = "Создатель";
        }
        if ($login == '') { 
            unset($login); 
        } 
    }

 	if (empty($login)){
        exit ("Вы не зарегистрированы на сайте!");
    }

    if (isset($_POST['area'])) { 
        $text = $_POST['area']; 
        if ($text == '') { 
            unset($text); 
        } else {
            $text = "&ldquo;".$text."&rdquo;";
        }
    }

    if (empty($text)){
        exit ("Вы не ввели текст новости!");
    }

    $text = stripslashes($text);
    $text = htmlspecialchars($text);
 // подключаемся к базе
    include ("bd.php");
    $result = mysqli_query($db,"INSERT INTO news (text, author, authortype) VALUES ('$text', '$login', '$authortype')");
    if ($result=='TRUE'){
    	header('Refresh: 2; /index.php/');
        echo "Успешно! Новость добавлена.";
    }
 	else {
        echo $text.",".$login.",".$authortype;
    	echo "Ошибка! Обратитесь к администратору.";
    }
?>