<!DOCTYPE html>
<html lang="ru">

<head>
    <meta http-equiv="content-type" content="charset=utf-8" />
    <link rel="stylesheet" href="form_style.css">
</head>

<body>
<form action="" method="POST">
    <div class="centered">
        <div class="title">FootBel</div>
        <fieldset>
            <label>Логин</label>
            <input type="text" name="login"/><br>
            <label>Пароль</label>
            <input type="password" name="password"/>
            <input type="submit" value="Войти" name="but1"/><br>
            <a href="reg.php">Ещё не зарегистрировались?</a>
        </fieldset>
    </div>
    <?php
        if (isset($_POST["but1"])){
            session_start();
            $pdo = new PDO("mysql:host=localhost;dbname=users;charset=utf8", 'root', '');

            $stmt = $pdo->prepare("SELECT password FROM users WHERE login = :login");
            $stmt->execute(['login' => $_POST["login"]]);
            $p = $stmt->fetchColumn();

            $stmt2 = $pdo->prepare("SELECT registration_date FROM users WHERE login = :login");
            $stmt2->execute(['login' => $_POST["login"]]);
            $d = $stmt2->fetchColumn();

            $stmt3 = $pdo->prepare("SELECT status FROM users WHERE login = :login");
            $stmt3->execute(['login' => $_POST["login"]]);
            $s = $stmt3->fetchColumn();

            $_SESSION["login"] = $_POST["login"];
            
            $_SESSION["date"] = $d;
            $_SESSION["status"] = $s;

            $_SESSION["user"] = FALSE;
            if (($_POST["login"] == "Nikonik") && ($_POST["password"]==$p)){
                sleep(2);
                $_SESSION["user"] = TRUE;
                $_SESSION["password"] = $p;
                header("Location: adminpage.php");
                exit;
            }
            $host = 'localhost';
            $dbname = 'users';
            $username = 'root';
            $password = '';

            // создаем объект PDO для работы с базой данных
            $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);

            // подготавливаем SQL запрос для поиска пользователя с указанным логином
            $stmt = $pdo->prepare('SELECT * FROM users WHERE login = :login');

            // задаем значение параметра :login
            $login = $_POST["login"];
            $stmt->bindParam(':login', $login);

            // выполняем запрос и получаем результат
            $stmt->execute();
            $user = $stmt->fetch(PDO::FETCH_ASSOC);

            $stmt1 = $pdo->prepare("SELECT password FROM users WHERE login = :login");
            $stmt1->execute(['login' => $_POST["login"]]);

            // Извлечение значения из результата запроса
            $p = $stmt1->fetchColumn();

            $stmt3 = $pdo->prepare("SELECT email FROM users WHERE login = :login");
            $stmt3->execute(['login' => $_POST["login"]]);
            $e = $stmt3->fetchColumn();

            $stmt3 = $pdo->prepare("SELECT registration_date FROM users WHERE login = :login");
            $stmt3->execute(['login' => $_POST["login"]]);
            $d = $stmt3->fetchColumn();

            $stmt4 = $pdo->prepare("SELECT is_banned FROM users WHERE login = :login");
            $stmt4->execute(['login' => $_POST["login"]]);
            $b = $stmt4->fetchColumn();

            // проверяем, найден ли пользователь с указанным логином
            if (!$user) {
                echo 'Неверный логин!';
            } else{
                if ($_POST["password"]==$p){
                    if ($b == 1){
                        echo "<p>Вам ограничили доступ</p>";
                        exit;
                    }
                    $_SESSION["login"] = $_POST["login"];
                    $_SESSION["password"] = $_POST['password'];
                    $_SESSION["reg_date"] = $d;
                    $_SESSION["email"] = $e;
                    $_SESSION["user"] = TRUE;
                    sleep(2);
                    header('Location: userpage.php');
                } else{
                    echo 'Проверьте правильность ввода пароля!';
                }
            }
        }
    ?>
</form>
</body>

</html>