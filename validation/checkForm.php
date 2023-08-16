<?php

$errors = array();
$formSubmitted = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $select = $_POST['select'];
    $comment = $_POST['comment'];

    // Валидация имени
    if (empty($name)) {
        $errors[] = "Имя обязательно для заполнения.";
    } elseif (strlen($name) > 20) {
        $errors[] = "Имя должно содержать не более 20 символов.";
    }

    // Валидация оценки
    if ($select < 0 || $select > 10) {
        $errors[] = "Недопустимая оценка страницы.";
    }

    // Валидация комментария
    if (strlen($comment) > 500) {
        $errors[] = "Комментарий должен содержать не более 500 символов.";
    }

    if (empty($errors)) {
        // Если нет ошибок валидации, сохраняем данные в файл
        $data = "Имя: $name\nEmail: $email\nОценка: $select\nКомментарий: $comment\n\n";
        file_put_contents('feedback.txt', $data, FILE_APPEND);

        // Очищаем переменные после успешной отправки
        $name = $email = $select = $comment = '';
        $formSubmitted = true;
    }

}
