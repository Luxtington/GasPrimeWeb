<?php
    require_once('order_db.php');

    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $patronymic = $_POST['patronymic'];
    $city = $_POST['city'];
    $post_index = $_POST['post_index'];
    $phone_number = $_POST['phone_number'];
    $email = $_POST['email'];
    $src1 = $_POST['source1'];
    $src2 = $_POST['source2'];
    $src3 = $_POST['source3'];

    $sql_query = "INSERT INTO `orders_table` (name, surname, patronymic, city, post_index, phone_number, email, source1, source2, source3) VALUES ('$name', '$surname', '$patronymic', '$city', '$post_index', '$phone_number', '$email', '$src1', '$src2', '$src3')";

    $connection -> query($sql_query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="../images/GasPrime.png"/>
    <link rel="stylesheet" type="text/css" href="../css/style_success.css"/>
    <title>Результат отправления</title>
</head>
<body class="body_style">
    <div class="thx">
        <div class="header"><img src="../images/okay.png" class="thx_image"></div>
        <div class="text">Данные отправлены успешно! Спасибо, что доверили нам выполнение вашего заказа. Наши менеджеры зафиксируют детали заказа и свяжутся с вами в течение 3 рабочих дней. Всего хорошего!</div>
        <div class="footer">
            <a href="../index.html">
                <button class="go_back">
                    <div class="arrow"></div>
                    <h3 class="go_text">Вернуться на главную</h3>
                </button>
            </a>
        </div>
    </div>
</body>
</html>