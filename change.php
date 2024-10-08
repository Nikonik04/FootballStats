<head>
    <meta http-equiv="content-type" content="charset=utf-8" />
    <link rel="stylesheet" href="change_style.css">
</head>
<form action="" method="POST">
    <div class="centered">
        <fieldset>
            <label>Логин</label>
            <input type="text" name="login"/><br>
            <label>Пароль</label>
            <input type="password" name="new_password"/>
            <input type="submit" value="Изменить" name="ch"/><br>
        </fieldset>
    </div>
    <?php
        if (isset($_POST["ch"])){
            session_start();
            // подключение к базе данных
            $pdo = new PDO('mysql:host=localhost;dbname=users', 'root', '');

            // получение данных из формы
            $login = $_POST['login'];
            $newPassword = $_POST['new_password'];

            // запрос на изменение пароля пользователя
            $sql = "UPDATE users SET password = :password WHERE login = :login";

            // подготовка запроса
            $stmt = $pdo->prepare($sql);

            // передача параметров в запрос и выполнение запроса
            $stmt->execute([
                'password' => $newPassword,
                'login' => $login
            ]);

            // проверка количества измененных записей
            if ($stmt->rowCount() > 0) {
                echo "Пароль успешно изменен";
            } else {
                echo "Ошибка при изменении пароля";
            }
            sleep(2);
            header("Location: form.php");
        }
    ?>
</form>