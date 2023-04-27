<?php

 // подключаемся(набор настроек) к БД с помощью $_SERVER['DOCUMENT_ROOT']. уневерсальные метод для поиска
 include_once($_SERVER['DOCUMENT_ROOT'].'/config.php');
 // автоподключение всех класов
 include_once($_SERVER['DOCUMENT_ROOT'].'/system/classes/autoload.php');


$name = $_POST['name'];
$email = $_POST['emails'];
$phone = $_POST['phones'];
$description = $_POST['description'];

//подключаемся к БД и записываем
$connect = new Connect();

//проверка на наличие в БД таких логинов или паролей
$result = mysqli_query($connect->getConnection(), "SELECT COUNT(id) as num FROM questions WHERE emails='$email' ");
$info = mysqli_fetch_assoc($result);
$amount = $info['num'];

if (!empty($_POST['emails'])) {
    if ($amount > 0) {
        //редирект
        mysqli_query($connect->getConnection(), "INSERT INTO questions(name, emails, phones, description ) VALUES('$name', '$email', '$phone', '$description') ");
        header('location: https://gosclean.ru/about.php' . '?success=1');
    } else {
        //создаем новую строчку в таблице
        mysqli_query($connect->getConnection(), "INSERT INTO questions(name, emails, phones, description ) VALUES('$name', '$email', '$phone', '$description') ");
        header('location: https://gosclean.ru/about.php' . '?success=1');
    }
} else {
    //редирект
    header('location: https://gosclean.ru/about.php' . '?wrong=1');
}

?>