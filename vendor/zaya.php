<?php

    session_start();
    require_once 'connect.php';

    $title = $_POST['title'];
    $messages = $_POST['messages'];
    $category = $_POST['category'];


        $path = 'uploads/' . time() . $_FILES['photo']['name'];
        if (!move_uploaded_file($_FILES['photo']['tmp_name'], '../' . $path)) {
            $_SESSION['message'] = 'Ошибка при загрузке сообщения';
            header('Location: ../zayav.php');
        }

         mysqli_query($connect, "INSERT INTO `application` (`id`, `title`, `messages`, `category`, `photo`) VALUES (NULL, '$title', '$messages', '$category', '$path')");

        $_SESSION['message'] = 'Заявка создана';
        header('Location: ../zayav.php');
?>

