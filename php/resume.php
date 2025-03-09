<?php
    require_once('resume_db.php');

    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $patronymic = $_POST['patronymic'];
    $age = $_POST['age'];
    $post_index = $_POST['post_index'];
    $phone_number = $_POST['phone_number'];
    $email = $_POST['email'];
    $telegram = $_POST['tg'];
    $experience = $_POST['work_experience'];
    $city = $_POST['city'];
    $post = $_POST['post'];
    $salary_expectation = $_POST['salary'];

    $sql_query = "INSERT INTO `resume_table` (name, surname, patronymic, age, post_index, phone_number, email, telegram, experience, city, post, salary_expectation) VALUES ('$name', '$surname', '$patronymic', '$age', '$post_index', '$phone_number', '$email', '$telegram', '$experience', '$city', '$post', '$salary_expectation')";

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
    </style>
</head>
<body class="body_style">
    <div class="thx">
        <div class="header"><img src="../images/okay.png" class="thx_image"></div>
        <div class="text">Данные отправлены успешно! Благодарим за то, что решили отправить нам своё резюме. Наши специалисты рассмотрят ваши данные и свяжутся с вами в течение 3 рабочих дней.</div>
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